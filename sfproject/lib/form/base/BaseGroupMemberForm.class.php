<?php

/**
 * GroupMember form base class.
 *
 * @method GroupMember getObject() Returns the current form's model object
 *
 * @package    inclv2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGroupMemberForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'is_deleted'           => new sfWidgetFormInputText(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'deleted_at'           => new sfWidgetFormDateTime(),
      'created_at'           => new sfWidgetFormDateTime(),
      'user_id'              => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'group_id'             => new sfWidgetFormPropelChoice(array('model' => 'Group', 'add_empty' => true)),
      'auth_level_status_id' => new sfWidgetFormPropelChoice(array('model' => 'AuthLevelStatus', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted'           => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'updated_at'           => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'           => new sfValidatorDateTime(array('required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'user_id'              => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id', 'required' => false)),
      'group_id'             => new sfValidatorPropelChoice(array('model' => 'Group', 'column' => 'id', 'required' => false)),
      'auth_level_status_id' => new sfValidatorPropelChoice(array('model' => 'AuthLevelStatus', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('group_member[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GroupMember';
  }


}
