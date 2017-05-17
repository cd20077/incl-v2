<?php

/**
 * agreement actions.
 *
 * @package    incl2
 * @subpackage other
 */
class agreementAction extends sfAction
{
    public function execute($request)
    {
        $accountId = $this->getUser()->getAttribute('account_id', null);
        if (!$accountId) {
            $this->redirect('@top');
        }

        $account = AccountQuery::create()
                    ->filterById($accountId)
                    ->filterByAccountStatusId(AccountStatus::ACTIVE)
                    ->findOne();
        if (!$account) {
            $this->redirect('@top');
        }

        $this->account = $account;

        return sfView::SUCCESS;
    }
}
