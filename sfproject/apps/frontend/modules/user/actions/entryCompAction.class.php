<?php

/**
 * entryComp actions.
 *
 * @package    incl2
 * @subpackage entryComp
 */
class entryCompAction extends sfAction
{
    /**
     * @param sfWebRequest $request
     * @return type
     */
    public function execute($request)
    {
        $provisionalKey = $request->getParameter('provisional_key', null);
        if (!$provisionalKey) {
            return;
        }

        $account = AccountQuery::create()
                    ->filterByProvisionalKey($provisionalKey)
                    ->filterByAccountStatusId(AccountStatus::PROVISIONAL)
                    ->findOne();
        if (!$account) {
            return;
        }

        $account
                ->setRandid(crypt($account->getId(), sfConfig::get('app_incl_SOLT_LOGIN_PASSWORD')))
                ->setName(sfConfig::get('app_account_default_name'))
                ->setBackimg(sfConfig::get('app_account_back_img'))
                ->setAccountimg(sfConfig::get('app_account_account_img'))
                ->setAccountStatusId(AccountStatus::ACTIVE)
                ->save();

        $this->getUser()->setFlash('entry', 'complete');
        $this->redirect('@top');
//        $this->setTemplate('index', 'top');
//
//        return sfView::SUCCESS;
    }

}
