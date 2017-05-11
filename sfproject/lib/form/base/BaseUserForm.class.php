<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    incl2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUserForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'is_deleted'     => new sfWidgetFormInputText(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'deleted_at'     => new sfWidgetFormDateTime(),
      'created_at'     => new sfWidgetFormDateTime(),
      'name'           => new sfWidgetFormInputText(),
      'mail'           => new sfWidgetFormInputText(),
      'password'       => new sfWidgetFormInputText(),
      'userimg'        => new sfWidgetFormInputText(),
      'backimg'        => new sfWidgetFormInputText(),
      'maxcapa'        => new sfWidgetFormInputText(),
      'precapa'        => new sfWidgetFormInputText(),
      'user_status_id' => new sfWidgetFormPropelChoice(array('model' => 'UserStatus', 'add_empty' => true)),
      'randnum'        => new sfWidgetFormInputText(),
      'randid'         => new sfWidgetFormInputText(),
      'langid'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted'     => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'updated_at'     => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'     => new sfValidatorDateTime(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'name'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mail'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'password'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'userimg'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'backimg'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maxcapa'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'precapa'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'user_status_id' => new sfValidatorPropelChoice(array('model' => 'UserStatus', 'column' => 'id', 'required' => false)),
      'randnum'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'randid'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'langid'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }


}
