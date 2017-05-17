<?php



/**
 * This class defines the structure of the 'file' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.incl2.map
 */
class FileTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.incl2.map.FileTableMap';

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
        $this->setName('file');
        $this->setPhpName('File');
        $this->setClassname('File');
        $this->setPackage('lib.model.incl2');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('file_id_seq');
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('is_deleted', 'IsDeleted', 'SMALLINT', true, null, 0);
        $this->addColumn('is_directory', 'IsDirectory', 'SMALLINT', true, null, 0);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('deleted_at', 'DeletedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('origin_name', 'OriginName', 'VARCHAR', false, 255, null);
        $this->addColumn('encrypt_name', 'EncryptName', 'VARCHAR', false, 255, null);
        $this->addColumn('size', 'Size', 'INTEGER', false, null, 0);
        $this->addForeignKey('account_id', 'AccountId', 'INTEGER', 'account', 'id', false, null, null);
        $this->addForeignKey('group_id', 'GroupId', 'INTEGER', 'group', 'id', false, null, null);
        $this->addColumn('file_type', 'FileType', 'VARCHAR', false, 255, null);
        $this->addForeignKey('parent_directory_id', 'ParentDirectoryId', 'INTEGER', 'file', 'id', false, null, null);
        $this->addForeignKey('file_status_id', 'FileStatusId', 'INTEGER', 'file_status', 'id', false, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Account', 'Account', RelationMap::MANY_TO_ONE, array('account_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('Group', 'Group', RelationMap::MANY_TO_ONE, array('group_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('FileRelatedByParentDirectoryId', 'File', RelationMap::MANY_TO_ONE, array('parent_directory_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('FileStatus', 'FileStatus', RelationMap::MANY_TO_ONE, array('file_status_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('FileRelatedById', 'File', RelationMap::ONE_TO_MANY, array('id' => 'parent_directory_id', ), 'RESTRICT', 'RESTRICT', 'FilesRelatedById');
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

} // FileTableMap
