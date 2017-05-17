<?php



/**
 * Skeleton subclass for representing a row from the 'account_status' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model.incl2
 */
class AccountStatus extends BaseAccountStatus
{
    const PROVISIONAL = 1; // 仮登録
    const ACTIVE      = 2; // 本登録
    const DELETED     = 3; // 退会済み
}
