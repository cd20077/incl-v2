<?php



/**
 * This class defines the structure of the 'group_member' table.
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
class GroupMemberTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.GroupMemberTableMap';

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
        $this->setName('group_member');
        $this->setPhpName('GroupMember');
        $this->setClassname('GroupMember');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('group_member_id_seq');
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('is_deleted', 'IsDeleted', 'SMALLINT', true, null, 0);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('deleted_at', 'DeletedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'id', false, null, null);
        $this->addForeignKey('group_id', 'GroupId', 'INTEGER', 'group', 'id', false, null, null);
        $this->addForeignKey('auth_level_status_id', 'AuthLevelStatusId', 'INTEGER', 'auth_level_status', 'id', false, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('Group', 'Group', RelationMap::MANY_TO_ONE, array('group_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('AuthLevelStatus', 'AuthLevelStatus', RelationMap::MANY_TO_ONE, array('auth_level_status_id' => 'id', ), 'RESTRICT', 'RESTRICT');
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

} // GroupMemberTableMap
