<?php

/**
 * user actions.
 *
 * @package    incl2
 * @subpackage ajax
 */
class getImageAction extends frontendAction
{
    const MIMES = [
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif'  => 'image/gif',
        'png'  => 'image/png'
    ];
    const IMAGE_TYPE_PROFILE = 'profile';
    const IMAGE_TYPE_BACKGROUND = 'background';

    /**
     * @param sfWebRequest $request
     */
    public function execute($request)
    {
        $imageType = $request->getParameter('type', '');
        switch ($imageType) {
            case self::IMAGE_TYPE_PROFILE:
                $filePath = $this->getUser()->getProfileImagePath();
                break;
            case self::IMAGE_TYPE_BACKGROUND:
                $filePath = $this->getUser()->getBackgroundImagePath();
                break;
            default :
                $filePath = '';
                break;
        }

        if (!$filePath) {
            $this->redirect404();
        }

        $mimes = self::MIMES;
        $mime = $mimes[end(explode('.', $filePath))];
        if (!$mime) {
            return false;
        }

        /* @var $response sfWebResponse */
        $response = $this->getResponse();
        $response->clearHttpHeaders();
        $response->setContentType($mime);
        $response->setHttpHeader('content-disposition', 'inline');
        $response->setContent(readfile($filePath));
        $response->sendContent();

        return sfView::NONE;
    }
}
