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

        $account = AccountQuery::create()
                    ->filterByAccountStatusId(AccountStatus::ACTIVE)
                    ->findOne();
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
