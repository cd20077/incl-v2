<?php

/**
 * Group form base class.
 *
 * @method Group getObject() Returns the current form's model object
 *
 * @package    inclv2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGroupForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'is_deleted' => new sfWidgetFormInputText(),
      'updated_at' => new sfWidgetFormDateTime(),
      'deleted_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
      'name'       => new sfWidgetFormInputText(),
      'maxcapa'    => new sfWidgetFormInputText(),
      'precapa'    => new sfWidgetFormInputText(),
      'backimg'    => new sfWidgetFormInputText(),
      'ranid'      => new sfWidgetFormInputText(),
      'user_id'    => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'deleted_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'name'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maxcapa'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'precapa'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'backimg'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ranid'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user_id'    => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Group';
  }


}
