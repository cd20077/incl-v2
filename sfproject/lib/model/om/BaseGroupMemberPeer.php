<?php


/**
 * Base static class for performing query and update operations on the 'group_member' table.
 *
 *
 *
 * @package propel.generator.lib.model.om
 */
abstract class BaseGroupMemberPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'incl2';

    /** the table name for this class */
    const TABLE_NAME = 'group_member';

    /** the related Propel class for this table */
    const OM_CLASS = 'GroupMember';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GroupMemberTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the id field */
    const ID = 'group_member.id';

    /** the column name for the is_deleted field */
    const IS_DELETED = 'group_member.is_deleted';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'group_member.updated_at';

    /** the column name for the deleted_at field */
    const DELETED_AT = 'group_member.deleted_at';

    /** the column name for the created_at field */
    const CREATED_AT = 'group_member.created_at';

    /** the column name for the user_id field */
    const USER_ID = 'group_member.user_id';

    /** the column name for the group_id field */
    const GROUP_ID = 'group_member.group_id';

    /** the column name for the auth_level_status_id field */
    const AUTH_LEVEL_STATUS_ID = 'group_member.auth_level_status_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GroupMember objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GroupMember[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GroupMemberPeer::$fieldNames[GroupMemberPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IsDeleted', 'UpdatedAt', 'DeletedAt', 'CreatedAt', 'UserId', 'GroupId', 'AuthLevelStatusId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'isDeleted', 'updatedAt', 'deletedAt', 'createdAt', 'userId', 'groupId', 'authLevelStatusId', ),
        BasePeer::TYPE_COLNAME => array (GroupMemberPeer::ID, GroupMemberPeer::IS_DELETED, GroupMemberPeer::UPDATED_AT, GroupMemberPeer::DELETED_AT, GroupMemberPeer::CREATED_AT, GroupMemberPeer::USER_ID, GroupMemberPeer::GROUP_ID, GroupMemberPeer::AUTH_LEVEL_STATUS_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'IS_DELETED', 'UPDATED_AT', 'DELETED_AT', 'CREATED_AT', 'USER_ID', 'GROUP_ID', 'AUTH_LEVEL_STATUS_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'is_deleted', 'updated_at', 'deleted_at', 'created_at', 'user_id', 'group_id', 'auth_level_status_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GroupMemberPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IsDeleted' => 1, 'UpdatedAt' => 2, 'DeletedAt' => 3, 'CreatedAt' => 4, 'UserId' => 5, 'GroupId' => 6, 'AuthLevelStatusId' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'isDeleted' => 1, 'updatedAt' => 2, 'deletedAt' => 3, 'createdAt' => 4, 'userId' => 5, 'groupId' => 6, 'authLevelStatusId' => 7, ),
        BasePeer::TYPE_COLNAME => array (GroupMemberPeer::ID => 0, GroupMemberPeer::IS_DELETED => 1, GroupMemberPeer::UPDATED_AT => 2, GroupMemberPeer::DELETED_AT => 3, GroupMemberPeer::CREATED_AT => 4, GroupMemberPeer::USER_ID => 5, GroupMemberPeer::GROUP_ID => 6, GroupMemberPeer::AUTH_LEVEL_STATUS_ID => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'IS_DELETED' => 1, 'UPDATED_AT' => 2, 'DELETED_AT' => 3, 'CREATED_AT' => 4, 'USER_ID' => 5, 'GROUP_ID' => 6, 'AUTH_LEVEL_STATUS_ID' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'is_deleted' => 1, 'updated_at' => 2, 'deleted_at' => 3, 'created_at' => 4, 'user_id' => 5, 'group_id' => 6, 'auth_level_status_id' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = GroupMemberPeer::getFieldNames($toType);
        $key = isset(GroupMemberPeer::$fieldKeys[$fromType][$name]) ? GroupMemberPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GroupMemberPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, GroupMemberPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GroupMemberPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. GroupMemberPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GroupMemberPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(GroupMemberPeer::ID);
            $criteria->addSelectColumn(GroupMemberPeer::IS_DELETED);
            $criteria->addSelectColumn(GroupMemberPeer::UPDATED_AT);
            $criteria->addSelectColumn(GroupMemberPeer::DELETED_AT);
            $criteria->addSelectColumn(GroupMemberPeer::CREATED_AT);
            $criteria->addSelectColumn(GroupMemberPeer::USER_ID);
            $criteria->addSelectColumn(GroupMemberPeer::GROUP_ID);
            $criteria->addSelectColumn(GroupMemberPeer::AUTH_LEVEL_STATUS_ID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.is_deleted');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.deleted_at');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.group_id');
            $criteria->addSelectColumn($alias . '.auth_level_status_id');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupMemberPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return GroupMember
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GroupMemberPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return GroupMemberPeer::populateObjects(GroupMemberPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GroupMemberPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }


        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param GroupMember $obj A GroupMember object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            GroupMemberPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A GroupMember object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GroupMember) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GroupMember object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GroupMemberPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GroupMember Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GroupMemberPeer::$instances[$key])) {
                return GroupMemberPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (GroupMemberPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GroupMemberPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to group_member
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = GroupMemberPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GroupMemberPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GroupMemberPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GroupMemberPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (GroupMember object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GroupMemberPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GroupMemberPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GroupMemberPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GroupMemberPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GroupMemberPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupMemberPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupMemberPeer::USER_ID, UserPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Group table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGroup(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupMemberPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupMemberPeer::GROUP_ID, GroupPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related AuthLevelStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAuthLevelStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupMemberPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupMemberPeer::AUTH_LEVEL_STATUS_ID, AuthLevelStatusPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GroupMember objects pre-filled with their User objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupMember objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);
        }

        GroupMemberPeer::addSelectColumns($criteria);
        $startcol = GroupMemberPeer::NUM_HYDRATE_COLUMNS;
        UserPeer::addSelectColumns($criteria);

        $criteria->addJoin(GroupMemberPeer::USER_ID, UserPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupMemberPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupMemberPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GroupMemberPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupMemberPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GroupMember) to $obj2 (User)
                $obj2->addGroupMember($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GroupMember objects pre-filled with their Group objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupMember objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGroup(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);
        }

        GroupMemberPeer::addSelectColumns($criteria);
        $startcol = GroupMemberPeer::NUM_HYDRATE_COLUMNS;
        GroupPeer::addSelectColumns($criteria);

        $criteria->addJoin(GroupMemberPeer::GROUP_ID, GroupPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupMemberPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupMemberPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GroupMemberPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupMemberPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GroupPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GroupPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GroupPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GroupPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GroupMember) to $obj2 (Group)
                $obj2->addGroupMember($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GroupMember objects pre-filled with their AuthLevelStatus objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupMember objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAuthLevelStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);
        }

        GroupMemberPeer::addSelectColumns($criteria);
        $startcol = GroupMemberPeer::NUM_HYDRATE_COLUMNS;
        AuthLevelStatusPeer::addSelectColumns($criteria);

        $criteria->addJoin(GroupMemberPeer::AUTH_LEVEL_STATUS_ID, AuthLevelStatusPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupMemberPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupMemberPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GroupMemberPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupMemberPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = AuthLevelStatusPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = AuthLevelStatusPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AuthLevelStatusPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    AuthLevelStatusPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GroupMember) to $obj2 (AuthLevelStatus)
                $obj2->addGroupMember($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupMemberPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupMemberPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::GROUP_ID, GroupPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::AUTH_LEVEL_STATUS_ID, AuthLevelStatusPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of GroupMember objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupMember objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);
        }

        GroupMemberPeer::addSelectColumns($criteria);
        $startcol2 = GroupMemberPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        GroupPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GroupPeer::NUM_HYDRATE_COLUMNS;

        AuthLevelStatusPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + AuthLevelStatusPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GroupMemberPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::GROUP_ID, GroupPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::AUTH_LEVEL_STATUS_ID, AuthLevelStatusPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupMemberPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupMemberPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GroupMemberPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupMemberPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined User rows

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GroupMember) to the collection in $obj2 (User)
                $obj2->addGroupMember($obj1);
            } // if joined row not null

            // Add objects for joined Group rows

            $key3 = GroupPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GroupPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GroupPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GroupPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GroupMember) to the collection in $obj3 (Group)
                $obj3->addGroupMember($obj1);
            } // if joined row not null

            // Add objects for joined AuthLevelStatus rows

            $key4 = AuthLevelStatusPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = AuthLevelStatusPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = AuthLevelStatusPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    AuthLevelStatusPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (GroupMember) to the collection in $obj4 (AuthLevelStatus)
                $obj4->addGroupMember($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupMemberPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupMemberPeer::GROUP_ID, GroupPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::AUTH_LEVEL_STATUS_ID, AuthLevelStatusPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Group table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGroup(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupMemberPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupMemberPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::AUTH_LEVEL_STATUS_ID, AuthLevelStatusPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related AuthLevelStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAuthLevelStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupMemberPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupMemberPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::GROUP_ID, GroupPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GroupMember objects pre-filled with all related objects except User.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupMember objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);
        }

        GroupMemberPeer::addSelectColumns($criteria);
        $startcol2 = GroupMemberPeer::NUM_HYDRATE_COLUMNS;

        GroupPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GroupPeer::NUM_HYDRATE_COLUMNS;

        AuthLevelStatusPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AuthLevelStatusPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GroupMemberPeer::GROUP_ID, GroupPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::AUTH_LEVEL_STATUS_ID, AuthLevelStatusPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupMemberPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupMemberPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GroupMemberPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupMemberPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Group rows

                $key2 = GroupPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GroupPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GroupPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GroupPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GroupMember) to the collection in $obj2 (Group)
                $obj2->addGroupMember($obj1);

            } // if joined row is not null

                // Add objects for joined AuthLevelStatus rows

                $key3 = AuthLevelStatusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AuthLevelStatusPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AuthLevelStatusPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AuthLevelStatusPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GroupMember) to the collection in $obj3 (AuthLevelStatus)
                $obj3->addGroupMember($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GroupMember objects pre-filled with all related objects except Group.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupMember objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGroup(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);
        }

        GroupMemberPeer::addSelectColumns($criteria);
        $startcol2 = GroupMemberPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        AuthLevelStatusPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AuthLevelStatusPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GroupMemberPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::AUTH_LEVEL_STATUS_ID, AuthLevelStatusPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupMemberPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupMemberPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GroupMemberPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupMemberPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GroupMember) to the collection in $obj2 (User)
                $obj2->addGroupMember($obj1);

            } // if joined row is not null

                // Add objects for joined AuthLevelStatus rows

                $key3 = AuthLevelStatusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AuthLevelStatusPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AuthLevelStatusPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AuthLevelStatusPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GroupMember) to the collection in $obj3 (AuthLevelStatus)
                $obj3->addGroupMember($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GroupMember objects pre-filled with all related objects except AuthLevelStatus.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupMember objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAuthLevelStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);
        }

        GroupMemberPeer::addSelectColumns($criteria);
        $startcol2 = GroupMemberPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        GroupPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GroupPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GroupMemberPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(GroupMemberPeer::GROUP_ID, GroupPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseGroupMemberPeer', $criteria, $con);
        }


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupMemberPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupMemberPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GroupMemberPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupMemberPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GroupMember) to the collection in $obj2 (User)
                $obj2->addGroupMember($obj1);

            } // if joined row is not null

                // Add objects for joined Group rows

                $key3 = GroupPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GroupPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GroupPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GroupPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GroupMember) to the collection in $obj3 (Group)
                $obj3->addGroupMember($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(GroupMemberPeer::DATABASE_NAME)->getTable(GroupMemberPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGroupMemberPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGroupMemberPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GroupMemberTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return GroupMemberPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GroupMember or Criteria object.
     *
     * @param      mixed $values Criteria or GroupMember object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GroupMember object
        }

        if ($criteria->containsKey(GroupMemberPeer::ID) && $criteria->keyContainsValue(GroupMemberPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GroupMemberPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a GroupMember or Criteria object.
     *
     * @param      mixed $values Criteria or GroupMember object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GroupMemberPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GroupMemberPeer::ID);
            $value = $criteria->remove(GroupMemberPeer::ID);
            if ($value) {
                $selectCriteria->add(GroupMemberPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GroupMemberPeer::TABLE_NAME);
            }

        } else { // $values is GroupMember object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the group_member table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GroupMemberPeer::TABLE_NAME, $con, GroupMemberPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GroupMemberPeer::clearInstancePool();
            GroupMemberPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GroupMember or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GroupMember object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GroupMemberPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GroupMember) { // it's a model object
            // invalidate the cache for this single object
            GroupMemberPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GroupMemberPeer::DATABASE_NAME);
            $criteria->add(GroupMemberPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GroupMemberPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GroupMemberPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GroupMemberPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GroupMember object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GroupMember $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GroupMemberPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GroupMemberPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(GroupMemberPeer::DATABASE_NAME, GroupMemberPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GroupMember
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GroupMemberPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GroupMemberPeer::DATABASE_NAME);
        $criteria->add(GroupMemberPeer::ID, $pk);

        $v = GroupMemberPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GroupMember[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GroupMemberPeer::DATABASE_NAME);
            $criteria->add(GroupMemberPeer::ID, $pks, Criteria::IN);
            $objs = GroupMemberPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

    // symfony behavior

    /**
     * Returns an array of arrays that contain columns in each unique index.
     *
     * @return array
     */
    static public function getUniqueColumnNames()
    {
      return array();
    }

    // symfony_behaviors behavior

    /**
     * Returns the name of the hook to call from inside the supplied method.
     *
     * @param string $method The calling method
     *
     * @return string A hook name for {@link sfMixer}
     *
     * @throws LogicException If the method name is not recognized
     */
    static private function getMixerPreSelectHook($method)
    {
      if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
      {
        return sprintf('BaseGroupMemberPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
      }

      throw new LogicException(sprintf('Unrecognized function "%s"', $method));
    }

} // BaseGroupMemberPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGroupMemberPeer::buildTableMap();

