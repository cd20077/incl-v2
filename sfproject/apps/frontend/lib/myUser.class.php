<?php

class myUser extends sfBasicSecurityUser
{
//    /* @var $account Account */
//    private $account;
//
//    public function __construct(\sfEventDispatcher $dispatcher, \sfStorage $storage, $options = array())
//    {
//        $accountId = $this->getUser()->getAttribute('account_id', null);
//        if (!$accountId) {
//            $this->redirect('@top');
//        }
//
//        $this->account = AccountQuery::create()
//                    ->filterById($accountId)
//                    ->filterByAccountStatusId(AccountStatus::ACTIVE)
//                    ->findOne();
//        if (!$this->account) {
//            $this->redirect('@top');
//        }
//
//        parent::__construct($dispatcher, $storage, $options);
//    }
//
//    /**
//     * @return Account
//     */
//    public function getAccount()
//    {
//        return $this->account;
//    }
//
//    /**
//     * @return Account
//     */
//    public function setAccount(Account $account)
//    {
//        $this->account = $account;
//    }
}
