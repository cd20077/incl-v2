<?php

/**
 * userNameChange actions.
 *
 * @package    incl2
 * @subpackage ajax
 */
class userNameChangeAction extends sfAction
{
    public function execute($request)
    {
        $account = $this->getUser()->getAccount();
        if (!$account) {
            echo 'ng';
        }

        $name = $request->getParameter('name', null);
        if (!$name) {
            echo 'ng';
        }

        $account->setName($name)->save();
        echo 'ok';

        return sfView::NONE;
    }
}
