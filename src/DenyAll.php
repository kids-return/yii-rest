<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\rest;

/**
 * Deny all access control.
 */
class DenyAll implements CheckAccessInterface
{
    /**
     * {@inheritdoc}
     */
    public function checkAccess($userId, $permissionName, $params = []) {
        return false;
    }
}
