<?php

/**
 * entryInput actions.
 *
 * @package    incl2
 * @subpackage entryInput
 */
class entryInputAction extends sfAction
{
    public function execute($request)
    {
        $form = new EntryForm();

        if ($request->isMethod(sfRequest::POST)) {

            $form->bind($request->getParameter($form->getName()));
            if ($form->isValid()) {
                /** @var Account $account */
                $account = $form->updateObject();
                $this->provisionalRegistration($account);
                $this->sendMail($account);

                $this->redirect('@entry_conf');
            }
        }
        $this->form = $form;

        return sfView::SUCCESS;
    }

    /**
     * @param Account $account
     * @return \Account $account
     */
    public function provisionalRegistration(Account $account)
    {
//        $ranid = "";
//        do {
            $ranid = sha1(uniqid(mt_rand(), true));
//        } while (1 == $this->Account->find('all', Array('conditions' => Array('randnum' => $ranid))));

        $account->setProvisionalKey($ranid);
//        $account->setLanguageId(1);
        $account->setMaxcapa(sfConfig::get('app_incl_DEF_MAX_CAPA'));
        $account->setPrecapa(sfConfig::get('app_incl_DEF_PRE_CAPA'));
        $account->setAccountStatusId(AccountStatus::PROVISIONAL);
        $account->save();

        return $account;
    }

    private function sendMail(Account $account)
    {
        $mailAddress = $account->getMail();
        $mailer = $this->getMailer();

        $mailTemplate = MailQuery::create()->filterById(1)->findOne();

        $subject = $mailTemplate->getTitle();
        $body = $mailTemplate->getText();

//        $this->getRoute()->generate('@entry');
        $mailUrl = sprintf(
            'http://%s/entry/complete/%s',
            $this->getRequest()->getHost(),
            $account->getProvisionalKey()
        );

        $body = str_replace("%uad%", $mailAddress, $body);
        $body = str_replace("%mail_url%", $mailUrl, $body);

        //$mailTo = sfConfig::get('app_mail_to');
        $mailTo = $mailAddress;
        $mailFrom = sfConfig::get('app_mail_from');

        $message = $this->getMailer()->compose($mailFrom, $mailTo, $subject, $body);
        $mailer->send($message);
    }
}
