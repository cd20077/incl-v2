<?php


/**
 * Base class that represents a query for the 'account' table.
 *
 *
 *
 * @method AccountQuery orderById($order = Criteria::ASC) Order by the id column
 * @method AccountQuery orderByIsDeleted($order = Criteria::ASC) Order by the is_deleted column
 * @method AccountQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method AccountQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method AccountQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method AccountQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method AccountQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method AccountQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method AccountQuery orderByAccountimg($order = Criteria::ASC) Order by the accountimg column
 * @method AccountQuery orderByBackimg($order = Criteria::ASC) Order by the backimg column
 * @method AccountQuery orderByMaxcapa($order = Criteria::ASC) Order by the maxcapa column
 * @method AccountQuery orderByPrecapa($order = Criteria::ASC) Order by the precapa column
 * @method AccountQuery orderByAccountStatusId($order = Criteria::ASC) Order by the account_status_id column
 * @method AccountQuery orderByProvisionalKey($order = Criteria::ASC) Order by the provisional_key column
 * @method AccountQuery orderByRandid($order = Criteria::ASC) Order by the randid column
 * @method AccountQuery orderByLanguageId($order = Criteria::ASC) Order by the language_id column
 *
 * @method AccountQuery groupById() Group by the id column
 * @method AccountQuery groupByIsDeleted() Group by the is_deleted column
 * @method AccountQuery groupByUpdatedAt() Group by the updated_at column
 * @method AccountQuery groupByDeletedAt() Group by the deleted_at column
 * @method AccountQuery groupByCreatedAt() Group by the created_at column
 * @method AccountQuery groupByName() Group by the name column
 * @method AccountQuery groupByMail() Group by the mail column
 * @method AccountQuery groupByPassword() Group by the password column
 * @method AccountQuery groupByAccountimg() Group by the accountimg column
 * @method AccountQuery groupByBackimg() Group by the backimg column
 * @method AccountQuery groupByMaxcapa() Group by the maxcapa column
 * @method AccountQuery groupByPrecapa() Group by the precapa column
 * @method AccountQuery groupByAccountStatusId() Group by the account_status_id column
 * @method AccountQuery groupByProvisionalKey() Group by the provisional_key column
 * @method AccountQuery groupByRandid() Group by the randid column
 * @method AccountQuery groupByLanguageId() Group by the language_id column
 *
 * @method AccountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AccountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AccountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AccountQuery leftJoinAccountStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the AccountStatus relation
 * @method AccountQuery rightJoinAccountStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AccountStatus relation
 * @method AccountQuery innerJoinAccountStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the AccountStatus relation
 *
 * @method AccountQuery leftJoinLanguage($relationAlias = null) Adds a LEFT JOIN clause to the query using the Language relation
 * @method AccountQuery rightJoinLanguage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Language relation
 * @method AccountQuery innerJoinLanguage($relationAlias = null) Adds a INNER JOIN clause to the query using the Language relation
 *
 * @method AccountQuery leftJoinAccountLog($relationAlias = null) Adds a LEFT JOIN clause to the query using the AccountLog relation
 * @method AccountQuery rightJoinAccountLog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AccountLog relation
 * @method AccountQuery innerJoinAccountLog($relationAlias = null) Adds a INNER JOIN clause to the query using the AccountLog relation
 *
 * @method AccountQuery leftJoinContent($relationAlias = null) Adds a LEFT JOIN clause to the query using the Content relation
 * @method AccountQuery rightJoinContent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Content relation
 * @method AccountQuery innerJoinContent($relationAlias = null) Adds a INNER JOIN clause to the query using the Content relation
 *
 * @method AccountQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method AccountQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method AccountQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method AccountQuery leftJoinProjectMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProjectMember relation
 * @method AccountQuery rightJoinProjectMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProjectMember relation
 * @method AccountQuery innerJoinProjectMember($relationAlias = null) Adds a INNER JOIN clause to the query using the ProjectMember relation
 *
 * @method Account findOne(PropelPDO $con = null) Return the first Account matching the query
 * @method Account findOneOrCreate(PropelPDO $con = null) Return the first Account matching the query, or a new Account object populated from the query conditions when no match is found
 *
 * @method Account findOneByIsDeleted(int $is_deleted) Return the first Account filtered by the is_deleted column
 * @method Account findOneByUpdatedAt(string $updated_at) Return the first Account filtered by the updated_at column
 * @method Account findOneByDeletedAt(string $deleted_at) Return the first Account filtered by the deleted_at column
 * @method Account findOneByCreatedAt(string $created_at) Return the first Account filtered by the created_at column
 * @method Account findOneByName(string $name) Return the first Account filtered by the name column
 * @method Account findOneByMail(string $mail) Return the first Account filtered by the mail column
 * @method Account findOneByPassword(string $password) Return the first Account filtered by the password column
 * @method Account findOneByAccountimg(string $accountimg) Return the first Account filtered by the accountimg column
 * @method Account findOneByBackimg(string $backimg) Return the first Account filtered by the backimg column
 * @method Account findOneByMaxcapa(int $maxcapa) Return the first Account filtered by the maxcapa column
 * @method Account findOneByPrecapa(int $precapa) Return the first Account filtered by the precapa column
 * @method Account findOneByAccountStatusId(int $account_status_id) Return the first Account filtered by the account_status_id column
 * @method Account findOneByProvisionalKey(string $provisional_key) Return the first Account filtered by the provisional_key column
 * @method Account findOneByRandid(string $randid) Return the first Account filtered by the randid column
 * @method Account findOneByLanguageId(int $language_id) Return the first Account filtered by the language_id column
 *
 * @method array findById(int $id) Return Account objects filtered by the id column
 * @method array findByIsDeleted(int $is_deleted) Return Account objects filtered by the is_deleted column
 * @method array findByUpdatedAt(string $updated_at) Return Account objects filtered by the updated_at column
 * @method array findByDeletedAt(string $deleted_at) Return Account objects filtered by the deleted_at column
 * @method array findByCreatedAt(string $created_at) Return Account objects filtered by the created_at column
 * @method array findByName(string $name) Return Account objects filtered by the name column
 * @method array findByMail(string $mail) Return Account objects filtered by the mail column
 * @method array findByPassword(string $password) Return Account objects filtered by the password column
 * @method array findByAccountimg(string $accountimg) Return Account objects filtered by the accountimg column
 * @method array findByBackimg(string $backimg) Return Account objects filtered by the backimg column
 * @method array findByMaxcapa(int $maxcapa) Return Account objects filtered by the maxcapa column
 * @method array findByPrecapa(int $precapa) Return Account objects filtered by the precapa column
 * @method array findByAccountStatusId(int $account_status_id) Return Account objects filtered by the account_status_id column
 * @method array findByProvisionalKey(string $provisional_key) Return Account objects filtered by the provisional_key column
 * @method array findByRandid(string $randid) Return Account objects filtered by the randid column
 * @method array findByLanguageId(int $language_id) Return Account objects filtered by the language_id column
 *
 * @package    propel.generator.lib.model.incl2.om
 */
abstract class BaseAccountQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAccountQuery object.
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
            $modelName = 'Account';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AccountQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AccountQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AccountQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AccountQuery) {
            return $criteria;
        }
        $query = new AccountQuery(null, null, $modelAlias);

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
     * @return   Account|Account[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AccountPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AccountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Account A model object, or null if the key is not found
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
     * @return                 Account A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT "id", "is_deleted", "updated_at", "deleted_at", "created_at", "name", "mail", "password", "accountimg", "backimg", "maxcapa", "precapa", "account_status_id", "provisional_key", "randid", "language_id" FROM "account" WHERE "id" = :p0';
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
            $obj = new Account();
            $obj->hydrate($row);
            AccountPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Account|Account[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Account[]|mixed the list of results, formatted by the current formatter
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
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AccountPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AccountPeer::ID, $keys, Criteria::IN);
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
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AccountPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AccountPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::ID, $id, $comparison);
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
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByIsDeleted($isDeleted = null, $comparison = null)
    {
        if (is_array($isDeleted)) {
            $useMinMax = false;
            if (isset($isDeleted['min'])) {
                $this->addUsingAlias(AccountPeer::IS_DELETED, $isDeleted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDeleted['max'])) {
                $this->addUsingAlias(AccountPeer::IS_DELETED, $isDeleted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::IS_DELETED, $isDeleted, $comparison);
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
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(AccountPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(AccountPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(AccountPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(AccountPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(AccountPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(AccountPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return AccountQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AccountPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AccountPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AccountPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the accountimg column
     *
     * Example usage:
     * <code>
     * $query->filterByAccountimg('fooValue');   // WHERE accountimg = 'fooValue'
     * $query->filterByAccountimg('%fooValue%'); // WHERE accountimg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accountimg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByAccountimg($accountimg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accountimg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accountimg)) {
                $accountimg = str_replace('*', '%', $accountimg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AccountPeer::ACCOUNTIMG, $accountimg, $comparison);
    }

    /**
     * Filter the query on the backimg column
     *
     * Example usage:
     * <code>
     * $query->filterByBackimg('fooValue');   // WHERE backimg = 'fooValue'
     * $query->filterByBackimg('%fooValue%'); // WHERE backimg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $backimg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByBackimg($backimg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($backimg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $backimg)) {
                $backimg = str_replace('*', '%', $backimg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AccountPeer::BACKIMG, $backimg, $comparison);
    }

    /**
     * Filter the query on the maxcapa column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxcapa(1234); // WHERE maxcapa = 1234
     * $query->filterByMaxcapa(array(12, 34)); // WHERE maxcapa IN (12, 34)
     * $query->filterByMaxcapa(array('min' => 12)); // WHERE maxcapa >= 12
     * $query->filterByMaxcapa(array('max' => 12)); // WHERE maxcapa <= 12
     * </code>
     *
     * @param     mixed $maxcapa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByMaxcapa($maxcapa = null, $comparison = null)
    {
        if (is_array($maxcapa)) {
            $useMinMax = false;
            if (isset($maxcapa['min'])) {
                $this->addUsingAlias(AccountPeer::MAXCAPA, $maxcapa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxcapa['max'])) {
                $this->addUsingAlias(AccountPeer::MAXCAPA, $maxcapa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::MAXCAPA, $maxcapa, $comparison);
    }

    /**
     * Filter the query on the precapa column
     *
     * Example usage:
     * <code>
     * $query->filterByPrecapa(1234); // WHERE precapa = 1234
     * $query->filterByPrecapa(array(12, 34)); // WHERE precapa IN (12, 34)
     * $query->filterByPrecapa(array('min' => 12)); // WHERE precapa >= 12
     * $query->filterByPrecapa(array('max' => 12)); // WHERE precapa <= 12
     * </code>
     *
     * @param     mixed $precapa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByPrecapa($precapa = null, $comparison = null)
    {
        if (is_array($precapa)) {
            $useMinMax = false;
            if (isset($precapa['min'])) {
                $this->addUsingAlias(AccountPeer::PRECAPA, $precapa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($precapa['max'])) {
                $this->addUsingAlias(AccountPeer::PRECAPA, $precapa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::PRECAPA, $precapa, $comparison);
    }

    /**
     * Filter the query on the account_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAccountStatusId(1234); // WHERE account_status_id = 1234
     * $query->filterByAccountStatusId(array(12, 34)); // WHERE account_status_id IN (12, 34)
     * $query->filterByAccountStatusId(array('min' => 12)); // WHERE account_status_id >= 12
     * $query->filterByAccountStatusId(array('max' => 12)); // WHERE account_status_id <= 12
     * </code>
     *
     * @see       filterByAccountStatus()
     *
     * @param     mixed $accountStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByAccountStatusId($accountStatusId = null, $comparison = null)
    {
        if (is_array($accountStatusId)) {
            $useMinMax = false;
            if (isset($accountStatusId['min'])) {
                $this->addUsingAlias(AccountPeer::ACCOUNT_STATUS_ID, $accountStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($accountStatusId['max'])) {
                $this->addUsingAlias(AccountPeer::ACCOUNT_STATUS_ID, $accountStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::ACCOUNT_STATUS_ID, $accountStatusId, $comparison);
    }

    /**
     * Filter the query on the provisional_key column
     *
     * Example usage:
     * <code>
     * $query->filterByProvisionalKey('fooValue');   // WHERE provisional_key = 'fooValue'
     * $query->filterByProvisionalKey('%fooValue%'); // WHERE provisional_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $provisionalKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByProvisionalKey($provisionalKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($provisionalKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $provisionalKey)) {
                $provisionalKey = str_replace('*', '%', $provisionalKey);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AccountPeer::PROVISIONAL_KEY, $provisionalKey, $comparison);
    }

    /**
     * Filter the query on the randid column
     *
     * Example usage:
     * <code>
     * $query->filterByRandid('fooValue');   // WHERE randid = 'fooValue'
     * $query->filterByRandid('%fooValue%'); // WHERE randid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $randid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByRandid($randid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($randid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $randid)) {
                $randid = str_replace('*', '%', $randid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AccountPeer::RANDID, $randid, $comparison);
    }

    /**
     * Filter the query on the language_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguageId(1234); // WHERE language_id = 1234
     * $query->filterByLanguageId(array(12, 34)); // WHERE language_id IN (12, 34)
     * $query->filterByLanguageId(array('min' => 12)); // WHERE language_id >= 12
     * $query->filterByLanguageId(array('max' => 12)); // WHERE language_id <= 12
     * </code>
     *
     * @see       filterByLanguage()
     *
     * @param     mixed $languageId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function filterByLanguageId($languageId = null, $comparison = null)
    {
        if (is_array($languageId)) {
            $useMinMax = false;
            if (isset($languageId['min'])) {
                $this->addUsingAlias(AccountPeer::LANGUAGE_ID, $languageId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($languageId['max'])) {
                $this->addUsingAlias(AccountPeer::LANGUAGE_ID, $languageId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccountPeer::LANGUAGE_ID, $languageId, $comparison);
    }

    /**
     * Filter the query by a related AccountStatus object
     *
     * @param   AccountStatus|PropelObjectCollection $accountStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AccountQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAccountStatus($accountStatus, $comparison = null)
    {
        if ($accountStatus instanceof AccountStatus) {
            return $this
                ->addUsingAlias(AccountPeer::ACCOUNT_STATUS_ID, $accountStatus->getId(), $comparison);
        } elseif ($accountStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AccountPeer::ACCOUNT_STATUS_ID, $accountStatus->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByAccountStatus() only accepts arguments of type AccountStatus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AccountStatus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function joinAccountStatus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AccountStatus');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'AccountStatus');
        }

        return $this;
    }

    /**
     * Use the AccountStatus relation AccountStatus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AccountStatusQuery A secondary query class using the current class as primary query
     */
    public function useAccountStatusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAccountStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AccountStatus', 'AccountStatusQuery');
    }

    /**
     * Filter the query by a related Language object
     *
     * @param   Language|PropelObjectCollection $language The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AccountQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLanguage($language, $comparison = null)
    {
        if ($language instanceof Language) {
            return $this
                ->addUsingAlias(AccountPeer::LANGUAGE_ID, $language->getId(), $comparison);
        } elseif ($language instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AccountPeer::LANGUAGE_ID, $language->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByLanguage() only accepts arguments of type Language or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Language relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function joinLanguage($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Language');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Language');
        }

        return $this;
    }

    /**
     * Use the Language relation Language object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LanguageQuery A secondary query class using the current class as primary query
     */
    public function useLanguageQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLanguage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Language', 'LanguageQuery');
    }

    /**
     * Filter the query by a related AccountLog object
     *
     * @param   AccountLog|PropelObjectCollection $accountLog  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AccountQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAccountLog($accountLog, $comparison = null)
    {
        if ($accountLog instanceof AccountLog) {
            return $this
                ->addUsingAlias(AccountPeer::ID, $accountLog->getAccountId(), $comparison);
        } elseif ($accountLog instanceof PropelObjectCollection) {
            return $this
                ->useAccountLogQuery()
                ->filterByPrimaryKeys($accountLog->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAccountLog() only accepts arguments of type AccountLog or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AccountLog relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function joinAccountLog($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AccountLog');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'AccountLog');
        }

        return $this;
    }

    /**
     * Use the AccountLog relation AccountLog object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AccountLogQuery A secondary query class using the current class as primary query
     */
    public function useAccountLogQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAccountLog($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AccountLog', 'AccountLogQuery');
    }

    /**
     * Filter the query by a related Content object
     *
     * @param   Content|PropelObjectCollection $content  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AccountQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContent($content, $comparison = null)
    {
        if ($content instanceof Content) {
            return $this
                ->addUsingAlias(AccountPeer::ID, $content->getAccountId(), $comparison);
        } elseif ($content instanceof PropelObjectCollection) {
            return $this
                ->useContentQuery()
                ->filterByPrimaryKeys($content->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByContent() only accepts arguments of type Content or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Content relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function joinContent($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Content');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Content');
        }

        return $this;
    }

    /**
     * Use the Content relation Content object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContentQuery A secondary query class using the current class as primary query
     */
    public function useContentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Content', 'ContentQuery');
    }

    /**
     * Filter the query by a related Project object
     *
     * @param   Project|PropelObjectCollection $project  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AccountQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProject($project, $comparison = null)
    {
        if ($project instanceof Project) {
            return $this
                ->addUsingAlias(AccountPeer::ID, $project->getAccountId(), $comparison);
        } elseif ($project instanceof PropelObjectCollection) {
            return $this
                ->useProjectQuery()
                ->filterByPrimaryKeys($project->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProject() only accepts arguments of type Project or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Project relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function joinProject($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Project');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Project');
        }

        return $this;
    }

    /**
     * Use the Project relation Project object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectQuery A secondary query class using the current class as primary query
     */
    public function useProjectQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProject($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Project', 'ProjectQuery');
    }

    /**
     * Filter the query by a related ProjectMember object
     *
     * @param   ProjectMember|PropelObjectCollection $projectMember  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AccountQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProjectMember($projectMember, $comparison = null)
    {
        if ($projectMember instanceof ProjectMember) {
            return $this
                ->addUsingAlias(AccountPeer::ID, $projectMember->getAccountId(), $comparison);
        } elseif ($projectMember instanceof PropelObjectCollection) {
            return $this
                ->useProjectMemberQuery()
                ->filterByPrimaryKeys($projectMember->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProjectMember() only accepts arguments of type ProjectMember or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProjectMember relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function joinProjectMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProjectMember');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ProjectMember');
        }

        return $this;
    }

    /**
     * Use the ProjectMember relation ProjectMember object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectMemberQuery A secondary query class using the current class as primary query
     */
    public function useProjectMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProjectMember($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProjectMember', 'ProjectMemberQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Account $account Object to remove from the list of results
     *
     * @return AccountQuery The current query, for fluid interface
     */
    public function prune($account = null)
    {
        if ($account) {
            $this->addUsingAlias(AccountPeer::ID, $account->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
