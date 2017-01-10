<?php

/**
 * SendMailStatus form base class.
 *
 * @method SendMailStatus getObject() Returns the current form's model object
 *
 * @package    inclv2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSendMailStatusForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'is_deleted' => new sfWidgetFormInputText(),
      'updated_at' => new sfWidgetFormDateTime(),
      'deleted_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
      'name'       => new sfWidgetFormTextarea(),
      'snum'       => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'deleted_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'name'       => new sfValidatorString(array('required' => false)),
      'snum'       => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('send_mail_status[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SendMailStatus';
  }


}
