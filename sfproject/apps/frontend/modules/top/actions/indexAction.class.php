<?php

/**
 * top actions.
 *
 * @package    incl2
 * @subpackage top
 */
class indexAction extends sfAction
{
    public function execute($request)
    {
        $this->entryMes = $this->getUser()->getFlash('entry', '');

        return sfView::SUCCESS;
    }
}
