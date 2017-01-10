<?php

/**
 * Group filter form base class.
 *
 * @package    inclv2
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseGroupFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_deleted' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'name'       => new sfWidgetFormFilterInput(),
      'maxcapa'    => new sfWidgetFormFilterInput(),
      'precapa'    => new sfWidgetFormFilterInput(),
      'backimg'    => new sfWidgetFormFilterInput(),
      'ranid'      => new sfWidgetFormFilterInput(),
      'user_id'    => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'is_deleted' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'name'       => new sfValidatorPass(array('required' => false)),
      'maxcapa'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precapa'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'backimg'    => new sfValidatorPass(array('required' => false)),
      'ranid'      => new sfValidatorPass(array('required' => false)),
      'user_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Group';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'is_deleted' => 'Number',
      'updated_at' => 'Date',
      'deleted_at' => 'Date',
      'created_at' => 'Date',
      'name'       => 'Text',
      'maxcapa'    => 'Number',
      'precapa'    => 'Number',
      'backimg'    => 'Text',
      'ranid'      => 'Text',
      'user_id'    => 'ForeignKey',
    );
  }
}
