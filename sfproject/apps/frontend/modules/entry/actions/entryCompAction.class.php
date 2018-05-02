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

        $randId = crypt($account->getId(), sfConfig::get('app_incl_SOLT_LOGIN_PASSWORD'));
        $storagePath = sfConfig::get('app_storage_user_dir').$randId.DIRECTORY_SEPARATOR;
//        $defaultImagePath = sfConfig::get('app_default_image_dir');
//        $accountImageName = sfConfig::get('app_default_account_img');
//        $backImageName = sfConfig::get('app_default_back_img');

        $sfFilesystem = new sfFilesystem();
        $sfFilesystem->mkdirs($storagePath);
//        $sfFilesystem->copy($defaultImagePath.$accountImageName, $storagePath.$accountImageName);
//        $sfFilesystem->copy($defaultImagePath.$backImageName, $storagePath.$backImageName);

        $account
                ->setRandid($randId)
                ->setName(sfConfig::get('app_account_name'))
//                ->setAccountimg($storagePath.$accountImageName)
//                ->setAccountimg('/images/def/'.$accountImageName)
//                ->setBackimg($storagePath.$backImageName)
//                ->setBackimg('/images/def/'.$backImageName)
                ->setAccountStatusId(AccountStatus::ACTIVE)
                ->save();

        $this->getUser()->setFlash('entry', 'complete');
        $this->redirect('@top');
//        $this->setTemplate('index', 'top');
//
//        return sfView::SUCCESS;
    }

}
