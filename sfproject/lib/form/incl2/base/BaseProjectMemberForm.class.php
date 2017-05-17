<?php

/**
 * ProjectMember form base class.
 *
 * @method ProjectMember getObject() Returns the current form's model object
 *
 * @package    incl2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProjectMemberForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'is_deleted'           => new sfWidgetFormInputText(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'deleted_at'           => new sfWidgetFormDateTime(),
      'created_at'           => new sfWidgetFormDateTime(),
      'account_id'           => new sfWidgetFormPropelChoice(array('model' => 'Account', 'add_empty' => true)),
      'project_id'           => new sfWidgetFormPropelChoice(array('model' => 'Project', 'add_empty' => true)),
      'auth_level_status_id' => new sfWidgetFormPropelChoice(array('model' => 'AuthLevelStatus', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'is_deleted'           => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'updated_at'           => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'           => new sfValidatorDateTime(array('required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'account_id'           => new sfValidatorPropelChoice(array('model' => 'Account', 'column' => 'id', 'required' => false)),
      'project_id'           => new sfValidatorPropelChoice(array('model' => 'Project', 'column' => 'id', 'required' => false)),
      'auth_level_status_id' => new sfValidatorPropelChoice(array('model' => 'AuthLevelStatus', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('project_member[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjectMember';
  }


}
