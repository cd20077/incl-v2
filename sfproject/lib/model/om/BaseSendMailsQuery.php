<?php


/**
 * Base class that represents a query for the 'send_mails' table.
 *
 *
 *
 * @method SendMailsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method SendMailsQuery orderByIsDeleted($order = Criteria::ASC) Order by the is_deleted column
 * @method SendMailsQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method SendMailsQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method SendMailsQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method SendMailsQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method SendMailsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method SendMailsQuery orderByFromName($order = Criteria::ASC) Order by the from_name column
 * @method SendMailsQuery orderByToName($order = Criteria::ASC) Order by the to_name column
 * @method SendMailsQuery orderByToAddress($order = Criteria::ASC) Order by the to_address column
 * @method SendMailsQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method SendMailsQuery orderByBody($order = Criteria::ASC) Order by the body column
 * @method SendMailsQuery orderByGroupCode($order = Criteria::ASC) Order by the group_code column
 * @method SendMailsQuery orderByFromAddress($order = Criteria::ASC) Order by the from_address column
 * @method SendMailsQuery orderByFinishDt($order = Criteria::ASC) Order by the finish_dt column
 * @method SendMailsQuery orderByResult($order = Criteria::ASC) Order by the result column
 * @method SendMailsQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method SendMailsQuery orderBySendTime($order = Criteria::ASC) Order by the send_time column
 * @method SendMailsQuery orderByFwTo($order = Criteria::ASC) Order by the fw_to column
 * @method SendMailsQuery orderByServerIp($order = Criteria::ASC) Order by the server_ip column
 * @method SendMailsQuery orderByServerName($order = Criteria::ASC) Order by the server_name column
 * @method SendMailsQuery orderBySendMailStatusId($order = Criteria::ASC) Order by the send_mail_status_id column
 *
 * @method SendMailsQuery groupById() Group by the id column
 * @method SendMailsQuery groupByIsDeleted() Group by the is_deleted column
 * @method SendMailsQuery groupByUpdatedAt() Group by the updated_at column
 * @method SendMailsQuery groupByDeletedAt() Group by the deleted_at column
 * @method SendMailsQuery groupByCreatedAt() Group by the created_at column
 * @method SendMailsQuery groupByTitle() Group by the title column
 * @method SendMailsQuery groupByName() Group by the name column
 * @method SendMailsQuery groupByFromName() Group by the from_name column
 * @method SendMailsQuery groupByToName() Group by the to_name column
 * @method SendMailsQuery groupByToAddress() Group by the to_address column
 * @method SendMailsQuery groupBySubject() Group by the subject column
 * @method SendMailsQuery groupByBody() Group by the body column
 * @method SendMailsQuery groupByGroupCode() Group by the group_code column
 * @method SendMailsQuery groupByFromAddress() Group by the from_address column
 * @method SendMailsQuery groupByFinishDt() Group by the finish_dt column
 * @method SendMailsQuery groupByResult() Group by the result column
 * @method SendMailsQuery groupBySendDate() Group by the send_date column
 * @method SendMailsQuery groupBySendTime() Group by the send_time column
 * @method SendMailsQuery groupByFwTo() Group by the fw_to column
 * @method SendMailsQuery groupByServerIp() Group by the server_ip column
 * @method SendMailsQuery groupByServerName() Group by the server_name column
 * @method SendMailsQuery groupBySendMailStatusId() Group by the send_mail_status_id column
 *
 * @method SendMailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SendMailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SendMailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SendMails findOne(PropelPDO $con = null) Return the first SendMails matching the query
 * @method SendMails findOneOrCreate(PropelPDO $con = null) Return the first SendMails matching the query, or a new SendMails object populated from the query conditions when no match is found
 *
 * @method SendMails findOneByIsDeleted(int $is_deleted) Return the first SendMails filtered by the is_deleted column
 * @method SendMails findOneByUpdatedAt(string $updated_at) Return the first SendMails filtered by the updated_at column
 * @method SendMails findOneByDeletedAt(string $deleted_at) Return the first SendMails filtered by the deleted_at column
 * @method SendMails findOneByCreatedAt(string $created_at) Return the first SendMails filtered by the created_at column
 * @method SendMails findOneByTitle(string $title) Return the first SendMails filtered by the title column
 * @method SendMails findOneByName(string $name) Return the first SendMails filtered by the name column
 * @method SendMails findOneByFromName(string $from_name) Return the first SendMails filtered by the from_name column
 * @method SendMails findOneByToName(string $to_name) Return the first SendMails filtered by the to_name column
 * @method SendMails findOneByToAddress(string $to_address) Return the first SendMails filtered by the to_address column
 * @method SendMails findOneBySubject(string $subject) Return the first SendMails filtered by the subject column
 * @method SendMails findOneByBody(string $body) Return the first SendMails filtered by the body column
 * @method SendMails findOneByGroupCode(string $group_code) Return the first SendMails filtered by the group_code column
 * @method SendMails findOneByFromAddress(string $from_address) Return the first SendMails filtered by the from_address column
 * @method SendMails findOneByFinishDt(string $finish_dt) Return the first SendMails filtered by the finish_dt column
 * @method SendMails findOneByResult(int $result) Return the first SendMails filtered by the result column
 * @method SendMails findOneBySendDate(string $send_date) Return the first SendMails filtered by the send_date column
 * @method SendMails findOneBySendTime(string $send_time) Return the first SendMails filtered by the send_time column
 * @method SendMails findOneByFwTo(string $fw_to) Return the first SendMails filtered by the fw_to column
 * @method SendMails findOneByServerIp(string $server_ip) Return the first SendMails filtered by the server_ip column
 * @method SendMails findOneByServerName(string $server_name) Return the first SendMails filtered by the server_name column
 * @method SendMails findOneBySendMailStatusId(string $send_mail_status_id) Return the first SendMails filtered by the send_mail_status_id column
 *
 * @method array findById(int $id) Return SendMails objects filtered by the id column
 * @method array findByIsDeleted(int $is_deleted) Return SendMails objects filtered by the is_deleted column
 * @method array findByUpdatedAt(string $updated_at) Return SendMails objects filtered by the updated_at column
 * @method array findByDeletedAt(string $deleted_at) Return SendMails objects filtered by the deleted_at column
 * @method array findByCreatedAt(string $created_at) Return SendMails objects filtered by the created_at column
 * @method array findByTitle(string $title) Return SendMails objects filtered by the title column
 * @method array findByName(string $name) Return SendMails objects filtered by the name column
 * @method array findByFromName(string $from_name) Return SendMails objects filtered by the from_name column
 * @method array findByToName(string $to_name) Return SendMails objects filtered by the to_name column
 * @method array findByToAddress(string $to_address) Return SendMails objects filtered by the to_address column
 * @method array findBySubject(string $subject) Return SendMails objects filtered by the subject column
 * @method array findByBody(string $body) Return SendMails objects filtered by the body column
 * @method array findByGroupCode(string $group_code) Return SendMails objects filtered by the group_code column
 * @method array findByFromAddress(string $from_address) Return SendMails objects filtered by the from_address column
 * @method array findByFinishDt(string $finish_dt) Return SendMails objects filtered by the finish_dt column
 * @method array findByResult(int $result) Return SendMails objects filtered by the result column
 * @method array findBySendDate(string $send_date) Return SendMails objects filtered by the send_date column
 * @method array findBySendTime(string $send_time) Return SendMails objects filtered by the send_time column
 * @method array findByFwTo(string $fw_to) Return SendMails objects filtered by the fw_to column
 * @method array findByServerIp(string $server_ip) Return SendMails objects filtered by the server_ip column
 * @method array findByServerName(string $server_name) Return SendMails objects filtered by the server_name column
 * @method array findBySendMailStatusId(string $send_mail_status_id) Return SendMails objects filtered by the send_mail_status_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSendMailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSendMailsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'incl2';
        }
        if (null === $modelName) {
            $modelName = 'SendMails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SendMailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SendMailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SendMailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SendMailsQuery) {
            return $criteria;
        }
        $query = new SendMailsQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   SendMails|SendMails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SendMailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SendMailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SendMails A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SendMails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT "id", "is_deleted", "updated_at", "deleted_at", "created_at", "title", "name", "from_name", "to_name", "to_address", "subject", "body", "group_code", "from_address", "finish_dt", "result", "send_date", "send_time", "fw_to", "server_ip", "server_name", "send_mail_status_id" FROM "send_mails" WHERE "id" = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new SendMails();
            $obj->hydrate($row);
            SendMailsPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return SendMails|SendMails[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|SendMails[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SendMailsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SendMailsPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SendMailsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SendMailsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the is_deleted column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDeleted(1234); // WHERE is_deleted = 1234
     * $query->filterByIsDeleted(array(12, 34)); // WHERE is_deleted IN (12, 34)
     * $query->filterByIsDeleted(array('min' => 12)); // WHERE is_deleted >= 12
     * $query->filterByIsDeleted(array('max' => 12)); // WHERE is_deleted <= 12
     * </code>
     *
     * @param     mixed $isDeleted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByIsDeleted($isDeleted = null, $comparison = null)
    {
        if (is_array($isDeleted)) {
            $useMinMax = false;
            if (isset($isDeleted['min'])) {
                $this->addUsingAlias(SendMailsPeer::IS_DELETED, $isDeleted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDeleted['max'])) {
                $this->addUsingAlias(SendMailsPeer::IS_DELETED, $isDeleted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::IS_DELETED, $isDeleted, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(SendMailsPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(SendMailsPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the deleted_at column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletedAt('2011-03-14'); // WHERE deleted_at = '2011-03-14'
     * $query->filterByDeletedAt('now'); // WHERE deleted_at = '2011-03-14'
     * $query->filterByDeletedAt(array('max' => 'yesterday')); // WHERE deleted_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $deletedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(SendMailsPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(SendMailsPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::DELETED_AT, $deletedAt, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(SendMailsPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(SendMailsPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the from_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFromName('fooValue');   // WHERE from_name = 'fooValue'
     * $query->filterByFromName('%fooValue%'); // WHERE from_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fromName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByFromName($fromName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fromName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fromName)) {
                $fromName = str_replace('*', '%', $fromName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::FROM_NAME, $fromName, $comparison);
    }

    /**
     * Filter the query on the to_name column
     *
     * Example usage:
     * <code>
     * $query->filterByToName('fooValue');   // WHERE to_name = 'fooValue'
     * $query->filterByToName('%fooValue%'); // WHERE to_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $toName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByToName($toName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($toName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $toName)) {
                $toName = str_replace('*', '%', $toName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::TO_NAME, $toName, $comparison);
    }

    /**
     * Filter the query on the to_address column
     *
     * Example usage:
     * <code>
     * $query->filterByToAddress('fooValue');   // WHERE to_address = 'fooValue'
     * $query->filterByToAddress('%fooValue%'); // WHERE to_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $toAddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByToAddress($toAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($toAddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $toAddress)) {
                $toAddress = str_replace('*', '%', $toAddress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::TO_ADDRESS, $toAddress, $comparison);
    }

    /**
     * Filter the query on the subject column
     *
     * Example usage:
     * <code>
     * $query->filterBySubject('fooValue');   // WHERE subject = 'fooValue'
     * $query->filterBySubject('%fooValue%'); // WHERE subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterBySubject($subject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subject)) {
                $subject = str_replace('*', '%', $subject);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::SUBJECT, $subject, $comparison);
    }

    /**
     * Filter the query on the body column
     *
     * Example usage:
     * <code>
     * $query->filterByBody('fooValue');   // WHERE body = 'fooValue'
     * $query->filterByBody('%fooValue%'); // WHERE body LIKE '%fooValue%'
     * </code>
     *
     * @param     string $body The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByBody($body = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($body)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $body)) {
                $body = str_replace('*', '%', $body);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::BODY, $body, $comparison);
    }

    /**
     * Filter the query on the group_code column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupCode('fooValue');   // WHERE group_code = 'fooValue'
     * $query->filterByGroupCode('%fooValue%'); // WHERE group_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByGroupCode($groupCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $groupCode)) {
                $groupCode = str_replace('*', '%', $groupCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::GROUP_CODE, $groupCode, $comparison);
    }

    /**
     * Filter the query on the from_address column
     *
     * Example usage:
     * <code>
     * $query->filterByFromAddress('fooValue');   // WHERE from_address = 'fooValue'
     * $query->filterByFromAddress('%fooValue%'); // WHERE from_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fromAddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByFromAddress($fromAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fromAddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fromAddress)) {
                $fromAddress = str_replace('*', '%', $fromAddress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::FROM_ADDRESS, $fromAddress, $comparison);
    }

    /**
     * Filter the query on the finish_dt column
     *
     * Example usage:
     * <code>
     * $query->filterByFinishDt('2011-03-14'); // WHERE finish_dt = '2011-03-14'
     * $query->filterByFinishDt('now'); // WHERE finish_dt = '2011-03-14'
     * $query->filterByFinishDt(array('max' => 'yesterday')); // WHERE finish_dt < '2011-03-13'
     * </code>
     *
     * @param     mixed $finishDt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByFinishDt($finishDt = null, $comparison = null)
    {
        if (is_array($finishDt)) {
            $useMinMax = false;
            if (isset($finishDt['min'])) {
                $this->addUsingAlias(SendMailsPeer::FINISH_DT, $finishDt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finishDt['max'])) {
                $this->addUsingAlias(SendMailsPeer::FINISH_DT, $finishDt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::FINISH_DT, $finishDt, $comparison);
    }

    /**
     * Filter the query on the result column
     *
     * Example usage:
     * <code>
     * $query->filterByResult(1234); // WHERE result = 1234
     * $query->filterByResult(array(12, 34)); // WHERE result IN (12, 34)
     * $query->filterByResult(array('min' => 12)); // WHERE result >= 12
     * $query->filterByResult(array('max' => 12)); // WHERE result <= 12
     * </code>
     *
     * @param     mixed $result The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByResult($result = null, $comparison = null)
    {
        if (is_array($result)) {
            $useMinMax = false;
            if (isset($result['min'])) {
                $this->addUsingAlias(SendMailsPeer::RESULT, $result['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($result['max'])) {
                $this->addUsingAlias(SendMailsPeer::RESULT, $result['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::RESULT, $result, $comparison);
    }

    /**
     * Filter the query on the send_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySendDate('2011-03-14'); // WHERE send_date = '2011-03-14'
     * $query->filterBySendDate('now'); // WHERE send_date = '2011-03-14'
     * $query->filterBySendDate(array('max' => 'yesterday')); // WHERE send_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $sendDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(SendMailsPeer::SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(SendMailsPeer::SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::SEND_DATE, $sendDate, $comparison);
    }

    /**
     * Filter the query on the send_time column
     *
     * Example usage:
     * <code>
     * $query->filterBySendTime('2011-03-14'); // WHERE send_time = '2011-03-14'
     * $query->filterBySendTime('now'); // WHERE send_time = '2011-03-14'
     * $query->filterBySendTime(array('max' => 'yesterday')); // WHERE send_time < '2011-03-13'
     * </code>
     *
     * @param     mixed $sendTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterBySendTime($sendTime = null, $comparison = null)
    {
        if (is_array($sendTime)) {
            $useMinMax = false;
            if (isset($sendTime['min'])) {
                $this->addUsingAlias(SendMailsPeer::SEND_TIME, $sendTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendTime['max'])) {
                $this->addUsingAlias(SendMailsPeer::SEND_TIME, $sendTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::SEND_TIME, $sendTime, $comparison);
    }

    /**
     * Filter the query on the fw_to column
     *
     * Example usage:
     * <code>
     * $query->filterByFwTo('fooValue');   // WHERE fw_to = 'fooValue'
     * $query->filterByFwTo('%fooValue%'); // WHERE fw_to LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fwTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByFwTo($fwTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fwTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fwTo)) {
                $fwTo = str_replace('*', '%', $fwTo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::FW_TO, $fwTo, $comparison);
    }

    /**
     * Filter the query on the server_ip column
     *
     * Example usage:
     * <code>
     * $query->filterByServerIp('fooValue');   // WHERE server_ip = 'fooValue'
     * $query->filterByServerIp('%fooValue%'); // WHERE server_ip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serverIp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByServerIp($serverIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serverIp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $serverIp)) {
                $serverIp = str_replace('*', '%', $serverIp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::SERVER_IP, $serverIp, $comparison);
    }

    /**
     * Filter the query on the server_name column
     *
     * Example usage:
     * <code>
     * $query->filterByServerName('fooValue');   // WHERE server_name = 'fooValue'
     * $query->filterByServerName('%fooValue%'); // WHERE server_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serverName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterByServerName($serverName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serverName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $serverName)) {
                $serverName = str_replace('*', '%', $serverName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::SERVER_NAME, $serverName, $comparison);
    }

    /**
     * Filter the query on the send_mail_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySendMailStatusId(1234); // WHERE send_mail_status_id = 1234
     * $query->filterBySendMailStatusId(array(12, 34)); // WHERE send_mail_status_id IN (12, 34)
     * $query->filterBySendMailStatusId(array('min' => 12)); // WHERE send_mail_status_id >= 12
     * $query->filterBySendMailStatusId(array('max' => 12)); // WHERE send_mail_status_id <= 12
     * </code>
     *
     * @param     mixed $sendMailStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function filterBySendMailStatusId($sendMailStatusId = null, $comparison = null)
    {
        if (is_array($sendMailStatusId)) {
            $useMinMax = false;
            if (isset($sendMailStatusId['min'])) {
                $this->addUsingAlias(SendMailsPeer::SEND_MAIL_STATUS_ID, $sendMailStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendMailStatusId['max'])) {
                $this->addUsingAlias(SendMailsPeer::SEND_MAIL_STATUS_ID, $sendMailStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SendMailsPeer::SEND_MAIL_STATUS_ID, $sendMailStatusId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SendMails $sendMails Object to remove from the list of results
     *
     * @return SendMailsQuery The current query, for fluid interface
     */
    public function prune($sendMails = null)
    {
        if ($sendMails) {
            $this->addUsingAlias(SendMailsPeer::ID, $sendMails->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
