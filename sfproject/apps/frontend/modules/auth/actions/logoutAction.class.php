<?php

/**
 * logout actions.
 *
 * @package    incl2
 * @subpackage auth
 */
class logoutAction extends sfAction
{
    public function execute($request)
    {
        $this->getUser()->clearCredentials();
        $this->getUser()->setAuthenticated(false);
        $this->redirect('@top');
    }
}
