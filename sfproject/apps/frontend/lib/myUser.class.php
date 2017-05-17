<?php

class myUser extends sfBasicSecurityUser
{
    /**
     * @return Account
     */
//    public function getAccount()
//    {
//        $accountId = $this->getUser()->getAttribute('account_id', null);
//        if (!$accountId) {
//            $this->redirect('@top');
//        }
//
//        $account = AccountQuery::create()
//                    ->filterById($accountId)
//                    ->filterByAccountStatusId(AccountStatus::ACTIVE)
//                    ->findOne();
//        if (!$account) {
//            $this->redirect('@top');
//        }
//
//        return $account;
//    }
}
