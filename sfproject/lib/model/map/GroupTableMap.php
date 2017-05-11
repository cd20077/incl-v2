<?php



/**
 * This class defines the structure of the 'group' table.
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
class GroupTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.GroupTableMap';

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
        $this->setName('group');
        $this->setPhpName('Group');
        $this->setClassname('Group');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('group_id_seq');
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('is_deleted', 'IsDeleted', 'SMALLINT', true, null, 0);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('deleted_at', 'DeletedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('maxcapa', 'Maxcapa', 'INTEGER', false, null, 209715200);
        $this->addColumn('precapa', 'Precapa', 'INTEGER', false, null, 0);
        $this->addColumn('backimg', 'Backimg', 'VARCHAR', false, 255, null);
        $this->addColumn('ranid', 'Ranid', 'VARCHAR', false, 255, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('File', 'File', RelationMap::ONE_TO_MANY, array('id' => 'group_id', ), 'RESTRICT', 'RESTRICT', 'Files');
        $this->addRelation('GroupMember', 'GroupMember', RelationMap::ONE_TO_MANY, array('id' => 'group_id', ), 'RESTRICT', 'RESTRICT', 'GroupMembers');
        $this->addRelation('UserLog', 'UserLog', RelationMap::ONE_TO_MANY, array('id' => 'group_id', ), 'RESTRICT', 'RESTRICT', 'UserLogs');
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

} // GroupTableMap
