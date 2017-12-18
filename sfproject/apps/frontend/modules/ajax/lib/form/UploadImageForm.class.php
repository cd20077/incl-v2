<?php

/**
 * entry form.
 *
 * @package    incl2
 * @subpackage form
 */
class UploadImageForm extends BaseForm
{
    const IMAGE_FILE    = 'image_file';

    public function configure()
    {
        $this->setWidgets([self::IMAGE_FILE => new sfWidgetFormInputFile()]);
        $this->setValidators([
          self::IMAGE_FILE => new sfValidatorFile([
              'required'   => false,
              'mime_types' => 'web_images',
              'max_size'   => 204800,
//              'path'       => sfConfig::get('sf_web_dir').DIRECTORY_SEPARATOR.sfConfig::get('app_product_img_dir_path')
          ], [
              'required'   => '画像を選択してください',
              'mime_types' => '対応していないファイル形式です',
              'max_size'   => '最大ファイルサイズ(200KB)を超過しています'
          ])
        ]);
        $this->disableCSRFProtection();
        $this->validatorSchema->setPostValidator(new sfValidatorCallback(['callback' => [$this, 'fileCheck']]));
        $this->widgetSchema->setNameFormat('ajax_data[%s]');
    }

    public function fileCheck($validator, $values)
    {
        //画像が選択されている
        if (!empty($values[self::IMAGE_FILE])) {

//            $filename = $values[self::IMAGE_URL]->getOriginalName();
//
//            //ファイル名を正規表現により判定（英数字・ハイフン・アンダースコアのみ使用可）
//            if (preg_match("/^([a-zA-Z0-9_-]+.)+$/", $filename)) {
//
//              //既に同名のファイルが存在するか判定
//              if (file_exists($values[self::IMAGE_URL]->getPath().DIRECTORY_SEPARATOR.$filename)) {
//                $error = new sfValidatorError($validator, 'このファイル名は使用されています');
//                throw new sfValidatorErrorSchema($validator, array(self::IMAGE_URL=> $error));
//              }
//
//            } else {
//              $error = new sfValidatorError($validator, 'ファイル名に使用できるのは英数字・ハイフン・アンダースコアのみです');
//              throw new sfValidatorErrorSchema($validator, array(self::IMAGE_URL=> $error));
//            }
        }

        return $values;
    }
}
