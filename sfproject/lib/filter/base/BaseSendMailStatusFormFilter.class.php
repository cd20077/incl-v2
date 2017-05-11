<?php

/**
 * SendMailStatus filter form base class.
 *
 * @package    incl2
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseSendMailStatusFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_deleted' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'name'       => new sfWidgetFormFilterInput(),
      'snum'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'is_deleted' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'name'       => new sfValidatorPass(array('required' => false)),
      'snum'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('send_mail_status_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SendMailStatus';
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
      'snum'       => 'Text',
    );
  }
}
