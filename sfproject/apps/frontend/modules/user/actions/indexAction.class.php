<?php

/**
 * user actions.
 *
 * @package    incl2
 * @subpackage user
 */
class indexAction extends sfAction
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

        $accountLogs = $account->getAccountLogs();
//        $groups = $account->getGroups();

        $this->account = $account;
        $this->accountLogs = $accountLogs;
//        $this->groups = $groups;

        return sfView::SUCCESS;
    }
}
