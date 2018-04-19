<?php
namespace Esgi\Store\Model\Locator;

use Esgi\Store\Model\ResourceModel\Locator\CollectionFactory;
use Magento\Framework\App\Request\DataPersistorInterface;

/**
 * Class DataProvider
 */
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var \Esgi\Store\Model\ResourceModel\Locator\Collection
     */
    protected $collection;

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var array
     */
    protected $loadedData;

    /**
     * Constructor
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $locatorCollectionFactory
     * @param DataPersistorInterface $dataPersistor
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $locatorCollectionFactory,
        DataPersistorInterface $dataPersistor,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $locatorCollectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        /** @var \Esgi\Store\Model\Locator $locator */
        foreach ($items as $locator) {
            $this->loadedData[$locator->getId()] = $locator->getData();
        }

        $data = $this->dataPersistor->get('store_locator');

        if (!empty($data)) {
            $locator = $this->collection->getNewEmptyItem();
            $locator->setData($data);
            $this->loadedData[$locator->getId()] = $locator->getData();
            $this->dataPersistor->clear('store_locator');
        }

        return $this->loadedData;
    }
}
