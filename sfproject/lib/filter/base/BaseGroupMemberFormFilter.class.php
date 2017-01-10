<?php

/**
 * GroupMember filter form base class.
 *
 * @package    inclv2
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseGroupMemberFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_deleted'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'user_id'              => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'group_id'             => new sfWidgetFormPropelChoice(array('model' => 'Group', 'add_empty' => true)),
      'auth_level_status_id' => new sfWidgetFormPropelChoice(array('model' => 'AuthLevelStatus', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'is_deleted'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'user_id'              => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
      'group_id'             => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Group', 'column' => 'id')),
      'auth_level_status_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AuthLevelStatus', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('group_member_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GroupMember';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'is_deleted'           => 'Number',
      'updated_at'           => 'Date',
      'deleted_at'           => 'Date',
      'created_at'           => 'Date',
      'user_id'              => 'ForeignKey',
      'group_id'             => 'ForeignKey',
      'auth_level_status_id' => 'ForeignKey',
    );
  }
}