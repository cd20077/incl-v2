<?php



/**
 * This class defines the structure of the 'send_mails' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class SendMailsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.SendMailsTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('send_mails');
        $this->setPhpName('SendMails');
        $this->setClassname('SendMails');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('send_mails_id_seq');
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('is_deleted', 'IsDeleted', 'SMALLINT', true, null, 0);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('deleted_at', 'DeletedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 255, null);
        $this->addColumn('name', 'Name', 'LONGVARCHAR', false, null, null);
        $this->addColumn('from_name', 'FromName', 'LONGVARCHAR', false, null, null);
        $this->addColumn('to_name', 'ToName', 'LONGVARCHAR', false, null, null);
        $this->addColumn('to_address', 'ToAddress', 'LONGVARCHAR', false, null, null);
        $this->addColumn('subject', 'Subject', 'LONGVARCHAR', false, null, null);
        $this->addColumn('body', 'Body', 'LONGVARCHAR', false, null, null);
        $this->addColumn('group_code', 'GroupCode', 'LONGVARCHAR', false, null, null);
        $this->addColumn('from_address', 'FromAddress', 'LONGVARCHAR', false, null, null);
        $this->addColumn('finish_dt', 'FinishDt', 'TIMESTAMP', false, null, null);
        $this->addColumn('result', 'Result', 'SMALLINT', true, null, 0);
        $this->addColumn('send_date', 'SendDate', 'DATE', false, null, null);
        $this->addColumn('send_time', 'SendTime', 'TIME', false, null, null);
        $this->addColumn('fw_to', 'FwTo', 'LONGVARCHAR', false, null, null);
        $this->addColumn('server_ip', 'ServerIp', 'LONGVARCHAR', false, null, null);
        $this->addColumn('server_name', 'ServerName', 'LONGVARCHAR', false, null, null);
        $this->addColumn('send_mail_status_id', 'SendMailStatusId', 'BIGINT', false, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' =>  array (
  'form' => 'true',
  'filter' => 'true',
),
            'symfony_behaviors' =>  array (
),
            'symfony_timestampable' =>  array (
  'update_column' => 'updated_at',
  'create_column' => 'created_at',
),
        );
    } // getBehaviors()

} // SendMailsTableMap
