<?php

namespace Webkul\Inventory\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Inventory Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2019 JP Software  (http://www.webkul.com)
 */
class InventorySourceRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Inventory\Contracts\InventorySource';
    }
}
