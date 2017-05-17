<?php

/**
 * SendMails form base class.
 *
 * @method SendMails getObject() Returns the current form's model object
 *
 * @package    incl2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSendMailsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'is_deleted'          => new sfWidgetFormInputText(),
      'updated_at'          => new sfWidgetFormDateTime(),
      'deleted_at'          => new sfWidgetFormDateTime(),
      'created_at'          => new sfWidgetFormDateTime(),
      'title'               => new sfWidgetFormInputText(),
      'name'                => new sfWidgetFormTextarea(),
      'from_name'           => new sfWidgetFormTextarea(),
      'to_name'             => new sfWidgetFormTextarea(),
      'to_address'          => new sfWidgetFormTextarea(),
      'subject'             => new sfWidgetFormTextarea(),
      'body'                => new sfWidgetFormTextarea(),
      'group_code'          => new sfWidgetFormTextarea(),
      'from_address'        => new sfWidgetFormTextarea(),
      'finish_dt'           => new sfWidgetFormDateTime(),
      'result'              => new sfWidgetFormInputText(),
      'send_date'           => new sfWidgetFormDate(),
      'send_time'           => new sfWidgetFormTime(),
      'fw_to'               => new sfWidgetFormTextarea(),
      'server_ip'           => new sfWidgetFormTextarea(),
      'server_name'         => new sfWidgetFormTextarea(),
      'send_mail_status_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted'          => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'updated_at'          => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'          => new sfValidatorDateTime(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'title'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'                => new sfValidatorString(array('required' => false)),
      'from_name'           => new sfValidatorString(array('required' => false)),
      'to_name'             => new sfValidatorString(array('required' => false)),
      'to_address'          => new sfValidatorString(array('required' => false)),
      'subject'             => new sfValidatorString(array('required' => false)),
      'body'                => new sfValidatorString(array('required' => false)),
      'group_code'          => new sfValidatorString(array('required' => false)),
      'from_address'        => new sfValidatorString(array('required' => false)),
      'finish_dt'           => new sfValidatorDateTime(array('required' => false)),
      'result'              => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'send_date'           => new sfValidatorDate(array('required' => false)),
      'send_time'           => new sfValidatorTime(array('required' => false)),
      'fw_to'               => new sfValidatorString(array('required' => false)),
      'server_ip'           => new sfValidatorString(array('required' => false)),
      'server_name'         => new sfValidatorString(array('required' => false)),
      'send_mail_status_id' => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9223372036854775807, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('send_mails[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SendMails';
  }


}
