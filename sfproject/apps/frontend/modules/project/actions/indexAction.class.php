<?php

/**
 * top actions.
 *
 * @package    incl2
 * @subpackage top
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

        $projects = $account->getProjects();

        $this->account = $account;
        $this->projects = $projects;

        return sfView::SUCCESS;
    }
}
