<?php


/**
 * Base class that represents a row from the 'content' table.
 *
 *
 *
 * @package    propel.generator.lib.model.incl2.om
 */
abstract class BaseContent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ContentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ContentPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the is_deleted field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_deleted;

    /**
     * The value for the is_directory field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_directory;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * The value for the deleted_at field.
     * @var        string
     */
    protected $deleted_at;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the origin_name field.
     * @var        string
     */
    protected $origin_name;

    /**
     * The value for the encrypt_name field.
     * @var        string
     */
    protected $encrypt_name;

    /**
     * The value for the size field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $size;

    /**
     * The value for the account_id field.
     * @var        int
     */
    protected $account_id;

    /**
     * The value for the project_id field.
     * @var        int
     */
    protected $project_id;

    /**
     * The value for the content_type field.
     * @var        string
     */
    protected $content_type;

    /**
     * The value for the parent_directory_id field.
     * @var        int
     */
    protected $parent_directory_id;

    /**
     * The value for the content_status_id field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $content_status_id;

    /**
     * @var        Account
     */
    protected $aAccount;

    /**
     * @var        Project
     */
    protected $aProject;

    /**
     * @var        Content
     */
    protected $aContentRelatedByParentDirectoryId;

    /**
     * @var        ContentStatus
     */
    protected $aContentStatus;

    /**
     * @var        PropelObjectCollection|Content[] Collection to store aggregation of Content objects.
     */
    protected $collContentsRelatedById;
    protected $collContentsRelatedByIdPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $contentsRelatedByIdScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_deleted = 0;
        $this->is_directory = 0;
        $this->size = 0;
        $this->content_status_id = 1;
    }

    /**
     * Initializes internal state of BaseContent object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [is_deleted] column value.
     *
     * @return int
     */
    public function getIsDeleted()
    {

        return $this->is_deleted;
    }

    /**
     * Get the [is_directory] column value.
     *
     * @return int
     */
    public function getIsDirectory()
    {

        return $this->is_directory;
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [deleted_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDeletedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->deleted_at === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->deleted_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deleted_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [origin_name] column value.
     *
     * @return string
     */
    public function getOriginName()
    {

        return $this->origin_name;
    }

    /**
     * Get the [encrypt_name] column value.
     *
     * @return string
     */
    public function getEncryptName()
    {

        return $this->encrypt_name;
    }

    /**
     * Get the [size] column value.
     *
     * @return int
     */
    public function getSize()
    {

        return $this->size;
    }

    /**
     * Get the [account_id] column value.
     *
     * @return int
     */
    public function getAccountId()
    {

        return $this->account_id;
    }

    /**
     * Get the [project_id] column value.
     *
     * @return int
     */
    public function getProjectId()
    {

        return $this->project_id;
    }

    /**
     * Get the [content_type] column value.
     *
     * @return string
     */
    public function getContentType()
    {

        return $this->content_type;
    }

    /**
     * Get the [parent_directory_id] column value.
     *
     * @return int
     */
    public function getParentDirectoryId()
    {

        return $this->parent_directory_id;
    }

    /**
     * Get the [content_status_id] column value.
     *
     * @return int
     */
    public function getContentStatusId()
    {

        return $this->content_status_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ContentPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [is_deleted] column.
     *
     * @param  int $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setIsDeleted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_deleted !== $v) {
            $this->is_deleted = $v;
            $this->modifiedColumns[] = ContentPeer::IS_DELETED;
        }


        return $this;
    } // setIsDeleted()

    /**
     * Set the value of [is_directory] column.
     *
     * @param  int $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setIsDirectory($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_directory !== $v) {
            $this->is_directory = $v;
            $this->modifiedColumns[] = ContentPeer::IS_DIRECTORY;
        }


        return $this;
    } // setIsDirectory()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Content The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = ContentPeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Sets the value of [deleted_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Content The current object (for fluent API support)
     */
    public function setDeletedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleted_at !== null || $dt !== null) {
            $currentDateAsString = ($this->deleted_at !== null && $tmpDt = new DateTime($this->deleted_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleted_at = $newDateAsString;
                $this->modifiedColumns[] = ContentPeer::DELETED_AT;
            }
        } // if either are not null


        return $this;
    } // setDeletedAt()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Content The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = ContentPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Set the value of [origin_name] column.
     *
     * @param  string $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setOriginName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->origin_name !== $v) {
            $this->origin_name = $v;
            $this->modifiedColumns[] = ContentPeer::ORIGIN_NAME;
        }


        return $this;
    } // setOriginName()

    /**
     * Set the value of [encrypt_name] column.
     *
     * @param  string $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setEncryptName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->encrypt_name !== $v) {
            $this->encrypt_name = $v;
            $this->modifiedColumns[] = ContentPeer::ENCRYPT_NAME;
        }


        return $this;
    } // setEncryptName()

    /**
     * Set the value of [size] column.
     *
     * @param  int $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setSize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->size !== $v) {
            $this->size = $v;
            $this->modifiedColumns[] = ContentPeer::SIZE;
        }


        return $this;
    } // setSize()

    /**
     * Set the value of [account_id] column.
     *
     * @param  int $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setAccountId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->account_id !== $v) {
            $this->account_id = $v;
            $this->modifiedColumns[] = ContentPeer::ACCOUNT_ID;
        }

        if ($this->aAccount !== null && $this->aAccount->getId() !== $v) {
            $this->aAccount = null;
        }


        return $this;
    } // setAccountId()

    /**
     * Set the value of [project_id] column.
     *
     * @param  int $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setProjectId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->project_id !== $v) {
            $this->project_id = $v;
            $this->modifiedColumns[] = ContentPeer::PROJECT_ID;
        }

        if ($this->aProject !== null && $this->aProject->getId() !== $v) {
            $this->aProject = null;
        }


        return $this;
    } // setProjectId()

    /**
     * Set the value of [content_type] column.
     *
     * @param  string $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setContentType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->content_type !== $v) {
            $this->content_type = $v;
            $this->modifiedColumns[] = ContentPeer::CONTENT_TYPE;
        }


        return $this;
    } // setContentType()

    /**
     * Set the value of [parent_directory_id] column.
     *
     * @param  int $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setParentDirectoryId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->parent_directory_id !== $v) {
            $this->parent_directory_id = $v;
            $this->modifiedColumns[] = ContentPeer::PARENT_DIRECTORY_ID;
        }

        if ($this->aContentRelatedByParentDirectoryId !== null && $this->aContentRelatedByParentDirectoryId->getId() !== $v) {
            $this->aContentRelatedByParentDirectoryId = null;
        }


        return $this;
    } // setParentDirectoryId()

    /**
     * Set the value of [content_status_id] column.
     *
     * @param  int $v new value
     * @return Content The current object (for fluent API support)
     */
    public function setContentStatusId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->content_status_id !== $v) {
            $this->content_status_id = $v;
            $this->modifiedColumns[] = ContentPeer::CONTENT_STATUS_ID;
        }

        if ($this->aContentStatus !== null && $this->aContentStatus->getId() !== $v) {
            $this->aContentStatus = null;
        }


        return $this;
    } // setContentStatusId()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->is_deleted !== 0) {
                return false;
            }

            if ($this->is_directory !== 0) {
                return false;
            }

            if ($this->size !== 0) {
                return false;
            }

            if ($this->content_status_id !== 1) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->is_deleted = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->is_directory = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->updated_at = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->deleted_at = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->created_at = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->origin_name = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->encrypt_name = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->size = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->account_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->project_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->content_type = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->parent_directory_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->content_status_id = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = ContentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Content object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aAccount !== null && $this->account_id !== $this->aAccount->getId()) {
            $this->aAccount = null;
        }
        if ($this->aProject !== null && $this->project_id !== $this->aProject->getId()) {
            $this->aProject = null;
        }
        if ($this->aContentRelatedByParentDirectoryId !== null && $this->parent_directory_id !== $this->aContentRelatedByParentDirectoryId->getId()) {
            $this->aContentRelatedByParentDirectoryId = null;
        }
        if ($this->aContentStatus !== null && $this->content_status_id !== $this->aContentStatus->getId()) {
            $this->aContentStatus = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ContentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ContentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAccount = null;
            $this->aProject = null;
            $this->aContentRelatedByParentDirectoryId = null;
            $this->aContentStatus = null;
            $this->collContentsRelatedById = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ContentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ContentQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseContent:delete:pre') as $callable)
            {
              if (call_user_func($callable, $this, $con))
              {
                $con->commit();
                return;
              }
            }

            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BaseContent:delete:post') as $callable)
                {
                  call_user_func($callable, $this, $con);
                }

                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ContentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseContent:save:pre') as $callable)
            {
              if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
              {
                  $con->commit();
                return $affectedRows;
              }
            }

            // symfony_timestampable behavior
            if ($this->isModified() && !$this->isColumnModified(ContentPeer::UPDATED_AT))
            {
                $this->setUpdatedAt(time());
            }
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // symfony_timestampable behavior
                if (!$this->isColumnModified(ContentPeer::CREATED_AT))
                {
                  $this->setCreatedAt(time());
                }

            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BaseContent:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                ContentPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aAccount !== null) {
                if ($this->aAccount->isModified() || $this->aAccount->isNew()) {
                    $affectedRows += $this->aAccount->save($con);
                }
                $this->setAccount($this->aAccount);
            }

            if ($this->aProject !== null) {
                if ($this->aProject->isModified() || $this->aProject->isNew()) {
                    $affectedRows += $this->aProject->save($con);
                }
                $this->setProject($this->aProject);
            }

            if ($this->aContentRelatedByParentDirectoryId !== null) {
                if ($this->aContentRelatedByParentDirectoryId->isModified() || $this->aContentRelatedByParentDirectoryId->isNew()) {
                    $affectedRows += $this->aContentRelatedByParentDirectoryId->save($con);
                }
                $this->setContentRelatedByParentDirectoryId($this->aContentRelatedByParentDirectoryId);
            }

            if ($this->aContentStatus !== null) {
                if ($this->aContentStatus->isModified() || $this->aContentStatus->isNew()) {
                    $affectedRows += $this->aContentStatus->save($con);
                }
                $this->setContentStatus($this->aContentStatus);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->contentsRelatedByIdScheduledForDeletion !== null) {
                if (!$this->contentsRelatedByIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->contentsRelatedByIdScheduledForDeletion as $contentRelatedById) {
                        // need to save related object because we set the relation to null
                        $contentRelatedById->save($con);
                    }
                    $this->contentsRelatedByIdScheduledForDeletion = null;
                }
            }

            if ($this->collContentsRelatedById !== null) {
                foreach ($this->collContentsRelatedById as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ContentPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ContentPeer::ID . ')');
        }
        if (null === $this->id) {
            try {
                $stmt = $con->query("SELECT nextval('content_id_seq')");
                $row = $stmt->fetch(PDO::FETCH_NUM);
                $this->id = $row[0];
            } catch (Exception $e) {
                throw new PropelException('Unable to get sequence id.', $e);
            }
        }


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ContentPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '"id"';
        }
        if ($this->isColumnModified(ContentPeer::IS_DELETED)) {
            $modifiedColumns[':p' . $index++]  = '"is_deleted"';
        }
        if ($this->isColumnModified(ContentPeer::IS_DIRECTORY)) {
            $modifiedColumns[':p' . $index++]  = '"is_directory"';
        }
        if ($this->isColumnModified(ContentPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"updated_at"';
        }
        if ($this->isColumnModified(ContentPeer::DELETED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"deleted_at"';
        }
        if ($this->isColumnModified(ContentPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"created_at"';
        }
        if ($this->isColumnModified(ContentPeer::ORIGIN_NAME)) {
            $modifiedColumns[':p' . $index++]  = '"origin_name"';
        }
        if ($this->isColumnModified(ContentPeer::ENCRYPT_NAME)) {
            $modifiedColumns[':p' . $index++]  = '"encrypt_name"';
        }
        if ($this->isColumnModified(ContentPeer::SIZE)) {
            $modifiedColumns[':p' . $index++]  = '"size"';
        }
        if ($this->isColumnModified(ContentPeer::ACCOUNT_ID)) {
            $modifiedColumns[':p' . $index++]  = '"account_id"';
        }
        if ($this->isColumnModified(ContentPeer::PROJECT_ID)) {
            $modifiedColumns[':p' . $index++]  = '"project_id"';
        }
        if ($this->isColumnModified(ContentPeer::CONTENT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '"content_type"';
        }
        if ($this->isColumnModified(ContentPeer::PARENT_DIRECTORY_ID)) {
            $modifiedColumns[':p' . $index++]  = '"parent_directory_id"';
        }
        if ($this->isColumnModified(ContentPeer::CONTENT_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '"content_status_id"';
        }

        $sql = sprintf(
            'INSERT INTO "content" (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '"id"':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '"is_deleted"':
                        $stmt->bindValue($identifier, $this->is_deleted, PDO::PARAM_INT);
                        break;
                    case '"is_directory"':
                        $stmt->bindValue($identifier, $this->is_directory, PDO::PARAM_INT);
                        break;
                    case '"updated_at"':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                    case '"deleted_at"':
                        $stmt->bindValue($identifier, $this->deleted_at, PDO::PARAM_STR);
                        break;
                    case '"created_at"':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '"origin_name"':
                        $stmt->bindValue($identifier, $this->origin_name, PDO::PARAM_STR);
                        break;
                    case '"encrypt_name"':
                        $stmt->bindValue($identifier, $this->encrypt_name, PDO::PARAM_STR);
                        break;
                    case '"size"':
                        $stmt->bindValue($identifier, $this->size, PDO::PARAM_INT);
                        break;
                    case '"account_id"':
                        $stmt->bindValue($identifier, $this->account_id, PDO::PARAM_INT);
                        break;
                    case '"project_id"':
                        $stmt->bindValue($identifier, $this->project_id, PDO::PARAM_INT);
                        break;
                    case '"content_type"':
                        $stmt->bindValue($identifier, $this->content_type, PDO::PARAM_STR);
                        break;
                    case '"parent_directory_id"':
                        $stmt->bindValue($identifier, $this->parent_directory_id, PDO::PARAM_INT);
                        break;
                    case '"content_status_id"':
                        $stmt->bindValue($identifier, $this->content_status_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aAccount !== null) {
                if (!$this->aAccount->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAccount->getValidationFailures());
                }
            }

            if ($this->aProject !== null) {
                if (!$this->aProject->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProject->getValidationFailures());
                }
            }

            if ($this->aContentRelatedByParentDirectoryId !== null) {
                if (!$this->aContentRelatedByParentDirectoryId->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContentRelatedByParentDirectoryId->getValidationFailures());
                }
            }

            if ($this->aContentStatus !== null) {
                if (!$this->aContentStatus->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContentStatus->getValidationFailures());
                }
            }


            if (($retval = ContentPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collContentsRelatedById !== null) {
                    foreach ($this->collContentsRelatedById as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ContentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getIsDeleted();
                break;
            case 2:
                return $this->getIsDirectory();
                break;
            case 3:
                return $this->getUpdatedAt();
                break;
            case 4:
                return $this->getDeletedAt();
                break;
            case 5:
                return $this->getCreatedAt();
                break;
            case 6:
                return $this->getOriginName();
                break;
            case 7:
                return $this->getEncryptName();
                break;
            case 8:
                return $this->getSize();
                break;
            case 9:
                return $this->getAccountId();
                break;
            case 10:
                return $this->getProjectId();
                break;
            case 11:
                return $this->getContentType();
                break;
            case 12:
                return $this->getParentDirectoryId();
                break;
            case 13:
                return $this->getContentStatusId();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Content'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Content'][$this->getPrimaryKey()] = true;
        $keys = ContentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIsDeleted(),
            $keys[2] => $this->getIsDirectory(),
            $keys[3] => $this->getUpdatedAt(),
            $keys[4] => $this->getDeletedAt(),
            $keys[5] => $this->getCreatedAt(),
            $keys[6] => $this->getOriginName(),
            $keys[7] => $this->getEncryptName(),
            $keys[8] => $this->getSize(),
            $keys[9] => $this->getAccountId(),
            $keys[10] => $this->getProjectId(),
            $keys[11] => $this->getContentType(),
            $keys[12] => $this->getParentDirectoryId(),
            $keys[13] => $this->getContentStatusId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAccount) {
                $result['Account'] = $this->aAccount->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProject) {
                $result['Project'] = $this->aProject->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContentRelatedByParentDirectoryId) {
                $result['ContentRelatedByParentDirectoryId'] = $this->aContentRelatedByParentDirectoryId->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContentStatus) {
                $result['ContentStatus'] = $this->aContentStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collContentsRelatedById) {
                $result['ContentsRelatedById'] = $this->collContentsRelatedById->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ContentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setIsDeleted($value);
                break;
            case 2:
                $this->setIsDirectory($value);
                break;
            case 3:
                $this->setUpdatedAt($value);
                break;
            case 4:
                $this->setDeletedAt($value);
                break;
            case 5:
                $this->setCreatedAt($value);
                break;
            case 6:
                $this->setOriginName($value);
                break;
            case 7:
                $this->setEncryptName($value);
                break;
            case 8:
                $this->setSize($value);
                break;
            case 9:
                $this->setAccountId($value);
                break;
            case 10:
                $this->setProjectId($value);
                break;
            case 11:
                $this->setContentType($value);
                break;
            case 12:
                $this->setParentDirectoryId($value);
                break;
            case 13:
                $this->setContentStatusId($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ContentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIsDeleted($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIsDirectory($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUpdatedAt($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDeletedAt($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOriginName($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEncryptName($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSize($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAccountId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProjectId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setContentType($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setParentDirectoryId($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setContentStatusId($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ContentPeer::DATABASE_NAME);

        if ($this->isColumnModified(ContentPeer::ID)) $criteria->add(ContentPeer::ID, $this->id);
        if ($this->isColumnModified(ContentPeer::IS_DELETED)) $criteria->add(ContentPeer::IS_DELETED, $this->is_deleted);
        if ($this->isColumnModified(ContentPeer::IS_DIRECTORY)) $criteria->add(ContentPeer::IS_DIRECTORY, $this->is_directory);
        if ($this->isColumnModified(ContentPeer::UPDATED_AT)) $criteria->add(ContentPeer::UPDATED_AT, $this->updated_at);
        if ($this->isColumnModified(ContentPeer::DELETED_AT)) $criteria->add(ContentPeer::DELETED_AT, $this->deleted_at);
        if ($this->isColumnModified(ContentPeer::CREATED_AT)) $criteria->add(ContentPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(ContentPeer::ORIGIN_NAME)) $criteria->add(ContentPeer::ORIGIN_NAME, $this->origin_name);
        if ($this->isColumnModified(ContentPeer::ENCRYPT_NAME)) $criteria->add(ContentPeer::ENCRYPT_NAME, $this->encrypt_name);
        if ($this->isColumnModified(ContentPeer::SIZE)) $criteria->add(ContentPeer::SIZE, $this->size);
        if ($this->isColumnModified(ContentPeer::ACCOUNT_ID)) $criteria->add(ContentPeer::ACCOUNT_ID, $this->account_id);
        if ($this->isColumnModified(ContentPeer::PROJECT_ID)) $criteria->add(ContentPeer::PROJECT_ID, $this->project_id);
        if ($this->isColumnModified(ContentPeer::CONTENT_TYPE)) $criteria->add(ContentPeer::CONTENT_TYPE, $this->content_type);
        if ($this->isColumnModified(ContentPeer::PARENT_DIRECTORY_ID)) $criteria->add(ContentPeer::PARENT_DIRECTORY_ID, $this->parent_directory_id);
        if ($this->isColumnModified(ContentPeer::CONTENT_STATUS_ID)) $criteria->add(ContentPeer::CONTENT_STATUS_ID, $this->content_status_id);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ContentPeer::DATABASE_NAME);
        $criteria->add(ContentPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Content (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIsDeleted($this->getIsDeleted());
        $copyObj->setIsDirectory($this->getIsDirectory());
        $copyObj->setUpdatedAt($this->getUpdatedAt());
        $copyObj->setDeletedAt($this->getDeletedAt());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setOriginName($this->getOriginName());
        $copyObj->setEncryptName($this->getEncryptName());
        $copyObj->setSize($this->getSize());
        $copyObj->setAccountId($this->getAccountId());
        $copyObj->setProjectId($this->getProjectId());
        $copyObj->setContentType($this->getContentType());
        $copyObj->setParentDirectoryId($this->getParentDirectoryId());
        $copyObj->setContentStatusId($this->getContentStatusId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getContentsRelatedById() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addContentRelatedById($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Content Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ContentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ContentPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Account object.
     *
     * @param                  Account $v
     * @return Content The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAccount(Account $v = null)
    {
        if ($v === null) {
            $this->setAccountId(NULL);
        } else {
            $this->setAccountId($v->getId());
        }

        $this->aAccount = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Account object, it will not be re-added.
        if ($v !== null) {
            $v->addContent($this);
        }


        return $this;
    }


    /**
     * Get the associated Account object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Account The associated Account object.
     * @throws PropelException
     */
    public function getAccount(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAccount === null && ($this->account_id !== null) && $doQuery) {
            $this->aAccount = AccountQuery::create()->findPk($this->account_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAccount->addContents($this);
             */
        }

        return $this->aAccount;
    }

    /**
     * Declares an association between this object and a Project object.
     *
     * @param                  Project $v
     * @return Content The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProject(Project $v = null)
    {
        if ($v === null) {
            $this->setProjectId(NULL);
        } else {
            $this->setProjectId($v->getId());
        }

        $this->aProject = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Project object, it will not be re-added.
        if ($v !== null) {
            $v->addContent($this);
        }


        return $this;
    }


    /**
     * Get the associated Project object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Project The associated Project object.
     * @throws PropelException
     */
    public function getProject(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProject === null && ($this->project_id !== null) && $doQuery) {
            $this->aProject = ProjectQuery::create()->findPk($this->project_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProject->addContents($this);
             */
        }

        return $this->aProject;
    }

    /**
     * Declares an association between this object and a Content object.
     *
     * @param                  Content $v
     * @return Content The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContentRelatedByParentDirectoryId(Content $v = null)
    {
        if ($v === null) {
            $this->setParentDirectoryId(NULL);
        } else {
            $this->setParentDirectoryId($v->getId());
        }

        $this->aContentRelatedByParentDirectoryId = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Content object, it will not be re-added.
        if ($v !== null) {
            $v->addContentRelatedById($this);
        }


        return $this;
    }


    /**
     * Get the associated Content object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Content The associated Content object.
     * @throws PropelException
     */
    public function getContentRelatedByParentDirectoryId(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aContentRelatedByParentDirectoryId === null && ($this->parent_directory_id !== null) && $doQuery) {
            $this->aContentRelatedByParentDirectoryId = ContentQuery::create()->findPk($this->parent_directory_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContentRelatedByParentDirectoryId->addContentsRelatedById($this);
             */
        }

        return $this->aContentRelatedByParentDirectoryId;
    }

    /**
     * Declares an association between this object and a ContentStatus object.
     *
     * @param                  ContentStatus $v
     * @return Content The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContentStatus(ContentStatus $v = null)
    {
        if ($v === null) {
            $this->setContentStatusId(1);
        } else {
            $this->setContentStatusId($v->getId());
        }

        $this->aContentStatus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ContentStatus object, it will not be re-added.
        if ($v !== null) {
            $v->addContent($this);
        }


        return $this;
    }


    /**
     * Get the associated ContentStatus object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ContentStatus The associated ContentStatus object.
     * @throws PropelException
     */
    public function getContentStatus(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aContentStatus === null && ($this->content_status_id !== null) && $doQuery) {
            $this->aContentStatus = ContentStatusQuery::create()->findPk($this->content_status_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContentStatus->addContents($this);
             */
        }

        return $this->aContentStatus;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('ContentRelatedById' == $relationName) {
            $this->initContentsRelatedById();
        }
    }

    /**
     * Clears out the collContentsRelatedById collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Content The current object (for fluent API support)
     * @see        addContentsRelatedById()
     */
    public function clearContentsRelatedById()
    {
        $this->collContentsRelatedById = null; // important to set this to null since that means it is uninitialized
        $this->collContentsRelatedByIdPartial = null;

        return $this;
    }

    /**
     * reset is the collContentsRelatedById collection loaded partially
     *
     * @return void
     */
    public function resetPartialContentsRelatedById($v = true)
    {
        $this->collContentsRelatedByIdPartial = $v;
    }

    /**
     * Initializes the collContentsRelatedById collection.
     *
     * By default this just sets the collContentsRelatedById collection to an empty array (like clearcollContentsRelatedById());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initContentsRelatedById($overrideExisting = true)
    {
        if (null !== $this->collContentsRelatedById && !$overrideExisting) {
            return;
        }
        $this->collContentsRelatedById = new PropelObjectCollection();
        $this->collContentsRelatedById->setModel('Content');
    }

    /**
     * Gets an array of Content objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Content is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Content[] List of Content objects
     * @throws PropelException
     */
    public function getContentsRelatedById($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collContentsRelatedByIdPartial && !$this->isNew();
        if (null === $this->collContentsRelatedById || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collContentsRelatedById) {
                // return empty collection
                $this->initContentsRelatedById();
            } else {
                $collContentsRelatedById = ContentQuery::create(null, $criteria)
                    ->filterByContentRelatedByParentDirectoryId($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collContentsRelatedByIdPartial && count($collContentsRelatedById)) {
                      $this->initContentsRelatedById(false);

                      foreach ($collContentsRelatedById as $obj) {
                        if (false == $this->collContentsRelatedById->contains($obj)) {
                          $this->collContentsRelatedById->append($obj);
                        }
                      }

                      $this->collContentsRelatedByIdPartial = true;
                    }

                    $collContentsRelatedById->getInternalIterator()->rewind();

                    return $collContentsRelatedById;
                }

                if ($partial && $this->collContentsRelatedById) {
                    foreach ($this->collContentsRelatedById as $obj) {
                        if ($obj->isNew()) {
                            $collContentsRelatedById[] = $obj;
                        }
                    }
                }

                $this->collContentsRelatedById = $collContentsRelatedById;
                $this->collContentsRelatedByIdPartial = false;
            }
        }

        return $this->collContentsRelatedById;
    }

    /**
     * Sets a collection of ContentRelatedById objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $contentsRelatedById A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Content The current object (for fluent API support)
     */
    public function setContentsRelatedById(PropelCollection $contentsRelatedById, PropelPDO $con = null)
    {
        $contentsRelatedByIdToDelete = $this->getContentsRelatedById(new Criteria(), $con)->diff($contentsRelatedById);


        $this->contentsRelatedByIdScheduledForDeletion = $contentsRelatedByIdToDelete;

        foreach ($contentsRelatedByIdToDelete as $contentRelatedByIdRemoved) {
            $contentRelatedByIdRemoved->setContentRelatedByParentDirectoryId(null);
        }

        $this->collContentsRelatedById = null;
        foreach ($contentsRelatedById as $contentRelatedById) {
            $this->addContentRelatedById($contentRelatedById);
        }

        $this->collContentsRelatedById = $contentsRelatedById;
        $this->collContentsRelatedByIdPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Content objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Content objects.
     * @throws PropelException
     */
    public function countContentsRelatedById(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collContentsRelatedByIdPartial && !$this->isNew();
        if (null === $this->collContentsRelatedById || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collContentsRelatedById) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getContentsRelatedById());
            }
            $query = ContentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContentRelatedByParentDirectoryId($this)
                ->count($con);
        }

        return count($this->collContentsRelatedById);
    }

    /**
     * Method called to associate a Content object to this object
     * through the Content foreign key attribute.
     *
     * @param    Content $l Content
     * @return Content The current object (for fluent API support)
     */
    public function addContentRelatedById(Content $l)
    {
        if ($this->collContentsRelatedById === null) {
            $this->initContentsRelatedById();
            $this->collContentsRelatedByIdPartial = true;
        }

        if (!in_array($l, $this->collContentsRelatedById->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddContentRelatedById($l);

            if ($this->contentsRelatedByIdScheduledForDeletion and $this->contentsRelatedByIdScheduledForDeletion->contains($l)) {
                $this->contentsRelatedByIdScheduledForDeletion->remove($this->contentsRelatedByIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ContentRelatedById $contentRelatedById The contentRelatedById object to add.
     */
    protected function doAddContentRelatedById($contentRelatedById)
    {
        $this->collContentsRelatedById[]= $contentRelatedById;
        $contentRelatedById->setContentRelatedByParentDirectoryId($this);
    }

    /**
     * @param	ContentRelatedById $contentRelatedById The contentRelatedById object to remove.
     * @return Content The current object (for fluent API support)
     */
    public function removeContentRelatedById($contentRelatedById)
    {
        if ($this->getContentsRelatedById()->contains($contentRelatedById)) {
            $this->collContentsRelatedById->remove($this->collContentsRelatedById->search($contentRelatedById));
            if (null === $this->contentsRelatedByIdScheduledForDeletion) {
                $this->contentsRelatedByIdScheduledForDeletion = clone $this->collContentsRelatedById;
                $this->contentsRelatedByIdScheduledForDeletion->clear();
            }
            $this->contentsRelatedByIdScheduledForDeletion[]= $contentRelatedById;
            $contentRelatedById->setContentRelatedByParentDirectoryId(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Content is new, it will return
     * an empty collection; or if this Content has previously
     * been saved, it will retrieve related ContentsRelatedById from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Content.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Content[] List of Content objects
     */
    public function getContentsRelatedByIdJoinAccount($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ContentQuery::create(null, $criteria);
        $query->joinWith('Account', $join_behavior);

        return $this->getContentsRelatedById($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Content is new, it will return
     * an empty collection; or if this Content has previously
     * been saved, it will retrieve related ContentsRelatedById from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Content.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Content[] List of Content objects
     */
    public function getContentsRelatedByIdJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ContentQuery::create(null, $criteria);
        $query->joinWith('Project', $join_behavior);

        return $this->getContentsRelatedById($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Content is new, it will return
     * an empty collection; or if this Content has previously
     * been saved, it will retrieve related ContentsRelatedById from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Content.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Content[] List of Content objects
     */
    public function getContentsRelatedByIdJoinContentStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ContentQuery::create(null, $criteria);
        $query->joinWith('ContentStatus', $join_behavior);

        return $this->getContentsRelatedById($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->is_deleted = null;
        $this->is_directory = null;
        $this->updated_at = null;
        $this->deleted_at = null;
        $this->created_at = null;
        $this->origin_name = null;
        $this->encrypt_name = null;
        $this->size = null;
        $this->account_id = null;
        $this->project_id = null;
        $this->content_type = null;
        $this->parent_directory_id = null;
        $this->content_status_id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collContentsRelatedById) {
                foreach ($this->collContentsRelatedById as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAccount instanceof Persistent) {
              $this->aAccount->clearAllReferences($deep);
            }
            if ($this->aProject instanceof Persistent) {
              $this->aProject->clearAllReferences($deep);
            }
            if ($this->aContentRelatedByParentDirectoryId instanceof Persistent) {
              $this->aContentRelatedByParentDirectoryId->clearAllReferences($deep);
            }
            if ($this->aContentStatus instanceof Persistent) {
              $this->aContentStatus->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collContentsRelatedById instanceof PropelCollection) {
            $this->collContentsRelatedById->clearIterator();
        }
        $this->collContentsRelatedById = null;
        $this->aAccount = null;
        $this->aProject = null;
        $this->aContentRelatedByParentDirectoryId = null;
        $this->aContentStatus = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ContentPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {

        // symfony_behaviors behavior
        if ($callable = sfMixer::getCallable('BaseContent:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
