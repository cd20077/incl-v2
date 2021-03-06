<?php

/**
 * Account form base class.
 *
 * @method Account getObject() Returns the current form's model object
 *
 * @package    incl2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAccountForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'is_deleted'        => new sfWidgetFormInputText(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'deleted_at'        => new sfWidgetFormDateTime(),
      'created_at'        => new sfWidgetFormDateTime(),
      'name'              => new sfWidgetFormInputText(),
      'mail'              => new sfWidgetFormInputText(),
      'password'          => new sfWidgetFormInputText(),
      'accountimg'        => new sfWidgetFormInputText(),
      'backimg'           => new sfWidgetFormInputText(),
      'maxcapa'           => new sfWidgetFormInputText(),
      'precapa'           => new sfWidgetFormInputText(),
      'account_status_id' => new sfWidgetFormPropelChoice(array('model' => 'AccountStatus', 'add_empty' => true)),
      'provisional_key'   => new sfWidgetFormInputText(),
      'randid'            => new sfWidgetFormInputText(),
      'language_id'       => new sfWidgetFormPropelChoice(array('model' => 'Language', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted'        => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'updated_at'        => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'        => new sfValidatorDateTime(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'name'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mail'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'password'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'accountimg'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'backimg'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maxcapa'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'precapa'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'account_status_id' => new sfValidatorPropelChoice(array('model' => 'AccountStatus', 'column' => 'id', 'required' => false)),
      'provisional_key'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'randid'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'language_id'       => new sfValidatorPropelChoice(array('model' => 'Language', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('account[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Account';
  }


}
