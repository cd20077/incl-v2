<?php


/**
 * Base class that represents a row from the 'account' table.
 *
 *
 *
 * @package    propel.generator.lib.model.incl2.om
 */
abstract class BaseAccount extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AccountPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AccountPeer
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
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the mail field.
     * @var        string
     */
    protected $mail;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the accountimg field.
     * @var        string
     */
    protected $accountimg;

    /**
     * The value for the backimg field.
     * @var        string
     */
    protected $backimg;

    /**
     * The value for the maxcapa field.
     * Note: this column has a database default value of: 209715200
     * @var        int
     */
    protected $maxcapa;

    /**
     * The value for the precapa field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $precapa;

    /**
     * The value for the account_status_id field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $account_status_id;

    /**
     * The value for the provisional_key field.
     * @var        string
     */
    protected $provisional_key;

    /**
     * The value for the randid field.
     * @var        string
     */
    protected $randid;

    /**
     * The value for the language_id field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $language_id;

    /**
     * @var        AccountStatus
     */
    protected $aAccountStatus;

    /**
     * @var        Language
     */
    protected $aLanguage;

    /**
     * @var        PropelObjectCollection|AccountLog[] Collection to store aggregation of AccountLog objects.
     */
    protected $collAccountLogs;
    protected $collAccountLogsPartial;

    /**
     * @var        PropelObjectCollection|Content[] Collection to store aggregation of Content objects.
     */
    protected $collContents;
    protected $collContentsPartial;

    /**
     * @var        PropelObjectCollection|Project[] Collection to store aggregation of Project objects.
     */
    protected $collProjects;
    protected $collProjectsPartial;

    /**
     * @var        PropelObjectCollection|ProjectMember[] Collection to store aggregation of ProjectMember objects.
     */
    protected $collProjectMembers;
    protected $collProjectMembersPartial;

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
    protected $accountLogsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $contentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $projectsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $projectMembersScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_deleted = 0;
        $this->maxcapa = 209715200;
        $this->precapa = 0;
        $this->account_status_id = 1;
        $this->language_id = 1;
    }

    /**
     * Initializes internal state of BaseAccount object.
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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [mail] column value.
     *
     * @return string
     */
    public function getMail()
    {

        return $this->mail;
    }

    /**
     * Get the [password] column value.
     *
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Get the [accountimg] column value.
     *
     * @return string
     */
    public function getAccountimg()
    {

        return $this->accountimg;
    }

    /**
     * Get the [backimg] column value.
     *
     * @return string
     */
    public function getBackimg()
    {

        return $this->backimg;
    }

    /**
     * Get the [maxcapa] column value.
     *
     * @return int
     */
    public function getMaxcapa()
    {

        return $this->maxcapa;
    }

    /**
     * Get the [precapa] column value.
     *
     * @return int
     */
    public function getPrecapa()
    {

        return $this->precapa;
    }

    /**
     * Get the [account_status_id] column value.
     *
     * @return int
     */
    public function getAccountStatusId()
    {

        return $this->account_status_id;
    }

    /**
     * Get the [provisional_key] column value.
     *
     * @return string
     */
    public function getProvisionalKey()
    {

        return $this->provisional_key;
    }

    /**
     * Get the [randid] column value.
     *
     * @return string
     */
    public function getRandid()
    {

        return $this->randid;
    }

    /**
     * Get the [language_id] column value.
     *
     * @return int
     */
    public function getLanguageId()
    {

        return $this->language_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = AccountPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [is_deleted] column.
     *
     * @param  int $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setIsDeleted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_deleted !== $v) {
            $this->is_deleted = $v;
            $this->modifiedColumns[] = AccountPeer::IS_DELETED;
        }


        return $this;
    } // setIsDeleted()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Account The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = AccountPeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Sets the value of [deleted_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Account The current object (for fluent API support)
     */
    public function setDeletedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleted_at !== null || $dt !== null) {
            $currentDateAsString = ($this->deleted_at !== null && $tmpDt = new DateTime($this->deleted_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleted_at = $newDateAsString;
                $this->modifiedColumns[] = AccountPeer::DELETED_AT;
            }
        } // if either are not null


        return $this;
    } // setDeletedAt()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Account The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = AccountPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = AccountPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [mail] column.
     *
     * @param  string $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = AccountPeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [password] column.
     *
     * @param  string $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = AccountPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Set the value of [accountimg] column.
     *
     * @param  string $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setAccountimg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->accountimg !== $v) {
            $this->accountimg = $v;
            $this->modifiedColumns[] = AccountPeer::ACCOUNTIMG;
        }


        return $this;
    } // setAccountimg()

    /**
     * Set the value of [backimg] column.
     *
     * @param  string $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setBackimg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->backimg !== $v) {
            $this->backimg = $v;
            $this->modifiedColumns[] = AccountPeer::BACKIMG;
        }


        return $this;
    } // setBackimg()

    /**
     * Set the value of [maxcapa] column.
     *
     * @param  int $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setMaxcapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxcapa !== $v) {
            $this->maxcapa = $v;
            $this->modifiedColumns[] = AccountPeer::MAXCAPA;
        }


        return $this;
    } // setMaxcapa()

    /**
     * Set the value of [precapa] column.
     *
     * @param  int $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setPrecapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->precapa !== $v) {
            $this->precapa = $v;
            $this->modifiedColumns[] = AccountPeer::PRECAPA;
        }


        return $this;
    } // setPrecapa()

    /**
     * Set the value of [account_status_id] column.
     *
     * @param  int $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setAccountStatusId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->account_status_id !== $v) {
            $this->account_status_id = $v;
            $this->modifiedColumns[] = AccountPeer::ACCOUNT_STATUS_ID;
        }

        if ($this->aAccountStatus !== null && $this->aAccountStatus->getId() !== $v) {
            $this->aAccountStatus = null;
        }


        return $this;
    } // setAccountStatusId()

    /**
     * Set the value of [provisional_key] column.
     *
     * @param  string $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setProvisionalKey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->provisional_key !== $v) {
            $this->provisional_key = $v;
            $this->modifiedColumns[] = AccountPeer::PROVISIONAL_KEY;
        }


        return $this;
    } // setProvisionalKey()

    /**
     * Set the value of [randid] column.
     *
     * @param  string $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setRandid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->randid !== $v) {
            $this->randid = $v;
            $this->modifiedColumns[] = AccountPeer::RANDID;
        }


        return $this;
    } // setRandid()

    /**
     * Set the value of [language_id] column.
     *
     * @param  int $v new value
     * @return Account The current object (for fluent API support)
     */
    public function setLanguageId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->language_id !== $v) {
            $this->language_id = $v;
            $this->modifiedColumns[] = AccountPeer::LANGUAGE_ID;
        }

        if ($this->aLanguage !== null && $this->aLanguage->getId() !== $v) {
            $this->aLanguage = null;
        }


        return $this;
    } // setLanguageId()

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

            if ($this->maxcapa !== 209715200) {
                return false;
            }

            if ($this->precapa !== 0) {
                return false;
            }

            if ($this->account_status_id !== 1) {
                return false;
            }

            if ($this->language_id !== 1) {
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
            $this->updated_at = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->deleted_at = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->created_at = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->name = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->mail = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->password = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->accountimg = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->backimg = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->maxcapa = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->precapa = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->account_status_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->provisional_key = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->randid = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->language_id = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = AccountPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Account object", $e);
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

        if ($this->aAccountStatus !== null && $this->account_status_id !== $this->aAccountStatus->getId()) {
            $this->aAccountStatus = null;
        }
        if ($this->aLanguage !== null && $this->language_id !== $this->aLanguage->getId()) {
            $this->aLanguage = null;
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
            $con = Propel::getConnection(AccountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AccountPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAccountStatus = null;
            $this->aLanguage = null;
            $this->collAccountLogs = null;

            $this->collContents = null;

            $this->collProjects = null;

            $this->collProjectMembers = null;

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
            $con = Propel::getConnection(AccountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AccountQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseAccount:delete:pre') as $callable)
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
                foreach (sfMixer::getCallables('BaseAccount:delete:post') as $callable)
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
            $con = Propel::getConnection(AccountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseAccount:save:pre') as $callable)
            {
              if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
              {
                  $con->commit();
                return $affectedRows;
              }
            }

            // symfony_timestampable behavior
            if ($this->isModified() && !$this->isColumnModified(AccountPeer::UPDATED_AT))
            {
                $this->setUpdatedAt(time());
            }
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // symfony_timestampable behavior
                if (!$this->isColumnModified(AccountPeer::CREATED_AT))
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
                foreach (sfMixer::getCallables('BaseAccount:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                AccountPeer::addInstanceToPool($this);
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

            if ($this->aAccountStatus !== null) {
                if ($this->aAccountStatus->isModified() || $this->aAccountStatus->isNew()) {
                    $affectedRows += $this->aAccountStatus->save($con);
                }
                $this->setAccountStatus($this->aAccountStatus);
            }

            if ($this->aLanguage !== null) {
                if ($this->aLanguage->isModified() || $this->aLanguage->isNew()) {
                    $affectedRows += $this->aLanguage->save($con);
                }
                $this->setLanguage($this->aLanguage);
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

            if ($this->accountLogsScheduledForDeletion !== null) {
                if (!$this->accountLogsScheduledForDeletion->isEmpty()) {
                    foreach ($this->accountLogsScheduledForDeletion as $accountLog) {
                        // need to save related object because we set the relation to null
                        $accountLog->save($con);
                    }
                    $this->accountLogsScheduledForDeletion = null;
                }
            }

            if ($this->collAccountLogs !== null) {
                foreach ($this->collAccountLogs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->contentsScheduledForDeletion !== null) {
                if (!$this->contentsScheduledForDeletion->isEmpty()) {
                    foreach ($this->contentsScheduledForDeletion as $content) {
                        // need to save related object because we set the relation to null
                        $content->save($con);
                    }
                    $this->contentsScheduledForDeletion = null;
                }
            }

            if ($this->collContents !== null) {
                foreach ($this->collContents as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->projectsScheduledForDeletion !== null) {
                if (!$this->projectsScheduledForDeletion->isEmpty()) {
                    foreach ($this->projectsScheduledForDeletion as $project) {
                        // need to save related object because we set the relation to null
                        $project->save($con);
                    }
                    $this->projectsScheduledForDeletion = null;
                }
            }

            if ($this->collProjects !== null) {
                foreach ($this->collProjects as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->projectMembersScheduledForDeletion !== null) {
                if (!$this->projectMembersScheduledForDeletion->isEmpty()) {
                    foreach ($this->projectMembersScheduledForDeletion as $projectMember) {
                        // need to save related object because we set the relation to null
                        $projectMember->save($con);
                    }
                    $this->projectMembersScheduledForDeletion = null;
                }
            }

            if ($this->collProjectMembers !== null) {
                foreach ($this->collProjectMembers as $referrerFK) {
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

        $this->modifiedColumns[] = AccountPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AccountPeer::ID . ')');
        }
        if (null === $this->id) {
            try {
                $stmt = $con->query("SELECT nextval('account_id_seq')");
                $row = $stmt->fetch(PDO::FETCH_NUM);
                $this->id = $row[0];
            } catch (Exception $e) {
                throw new PropelException('Unable to get sequence id.', $e);
            }
        }


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AccountPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '"id"';
        }
        if ($this->isColumnModified(AccountPeer::IS_DELETED)) {
            $modifiedColumns[':p' . $index++]  = '"is_deleted"';
        }
        if ($this->isColumnModified(AccountPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"updated_at"';
        }
        if ($this->isColumnModified(AccountPeer::DELETED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"deleted_at"';
        }
        if ($this->isColumnModified(AccountPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"created_at"';
        }
        if ($this->isColumnModified(AccountPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '"name"';
        }
        if ($this->isColumnModified(AccountPeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '"mail"';
        }
        if ($this->isColumnModified(AccountPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '"password"';
        }
        if ($this->isColumnModified(AccountPeer::ACCOUNTIMG)) {
            $modifiedColumns[':p' . $index++]  = '"accountimg"';
        }
        if ($this->isColumnModified(AccountPeer::BACKIMG)) {
            $modifiedColumns[':p' . $index++]  = '"backimg"';
        }
        if ($this->isColumnModified(AccountPeer::MAXCAPA)) {
            $modifiedColumns[':p' . $index++]  = '"maxcapa"';
        }
        if ($this->isColumnModified(AccountPeer::PRECAPA)) {
            $modifiedColumns[':p' . $index++]  = '"precapa"';
        }
        if ($this->isColumnModified(AccountPeer::ACCOUNT_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '"account_status_id"';
        }
        if ($this->isColumnModified(AccountPeer::PROVISIONAL_KEY)) {
            $modifiedColumns[':p' . $index++]  = '"provisional_key"';
        }
        if ($this->isColumnModified(AccountPeer::RANDID)) {
            $modifiedColumns[':p' . $index++]  = '"randid"';
        }
        if ($this->isColumnModified(AccountPeer::LANGUAGE_ID)) {
            $modifiedColumns[':p' . $index++]  = '"language_id"';
        }

        $sql = sprintf(
            'INSERT INTO "account" (%s) VALUES (%s)',
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
                    case '"updated_at"':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                    case '"deleted_at"':
                        $stmt->bindValue($identifier, $this->deleted_at, PDO::PARAM_STR);
                        break;
                    case '"created_at"':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '"name"':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '"mail"':
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '"password"':
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '"accountimg"':
                        $stmt->bindValue($identifier, $this->accountimg, PDO::PARAM_STR);
                        break;
                    case '"backimg"':
                        $stmt->bindValue($identifier, $this->backimg, PDO::PARAM_STR);
                        break;
                    case '"maxcapa"':
                        $stmt->bindValue($identifier, $this->maxcapa, PDO::PARAM_INT);
                        break;
                    case '"precapa"':
                        $stmt->bindValue($identifier, $this->precapa, PDO::PARAM_INT);
                        break;
                    case '"account_status_id"':
                        $stmt->bindValue($identifier, $this->account_status_id, PDO::PARAM_INT);
                        break;
                    case '"provisional_key"':
                        $stmt->bindValue($identifier, $this->provisional_key, PDO::PARAM_STR);
                        break;
                    case '"randid"':
                        $stmt->bindValue($identifier, $this->randid, PDO::PARAM_STR);
                        break;
                    case '"language_id"':
                        $stmt->bindValue($identifier, $this->language_id, PDO::PARAM_INT);
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

            if ($this->aAccountStatus !== null) {
                if (!$this->aAccountStatus->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAccountStatus->getValidationFailures());
                }
            }

            if ($this->aLanguage !== null) {
                if (!$this->aLanguage->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLanguage->getValidationFailures());
                }
            }


            if (($retval = AccountPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAccountLogs !== null) {
                    foreach ($this->collAccountLogs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collContents !== null) {
                    foreach ($this->collContents as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProjects !== null) {
                    foreach ($this->collProjects as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProjectMembers !== null) {
                    foreach ($this->collProjectMembers as $referrerFK) {
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
        $pos = AccountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUpdatedAt();
                break;
            case 3:
                return $this->getDeletedAt();
                break;
            case 4:
                return $this->getCreatedAt();
                break;
            case 5:
                return $this->getName();
                break;
            case 6:
                return $this->getMail();
                break;
            case 7:
                return $this->getPassword();
                break;
            case 8:
                return $this->getAccountimg();
                break;
            case 9:
                return $this->getBackimg();
                break;
            case 10:
                return $this->getMaxcapa();
                break;
            case 11:
                return $this->getPrecapa();
                break;
            case 12:
                return $this->getAccountStatusId();
                break;
            case 13:
                return $this->getProvisionalKey();
                break;
            case 14:
                return $this->getRandid();
                break;
            case 15:
                return $this->getLanguageId();
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
        if (isset($alreadyDumpedObjects['Account'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Account'][$this->getPrimaryKey()] = true;
        $keys = AccountPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIsDeleted(),
            $keys[2] => $this->getUpdatedAt(),
            $keys[3] => $this->getDeletedAt(),
            $keys[4] => $this->getCreatedAt(),
            $keys[5] => $this->getName(),
            $keys[6] => $this->getMail(),
            $keys[7] => $this->getPassword(),
            $keys[8] => $this->getAccountimg(),
            $keys[9] => $this->getBackimg(),
            $keys[10] => $this->getMaxcapa(),
            $keys[11] => $this->getPrecapa(),
            $keys[12] => $this->getAccountStatusId(),
            $keys[13] => $this->getProvisionalKey(),
            $keys[14] => $this->getRandid(),
            $keys[15] => $this->getLanguageId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAccountStatus) {
                $result['AccountStatus'] = $this->aAccountStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLanguage) {
                $result['Language'] = $this->aLanguage->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAccountLogs) {
                $result['AccountLogs'] = $this->collAccountLogs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collContents) {
                $result['Contents'] = $this->collContents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProjects) {
                $result['Projects'] = $this->collProjects->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProjectMembers) {
                $result['ProjectMembers'] = $this->collProjectMembers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AccountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUpdatedAt($value);
                break;
            case 3:
                $this->setDeletedAt($value);
                break;
            case 4:
                $this->setCreatedAt($value);
                break;
            case 5:
                $this->setName($value);
                break;
            case 6:
                $this->setMail($value);
                break;
            case 7:
                $this->setPassword($value);
                break;
            case 8:
                $this->setAccountimg($value);
                break;
            case 9:
                $this->setBackimg($value);
                break;
            case 10:
                $this->setMaxcapa($value);
                break;
            case 11:
                $this->setPrecapa($value);
                break;
            case 12:
                $this->setAccountStatusId($value);
                break;
            case 13:
                $this->setProvisionalKey($value);
                break;
            case 14:
                $this->setRandid($value);
                break;
            case 15:
                $this->setLanguageId($value);
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
        $keys = AccountPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIsDeleted($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUpdatedAt($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDeletedAt($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setName($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMail($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPassword($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAccountimg($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setBackimg($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMaxcapa($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPrecapa($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAccountStatusId($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setProvisionalKey($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRandid($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLanguageId($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AccountPeer::DATABASE_NAME);

        if ($this->isColumnModified(AccountPeer::ID)) $criteria->add(AccountPeer::ID, $this->id);
        if ($this->isColumnModified(AccountPeer::IS_DELETED)) $criteria->add(AccountPeer::IS_DELETED, $this->is_deleted);
        if ($this->isColumnModified(AccountPeer::UPDATED_AT)) $criteria->add(AccountPeer::UPDATED_AT, $this->updated_at);
        if ($this->isColumnModified(AccountPeer::DELETED_AT)) $criteria->add(AccountPeer::DELETED_AT, $this->deleted_at);
        if ($this->isColumnModified(AccountPeer::CREATED_AT)) $criteria->add(AccountPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(AccountPeer::NAME)) $criteria->add(AccountPeer::NAME, $this->name);
        if ($this->isColumnModified(AccountPeer::MAIL)) $criteria->add(AccountPeer::MAIL, $this->mail);
        if ($this->isColumnModified(AccountPeer::PASSWORD)) $criteria->add(AccountPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(AccountPeer::ACCOUNTIMG)) $criteria->add(AccountPeer::ACCOUNTIMG, $this->accountimg);
        if ($this->isColumnModified(AccountPeer::BACKIMG)) $criteria->add(AccountPeer::BACKIMG, $this->backimg);
        if ($this->isColumnModified(AccountPeer::MAXCAPA)) $criteria->add(AccountPeer::MAXCAPA, $this->maxcapa);
        if ($this->isColumnModified(AccountPeer::PRECAPA)) $criteria->add(AccountPeer::PRECAPA, $this->precapa);
        if ($this->isColumnModified(AccountPeer::ACCOUNT_STATUS_ID)) $criteria->add(AccountPeer::ACCOUNT_STATUS_ID, $this->account_status_id);
        if ($this->isColumnModified(AccountPeer::PROVISIONAL_KEY)) $criteria->add(AccountPeer::PROVISIONAL_KEY, $this->provisional_key);
        if ($this->isColumnModified(AccountPeer::RANDID)) $criteria->add(AccountPeer::RANDID, $this->randid);
        if ($this->isColumnModified(AccountPeer::LANGUAGE_ID)) $criteria->add(AccountPeer::LANGUAGE_ID, $this->language_id);

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
        $criteria = new Criteria(AccountPeer::DATABASE_NAME);
        $criteria->add(AccountPeer::ID, $this->id);

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
     * @param object $copyObj An object of Account (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIsDeleted($this->getIsDeleted());
        $copyObj->setUpdatedAt($this->getUpdatedAt());
        $copyObj->setDeletedAt($this->getDeletedAt());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setName($this->getName());
        $copyObj->setMail($this->getMail());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setAccountimg($this->getAccountimg());
        $copyObj->setBackimg($this->getBackimg());
        $copyObj->setMaxcapa($this->getMaxcapa());
        $copyObj->setPrecapa($this->getPrecapa());
        $copyObj->setAccountStatusId($this->getAccountStatusId());
        $copyObj->setProvisionalKey($this->getProvisionalKey());
        $copyObj->setRandid($this->getRandid());
        $copyObj->setLanguageId($this->getLanguageId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAccountLogs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAccountLog($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getContents() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addContent($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProjects() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProject($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProjectMembers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProjectMember($relObj->copy($deepCopy));
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
     * @return Account Clone of current object.
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
     * @return AccountPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AccountPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a AccountStatus object.
     *
     * @param                  AccountStatus $v
     * @return Account The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAccountStatus(AccountStatus $v = null)
    {
        if ($v === null) {
            $this->setAccountStatusId(1);
        } else {
            $this->setAccountStatusId($v->getId());
        }

        $this->aAccountStatus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the AccountStatus object, it will not be re-added.
        if ($v !== null) {
            $v->addAccount($this);
        }


        return $this;
    }


    /**
     * Get the associated AccountStatus object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return AccountStatus The associated AccountStatus object.
     * @throws PropelException
     */
    public function getAccountStatus(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAccountStatus === null && ($this->account_status_id !== null) && $doQuery) {
            $this->aAccountStatus = AccountStatusQuery::create()->findPk($this->account_status_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAccountStatus->addAccounts($this);
             */
        }

        return $this->aAccountStatus;
    }

    /**
     * Declares an association between this object and a Language object.
     *
     * @param                  Language $v
     * @return Account The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLanguage(Language $v = null)
    {
        if ($v === null) {
            $this->setLanguageId(1);
        } else {
            $this->setLanguageId($v->getId());
        }

        $this->aLanguage = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Language object, it will not be re-added.
        if ($v !== null) {
            $v->addAccount($this);
        }


        return $this;
    }


    /**
     * Get the associated Language object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Language The associated Language object.
     * @throws PropelException
     */
    public function getLanguage(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLanguage === null && ($this->language_id !== null) && $doQuery) {
            $this->aLanguage = LanguageQuery::create()->findPk($this->language_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLanguage->addAccounts($this);
             */
        }

        return $this->aLanguage;
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
        if ('AccountLog' == $relationName) {
            $this->initAccountLogs();
        }
        if ('Content' == $relationName) {
            $this->initContents();
        }
        if ('Project' == $relationName) {
            $this->initProjects();
        }
        if ('ProjectMember' == $relationName) {
            $this->initProjectMembers();
        }
    }

    /**
     * Clears out the collAccountLogs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Account The current object (for fluent API support)
     * @see        addAccountLogs()
     */
    public function clearAccountLogs()
    {
        $this->collAccountLogs = null; // important to set this to null since that means it is uninitialized
        $this->collAccountLogsPartial = null;

        return $this;
    }

    /**
     * reset is the collAccountLogs collection loaded partially
     *
     * @return void
     */
    public function resetPartialAccountLogs($v = true)
    {
        $this->collAccountLogsPartial = $v;
    }

    /**
     * Initializes the collAccountLogs collection.
     *
     * By default this just sets the collAccountLogs collection to an empty array (like clearcollAccountLogs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAccountLogs($overrideExisting = true)
    {
        if (null !== $this->collAccountLogs && !$overrideExisting) {
            return;
        }
        $this->collAccountLogs = new PropelObjectCollection();
        $this->collAccountLogs->setModel('AccountLog');
    }

    /**
     * Gets an array of AccountLog objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Account is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|AccountLog[] List of AccountLog objects
     * @throws PropelException
     */
    public function getAccountLogs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAccountLogsPartial && !$this->isNew();
        if (null === $this->collAccountLogs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAccountLogs) {
                // return empty collection
                $this->initAccountLogs();
            } else {
                $collAccountLogs = AccountLogQuery::create(null, $criteria)
                    ->filterByAccount($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAccountLogsPartial && count($collAccountLogs)) {
                      $this->initAccountLogs(false);

                      foreach ($collAccountLogs as $obj) {
                        if (false == $this->collAccountLogs->contains($obj)) {
                          $this->collAccountLogs->append($obj);
                        }
                      }

                      $this->collAccountLogsPartial = true;
                    }

                    $collAccountLogs->getInternalIterator()->rewind();

                    return $collAccountLogs;
                }

                if ($partial && $this->collAccountLogs) {
                    foreach ($this->collAccountLogs as $obj) {
                        if ($obj->isNew()) {
                            $collAccountLogs[] = $obj;
                        }
                    }
                }

                $this->collAccountLogs = $collAccountLogs;
                $this->collAccountLogsPartial = false;
            }
        }

        return $this->collAccountLogs;
    }

    /**
     * Sets a collection of AccountLog objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $accountLogs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Account The current object (for fluent API support)
     */
    public function setAccountLogs(PropelCollection $accountLogs, PropelPDO $con = null)
    {
        $accountLogsToDelete = $this->getAccountLogs(new Criteria(), $con)->diff($accountLogs);


        $this->accountLogsScheduledForDeletion = $accountLogsToDelete;

        foreach ($accountLogsToDelete as $accountLogRemoved) {
            $accountLogRemoved->setAccount(null);
        }

        $this->collAccountLogs = null;
        foreach ($accountLogs as $accountLog) {
            $this->addAccountLog($accountLog);
        }

        $this->collAccountLogs = $accountLogs;
        $this->collAccountLogsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AccountLog objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related AccountLog objects.
     * @throws PropelException
     */
    public function countAccountLogs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAccountLogsPartial && !$this->isNew();
        if (null === $this->collAccountLogs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAccountLogs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAccountLogs());
            }
            $query = AccountLogQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAccount($this)
                ->count($con);
        }

        return count($this->collAccountLogs);
    }

    /**
     * Method called to associate a AccountLog object to this object
     * through the AccountLog foreign key attribute.
     *
     * @param    AccountLog $l AccountLog
     * @return Account The current object (for fluent API support)
     */
    public function addAccountLog(AccountLog $l)
    {
        if ($this->collAccountLogs === null) {
            $this->initAccountLogs();
            $this->collAccountLogsPartial = true;
        }

        if (!in_array($l, $this->collAccountLogs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAccountLog($l);

            if ($this->accountLogsScheduledForDeletion and $this->accountLogsScheduledForDeletion->contains($l)) {
                $this->accountLogsScheduledForDeletion->remove($this->accountLogsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	AccountLog $accountLog The accountLog object to add.
     */
    protected function doAddAccountLog($accountLog)
    {
        $this->collAccountLogs[]= $accountLog;
        $accountLog->setAccount($this);
    }

    /**
     * @param	AccountLog $accountLog The accountLog object to remove.
     * @return Account The current object (for fluent API support)
     */
    public function removeAccountLog($accountLog)
    {
        if ($this->getAccountLogs()->contains($accountLog)) {
            $this->collAccountLogs->remove($this->collAccountLogs->search($accountLog));
            if (null === $this->accountLogsScheduledForDeletion) {
                $this->accountLogsScheduledForDeletion = clone $this->collAccountLogs;
                $this->accountLogsScheduledForDeletion->clear();
            }
            $this->accountLogsScheduledForDeletion[]= $accountLog;
            $accountLog->setAccount(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Account is new, it will return
     * an empty collection; or if this Account has previously
     * been saved, it will retrieve related AccountLogs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Account.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|AccountLog[] List of AccountLog objects
     */
    public function getAccountLogsJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AccountLogQuery::create(null, $criteria);
        $query->joinWith('Project', $join_behavior);

        return $this->getAccountLogs($query, $con);
    }

    /**
     * Clears out the collContents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Account The current object (for fluent API support)
     * @see        addContents()
     */
    public function clearContents()
    {
        $this->collContents = null; // important to set this to null since that means it is uninitialized
        $this->collContentsPartial = null;

        return $this;
    }

    /**
     * reset is the collContents collection loaded partially
     *
     * @return void
     */
    public function resetPartialContents($v = true)
    {
        $this->collContentsPartial = $v;
    }

    /**
     * Initializes the collContents collection.
     *
     * By default this just sets the collContents collection to an empty array (like clearcollContents());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initContents($overrideExisting = true)
    {
        if (null !== $this->collContents && !$overrideExisting) {
            return;
        }
        $this->collContents = new PropelObjectCollection();
        $this->collContents->setModel('Content');
    }

    /**
     * Gets an array of Content objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Account is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Content[] List of Content objects
     * @throws PropelException
     */
    public function getContents($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collContentsPartial && !$this->isNew();
        if (null === $this->collContents || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collContents) {
                // return empty collection
                $this->initContents();
            } else {
                $collContents = ContentQuery::create(null, $criteria)
                    ->filterByAccount($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collContentsPartial && count($collContents)) {
                      $this->initContents(false);

                      foreach ($collContents as $obj) {
                        if (false == $this->collContents->contains($obj)) {
                          $this->collContents->append($obj);
                        }
                      }

                      $this->collContentsPartial = true;
                    }

                    $collContents->getInternalIterator()->rewind();

                    return $collContents;
                }

                if ($partial && $this->collContents) {
                    foreach ($this->collContents as $obj) {
                        if ($obj->isNew()) {
                            $collContents[] = $obj;
                        }
                    }
                }

                $this->collContents = $collContents;
                $this->collContentsPartial = false;
            }
        }

        return $this->collContents;
    }

    /**
     * Sets a collection of Content objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $contents A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Account The current object (for fluent API support)
     */
    public function setContents(PropelCollection $contents, PropelPDO $con = null)
    {
        $contentsToDelete = $this->getContents(new Criteria(), $con)->diff($contents);


        $this->contentsScheduledForDeletion = $contentsToDelete;

        foreach ($contentsToDelete as $contentRemoved) {
            $contentRemoved->setAccount(null);
        }

        $this->collContents = null;
        foreach ($contents as $content) {
            $this->addContent($content);
        }

        $this->collContents = $contents;
        $this->collContentsPartial = false;

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
    public function countContents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collContentsPartial && !$this->isNew();
        if (null === $this->collContents || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collContents) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getContents());
            }
            $query = ContentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAccount($this)
                ->count($con);
        }

        return count($this->collContents);
    }

    /**
     * Method called to associate a Content object to this object
     * through the Content foreign key attribute.
     *
     * @param    Content $l Content
     * @return Account The current object (for fluent API support)
     */
    public function addContent(Content $l)
    {
        if ($this->collContents === null) {
            $this->initContents();
            $this->collContentsPartial = true;
        }

        if (!in_array($l, $this->collContents->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddContent($l);

            if ($this->contentsScheduledForDeletion and $this->contentsScheduledForDeletion->contains($l)) {
                $this->contentsScheduledForDeletion->remove($this->contentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Content $content The content object to add.
     */
    protected function doAddContent($content)
    {
        $this->collContents[]= $content;
        $content->setAccount($this);
    }

    /**
     * @param	Content $content The content object to remove.
     * @return Account The current object (for fluent API support)
     */
    public function removeContent($content)
    {
        if ($this->getContents()->contains($content)) {
            $this->collContents->remove($this->collContents->search($content));
            if (null === $this->contentsScheduledForDeletion) {
                $this->contentsScheduledForDeletion = clone $this->collContents;
                $this->contentsScheduledForDeletion->clear();
            }
            $this->contentsScheduledForDeletion[]= $content;
            $content->setAccount(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Account is new, it will return
     * an empty collection; or if this Account has previously
     * been saved, it will retrieve related Contents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Account.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Content[] List of Content objects
     */
    public function getContentsJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ContentQuery::create(null, $criteria);
        $query->joinWith('Project', $join_behavior);

        return $this->getContents($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Account is new, it will return
     * an empty collection; or if this Account has previously
     * been saved, it will retrieve related Contents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Account.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Content[] List of Content objects
     */
    public function getContentsJoinContentRelatedByParentDirectoryId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ContentQuery::create(null, $criteria);
        $query->joinWith('ContentRelatedByParentDirectoryId', $join_behavior);

        return $this->getContents($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Account is new, it will return
     * an empty collection; or if this Account has previously
     * been saved, it will retrieve related Contents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Account.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Content[] List of Content objects
     */
    public function getContentsJoinContentStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ContentQuery::create(null, $criteria);
        $query->joinWith('ContentStatus', $join_behavior);

        return $this->getContents($query, $con);
    }

    /**
     * Clears out the collProjects collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Account The current object (for fluent API support)
     * @see        addProjects()
     */
    public function clearProjects()
    {
        $this->collProjects = null; // important to set this to null since that means it is uninitialized
        $this->collProjectsPartial = null;

        return $this;
    }

    /**
     * reset is the collProjects collection loaded partially
     *
     * @return void
     */
    public function resetPartialProjects($v = true)
    {
        $this->collProjectsPartial = $v;
    }

    /**
     * Initializes the collProjects collection.
     *
     * By default this just sets the collProjects collection to an empty array (like clearcollProjects());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProjects($overrideExisting = true)
    {
        if (null !== $this->collProjects && !$overrideExisting) {
            return;
        }
        $this->collProjects = new PropelObjectCollection();
        $this->collProjects->setModel('Project');
    }

    /**
     * Gets an array of Project objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Account is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Project[] List of Project objects
     * @throws PropelException
     */
    public function getProjects($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProjectsPartial && !$this->isNew();
        if (null === $this->collProjects || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProjects) {
                // return empty collection
                $this->initProjects();
            } else {
                $collProjects = ProjectQuery::create(null, $criteria)
                    ->filterByAccount($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProjectsPartial && count($collProjects)) {
                      $this->initProjects(false);

                      foreach ($collProjects as $obj) {
                        if (false == $this->collProjects->contains($obj)) {
                          $this->collProjects->append($obj);
                        }
                      }

                      $this->collProjectsPartial = true;
                    }

                    $collProjects->getInternalIterator()->rewind();

                    return $collProjects;
                }

                if ($partial && $this->collProjects) {
                    foreach ($this->collProjects as $obj) {
                        if ($obj->isNew()) {
                            $collProjects[] = $obj;
                        }
                    }
                }

                $this->collProjects = $collProjects;
                $this->collProjectsPartial = false;
            }
        }

        return $this->collProjects;
    }

    /**
     * Sets a collection of Project objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $projects A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Account The current object (for fluent API support)
     */
    public function setProjects(PropelCollection $projects, PropelPDO $con = null)
    {
        $projectsToDelete = $this->getProjects(new Criteria(), $con)->diff($projects);


        $this->projectsScheduledForDeletion = $projectsToDelete;

        foreach ($projectsToDelete as $projectRemoved) {
            $projectRemoved->setAccount(null);
        }

        $this->collProjects = null;
        foreach ($projects as $project) {
            $this->addProject($project);
        }

        $this->collProjects = $projects;
        $this->collProjectsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Project objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Project objects.
     * @throws PropelException
     */
    public function countProjects(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProjectsPartial && !$this->isNew();
        if (null === $this->collProjects || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProjects) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProjects());
            }
            $query = ProjectQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAccount($this)
                ->count($con);
        }

        return count($this->collProjects);
    }

    /**
     * Method called to associate a Project object to this object
     * through the Project foreign key attribute.
     *
     * @param    Project $l Project
     * @return Account The current object (for fluent API support)
     */
    public function addProject(Project $l)
    {
        if ($this->collProjects === null) {
            $this->initProjects();
            $this->collProjectsPartial = true;
        }

        if (!in_array($l, $this->collProjects->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProject($l);

            if ($this->projectsScheduledForDeletion and $this->projectsScheduledForDeletion->contains($l)) {
                $this->projectsScheduledForDeletion->remove($this->projectsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Project $project The project object to add.
     */
    protected function doAddProject($project)
    {
        $this->collProjects[]= $project;
        $project->setAccount($this);
    }

    /**
     * @param	Project $project The project object to remove.
     * @return Account The current object (for fluent API support)
     */
    public function removeProject($project)
    {
        if ($this->getProjects()->contains($project)) {
            $this->collProjects->remove($this->collProjects->search($project));
            if (null === $this->projectsScheduledForDeletion) {
                $this->projectsScheduledForDeletion = clone $this->collProjects;
                $this->projectsScheduledForDeletion->clear();
            }
            $this->projectsScheduledForDeletion[]= $project;
            $project->setAccount(null);
        }

        return $this;
    }

    /**
     * Clears out the collProjectMembers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Account The current object (for fluent API support)
     * @see        addProjectMembers()
     */
    public function clearProjectMembers()
    {
        $this->collProjectMembers = null; // important to set this to null since that means it is uninitialized
        $this->collProjectMembersPartial = null;

        return $this;
    }

    /**
     * reset is the collProjectMembers collection loaded partially
     *
     * @return void
     */
    public function resetPartialProjectMembers($v = true)
    {
        $this->collProjectMembersPartial = $v;
    }

    /**
     * Initializes the collProjectMembers collection.
     *
     * By default this just sets the collProjectMembers collection to an empty array (like clearcollProjectMembers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProjectMembers($overrideExisting = true)
    {
        if (null !== $this->collProjectMembers && !$overrideExisting) {
            return;
        }
        $this->collProjectMembers = new PropelObjectCollection();
        $this->collProjectMembers->setModel('ProjectMember');
    }

    /**
     * Gets an array of ProjectMember objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Account is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ProjectMember[] List of ProjectMember objects
     * @throws PropelException
     */
    public function getProjectMembers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProjectMembersPartial && !$this->isNew();
        if (null === $this->collProjectMembers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProjectMembers) {
                // return empty collection
                $this->initProjectMembers();
            } else {
                $collProjectMembers = ProjectMemberQuery::create(null, $criteria)
                    ->filterByAccount($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProjectMembersPartial && count($collProjectMembers)) {
                      $this->initProjectMembers(false);

                      foreach ($collProjectMembers as $obj) {
                        if (false == $this->collProjectMembers->contains($obj)) {
                          $this->collProjectMembers->append($obj);
                        }
                      }

                      $this->collProjectMembersPartial = true;
                    }

                    $collProjectMembers->getInternalIterator()->rewind();

                    return $collProjectMembers;
                }

                if ($partial && $this->collProjectMembers) {
                    foreach ($this->collProjectMembers as $obj) {
                        if ($obj->isNew()) {
                            $collProjectMembers[] = $obj;
                        }
                    }
                }

                $this->collProjectMembers = $collProjectMembers;
                $this->collProjectMembersPartial = false;
            }
        }

        return $this->collProjectMembers;
    }

    /**
     * Sets a collection of ProjectMember objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $projectMembers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Account The current object (for fluent API support)
     */
    public function setProjectMembers(PropelCollection $projectMembers, PropelPDO $con = null)
    {
        $projectMembersToDelete = $this->getProjectMembers(new Criteria(), $con)->diff($projectMembers);


        $this->projectMembersScheduledForDeletion = $projectMembersToDelete;

        foreach ($projectMembersToDelete as $projectMemberRemoved) {
            $projectMemberRemoved->setAccount(null);
        }

        $this->collProjectMembers = null;
        foreach ($projectMembers as $projectMember) {
            $this->addProjectMember($projectMember);
        }

        $this->collProjectMembers = $projectMembers;
        $this->collProjectMembersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ProjectMember objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ProjectMember objects.
     * @throws PropelException
     */
    public function countProjectMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProjectMembersPartial && !$this->isNew();
        if (null === $this->collProjectMembers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProjectMembers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProjectMembers());
            }
            $query = ProjectMemberQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAccount($this)
                ->count($con);
        }

        return count($this->collProjectMembers);
    }

    /**
     * Method called to associate a ProjectMember object to this object
     * through the ProjectMember foreign key attribute.
     *
     * @param    ProjectMember $l ProjectMember
     * @return Account The current object (for fluent API support)
     */
    public function addProjectMember(ProjectMember $l)
    {
        if ($this->collProjectMembers === null) {
            $this->initProjectMembers();
            $this->collProjectMembersPartial = true;
        }

        if (!in_array($l, $this->collProjectMembers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProjectMember($l);

            if ($this->projectMembersScheduledForDeletion and $this->projectMembersScheduledForDeletion->contains($l)) {
                $this->projectMembersScheduledForDeletion->remove($this->projectMembersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ProjectMember $projectMember The projectMember object to add.
     */
    protected function doAddProjectMember($projectMember)
    {
        $this->collProjectMembers[]= $projectMember;
        $projectMember->setAccount($this);
    }

    /**
     * @param	ProjectMember $projectMember The projectMember object to remove.
     * @return Account The current object (for fluent API support)
     */
    public function removeProjectMember($projectMember)
    {
        if ($this->getProjectMembers()->contains($projectMember)) {
            $this->collProjectMembers->remove($this->collProjectMembers->search($projectMember));
            if (null === $this->projectMembersScheduledForDeletion) {
                $this->projectMembersScheduledForDeletion = clone $this->collProjectMembers;
                $this->projectMembersScheduledForDeletion->clear();
            }
            $this->projectMembersScheduledForDeletion[]= $projectMember;
            $projectMember->setAccount(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Account is new, it will return
     * an empty collection; or if this Account has previously
     * been saved, it will retrieve related ProjectMembers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Account.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ProjectMember[] List of ProjectMember objects
     */
    public function getProjectMembersJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectMemberQuery::create(null, $criteria);
        $query->joinWith('Project', $join_behavior);

        return $this->getProjectMembers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Account is new, it will return
     * an empty collection; or if this Account has previously
     * been saved, it will retrieve related ProjectMembers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Account.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ProjectMember[] List of ProjectMember objects
     */
    public function getProjectMembersJoinAuthLevelStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectMemberQuery::create(null, $criteria);
        $query->joinWith('AuthLevelStatus', $join_behavior);

        return $this->getProjectMembers($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->is_deleted = null;
        $this->updated_at = null;
        $this->deleted_at = null;
        $this->created_at = null;
        $this->name = null;
        $this->mail = null;
        $this->password = null;
        $this->accountimg = null;
        $this->backimg = null;
        $this->maxcapa = null;
        $this->precapa = null;
        $this->account_status_id = null;
        $this->provisional_key = null;
        $this->randid = null;
        $this->language_id = null;
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
            if ($this->collAccountLogs) {
                foreach ($this->collAccountLogs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collContents) {
                foreach ($this->collContents as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProjects) {
                foreach ($this->collProjects as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProjectMembers) {
                foreach ($this->collProjectMembers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAccountStatus instanceof Persistent) {
              $this->aAccountStatus->clearAllReferences($deep);
            }
            if ($this->aLanguage instanceof Persistent) {
              $this->aLanguage->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAccountLogs instanceof PropelCollection) {
            $this->collAccountLogs->clearIterator();
        }
        $this->collAccountLogs = null;
        if ($this->collContents instanceof PropelCollection) {
            $this->collContents->clearIterator();
        }
        $this->collContents = null;
        if ($this->collProjects instanceof PropelCollection) {
            $this->collProjects->clearIterator();
        }
        $this->collProjects = null;
        if ($this->collProjectMembers instanceof PropelCollection) {
            $this->collProjectMembers->clearIterator();
        }
        $this->collProjectMembers = null;
        $this->aAccountStatus = null;
        $this->aLanguage = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AccountPeer::DEFAULT_STRING_FORMAT);
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
        if ($callable = sfMixer::getCallable('BaseAccount:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
