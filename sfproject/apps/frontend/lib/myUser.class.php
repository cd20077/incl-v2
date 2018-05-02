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

    /**
     * @return string
     */
    public function getAccoutDirPath()
    {
        return sfConfig::get('app_storage_user_dir') . $this->getAccount()->getRandid() . DIRECTORY_SEPARATOR;
    }

    public function getProfileImagePath()
    {
        $accountImage = $this->getAccount()->getAccountimg();
        if (!$accountImage) {
            return $this->getDefaultProfileImagePath();
        }

        return $this->getAccoutDirPath() . $accountImage;
    }

    public function getDefaultProfileImagePath()
    {
        return sfConfig::get('app_default_image_dir') . sfConfig::get('app_default_account_img');
    }


    public function getBackgroundImagePath()
    {
        $backgroundImage = $this->getAccount()->getBackimg();
        if (!$backgroundImage) {
            return $this->getDefaultBackgroundImagePath();
        }

        return $this->getAccoutDirPath() . $backgroundImage;
    }

    public function getDefaultBackgroundImagePath()
    {
        return sfConfig::get('app_default_image_dir') . sfConfig::get('app_default_back_img');
    }
    /**
     * @return string
     */
    public function getContentUploadPath()
    {
        return sfConfig::get('app_storage_user_content_dir') . $this->getAccount()->getRandid();
    }
}
