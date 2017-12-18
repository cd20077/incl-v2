<?php

/**
 * user actions.
 *
 * @package    incl2
 * @subpackage user
 */
class indexAction extends frontendAction
{
    public function execute($request)
    {
        $account = $this->getUser()->getAccount();
        $accountLogs = $account->getAccountLogs();
        $projects = $account->getProjects();

        $this->account = $account;
        $this->accountLogs = $accountLogs;
        $this->projects = $projects;

        return sfView::SUCCESS;
    }
}
