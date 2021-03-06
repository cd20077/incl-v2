<?php


/**
 * Base static class for performing query and update operations on the 'send_mails' table.
 *
 *
 *
 * @package propel.generator.lib.model.incl2.om
 */
abstract class BaseSendMailsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'incl2';

    /** the table name for this class */
    const TABLE_NAME = 'send_mails';

    /** the related Propel class for this table */
    const OM_CLASS = 'SendMails';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SendMailsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the id field */
    const ID = 'send_mails.id';

    /** the column name for the is_deleted field */
    const IS_DELETED = 'send_mails.is_deleted';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'send_mails.updated_at';

    /** the column name for the deleted_at field */
    const DELETED_AT = 'send_mails.deleted_at';

    /** the column name for the created_at field */
    const CREATED_AT = 'send_mails.created_at';

    /** the column name for the title field */
    const TITLE = 'send_mails.title';

    /** the column name for the name field */
    const NAME = 'send_mails.name';

    /** the column name for the from_name field */
    const FROM_NAME = 'send_mails.from_name';

    /** the column name for the to_name field */
    const TO_NAME = 'send_mails.to_name';

    /** the column name for the to_address field */
    const TO_ADDRESS = 'send_mails.to_address';

    /** the column name for the subject field */
    const SUBJECT = 'send_mails.subject';

    /** the column name for the body field */
    const BODY = 'send_mails.body';

    /** the column name for the group_code field */
    const GROUP_CODE = 'send_mails.group_code';

    /** the column name for the from_address field */
    const FROM_ADDRESS = 'send_mails.from_address';

    /** the column name for the finish_dt field */
    const FINISH_DT = 'send_mails.finish_dt';

    /** the column name for the result field */
    const RESULT = 'send_mails.result';

    /** the column name for the send_date field */
    const SEND_DATE = 'send_mails.send_date';

    /** the column name for the send_time field */
    const SEND_TIME = 'send_mails.send_time';

    /** the column name for the fw_to field */
    const FW_TO = 'send_mails.fw_to';

    /** the column name for the server_ip field */
    const SERVER_IP = 'send_mails.server_ip';

    /** the column name for the server_name field */
    const SERVER_NAME = 'send_mails.server_name';

    /** the column name for the send_mail_status_id field */
    const SEND_MAIL_STATUS_ID = 'send_mails.send_mail_status_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of SendMails objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SendMails[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SendMailsPeer::$fieldNames[SendMailsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IsDeleted', 'UpdatedAt', 'DeletedAt', 'CreatedAt', 'Title', 'Name', 'FromName', 'ToName', 'ToAddress', 'Subject', 'Body', 'GroupCode', 'FromAddress', 'FinishDt', 'Result', 'SendDate', 'SendTime', 'FwTo', 'ServerIp', 'ServerName', 'SendMailStatusId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'isDeleted', 'updatedAt', 'deletedAt', 'createdAt', 'title', 'name', 'fromName', 'toName', 'toAddress', 'subject', 'body', 'groupCode', 'fromAddress', 'finishDt', 'result', 'sendDate', 'sendTime', 'fwTo', 'serverIp', 'serverName', 'sendMailStatusId', ),
        BasePeer::TYPE_COLNAME => array (SendMailsPeer::ID, SendMailsPeer::IS_DELETED, SendMailsPeer::UPDATED_AT, SendMailsPeer::DELETED_AT, SendMailsPeer::CREATED_AT, SendMailsPeer::TITLE, SendMailsPeer::NAME, SendMailsPeer::FROM_NAME, SendMailsPeer::TO_NAME, SendMailsPeer::TO_ADDRESS, SendMailsPeer::SUBJECT, SendMailsPeer::BODY, SendMailsPeer::GROUP_CODE, SendMailsPeer::FROM_ADDRESS, SendMailsPeer::FINISH_DT, SendMailsPeer::RESULT, SendMailsPeer::SEND_DATE, SendMailsPeer::SEND_TIME, SendMailsPeer::FW_TO, SendMailsPeer::SERVER_IP, SendMailsPeer::SERVER_NAME, SendMailsPeer::SEND_MAIL_STATUS_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'IS_DELETED', 'UPDATED_AT', 'DELETED_AT', 'CREATED_AT', 'TITLE', 'NAME', 'FROM_NAME', 'TO_NAME', 'TO_ADDRESS', 'SUBJECT', 'BODY', 'GROUP_CODE', 'FROM_ADDRESS', 'FINISH_DT', 'RESULT', 'SEND_DATE', 'SEND_TIME', 'FW_TO', 'SERVER_IP', 'SERVER_NAME', 'SEND_MAIL_STATUS_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'is_deleted', 'updated_at', 'deleted_at', 'created_at', 'title', 'name', 'from_name', 'to_name', 'to_address', 'subject', 'body', 'group_code', 'from_address', 'finish_dt', 'result', 'send_date', 'send_time', 'fw_to', 'server_ip', 'server_name', 'send_mail_status_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SendMailsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IsDeleted' => 1, 'UpdatedAt' => 2, 'DeletedAt' => 3, 'CreatedAt' => 4, 'Title' => 5, 'Name' => 6, 'FromName' => 7, 'ToName' => 8, 'ToAddress' => 9, 'Subject' => 10, 'Body' => 11, 'GroupCode' => 12, 'FromAddress' => 13, 'FinishDt' => 14, 'Result' => 15, 'SendDate' => 16, 'SendTime' => 17, 'FwTo' => 18, 'ServerIp' => 19, 'ServerName' => 20, 'SendMailStatusId' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'isDeleted' => 1, 'updatedAt' => 2, 'deletedAt' => 3, 'createdAt' => 4, 'title' => 5, 'name' => 6, 'fromName' => 7, 'toName' => 8, 'toAddress' => 9, 'subject' => 10, 'body' => 11, 'groupCode' => 12, 'fromAddress' => 13, 'finishDt' => 14, 'result' => 15, 'sendDate' => 16, 'sendTime' => 17, 'fwTo' => 18, 'serverIp' => 19, 'serverName' => 20, 'sendMailStatusId' => 21, ),
        BasePeer::TYPE_COLNAME => array (SendMailsPeer::ID => 0, SendMailsPeer::IS_DELETED => 1, SendMailsPeer::UPDATED_AT => 2, SendMailsPeer::DELETED_AT => 3, SendMailsPeer::CREATED_AT => 4, SendMailsPeer::TITLE => 5, SendMailsPeer::NAME => 6, SendMailsPeer::FROM_NAME => 7, SendMailsPeer::TO_NAME => 8, SendMailsPeer::TO_ADDRESS => 9, SendMailsPeer::SUBJECT => 10, SendMailsPeer::BODY => 11, SendMailsPeer::GROUP_CODE => 12, SendMailsPeer::FROM_ADDRESS => 13, SendMailsPeer::FINISH_DT => 14, SendMailsPeer::RESULT => 15, SendMailsPeer::SEND_DATE => 16, SendMailsPeer::SEND_TIME => 17, SendMailsPeer::FW_TO => 18, SendMailsPeer::SERVER_IP => 19, SendMailsPeer::SERVER_NAME => 20, SendMailsPeer::SEND_MAIL_STATUS_ID => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'IS_DELETED' => 1, 'UPDATED_AT' => 2, 'DELETED_AT' => 3, 'CREATED_AT' => 4, 'TITLE' => 5, 'NAME' => 6, 'FROM_NAME' => 7, 'TO_NAME' => 8, 'TO_ADDRESS' => 9, 'SUBJECT' => 10, 'BODY' => 11, 'GROUP_CODE' => 12, 'FROM_ADDRESS' => 13, 'FINISH_DT' => 14, 'RESULT' => 15, 'SEND_DATE' => 16, 'SEND_TIME' => 17, 'FW_TO' => 18, 'SERVER_IP' => 19, 'SERVER_NAME' => 20, 'SEND_MAIL_STATUS_ID' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'is_deleted' => 1, 'updated_at' => 2, 'deleted_at' => 3, 'created_at' => 4, 'title' => 5, 'name' => 6, 'from_name' => 7, 'to_name' => 8, 'to_address' => 9, 'subject' => 10, 'body' => 11, 'group_code' => 12, 'from_address' => 13, 'finish_dt' => 14, 'result' => 15, 'send_date' => 16, 'send_time' => 17, 'fw_to' => 18, 'server_ip' => 19, 'server_name' => 20, 'send_mail_status_id' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $toNames = SendMailsPeer::getFieldNames($toType);
        $key = isset(SendMailsPeer::$fieldKeys[$fromType][$name]) ? SendMailsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SendMailsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SendMailsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SendMailsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SendMailsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SendMailsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SendMailsPeer::ID);
            $criteria->addSelectColumn(SendMailsPeer::IS_DELETED);
            $criteria->addSelectColumn(SendMailsPeer::UPDATED_AT);
            $criteria->addSelectColumn(SendMailsPeer::DELETED_AT);
            $criteria->addSelectColumn(SendMailsPeer::CREATED_AT);
            $criteria->addSelectColumn(SendMailsPeer::TITLE);
            $criteria->addSelectColumn(SendMailsPeer::NAME);
            $criteria->addSelectColumn(SendMailsPeer::FROM_NAME);
            $criteria->addSelectColumn(SendMailsPeer::TO_NAME);
            $criteria->addSelectColumn(SendMailsPeer::TO_ADDRESS);
            $criteria->addSelectColumn(SendMailsPeer::SUBJECT);
            $criteria->addSelectColumn(SendMailsPeer::BODY);
            $criteria->addSelectColumn(SendMailsPeer::GROUP_CODE);
            $criteria->addSelectColumn(SendMailsPeer::FROM_ADDRESS);
            $criteria->addSelectColumn(SendMailsPeer::FINISH_DT);
            $criteria->addSelectColumn(SendMailsPeer::RESULT);
            $criteria->addSelectColumn(SendMailsPeer::SEND_DATE);
            $criteria->addSelectColumn(SendMailsPeer::SEND_TIME);
            $criteria->addSelectColumn(SendMailsPeer::FW_TO);
            $criteria->addSelectColumn(SendMailsPeer::SERVER_IP);
            $criteria->addSelectColumn(SendMailsPeer::SERVER_NAME);
            $criteria->addSelectColumn(SendMailsPeer::SEND_MAIL_STATUS_ID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.is_deleted');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.deleted_at');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.from_name');
            $criteria->addSelectColumn($alias . '.to_name');
            $criteria->addSelectColumn($alias . '.to_address');
            $criteria->addSelectColumn($alias . '.subject');
            $criteria->addSelectColumn($alias . '.body');
            $criteria->addSelectColumn($alias . '.group_code');
            $criteria->addSelectColumn($alias . '.from_address');
            $criteria->addSelectColumn($alias . '.finish_dt');
            $criteria->addSelectColumn($alias . '.result');
            $criteria->addSelectColumn($alias . '.send_date');
            $criteria->addSelectColumn($alias . '.send_time');
            $criteria->addSelectColumn($alias . '.fw_to');
            $criteria->addSelectColumn($alias . '.server_ip');
            $criteria->addSelectColumn($alias . '.server_name');
            $criteria->addSelectColumn($alias . '.send_mail_status_id');
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
        $criteria->setPrimaryTableName(SendMailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SendMailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SendMailsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseSendMailsPeer', $criteria, $con);
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
     * @return SendMails
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SendMailsPeer::doSelect($critcopy, $con);
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
        return SendMailsPeer::populateObjects(SendMailsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SendMailsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SendMailsPeer::DATABASE_NAME);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseSendMailsPeer', $criteria, $con);
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
     * @param SendMails $obj A SendMails object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            SendMailsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A SendMails object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SendMails) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SendMails object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SendMailsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return SendMails Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SendMailsPeer::$instances[$key])) {
                return SendMailsPeer::$instances[$key];
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
        foreach (SendMailsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SendMailsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to send_mails
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
        $cls = SendMailsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SendMailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SendMailsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SendMailsPeer::addInstanceToPool($obj, $key);
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
     * @return array (SendMails object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SendMailsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SendMailsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SendMailsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SendMailsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SendMailsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(SendMailsPeer::DATABASE_NAME)->getTable(SendMailsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSendMailsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSendMailsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SendMailsTableMap());
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
        return SendMailsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SendMails or Criteria object.
     *
     * @param      mixed $values Criteria or SendMails object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SendMails object
        }

        if ($criteria->containsKey(SendMailsPeer::ID) && $criteria->keyContainsValue(SendMailsPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SendMailsPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SendMailsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a SendMails or Criteria object.
     *
     * @param      mixed $values Criteria or SendMails object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SendMailsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SendMailsPeer::ID);
            $value = $criteria->remove(SendMailsPeer::ID);
            if ($value) {
                $selectCriteria->add(SendMailsPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SendMailsPeer::TABLE_NAME);
            }

        } else { // $values is SendMails object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SendMailsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the send_mails table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SendMailsPeer::TABLE_NAME, $con, SendMailsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SendMailsPeer::clearInstancePool();
            SendMailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SendMails or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SendMails object or primary key or array of primary keys
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
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SendMailsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SendMails) { // it's a model object
            // invalidate the cache for this single object
            SendMailsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SendMailsPeer::DATABASE_NAME);
            $criteria->add(SendMailsPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SendMailsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SendMailsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SendMailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SendMails object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param SendMails $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SendMailsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SendMailsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SendMailsPeer::DATABASE_NAME, SendMailsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return SendMails
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SendMailsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SendMailsPeer::DATABASE_NAME);
        $criteria->add(SendMailsPeer::ID, $pk);

        $v = SendMailsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return SendMails[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SendMailsPeer::DATABASE_NAME);
            $criteria->add(SendMailsPeer::ID, $pks, Criteria::IN);
            $objs = SendMailsPeer::doSelect($criteria, $con);
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
        return sprintf('BaseSendMailsPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
      }

      throw new LogicException(sprintf('Unrecognized function "%s"', $method));
    }

} // BaseSendMailsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSendMailsPeer::buildTableMap();

