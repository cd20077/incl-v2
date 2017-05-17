<?php

/**
 * SendMails filter form base class.
 *
 * @package    incl2
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseSendMailsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_deleted'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'title'               => new sfWidgetFormFilterInput(),
      'name'                => new sfWidgetFormFilterInput(),
      'from_name'           => new sfWidgetFormFilterInput(),
      'to_name'             => new sfWidgetFormFilterInput(),
      'to_address'          => new sfWidgetFormFilterInput(),
      'subject'             => new sfWidgetFormFilterInput(),
      'body'                => new sfWidgetFormFilterInput(),
      'group_code'          => new sfWidgetFormFilterInput(),
      'from_address'        => new sfWidgetFormFilterInput(),
      'finish_dt'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'result'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'send_date'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'send_time'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fw_to'               => new sfWidgetFormFilterInput(),
      'server_ip'           => new sfWidgetFormFilterInput(),
      'server_name'         => new sfWidgetFormFilterInput(),
      'send_mail_status_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'is_deleted'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'title'               => new sfValidatorPass(array('required' => false)),
      'name'                => new sfValidatorPass(array('required' => false)),
      'from_name'           => new sfValidatorPass(array('required' => false)),
      'to_name'             => new sfValidatorPass(array('required' => false)),
      'to_address'          => new sfValidatorPass(array('required' => false)),
      'subject'             => new sfValidatorPass(array('required' => false)),
      'body'                => new sfValidatorPass(array('required' => false)),
      'group_code'          => new sfValidatorPass(array('required' => false)),
      'from_address'        => new sfValidatorPass(array('required' => false)),
      'finish_dt'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'result'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'send_date'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'send_time'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fw_to'               => new sfValidatorPass(array('required' => false)),
      'server_ip'           => new sfValidatorPass(array('required' => false)),
      'server_name'         => new sfValidatorPass(array('required' => false)),
      'send_mail_status_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('send_mails_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SendMails';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'is_deleted'          => 'Number',
      'updated_at'          => 'Date',
      'deleted_at'          => 'Date',
      'created_at'          => 'Date',
      'title'               => 'Text',
      'name'                => 'Text',
      'from_name'           => 'Text',
      'to_name'             => 'Text',
      'to_address'          => 'Text',
      'subject'             => 'Text',
      'body'                => 'Text',
      'group_code'          => 'Text',
      'from_address'        => 'Text',
      'finish_dt'           => 'Date',
      'result'              => 'Number',
      'send_date'           => 'Date',
      'send_time'           => 'Date',
      'fw_to'               => 'Text',
      'server_ip'           => 'Text',
      'server_name'         => 'Text',
      'send_mail_status_id' => 'Number',
    );
  }
}
