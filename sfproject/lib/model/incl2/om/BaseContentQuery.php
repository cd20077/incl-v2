<?php


/**
 * Base class that represents a query for the 'content' table.
 *
 *
 *
 * @method ContentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ContentQuery orderByIsDeleted($order = Criteria::ASC) Order by the is_deleted column
 * @method ContentQuery orderByIsDirectory($order = Criteria::ASC) Order by the is_directory column
 * @method ContentQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method ContentQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method ContentQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method ContentQuery orderByOriginName($order = Criteria::ASC) Order by the origin_name column
 * @method ContentQuery orderByEncryptName($order = Criteria::ASC) Order by the encrypt_name column
 * @method ContentQuery orderBySize($order = Criteria::ASC) Order by the size column
 * @method ContentQuery orderByAccountId($order = Criteria::ASC) Order by the account_id column
 * @method ContentQuery orderByProjectId($order = Criteria::ASC) Order by the project_id column
 * @method ContentQuery orderByContentType($order = Criteria::ASC) Order by the content_type column
 * @method ContentQuery orderByParentDirectoryId($order = Criteria::ASC) Order by the parent_directory_id column
 * @method ContentQuery orderByContentStatusId($order = Criteria::ASC) Order by the content_status_id column
 *
 * @method ContentQuery groupById() Group by the id column
 * @method ContentQuery groupByIsDeleted() Group by the is_deleted column
 * @method ContentQuery groupByIsDirectory() Group by the is_directory column
 * @method ContentQuery groupByUpdatedAt() Group by the updated_at column
 * @method ContentQuery groupByDeletedAt() Group by the deleted_at column
 * @method ContentQuery groupByCreatedAt() Group by the created_at column
 * @method ContentQuery groupByOriginName() Group by the origin_name column
 * @method ContentQuery groupByEncryptName() Group by the encrypt_name column
 * @method ContentQuery groupBySize() Group by the size column
 * @method ContentQuery groupByAccountId() Group by the account_id column
 * @method ContentQuery groupByProjectId() Group by the project_id column
 * @method ContentQuery groupByContentType() Group by the content_type column
 * @method ContentQuery groupByParentDirectoryId() Group by the parent_directory_id column
 * @method ContentQuery groupByContentStatusId() Group by the content_status_id column
 *
 * @method ContentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ContentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ContentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ContentQuery leftJoinAccount($relationAlias = null) Adds a LEFT JOIN clause to the query using the Account relation
 * @method ContentQuery rightJoinAccount($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Account relation
 * @method ContentQuery innerJoinAccount($relationAlias = null) Adds a INNER JOIN clause to the query using the Account relation
 *
 * @method ContentQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method ContentQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method ContentQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method ContentQuery leftJoinContentRelatedByParentDirectoryId($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContentRelatedByParentDirectoryId relation
 * @method ContentQuery rightJoinContentRelatedByParentDirectoryId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContentRelatedByParentDirectoryId relation
 * @method ContentQuery innerJoinContentRelatedByParentDirectoryId($relationAlias = null) Adds a INNER JOIN clause to the query using the ContentRelatedByParentDirectoryId relation
 *
 * @method ContentQuery leftJoinContentStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContentStatus relation
 * @method ContentQuery rightJoinContentStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContentStatus relation
 * @method ContentQuery innerJoinContentStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the ContentStatus relation
 *
 * @method ContentQuery leftJoinContentRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContentRelatedById relation
 * @method ContentQuery rightJoinContentRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContentRelatedById relation
 * @method ContentQuery innerJoinContentRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the ContentRelatedById relation
 *
 * @method Content findOne(PropelPDO $con = null) Return the first Content matching the query
 * @method Content findOneOrCreate(PropelPDO $con = null) Return the first Content matching the query, or a new Content object populated from the query conditions when no match is found
 *
 * @method Content findOneByIsDeleted(int $is_deleted) Return the first Content filtered by the is_deleted column
 * @method Content findOneByIsDirectory(int $is_directory) Return the first Content filtered by the is_directory column
 * @method Content findOneByUpdatedAt(string $updated_at) Return the first Content filtered by the updated_at column
 * @method Content findOneByDeletedAt(string $deleted_at) Return the first Content filtered by the deleted_at column
 * @method Content findOneByCreatedAt(string $created_at) Return the first Content filtered by the created_at column
 * @method Content findOneByOriginName(string $origin_name) Return the first Content filtered by the origin_name column
 * @method Content findOneByEncryptName(string $encrypt_name) Return the first Content filtered by the encrypt_name column
 * @method Content findOneBySize(int $size) Return the first Content filtered by the size column
 * @method Content findOneByAccountId(int $account_id) Return the first Content filtered by the account_id column
 * @method Content findOneByProjectId(int $project_id) Return the first Content filtered by the project_id column
 * @method Content findOneByContentType(string $content_type) Return the first Content filtered by the content_type column
 * @method Content findOneByParentDirectoryId(int $parent_directory_id) Return the first Content filtered by the parent_directory_id column
 * @method Content findOneByContentStatusId(int $content_status_id) Return the first Content filtered by the content_status_id column
 *
 * @method array findById(int $id) Return Content objects filtered by the id column
 * @method array findByIsDeleted(int $is_deleted) Return Content objects filtered by the is_deleted column
 * @method array findByIsDirectory(int $is_directory) Return Content objects filtered by the is_directory column
 * @method array findByUpdatedAt(string $updated_at) Return Content objects filtered by the updated_at column
 * @method array findByDeletedAt(string $deleted_at) Return Content objects filtered by the deleted_at column
 * @method array findByCreatedAt(string $created_at) Return Content objects filtered by the created_at column
 * @method array findByOriginName(string $origin_name) Return Content objects filtered by the origin_name column
 * @method array findByEncryptName(string $encrypt_name) Return Content objects filtered by the encrypt_name column
 * @method array findBySize(int $size) Return Content objects filtered by the size column
 * @method array findByAccountId(int $account_id) Return Content objects filtered by the account_id column
 * @method array findByProjectId(int $project_id) Return Content objects filtered by the project_id column
 * @method array findByContentType(string $content_type) Return Content objects filtered by the content_type column
 * @method array findByParentDirectoryId(int $parent_directory_id) Return Content objects filtered by the parent_directory_id column
 * @method array findByContentStatusId(int $content_status_id) Return Content objects filtered by the content_status_id column
 *
 * @package    propel.generator.lib.model.incl2.om
 */
abstract class BaseContentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseContentQuery object.
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
            $modelName = 'Content';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ContentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ContentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ContentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ContentQuery) {
            return $criteria;
        }
        $query = new ContentQuery(null, null, $modelAlias);

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
     * @return   Content|Content[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ContentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ContentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Content A model object, or null if the key is not found
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
     * @return                 Content A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT "id", "is_deleted", "is_directory", "updated_at", "deleted_at", "created_at", "origin_name", "encrypt_name", "size", "account_id", "project_id", "content_type", "parent_directory_id", "content_status_id" FROM "content" WHERE "id" = :p0';
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
            $obj = new Content();
            $obj->hydrate($row);
            ContentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Content|Content[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Content[]|mixed the list of results, formatted by the current formatter
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
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ContentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ContentPeer::ID, $keys, Criteria::IN);
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
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ContentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ContentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::ID, $id, $comparison);
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
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByIsDeleted($isDeleted = null, $comparison = null)
    {
        if (is_array($isDeleted)) {
            $useMinMax = false;
            if (isset($isDeleted['min'])) {
                $this->addUsingAlias(ContentPeer::IS_DELETED, $isDeleted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDeleted['max'])) {
                $this->addUsingAlias(ContentPeer::IS_DELETED, $isDeleted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::IS_DELETED, $isDeleted, $comparison);
    }

    /**
     * Filter the query on the is_directory column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDirectory(1234); // WHERE is_directory = 1234
     * $query->filterByIsDirectory(array(12, 34)); // WHERE is_directory IN (12, 34)
     * $query->filterByIsDirectory(array('min' => 12)); // WHERE is_directory >= 12
     * $query->filterByIsDirectory(array('max' => 12)); // WHERE is_directory <= 12
     * </code>
     *
     * @param     mixed $isDirectory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByIsDirectory($isDirectory = null, $comparison = null)
    {
        if (is_array($isDirectory)) {
            $useMinMax = false;
            if (isset($isDirectory['min'])) {
                $this->addUsingAlias(ContentPeer::IS_DIRECTORY, $isDirectory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDirectory['max'])) {
                $this->addUsingAlias(ContentPeer::IS_DIRECTORY, $isDirectory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::IS_DIRECTORY, $isDirectory, $comparison);
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
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(ContentPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(ContentPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the origin_name column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginName('fooValue');   // WHERE origin_name = 'fooValue'
     * $query->filterByOriginName('%fooValue%'); // WHERE origin_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByOriginName($originName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $originName)) {
                $originName = str_replace('*', '%', $originName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContentPeer::ORIGIN_NAME, $originName, $comparison);
    }

    /**
     * Filter the query on the encrypt_name column
     *
     * Example usage:
     * <code>
     * $query->filterByEncryptName('fooValue');   // WHERE encrypt_name = 'fooValue'
     * $query->filterByEncryptName('%fooValue%'); // WHERE encrypt_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encryptName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByEncryptName($encryptName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encryptName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $encryptName)) {
                $encryptName = str_replace('*', '%', $encryptName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContentPeer::ENCRYPT_NAME, $encryptName, $comparison);
    }

    /**
     * Filter the query on the size column
     *
     * Example usage:
     * <code>
     * $query->filterBySize(1234); // WHERE size = 1234
     * $query->filterBySize(array(12, 34)); // WHERE size IN (12, 34)
     * $query->filterBySize(array('min' => 12)); // WHERE size >= 12
     * $query->filterBySize(array('max' => 12)); // WHERE size <= 12
     * </code>
     *
     * @param     mixed $size The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterBySize($size = null, $comparison = null)
    {
        if (is_array($size)) {
            $useMinMax = false;
            if (isset($size['min'])) {
                $this->addUsingAlias(ContentPeer::SIZE, $size['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($size['max'])) {
                $this->addUsingAlias(ContentPeer::SIZE, $size['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::SIZE, $size, $comparison);
    }

    /**
     * Filter the query on the account_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAccountId(1234); // WHERE account_id = 1234
     * $query->filterByAccountId(array(12, 34)); // WHERE account_id IN (12, 34)
     * $query->filterByAccountId(array('min' => 12)); // WHERE account_id >= 12
     * $query->filterByAccountId(array('max' => 12)); // WHERE account_id <= 12
     * </code>
     *
     * @see       filterByAccount()
     *
     * @param     mixed $accountId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByAccountId($accountId = null, $comparison = null)
    {
        if (is_array($accountId)) {
            $useMinMax = false;
            if (isset($accountId['min'])) {
                $this->addUsingAlias(ContentPeer::ACCOUNT_ID, $accountId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($accountId['max'])) {
                $this->addUsingAlias(ContentPeer::ACCOUNT_ID, $accountId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::ACCOUNT_ID, $accountId, $comparison);
    }

    /**
     * Filter the query on the project_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProjectId(1234); // WHERE project_id = 1234
     * $query->filterByProjectId(array(12, 34)); // WHERE project_id IN (12, 34)
     * $query->filterByProjectId(array('min' => 12)); // WHERE project_id >= 12
     * $query->filterByProjectId(array('max' => 12)); // WHERE project_id <= 12
     * </code>
     *
     * @see       filterByProject()
     *
     * @param     mixed $projectId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByProjectId($projectId = null, $comparison = null)
    {
        if (is_array($projectId)) {
            $useMinMax = false;
            if (isset($projectId['min'])) {
                $this->addUsingAlias(ContentPeer::PROJECT_ID, $projectId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($projectId['max'])) {
                $this->addUsingAlias(ContentPeer::PROJECT_ID, $projectId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::PROJECT_ID, $projectId, $comparison);
    }

    /**
     * Filter the query on the content_type column
     *
     * Example usage:
     * <code>
     * $query->filterByContentType('fooValue');   // WHERE content_type = 'fooValue'
     * $query->filterByContentType('%fooValue%'); // WHERE content_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contentType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByContentType($contentType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contentType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contentType)) {
                $contentType = str_replace('*', '%', $contentType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContentPeer::CONTENT_TYPE, $contentType, $comparison);
    }

    /**
     * Filter the query on the parent_directory_id column
     *
     * Example usage:
     * <code>
     * $query->filterByParentDirectoryId(1234); // WHERE parent_directory_id = 1234
     * $query->filterByParentDirectoryId(array(12, 34)); // WHERE parent_directory_id IN (12, 34)
     * $query->filterByParentDirectoryId(array('min' => 12)); // WHERE parent_directory_id >= 12
     * $query->filterByParentDirectoryId(array('max' => 12)); // WHERE parent_directory_id <= 12
     * </code>
     *
     * @see       filterByContentRelatedByParentDirectoryId()
     *
     * @param     mixed $parentDirectoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByParentDirectoryId($parentDirectoryId = null, $comparison = null)
    {
        if (is_array($parentDirectoryId)) {
            $useMinMax = false;
            if (isset($parentDirectoryId['min'])) {
                $this->addUsingAlias(ContentPeer::PARENT_DIRECTORY_ID, $parentDirectoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentDirectoryId['max'])) {
                $this->addUsingAlias(ContentPeer::PARENT_DIRECTORY_ID, $parentDirectoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::PARENT_DIRECTORY_ID, $parentDirectoryId, $comparison);
    }

    /**
     * Filter the query on the content_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByContentStatusId(1234); // WHERE content_status_id = 1234
     * $query->filterByContentStatusId(array(12, 34)); // WHERE content_status_id IN (12, 34)
     * $query->filterByContentStatusId(array('min' => 12)); // WHERE content_status_id >= 12
     * $query->filterByContentStatusId(array('max' => 12)); // WHERE content_status_id <= 12
     * </code>
     *
     * @see       filterByContentStatus()
     *
     * @param     mixed $contentStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function filterByContentStatusId($contentStatusId = null, $comparison = null)
    {
        if (is_array($contentStatusId)) {
            $useMinMax = false;
            if (isset($contentStatusId['min'])) {
                $this->addUsingAlias(ContentPeer::CONTENT_STATUS_ID, $contentStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contentStatusId['max'])) {
                $this->addUsingAlias(ContentPeer::CONTENT_STATUS_ID, $contentStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContentPeer::CONTENT_STATUS_ID, $contentStatusId, $comparison);
    }

    /**
     * Filter the query by a related Account object
     *
     * @param   Account|PropelObjectCollection $account The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAccount($account, $comparison = null)
    {
        if ($account instanceof Account) {
            return $this
                ->addUsingAlias(ContentPeer::ACCOUNT_ID, $account->getId(), $comparison);
        } elseif ($account instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ContentPeer::ACCOUNT_ID, $account->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByAccount() only accepts arguments of type Account or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Account relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function joinAccount($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Account');

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
            $this->addJoinObject($join, 'Account');
        }

        return $this;
    }

    /**
     * Use the Account relation Account object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AccountQuery A secondary query class using the current class as primary query
     */
    public function useAccountQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAccount($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Account', 'AccountQuery');
    }

    /**
     * Filter the query by a related Project object
     *
     * @param   Project|PropelObjectCollection $project The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProject($project, $comparison = null)
    {
        if ($project instanceof Project) {
            return $this
                ->addUsingAlias(ContentPeer::PROJECT_ID, $project->getId(), $comparison);
        } elseif ($project instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ContentPeer::PROJECT_ID, $project->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return ContentQuery The current query, for fluid interface
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
     * Filter the query by a related Content object
     *
     * @param   Content|PropelObjectCollection $content The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContentRelatedByParentDirectoryId($content, $comparison = null)
    {
        if ($content instanceof Content) {
            return $this
                ->addUsingAlias(ContentPeer::PARENT_DIRECTORY_ID, $content->getId(), $comparison);
        } elseif ($content instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ContentPeer::PARENT_DIRECTORY_ID, $content->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByContentRelatedByParentDirectoryId() only accepts arguments of type Content or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContentRelatedByParentDirectoryId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function joinContentRelatedByParentDirectoryId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContentRelatedByParentDirectoryId');

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
            $this->addJoinObject($join, 'ContentRelatedByParentDirectoryId');
        }

        return $this;
    }

    /**
     * Use the ContentRelatedByParentDirectoryId relation Content object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContentQuery A secondary query class using the current class as primary query
     */
    public function useContentRelatedByParentDirectoryIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContentRelatedByParentDirectoryId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContentRelatedByParentDirectoryId', 'ContentQuery');
    }

    /**
     * Filter the query by a related ContentStatus object
     *
     * @param   ContentStatus|PropelObjectCollection $contentStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContentStatus($contentStatus, $comparison = null)
    {
        if ($contentStatus instanceof ContentStatus) {
            return $this
                ->addUsingAlias(ContentPeer::CONTENT_STATUS_ID, $contentStatus->getId(), $comparison);
        } elseif ($contentStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ContentPeer::CONTENT_STATUS_ID, $contentStatus->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByContentStatus() only accepts arguments of type ContentStatus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContentStatus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function joinContentStatus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContentStatus');

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
            $this->addJoinObject($join, 'ContentStatus');
        }

        return $this;
    }

    /**
     * Use the ContentStatus relation ContentStatus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContentStatusQuery A secondary query class using the current class as primary query
     */
    public function useContentStatusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContentStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContentStatus', 'ContentStatusQuery');
    }

    /**
     * Filter the query by a related Content object
     *
     * @param   Content|PropelObjectCollection $content  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContentRelatedById($content, $comparison = null)
    {
        if ($content instanceof Content) {
            return $this
                ->addUsingAlias(ContentPeer::ID, $content->getParentDirectoryId(), $comparison);
        } elseif ($content instanceof PropelObjectCollection) {
            return $this
                ->useContentRelatedByIdQuery()
                ->filterByPrimaryKeys($content->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByContentRelatedById() only accepts arguments of type Content or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContentRelatedById relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function joinContentRelatedById($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContentRelatedById');

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
            $this->addJoinObject($join, 'ContentRelatedById');
        }

        return $this;
    }

    /**
     * Use the ContentRelatedById relation Content object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContentQuery A secondary query class using the current class as primary query
     */
    public function useContentRelatedByIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContentRelatedById($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContentRelatedById', 'ContentQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Content $content Object to remove from the list of results
     *
     * @return ContentQuery The current query, for fluid interface
     */
    public function prune($content = null)
    {
        if ($content) {
            $this->addUsingAlias(ContentPeer::ID, $content->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
