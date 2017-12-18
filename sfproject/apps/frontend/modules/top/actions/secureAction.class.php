<?php

/**
 * top actions.
 *
 * @package    incl2
 * @subpackage top
 */
class secureAction extends sfAction
{
    public function execute($request)
    {
        $this->entryMes = $this->getUser()->getFlash('entry', '');
        $this->setTemplate('index');

        return sfView::SUCCESS;
    }
}
