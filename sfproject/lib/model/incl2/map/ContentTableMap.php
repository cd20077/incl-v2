<?php



/**
 * This class defines the structure of the 'content' table.
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
class ContentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.incl2.map.ContentTableMap';

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
        $this->setName('content');
        $this->setPhpName('Content');
        $this->setClassname('Content');
        $this->setPackage('lib.model.incl2');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('content_id_seq');
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
        $this->addForeignKey('project_id', 'ProjectId', 'INTEGER', 'project', 'id', false, null, null);
        $this->addColumn('content_type', 'ContentType', 'VARCHAR', false, 255, null);
        $this->addForeignKey('parent_directory_id', 'ParentDirectoryId', 'INTEGER', 'content', 'id', false, null, null);
        $this->addForeignKey('content_status_id', 'ContentStatusId', 'INTEGER', 'content_status', 'id', false, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Account', 'Account', RelationMap::MANY_TO_ONE, array('account_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('Project', 'Project', RelationMap::MANY_TO_ONE, array('project_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('ContentRelatedByParentDirectoryId', 'Content', RelationMap::MANY_TO_ONE, array('parent_directory_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('ContentStatus', 'ContentStatus', RelationMap::MANY_TO_ONE, array('content_status_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('ContentRelatedById', 'Content', RelationMap::ONE_TO_MANY, array('id' => 'parent_directory_id', ), 'RESTRICT', 'RESTRICT', 'ContentsRelatedById');
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

} // ContentTableMap
