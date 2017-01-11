<?php

/**
 * auth actions.
 *
 * @package    inclv2
 * @subpackage auth
 */
class loginAction extends sfAction
{
    public function execute($request)
    {
        if ($this->getRequest()->getMethod('post')) {
            $this->setTemplate('loginLoading');
        }

        return sfView::SUCCESS;
    }
}
