<?php
namespace Esgi\Store\Model\ResourceModel\Locator;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = 'entity_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Esgi\Store\Model\Locator', 'Esgi\Store\Model\ResourceModel\Locator');
    }

}
