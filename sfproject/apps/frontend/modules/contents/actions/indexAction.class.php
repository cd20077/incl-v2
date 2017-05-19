<?php

/**
 * index actions.
 *
 * @package    incl2
 * @subpackage contents
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

        $contens = ContentQuery::create()
                    ->filterByAccount($account)
                    ->filterByContentStatusId(ContentStatus::ACTIVE)
                    ->find();

        $this->account = $account;
        $this->contens = $contens;

        return sfView::SUCCESS;
    }
}
