<?php



/**
 * Skeleton subclass for representing a row from the 'content_status' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model.incl2
 */
class ContentStatus extends BaseContentStatus
{
    const ACTIVE   = 1; // アクティブ
    const DUST_BOX = 2; // ゴミ箱
    const DELETED  = 3; // 削除済み
}
