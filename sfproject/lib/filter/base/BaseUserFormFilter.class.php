<?php

/**
 * User filter form base class.
 *
 * @package    inclv2
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseUserFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_deleted'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'name'           => new sfWidgetFormFilterInput(),
      'mail'           => new sfWidgetFormFilterInput(),
      'password'       => new sfWidgetFormFilterInput(),
      'userimg'        => new sfWidgetFormFilterInput(),
      'backimg'        => new sfWidgetFormFilterInput(),
      'maxcapa'        => new sfWidgetFormFilterInput(),
      'precapa'        => new sfWidgetFormFilterInput(),
      'user_status_id' => new sfWidgetFormPropelChoice(array('model' => 'UserStatus', 'add_empty' => true)),
      'randnum'        => new sfWidgetFormFilterInput(),
      'randid'         => new sfWidgetFormFilterInput(),
      'langid'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'is_deleted'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'name'           => new sfValidatorPass(array('required' => false)),
      'mail'           => new sfValidatorPass(array('required' => false)),
      'password'       => new sfValidatorPass(array('required' => false)),
      'userimg'        => new sfValidatorPass(array('required' => false)),
      'backimg'        => new sfValidatorPass(array('required' => false)),
      'maxcapa'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precapa'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_status_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'UserStatus', 'column' => 'id')),
      'randnum'        => new sfValidatorPass(array('required' => false)),
      'randid'         => new sfValidatorPass(array('required' => false)),
      'langid'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'is_deleted'     => 'Number',
      'updated_at'     => 'Date',
      'deleted_at'     => 'Date',
      'created_at'     => 'Date',
      'name'           => 'Text',
      'mail'           => 'Text',
      'password'       => 'Text',
      'userimg'        => 'Text',
      'backimg'        => 'Text',
      'maxcapa'        => 'Number',
      'precapa'        => 'Number',
      'user_status_id' => 'ForeignKey',
      'randnum'        => 'Text',
      'randid'         => 'Text',
      'langid'         => 'Number',
    );
  }
}
