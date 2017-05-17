<?php


/**
 * Base class that represents a row from the 'send_mails' table.
 *
 *
 *
 * @package    propel.generator.lib.model.incl2.om
 */
abstract class BaseSendMails extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SendMailsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SendMailsPeer
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
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the from_name field.
     * @var        string
     */
    protected $from_name;

    /**
     * The value for the to_name field.
     * @var        string
     */
    protected $to_name;

    /**
     * The value for the to_address field.
     * @var        string
     */
    protected $to_address;

    /**
     * The value for the subject field.
     * @var        string
     */
    protected $subject;

    /**
     * The value for the body field.
     * @var        string
     */
    protected $body;

    /**
     * The value for the group_code field.
     * @var        string
     */
    protected $group_code;

    /**
     * The value for the from_address field.
     * @var        string
     */
    protected $from_address;

    /**
     * The value for the finish_dt field.
     * @var        string
     */
    protected $finish_dt;

    /**
     * The value for the result field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $result;

    /**
     * The value for the send_date field.
     * @var        string
     */
    protected $send_date;

    /**
     * The value for the send_time field.
     * @var        string
     */
    protected $send_time;

    /**
     * The value for the fw_to field.
     * @var        string
     */
    protected $fw_to;

    /**
     * The value for the server_ip field.
     * @var        string
     */
    protected $server_ip;

    /**
     * The value for the server_name field.
     * @var        string
     */
    protected $server_name;

    /**
     * The value for the send_mail_status_id field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $send_mail_status_id;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_deleted = 0;
        $this->result = 0;
        $this->send_mail_status_id = '1';
    }

    /**
     * Initializes internal state of BaseSendMails object.
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
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
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
     * Get the [from_name] column value.
     *
     * @return string
     */
    public function getFromName()
    {

        return $this->from_name;
    }

    /**
     * Get the [to_name] column value.
     *
     * @return string
     */
    public function getToName()
    {

        return $this->to_name;
    }

    /**
     * Get the [to_address] column value.
     *
     * @return string
     */
    public function getToAddress()
    {

        return $this->to_address;
    }

    /**
     * Get the [subject] column value.
     *
     * @return string
     */
    public function getSubject()
    {

        return $this->subject;
    }

    /**
     * Get the [body] column value.
     *
     * @return string
     */
    public function getBody()
    {

        return $this->body;
    }

    /**
     * Get the [group_code] column value.
     *
     * @return string
     */
    public function getGroupCode()
    {

        return $this->group_code;
    }

    /**
     * Get the [from_address] column value.
     *
     * @return string
     */
    public function getFromAddress()
    {

        return $this->from_address;
    }

    /**
     * Get the [optionally formatted] temporal [finish_dt] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFinishDt($format = 'Y-m-d H:i:s')
    {
        if ($this->finish_dt === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->finish_dt);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->finish_dt, true), $x);
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
     * Get the [result] column value.
     *
     * @return int
     */
    public function getResult()
    {

        return $this->result;
    }

    /**
     * Get the [optionally formatted] temporal [send_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSendDate($format = 'Y-m-d')
    {
        if ($this->send_date === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->send_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->send_date, true), $x);
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
     * Get the [optionally formatted] temporal [send_time] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSendTime($format = 'H:i:s')
    {
        if ($this->send_time === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->send_time);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->send_time, true), $x);
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
     * Get the [fw_to] column value.
     *
     * @return string
     */
    public function getFwTo()
    {

        return $this->fw_to;
    }

    /**
     * Get the [server_ip] column value.
     *
     * @return string
     */
    public function getServerIp()
    {

        return $this->server_ip;
    }

    /**
     * Get the [server_name] column value.
     *
     * @return string
     */
    public function getServerName()
    {

        return $this->server_name;
    }

    /**
     * Get the [send_mail_status_id] column value.
     *
     * @return string
     */
    public function getSendMailStatusId()
    {

        return $this->send_mail_status_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = SendMailsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [is_deleted] column.
     *
     * @param  int $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setIsDeleted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_deleted !== $v) {
            $this->is_deleted = $v;
            $this->modifiedColumns[] = SendMailsPeer::IS_DELETED;
        }


        return $this;
    } // setIsDeleted()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SendMails The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = SendMailsPeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Sets the value of [deleted_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SendMails The current object (for fluent API support)
     */
    public function setDeletedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleted_at !== null || $dt !== null) {
            $currentDateAsString = ($this->deleted_at !== null && $tmpDt = new DateTime($this->deleted_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleted_at = $newDateAsString;
                $this->modifiedColumns[] = SendMailsPeer::DELETED_AT;
            }
        } // if either are not null


        return $this;
    } // setDeletedAt()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SendMails The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = SendMailsPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = SendMailsPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = SendMailsPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [from_name] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setFromName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->from_name !== $v) {
            $this->from_name = $v;
            $this->modifiedColumns[] = SendMailsPeer::FROM_NAME;
        }


        return $this;
    } // setFromName()

    /**
     * Set the value of [to_name] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setToName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->to_name !== $v) {
            $this->to_name = $v;
            $this->modifiedColumns[] = SendMailsPeer::TO_NAME;
        }


        return $this;
    } // setToName()

    /**
     * Set the value of [to_address] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setToAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->to_address !== $v) {
            $this->to_address = $v;
            $this->modifiedColumns[] = SendMailsPeer::TO_ADDRESS;
        }


        return $this;
    } // setToAddress()

    /**
     * Set the value of [subject] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setSubject($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->subject !== $v) {
            $this->subject = $v;
            $this->modifiedColumns[] = SendMailsPeer::SUBJECT;
        }


        return $this;
    } // setSubject()

    /**
     * Set the value of [body] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setBody($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->body !== $v) {
            $this->body = $v;
            $this->modifiedColumns[] = SendMailsPeer::BODY;
        }


        return $this;
    } // setBody()

    /**
     * Set the value of [group_code] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setGroupCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->group_code !== $v) {
            $this->group_code = $v;
            $this->modifiedColumns[] = SendMailsPeer::GROUP_CODE;
        }


        return $this;
    } // setGroupCode()

    /**
     * Set the value of [from_address] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setFromAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->from_address !== $v) {
            $this->from_address = $v;
            $this->modifiedColumns[] = SendMailsPeer::FROM_ADDRESS;
        }


        return $this;
    } // setFromAddress()

    /**
     * Sets the value of [finish_dt] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SendMails The current object (for fluent API support)
     */
    public function setFinishDt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->finish_dt !== null || $dt !== null) {
            $currentDateAsString = ($this->finish_dt !== null && $tmpDt = new DateTime($this->finish_dt)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->finish_dt = $newDateAsString;
                $this->modifiedColumns[] = SendMailsPeer::FINISH_DT;
            }
        } // if either are not null


        return $this;
    } // setFinishDt()

    /**
     * Set the value of [result] column.
     *
     * @param  int $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setResult($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->result !== $v) {
            $this->result = $v;
            $this->modifiedColumns[] = SendMailsPeer::RESULT;
        }


        return $this;
    } // setResult()

    /**
     * Sets the value of [send_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SendMails The current object (for fluent API support)
     */
    public function setSendDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->send_date !== null || $dt !== null) {
            $currentDateAsString = ($this->send_date !== null && $tmpDt = new DateTime($this->send_date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->send_date = $newDateAsString;
                $this->modifiedColumns[] = SendMailsPeer::SEND_DATE;
            }
        } // if either are not null


        return $this;
    } // setSendDate()

    /**
     * Sets the value of [send_time] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SendMails The current object (for fluent API support)
     */
    public function setSendTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->send_time !== null || $dt !== null) {
            $currentDateAsString = ($this->send_time !== null && $tmpDt = new DateTime($this->send_time)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->send_time = $newDateAsString;
                $this->modifiedColumns[] = SendMailsPeer::SEND_TIME;
            }
        } // if either are not null


        return $this;
    } // setSendTime()

    /**
     * Set the value of [fw_to] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setFwTo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fw_to !== $v) {
            $this->fw_to = $v;
            $this->modifiedColumns[] = SendMailsPeer::FW_TO;
        }


        return $this;
    } // setFwTo()

    /**
     * Set the value of [server_ip] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setServerIp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->server_ip !== $v) {
            $this->server_ip = $v;
            $this->modifiedColumns[] = SendMailsPeer::SERVER_IP;
        }


        return $this;
    } // setServerIp()

    /**
     * Set the value of [server_name] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setServerName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->server_name !== $v) {
            $this->server_name = $v;
            $this->modifiedColumns[] = SendMailsPeer::SERVER_NAME;
        }


        return $this;
    } // setServerName()

    /**
     * Set the value of [send_mail_status_id] column.
     *
     * @param  string $v new value
     * @return SendMails The current object (for fluent API support)
     */
    public function setSendMailStatusId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->send_mail_status_id !== $v) {
            $this->send_mail_status_id = $v;
            $this->modifiedColumns[] = SendMailsPeer::SEND_MAIL_STATUS_ID;
        }


        return $this;
    } // setSendMailStatusId()

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

            if ($this->result !== 0) {
                return false;
            }

            if ($this->send_mail_status_id !== '1') {
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
            $this->title = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->name = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->from_name = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->to_name = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->to_address = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->subject = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->body = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->group_code = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->from_address = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->finish_dt = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->result = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->send_date = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->send_time = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->fw_to = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->server_ip = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->server_name = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->send_mail_status_id = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = SendMailsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SendMails object", $e);
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
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SendMailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SendMailsQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseSendMails:delete:pre') as $callable)
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
                foreach (sfMixer::getCallables('BaseSendMails:delete:post') as $callable)
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
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseSendMails:save:pre') as $callable)
            {
              if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
              {
                  $con->commit();
                return $affectedRows;
              }
            }

            // symfony_timestampable behavior
            if ($this->isModified() && !$this->isColumnModified(SendMailsPeer::UPDATED_AT))
            {
                $this->setUpdatedAt(time());
            }
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // symfony_timestampable behavior
                if (!$this->isColumnModified(SendMailsPeer::CREATED_AT))
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
                foreach (sfMixer::getCallables('BaseSendMails:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                SendMailsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = SendMailsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SendMailsPeer::ID . ')');
        }
        if (null === $this->id) {
            try {
                $stmt = $con->query("SELECT nextval('send_mails_id_seq')");
                $row = $stmt->fetch(PDO::FETCH_NUM);
                $this->id = $row[0];
            } catch (Exception $e) {
                throw new PropelException('Unable to get sequence id.', $e);
            }
        }


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SendMailsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '"id"';
        }
        if ($this->isColumnModified(SendMailsPeer::IS_DELETED)) {
            $modifiedColumns[':p' . $index++]  = '"is_deleted"';
        }
        if ($this->isColumnModified(SendMailsPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"updated_at"';
        }
        if ($this->isColumnModified(SendMailsPeer::DELETED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"deleted_at"';
        }
        if ($this->isColumnModified(SendMailsPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '"created_at"';
        }
        if ($this->isColumnModified(SendMailsPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '"title"';
        }
        if ($this->isColumnModified(SendMailsPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '"name"';
        }
        if ($this->isColumnModified(SendMailsPeer::FROM_NAME)) {
            $modifiedColumns[':p' . $index++]  = '"from_name"';
        }
        if ($this->isColumnModified(SendMailsPeer::TO_NAME)) {
            $modifiedColumns[':p' . $index++]  = '"to_name"';
        }
        if ($this->isColumnModified(SendMailsPeer::TO_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '"to_address"';
        }
        if ($this->isColumnModified(SendMailsPeer::SUBJECT)) {
            $modifiedColumns[':p' . $index++]  = '"subject"';
        }
        if ($this->isColumnModified(SendMailsPeer::BODY)) {
            $modifiedColumns[':p' . $index++]  = '"body"';
        }
        if ($this->isColumnModified(SendMailsPeer::GROUP_CODE)) {
            $modifiedColumns[':p' . $index++]  = '"group_code"';
        }
        if ($this->isColumnModified(SendMailsPeer::FROM_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '"from_address"';
        }
        if ($this->isColumnModified(SendMailsPeer::FINISH_DT)) {
            $modifiedColumns[':p' . $index++]  = '"finish_dt"';
        }
        if ($this->isColumnModified(SendMailsPeer::RESULT)) {
            $modifiedColumns[':p' . $index++]  = '"result"';
        }
        if ($this->isColumnModified(SendMailsPeer::SEND_DATE)) {
            $modifiedColumns[':p' . $index++]  = '"send_date"';
        }
        if ($this->isColumnModified(SendMailsPeer::SEND_TIME)) {
            $modifiedColumns[':p' . $index++]  = '"send_time"';
        }
        if ($this->isColumnModified(SendMailsPeer::FW_TO)) {
            $modifiedColumns[':p' . $index++]  = '"fw_to"';
        }
        if ($this->isColumnModified(SendMailsPeer::SERVER_IP)) {
            $modifiedColumns[':p' . $index++]  = '"server_ip"';
        }
        if ($this->isColumnModified(SendMailsPeer::SERVER_NAME)) {
            $modifiedColumns[':p' . $index++]  = '"server_name"';
        }
        if ($this->isColumnModified(SendMailsPeer::SEND_MAIL_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '"send_mail_status_id"';
        }

        $sql = sprintf(
            'INSERT INTO "send_mails" (%s) VALUES (%s)',
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
                    case '"title"':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '"name"':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '"from_name"':
                        $stmt->bindValue($identifier, $this->from_name, PDO::PARAM_STR);
                        break;
                    case '"to_name"':
                        $stmt->bindValue($identifier, $this->to_name, PDO::PARAM_STR);
                        break;
                    case '"to_address"':
                        $stmt->bindValue($identifier, $this->to_address, PDO::PARAM_STR);
                        break;
                    case '"subject"':
                        $stmt->bindValue($identifier, $this->subject, PDO::PARAM_STR);
                        break;
                    case '"body"':
                        $stmt->bindValue($identifier, $this->body, PDO::PARAM_STR);
                        break;
                    case '"group_code"':
                        $stmt->bindValue($identifier, $this->group_code, PDO::PARAM_STR);
                        break;
                    case '"from_address"':
                        $stmt->bindValue($identifier, $this->from_address, PDO::PARAM_STR);
                        break;
                    case '"finish_dt"':
                        $stmt->bindValue($identifier, $this->finish_dt, PDO::PARAM_STR);
                        break;
                    case '"result"':
                        $stmt->bindValue($identifier, $this->result, PDO::PARAM_INT);
                        break;
                    case '"send_date"':
                        $stmt->bindValue($identifier, $this->send_date, PDO::PARAM_STR);
                        break;
                    case '"send_time"':
                        $stmt->bindValue($identifier, $this->send_time, PDO::PARAM_STR);
                        break;
                    case '"fw_to"':
                        $stmt->bindValue($identifier, $this->fw_to, PDO::PARAM_STR);
                        break;
                    case '"server_ip"':
                        $stmt->bindValue($identifier, $this->server_ip, PDO::PARAM_STR);
                        break;
                    case '"server_name"':
                        $stmt->bindValue($identifier, $this->server_name, PDO::PARAM_STR);
                        break;
                    case '"send_mail_status_id"':
                        $stmt->bindValue($identifier, $this->send_mail_status_id, PDO::PARAM_STR);
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


            if (($retval = SendMailsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = SendMailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTitle();
                break;
            case 6:
                return $this->getName();
                break;
            case 7:
                return $this->getFromName();
                break;
            case 8:
                return $this->getToName();
                break;
            case 9:
                return $this->getToAddress();
                break;
            case 10:
                return $this->getSubject();
                break;
            case 11:
                return $this->getBody();
                break;
            case 12:
                return $this->getGroupCode();
                break;
            case 13:
                return $this->getFromAddress();
                break;
            case 14:
                return $this->getFinishDt();
                break;
            case 15:
                return $this->getResult();
                break;
            case 16:
                return $this->getSendDate();
                break;
            case 17:
                return $this->getSendTime();
                break;
            case 18:
                return $this->getFwTo();
                break;
            case 19:
                return $this->getServerIp();
                break;
            case 20:
                return $this->getServerName();
                break;
            case 21:
                return $this->getSendMailStatusId();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['SendMails'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SendMails'][$this->getPrimaryKey()] = true;
        $keys = SendMailsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIsDeleted(),
            $keys[2] => $this->getUpdatedAt(),
            $keys[3] => $this->getDeletedAt(),
            $keys[4] => $this->getCreatedAt(),
            $keys[5] => $this->getTitle(),
            $keys[6] => $this->getName(),
            $keys[7] => $this->getFromName(),
            $keys[8] => $this->getToName(),
            $keys[9] => $this->getToAddress(),
            $keys[10] => $this->getSubject(),
            $keys[11] => $this->getBody(),
            $keys[12] => $this->getGroupCode(),
            $keys[13] => $this->getFromAddress(),
            $keys[14] => $this->getFinishDt(),
            $keys[15] => $this->getResult(),
            $keys[16] => $this->getSendDate(),
            $keys[17] => $this->getSendTime(),
            $keys[18] => $this->getFwTo(),
            $keys[19] => $this->getServerIp(),
            $keys[20] => $this->getServerName(),
            $keys[21] => $this->getSendMailStatusId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
        $pos = SendMailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTitle($value);
                break;
            case 6:
                $this->setName($value);
                break;
            case 7:
                $this->setFromName($value);
                break;
            case 8:
                $this->setToName($value);
                break;
            case 9:
                $this->setToAddress($value);
                break;
            case 10:
                $this->setSubject($value);
                break;
            case 11:
                $this->setBody($value);
                break;
            case 12:
                $this->setGroupCode($value);
                break;
            case 13:
                $this->setFromAddress($value);
                break;
            case 14:
                $this->setFinishDt($value);
                break;
            case 15:
                $this->setResult($value);
                break;
            case 16:
                $this->setSendDate($value);
                break;
            case 17:
                $this->setSendTime($value);
                break;
            case 18:
                $this->setFwTo($value);
                break;
            case 19:
                $this->setServerIp($value);
                break;
            case 20:
                $this->setServerName($value);
                break;
            case 21:
                $this->setSendMailStatusId($value);
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
        $keys = SendMailsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIsDeleted($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUpdatedAt($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDeletedAt($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTitle($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setName($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFromName($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setToName($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setToAddress($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSubject($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setBody($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setGroupCode($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFromAddress($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFinishDt($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setResult($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSendDate($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSendTime($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFwTo($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setServerIp($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setServerName($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSendMailStatusId($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SendMailsPeer::DATABASE_NAME);

        if ($this->isColumnModified(SendMailsPeer::ID)) $criteria->add(SendMailsPeer::ID, $this->id);
        if ($this->isColumnModified(SendMailsPeer::IS_DELETED)) $criteria->add(SendMailsPeer::IS_DELETED, $this->is_deleted);
        if ($this->isColumnModified(SendMailsPeer::UPDATED_AT)) $criteria->add(SendMailsPeer::UPDATED_AT, $this->updated_at);
        if ($this->isColumnModified(SendMailsPeer::DELETED_AT)) $criteria->add(SendMailsPeer::DELETED_AT, $this->deleted_at);
        if ($this->isColumnModified(SendMailsPeer::CREATED_AT)) $criteria->add(SendMailsPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(SendMailsPeer::TITLE)) $criteria->add(SendMailsPeer::TITLE, $this->title);
        if ($this->isColumnModified(SendMailsPeer::NAME)) $criteria->add(SendMailsPeer::NAME, $this->name);
        if ($this->isColumnModified(SendMailsPeer::FROM_NAME)) $criteria->add(SendMailsPeer::FROM_NAME, $this->from_name);
        if ($this->isColumnModified(SendMailsPeer::TO_NAME)) $criteria->add(SendMailsPeer::TO_NAME, $this->to_name);
        if ($this->isColumnModified(SendMailsPeer::TO_ADDRESS)) $criteria->add(SendMailsPeer::TO_ADDRESS, $this->to_address);
        if ($this->isColumnModified(SendMailsPeer::SUBJECT)) $criteria->add(SendMailsPeer::SUBJECT, $this->subject);
        if ($this->isColumnModified(SendMailsPeer::BODY)) $criteria->add(SendMailsPeer::BODY, $this->body);
        if ($this->isColumnModified(SendMailsPeer::GROUP_CODE)) $criteria->add(SendMailsPeer::GROUP_CODE, $this->group_code);
        if ($this->isColumnModified(SendMailsPeer::FROM_ADDRESS)) $criteria->add(SendMailsPeer::FROM_ADDRESS, $this->from_address);
        if ($this->isColumnModified(SendMailsPeer::FINISH_DT)) $criteria->add(SendMailsPeer::FINISH_DT, $this->finish_dt);
        if ($this->isColumnModified(SendMailsPeer::RESULT)) $criteria->add(SendMailsPeer::RESULT, $this->result);
        if ($this->isColumnModified(SendMailsPeer::SEND_DATE)) $criteria->add(SendMailsPeer::SEND_DATE, $this->send_date);
        if ($this->isColumnModified(SendMailsPeer::SEND_TIME)) $criteria->add(SendMailsPeer::SEND_TIME, $this->send_time);
        if ($this->isColumnModified(SendMailsPeer::FW_TO)) $criteria->add(SendMailsPeer::FW_TO, $this->fw_to);
        if ($this->isColumnModified(SendMailsPeer::SERVER_IP)) $criteria->add(SendMailsPeer::SERVER_IP, $this->server_ip);
        if ($this->isColumnModified(SendMailsPeer::SERVER_NAME)) $criteria->add(SendMailsPeer::SERVER_NAME, $this->server_name);
        if ($this->isColumnModified(SendMailsPeer::SEND_MAIL_STATUS_ID)) $criteria->add(SendMailsPeer::SEND_MAIL_STATUS_ID, $this->send_mail_status_id);

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
        $criteria = new Criteria(SendMailsPeer::DATABASE_NAME);
        $criteria->add(SendMailsPeer::ID, $this->id);

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
     * @param object $copyObj An object of SendMails (or compatible) type.
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
        $copyObj->setTitle($this->getTitle());
        $copyObj->setName($this->getName());
        $copyObj->setFromName($this->getFromName());
        $copyObj->setToName($this->getToName());
        $copyObj->setToAddress($this->getToAddress());
        $copyObj->setSubject($this->getSubject());
        $copyObj->setBody($this->getBody());
        $copyObj->setGroupCode($this->getGroupCode());
        $copyObj->setFromAddress($this->getFromAddress());
        $copyObj->setFinishDt($this->getFinishDt());
        $copyObj->setResult($this->getResult());
        $copyObj->setSendDate($this->getSendDate());
        $copyObj->setSendTime($this->getSendTime());
        $copyObj->setFwTo($this->getFwTo());
        $copyObj->setServerIp($this->getServerIp());
        $copyObj->setServerName($this->getServerName());
        $copyObj->setSendMailStatusId($this->getSendMailStatusId());
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
     * @return SendMails Clone of current object.
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
     * @return SendMailsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SendMailsPeer();
        }

        return self::$peer;
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
        $this->title = null;
        $this->name = null;
        $this->from_name = null;
        $this->to_name = null;
        $this->to_address = null;
        $this->subject = null;
        $this->body = null;
        $this->group_code = null;
        $this->from_address = null;
        $this->finish_dt = null;
        $this->result = null;
        $this->send_date = null;
        $this->send_time = null;
        $this->fw_to = null;
        $this->server_ip = null;
        $this->server_name = null;
        $this->send_mail_status_id = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SendMailsPeer::DEFAULT_STRING_FORMAT);
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
        if ($callable = sfMixer::getCallable('BaseSendMails:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
