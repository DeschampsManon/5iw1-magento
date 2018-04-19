<?php
// app/code/Esgi/Store/Block/Locator.php
namespace Esgi\Store\Block;

use Magento\Framework\View\Element\Template;
use Esgi\Store\Api\LocatorRepositoryInterface;
use Esgi\Store\Model\ResourceModel\Locator\Collection;

/**
 * Locator block
 */
class Locator extends \Magento\Framework\View\Element\Template
{
    protected $_collection;

    public function __construct(
        Collection $collection,
        Template\Context $context,
        array $data = []
    ) {
        $this->_collection = $collection;
        parent::__construct($context, $data);
    }

    public function getStoresForFrontend()
    {
        return $this->_collection->getItems();
    }
}
