<?php

/**
 * Account filter form base class.
 *
 * @package    incl2
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAccountFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_deleted'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'name'              => new sfWidgetFormFilterInput(),
      'mail'              => new sfWidgetFormFilterInput(),
      'password'          => new sfWidgetFormFilterInput(),
      'accountimg'        => new sfWidgetFormFilterInput(),
      'backimg'           => new sfWidgetFormFilterInput(),
      'maxcapa'           => new sfWidgetFormFilterInput(),
      'precapa'           => new sfWidgetFormFilterInput(),
      'account_status_id' => new sfWidgetFormPropelChoice(array('model' => 'AccountStatus', 'add_empty' => true)),
      'provisional_key'   => new sfWidgetFormFilterInput(),
      'randid'            => new sfWidgetFormFilterInput(),
      'langid'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'is_deleted'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'name'              => new sfValidatorPass(array('required' => false)),
      'mail'              => new sfValidatorPass(array('required' => false)),
      'password'          => new sfValidatorPass(array('required' => false)),
      'accountimg'        => new sfValidatorPass(array('required' => false)),
      'backimg'           => new sfValidatorPass(array('required' => false)),
      'maxcapa'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precapa'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'account_status_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AccountStatus', 'column' => 'id')),
      'provisional_key'   => new sfValidatorPass(array('required' => false)),
      'randid'            => new sfValidatorPass(array('required' => false)),
      'langid'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('account_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Account';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'is_deleted'        => 'Number',
      'updated_at'        => 'Date',
      'deleted_at'        => 'Date',
      'created_at'        => 'Date',
      'name'              => 'Text',
      'mail'              => 'Text',
      'password'          => 'Text',
      'accountimg'        => 'Text',
      'backimg'           => 'Text',
      'maxcapa'           => 'Number',
      'precapa'           => 'Number',
      'account_status_id' => 'ForeignKey',
      'provisional_key'   => 'Text',
      'randid'            => 'Text',
      'langid'            => 'Number',
    );
  }
}
