<?php

/**
 * userImageChange actions.
 *
 * @package    incl2
 * @subpackage ajax
 */
class userImageChangeAction extends sfAction
{
    /**
     * @param sfWebRequest $request
     * @return type
     */
    public function execute($request)
    {
        if (!$request->isXmlHttpRequest()) {
            $this->redirect('@top');
        }

        /* @var $account Account */
        $account = $this->getUser()->getAccount();
        if (!$account) {
            echo 'ng';
            return sfView::NONE;
        }

        $uploadImageForm = new UploadImageForm();
        $uploadImageForm->bind(
                $request->getParameter($uploadImageForm->getName()),
                $request->getFiles($uploadImageForm->getName()));
        if (!$uploadImageForm->isValid()) {
            echo 'ng';
            return sfView::NONE;
        }

        /* @var $imageFile sfValidatedFile */
        $imageFile = $uploadImageForm->getValue(UploadImageForm::IMAGE_FILE);
        $imageFile->save();
        $oldAccountimg = $this->getUser()->getProfileImagePath();
        $account->setAccountimg(basename($imageFile->getSavedName()))->save();
        (new sfFilesystem())->remove($oldAccountimg);

        echo 'ok';
        return sfView::NONE;
    }
}
