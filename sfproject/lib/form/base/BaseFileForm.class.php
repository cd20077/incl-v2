<?php

/**
 * File form base class.
 *
 * @method File getObject() Returns the current form's model object
 *
 * @package    inclv2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFileForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'is_deleted'          => new sfWidgetFormInputText(),
      'updated_at'          => new sfWidgetFormDateTime(),
      'deleted_at'          => new sfWidgetFormDateTime(),
      'created_at'          => new sfWidgetFormDateTime(),
      'origin_name'         => new sfWidgetFormInputText(),
      'encrypt_name'        => new sfWidgetFormInputText(),
      'size'                => new sfWidgetFormInputText(),
      'user_id'             => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'group_id'            => new sfWidgetFormPropelChoice(array('model' => 'Group', 'add_empty' => true)),
      'file_type'           => new sfWidgetFormInputText(),
      'parent_directory_id' => new sfWidgetFormPropelChoice(array('model' => 'File', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted'          => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'updated_at'          => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'          => new sfValidatorDateTime(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'origin_name'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'encrypt_name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'size'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'user_id'             => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id', 'required' => false)),
      'group_id'            => new sfValidatorPropelChoice(array('model' => 'Group', 'column' => 'id', 'required' => false)),
      'file_type'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'parent_directory_id' => new sfValidatorPropelChoice(array('model' => 'File', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('file[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'File';
  }


}