<?php

/**
 * auth actions.
 *
 * @package    incl2
 * @subpackage auth
 */
class loginAction extends sfAction
{
    public function execute($request)
    {
        $form = new LoginForm();

        if ($request->isMethod(sfRequest::POST)) {

            $form->bind($request->getParameter($form->getName()));
            if ($form->isValid()) {
                $this->setTemplate('loginLoading');
//                $this->redirect('@entry_conf');
            }
        }
        $this->form = $form;

        return sfView::SUCCESS;
    }
}
