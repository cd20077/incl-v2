<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 *
 *
 * @method UserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UserQuery orderByIsDeleted($order = Criteria::ASC) Order by the is_deleted column
 * @method UserQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method UserQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method UserQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method UserQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method UserQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method UserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method UserQuery orderByUserimg($order = Criteria::ASC) Order by the userimg column
 * @method UserQuery orderByBackimg($order = Criteria::ASC) Order by the backimg column
 * @method UserQuery orderByMaxcapa($order = Criteria::ASC) Order by the maxcapa column
 * @method UserQuery orderByPrecapa($order = Criteria::ASC) Order by the precapa column
 * @method UserQuery orderByUserStatusId($order = Criteria::ASC) Order by the user_status_id column
 * @method UserQuery orderByRandnum($order = Criteria::ASC) Order by the randnum column
 * @method UserQuery orderByRandid($order = Criteria::ASC) Order by the randid column
 * @method UserQuery orderByLangid($order = Criteria::ASC) Order by the langid column
 *
 * @method UserQuery groupById() Group by the id column
 * @method UserQuery groupByIsDeleted() Group by the is_deleted column
 * @method UserQuery groupByUpdatedAt() Group by the updated_at column
 * @method UserQuery groupByDeletedAt() Group by the deleted_at column
 * @method UserQuery groupByCreatedAt() Group by the created_at column
 * @method UserQuery groupByName() Group by the name column
 * @method UserQuery groupByMail() Group by the mail column
 * @method UserQuery groupByPassword() Group by the password column
 * @method UserQuery groupByUserimg() Group by the userimg column
 * @method UserQuery groupByBackimg() Group by the backimg column
 * @method UserQuery groupByMaxcapa() Group by the maxcapa column
 * @method UserQuery groupByPrecapa() Group by the precapa column
 * @method UserQuery groupByUserStatusId() Group by the user_status_id column
 * @method UserQuery groupByRandnum() Group by the randnum column
 * @method UserQuery groupByRandid() Group by the randid column
 * @method UserQuery groupByLangid() Group by the langid column
 *
 * @method UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserQuery leftJoinUserStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserStatus relation
 * @method UserQuery rightJoinUserStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserStatus relation
 * @method UserQuery innerJoinUserStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the UserStatus relation
 *
 * @method UserQuery leftJoinFile($relationAlias = null) Adds a LEFT JOIN clause to the query using the File relation
 * @method UserQuery rightJoinFile($relationAlias = null) Adds a RIGHT JOIN clause to the query using the File relation
 * @method UserQuery innerJoinFile($relationAlias = null) Adds a INNER JOIN clause to the query using the File relation
 *
 * @method UserQuery leftJoinGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the Group relation
 * @method UserQuery rightJoinGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Group relation
 * @method UserQuery innerJoinGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the Group relation
 *
 * @method UserQuery leftJoinGroupMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the GroupMember relation
 * @method UserQuery rightJoinGroupMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GroupMember relation
 * @method UserQuery innerJoinGroupMember($relationAlias = null) Adds a INNER JOIN clause to the query using the GroupMember relation
 *
 * @method UserQuery leftJoinUserLog($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserLog relation
 * @method UserQuery rightJoinUserLog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserLog relation
 * @method UserQuery innerJoinUserLog($relationAlias = null) Adds a INNER JOIN clause to the query using the UserLog relation
 *
 * @method User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method User findOneByIsDeleted(int $is_deleted) Return the first User filtered by the is_deleted column
 * @method User findOneByUpdatedAt(string $updated_at) Return the first User filtered by the updated_at column
 * @method User findOneByDeletedAt(string $deleted_at) Return the first User filtered by the deleted_at column
 * @method User findOneByCreatedAt(string $created_at) Return the first User filtered by the created_at column
 * @method User findOneByName(string $name) Return the first User filtered by the name column
 * @method User findOneByMail(string $mail) Return the first User filtered by the mail column
 * @method User findOneByPassword(string $password) Return the first User filtered by the password column
 * @method User findOneByUserimg(string $userimg) Return the first User filtered by the userimg column
 * @method User findOneByBackimg(string $backimg) Return the first User filtered by the backimg column
 * @method User findOneByMaxcapa(int $maxcapa) Return the first User filtered by the maxcapa column
 * @method User findOneByPrecapa(int $precapa) Return the first User filtered by the precapa column
 * @method User findOneByUserStatusId(int $user_status_id) Return the first User filtered by the user_status_id column
 * @method User findOneByRandnum(string $randnum) Return the first User filtered by the randnum column
 * @method User findOneByRandid(string $randid) Return the first User filtered by the randid column
 * @method User findOneByLangid(int $langid) Return the first User filtered by the langid column
 *
 * @method array findById(int $id) Return User objects filtered by the id column
 * @method array findByIsDeleted(int $is_deleted) Return User objects filtered by the is_deleted column
 * @method array findByUpdatedAt(string $updated_at) Return User objects filtered by the updated_at column
 * @method array findByDeletedAt(string $deleted_at) Return User objects filtered by the deleted_at column
 * @method array findByCreatedAt(string $created_at) Return User objects filtered by the created_at column
 * @method array findByName(string $name) Return User objects filtered by the name column
 * @method array findByMail(string $mail) Return User objects filtered by the mail column
 * @method array findByPassword(string $password) Return User objects filtered by the password column
 * @method array findByUserimg(string $userimg) Return User objects filtered by the userimg column
 * @method array findByBackimg(string $backimg) Return User objects filtered by the backimg column
 * @method array findByMaxcapa(int $maxcapa) Return User objects filtered by the maxcapa column
 * @method array findByPrecapa(int $precapa) Return User objects filtered by the precapa column
 * @method array findByUserStatusId(int $user_status_id) Return User objects filtered by the user_status_id column
 * @method array findByRandnum(string $randnum) Return User objects filtered by the randnum column
 * @method array findByRandid(string $randid) Return User objects filtered by the randid column
 * @method array findByLangid(int $langid) Return User objects filtered by the langid column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseUserQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserQuery object.
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
            $modelName = 'User';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UserQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserQuery) {
            return $criteria;
        }
        $query = new UserQuery(null, null, $modelAlias);

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
     * @return   User|User[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 User A model object, or null if the key is not found
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
     * @return                 User A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT "id", "is_deleted", "updated_at", "deleted_at", "created_at", "name", "mail", "password", "userimg", "backimg", "maxcapa", "precapa", "user_status_id", "randnum", "randid", "langid" FROM "user" WHERE "id" = :p0';
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
            $obj = new User();
            $obj->hydrate($row);
            UserPeer::addInstanceToPool($obj, (string) $key);
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
     * @return User|User[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|User[]|mixed the list of results, formatted by the current formatter
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserPeer::ID, $keys, Criteria::IN);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(UserPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(UserPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::ID, $id, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByIsDeleted($isDeleted = null, $comparison = null)
    {
        if (is_array($isDeleted)) {
            $useMinMax = false;
            if (isset($isDeleted['min'])) {
                $this->addUsingAlias(UserPeer::IS_DELETED, $isDeleted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDeleted['max'])) {
                $this->addUsingAlias(UserPeer::IS_DELETED, $isDeleted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::IS_DELETED, $isDeleted, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(UserPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(UserPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(UserPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(UserPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return UserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UserPeer::NAME, $name, $comparison);
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
     * @return UserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UserPeer::MAIL, $mail, $comparison);
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
     * @return UserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UserPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the userimg column
     *
     * Example usage:
     * <code>
     * $query->filterByUserimg('fooValue');   // WHERE userimg = 'fooValue'
     * $query->filterByUserimg('%fooValue%'); // WHERE userimg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userimg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByUserimg($userimg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userimg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userimg)) {
                $userimg = str_replace('*', '%', $userimg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::USERIMG, $userimg, $comparison);
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
     * @return UserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UserPeer::BACKIMG, $backimg, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByMaxcapa($maxcapa = null, $comparison = null)
    {
        if (is_array($maxcapa)) {
            $useMinMax = false;
            if (isset($maxcapa['min'])) {
                $this->addUsingAlias(UserPeer::MAXCAPA, $maxcapa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxcapa['max'])) {
                $this->addUsingAlias(UserPeer::MAXCAPA, $maxcapa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::MAXCAPA, $maxcapa, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrecapa($precapa = null, $comparison = null)
    {
        if (is_array($precapa)) {
            $useMinMax = false;
            if (isset($precapa['min'])) {
                $this->addUsingAlias(UserPeer::PRECAPA, $precapa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($precapa['max'])) {
                $this->addUsingAlias(UserPeer::PRECAPA, $precapa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::PRECAPA, $precapa, $comparison);
    }

    /**
     * Filter the query on the user_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserStatusId(1234); // WHERE user_status_id = 1234
     * $query->filterByUserStatusId(array(12, 34)); // WHERE user_status_id IN (12, 34)
     * $query->filterByUserStatusId(array('min' => 12)); // WHERE user_status_id >= 12
     * $query->filterByUserStatusId(array('max' => 12)); // WHERE user_status_id <= 12
     * </code>
     *
     * @see       filterByUserStatus()
     *
     * @param     mixed $userStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByUserStatusId($userStatusId = null, $comparison = null)
    {
        if (is_array($userStatusId)) {
            $useMinMax = false;
            if (isset($userStatusId['min'])) {
                $this->addUsingAlias(UserPeer::USER_STATUS_ID, $userStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userStatusId['max'])) {
                $this->addUsingAlias(UserPeer::USER_STATUS_ID, $userStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::USER_STATUS_ID, $userStatusId, $comparison);
    }

    /**
     * Filter the query on the randnum column
     *
     * Example usage:
     * <code>
     * $query->filterByRandnum('fooValue');   // WHERE randnum = 'fooValue'
     * $query->filterByRandnum('%fooValue%'); // WHERE randnum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $randnum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByRandnum($randnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($randnum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $randnum)) {
                $randnum = str_replace('*', '%', $randnum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::RANDNUM, $randnum, $comparison);
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
     * @return UserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UserPeer::RANDID, $randid, $comparison);
    }

    /**
     * Filter the query on the langid column
     *
     * Example usage:
     * <code>
     * $query->filterByLangid(1234); // WHERE langid = 1234
     * $query->filterByLangid(array(12, 34)); // WHERE langid IN (12, 34)
     * $query->filterByLangid(array('min' => 12)); // WHERE langid >= 12
     * $query->filterByLangid(array('max' => 12)); // WHERE langid <= 12
     * </code>
     *
     * @param     mixed $langid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByLangid($langid = null, $comparison = null)
    {
        if (is_array($langid)) {
            $useMinMax = false;
            if (isset($langid['min'])) {
                $this->addUsingAlias(UserPeer::LANGID, $langid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($langid['max'])) {
                $this->addUsingAlias(UserPeer::LANGID, $langid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::LANGID, $langid, $comparison);
    }

    /**
     * Filter the query by a related UserStatus object
     *
     * @param   UserStatus|PropelObjectCollection $userStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUserStatus($userStatus, $comparison = null)
    {
        if ($userStatus instanceof UserStatus) {
            return $this
                ->addUsingAlias(UserPeer::USER_STATUS_ID, $userStatus->getId(), $comparison);
        } elseif ($userStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserPeer::USER_STATUS_ID, $userStatus->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUserStatus() only accepts arguments of type UserStatus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserStatus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinUserStatus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserStatus');

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
            $this->addJoinObject($join, 'UserStatus');
        }

        return $this;
    }

    /**
     * Use the UserStatus relation UserStatus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserStatusQuery A secondary query class using the current class as primary query
     */
    public function useUserStatusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUserStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserStatus', 'UserStatusQuery');
    }

    /**
     * Filter the query by a related File object
     *
     * @param   File|PropelObjectCollection $file  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFile($file, $comparison = null)
    {
        if ($file instanceof File) {
            return $this
                ->addUsingAlias(UserPeer::ID, $file->getUserId(), $comparison);
        } elseif ($file instanceof PropelObjectCollection) {
            return $this
                ->useFileQuery()
                ->filterByPrimaryKeys($file->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFile() only accepts arguments of type File or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the File relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinFile($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('File');

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
            $this->addJoinObject($join, 'File');
        }

        return $this;
    }

    /**
     * Use the File relation File object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FileQuery A secondary query class using the current class as primary query
     */
    public function useFileQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFile($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'File', 'FileQuery');
    }

    /**
     * Filter the query by a related Group object
     *
     * @param   Group|PropelObjectCollection $group  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGroup($group, $comparison = null)
    {
        if ($group instanceof Group) {
            return $this
                ->addUsingAlias(UserPeer::ID, $group->getUserId(), $comparison);
        } elseif ($group instanceof PropelObjectCollection) {
            return $this
                ->useGroupQuery()
                ->filterByPrimaryKeys($group->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGroup() only accepts arguments of type Group or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Group relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinGroup($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Group');

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
            $this->addJoinObject($join, 'Group');
        }

        return $this;
    }

    /**
     * Use the Group relation Group object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GroupQuery A secondary query class using the current class as primary query
     */
    public function useGroupQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Group', 'GroupQuery');
    }

    /**
     * Filter the query by a related GroupMember object
     *
     * @param   GroupMember|PropelObjectCollection $groupMember  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGroupMember($groupMember, $comparison = null)
    {
        if ($groupMember instanceof GroupMember) {
            return $this
                ->addUsingAlias(UserPeer::ID, $groupMember->getUserId(), $comparison);
        } elseif ($groupMember instanceof PropelObjectCollection) {
            return $this
                ->useGroupMemberQuery()
                ->filterByPrimaryKeys($groupMember->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGroupMember() only accepts arguments of type GroupMember or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GroupMember relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinGroupMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GroupMember');

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
            $this->addJoinObject($join, 'GroupMember');
        }

        return $this;
    }

    /**
     * Use the GroupMember relation GroupMember object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GroupMemberQuery A secondary query class using the current class as primary query
     */
    public function useGroupMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGroupMember($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GroupMember', 'GroupMemberQuery');
    }

    /**
     * Filter the query by a related UserLog object
     *
     * @param   UserLog|PropelObjectCollection $userLog  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUserLog($userLog, $comparison = null)
    {
        if ($userLog instanceof UserLog) {
            return $this
                ->addUsingAlias(UserPeer::ID, $userLog->getUserId(), $comparison);
        } elseif ($userLog instanceof PropelObjectCollection) {
            return $this
                ->useUserLogQuery()
                ->filterByPrimaryKeys($userLog->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUserLog() only accepts arguments of type UserLog or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserLog relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinUserLog($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserLog');

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
            $this->addJoinObject($join, 'UserLog');
        }

        return $this;
    }

    /**
     * Use the UserLog relation UserLog object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserLogQuery A secondary query class using the current class as primary query
     */
    public function useUserLogQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUserLog($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserLog', 'UserLogQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   User $user Object to remove from the list of results
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function prune($user = null)
    {
        if ($user) {
            $this->addUsingAlias(UserPeer::ID, $user->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
