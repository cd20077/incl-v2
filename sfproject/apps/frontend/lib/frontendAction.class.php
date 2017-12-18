<?php

/**
 * base action.
 *
 * @package    incl2
 * @subpackage lib
 */
class frontendAction extends sfAction
{
    public function preExecute()
    {
        $account = $this->getUser()->getAccount();
        if (!$account) {
            $this->redirect('@logout');
        }

        parent::preExecute();
    }

    public function execute($request) {}
}
