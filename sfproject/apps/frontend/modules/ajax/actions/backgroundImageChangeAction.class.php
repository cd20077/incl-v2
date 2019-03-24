<?php

/**
 * backgroundImageChange actions.
 *
 * @package    incl2
 * @subpackage ajax
 */
class backgroundImageChangeAction extends sfAction
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
            echo 'ng1';
            return sfView::NONE;
        }

        $uploadImageForm = new UploadImageForm();
        $uploadImageForm->bind(
                $request->getParameter($uploadImageForm->getName()),
                $request->getFiles($uploadImageForm->getName()));
        if (!$uploadImageForm->isValid()) {
            echo 'ng2';
            return sfView::NONE;
        }

        /* @var $imageFile sfValidatedFile */
        $imageFile = $uploadImageForm->getValue(UploadImageForm::IMAGE_FILE);
        $imageFile->save();
        $oldBackimg = $this->getUser()->getBackgroundImagePath();
        $account->setBackimg(basename($imageFile->getSavedName()))->save();
        (new sfFilesystem())->remove($oldBackimg);

        echo 'ok';
        return sfView::NONE;
    }
}
