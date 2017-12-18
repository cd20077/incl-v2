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

        $account = $this->getUser()->getAccount();
        if (!$account) {
            echo 'ng';
        }

        $uploadImageForm = new UploadImageForm();
        $uploadImageForm->bind(
                $request->getParameter($uploadImageForm->getName()),
                $request->getFiles($uploadImageForm->getName()));
        if ($uploadImageForm->isValid()) {
            /* @var $imageFile sfValidatedFile */
            $imageFile = $uploadImageForm->getValue(UploadImageForm::IMAGE_FILE);
            var_dump($imageFile);
            exit();
        } else {
            echo 'ng';
        }

        echo 'ok';

        return sfView::NONE;
    }
}
