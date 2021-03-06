<?php

/**
 * Project form base class.
 *
 * @method Project getObject() Returns the current form's model object
 *
 * @package    incl2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProjectForm extends BaseFormPropel
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
      'account_id' => new sfWidgetFormPropelChoice(array('model' => 'Account', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted' => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'deleted_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'name'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maxcapa'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'precapa'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'backimg'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ranid'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'account_id' => new sfValidatorPropelChoice(array('model' => 'Account', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('project[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Project';
  }


}
