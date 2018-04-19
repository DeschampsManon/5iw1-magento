<?php
namespace Esgi\Store\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Locator extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        // Table Name and Primary Key column
        $this->_init('esgi_store_locator', 'entity_id');
    }
}
