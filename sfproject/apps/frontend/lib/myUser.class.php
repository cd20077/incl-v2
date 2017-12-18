<?php

class myUser extends sfBasicSecurityUser
{
    /* @var $account Account */
    private $account;

    /**
     * @return Account
     */
    public function getAccount()
    {
        if (!$this->account) {
            $accountId = $this->getAttribute('account_id', null);
            if (!$accountId) {
                return;
            }

            $account = AccountQuery::create()
                        ->filterById($accountId)
                        ->filterByAccountStatusId(AccountStatus::ACTIVE)
                        ->findOne();
            if (!$account) {
                return;
            }
            $this->setAccount($account);
        }
        return $this->account;
    }

    /**
     * @param Account $account
     */
    public function setAccount(Account $account)
    {
        $this->account = $account;
    }
}
