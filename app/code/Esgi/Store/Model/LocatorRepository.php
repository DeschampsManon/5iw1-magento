<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Esgi\Store\Model;

use Esgi\Store\Api\LocatorRepositoryInterface;
use Esgi\Store\Api\Data;
use Esgi\Store\Model\ResourceModel\Locator as ResourceLocator;
use Esgi\Store\Model\ResourceModel\Locator\CollectionFactory as LocatorCollectionFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;

/**
 * Class BlockRepository
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class LocatorRepository implements LocatorRepositoryInterface
{
    /**
     * @var ResourceLocator
     */
    protected $resource;

    /**
     * @var LocatorFactory
     */
    protected $locatorFactory;

    /**
     * @var LocatorCollectionFactory
     */
    protected $locatorCollectionFactory;

    /**
     * @var Data\LocatorSearchResultsInterface
     */
    protected $searchResultsFactory;

    /**
     * @var DataObjectHelper
     */
    protected $dataObjectHelper;

    /**
     * @var DataObjectProcessor
     */
    protected $dataObjectProcessor;

    /**
     * @var \Esgi\Store\Api\Data\LocatorInterfaceFactory
     */
    protected $dataLocatorFactory;

    /**
     * @param ResourceLocator $resource
     * @param LocatorFactory $locatorFactory
     * @param Data\LocatorInterfaceFactory $dataLocatorFactory
     * @param LocatorCollectionFactory $locatorCollectionFactory
     * @param Data\LocatorSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     */
    public function __construct(
        ResourceLocator $resource,
        LocatorFactory $locatorFactory,
        \Esgi\Store\Api\Data\LocatorInterfaceFactory $dataLocatorFactory,
        LocatorCollectionFactory $locatorCollectionFactory,
        Data\LocatorSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor
    ) {
        $this->resource = $resource;
        $this->locatorFactory = $locatorFactory;
        $this->locatorCollectionFactory = $locatorCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataLocatorFactory = $dataLocatorFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
    }

    /**
     * Save Locator data
     *
     * @param \Esgi\Store\Api\Data\LocatorInterface $locator
     * @return Locator
     * @throws CouldNotSaveException
     */
    public function save(Data\LocatorInterface $locator)
    {
        try {
            $this->resource->save($locator);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }

        return $locator;
    }

    /**
     * Load Locator data by given Locator Identity
     *
     * @param string $locatorId
     * @return Locator
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($locatorId)
    {
        $locator = $this->locatorFactory->create();
        $this->resource->load($locator, $locatorId);
        if (!$locator->getId()) {
            throw new NoSuchEntityException(__('Store Locator with id "%1" does not exist.', $locator));
        }

        return $locator;
    }

    /**
     * Load Locator data collection by given search criteria
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @param \Magento\Framework\Api\SearchCriteriaInterface $criteria
     * @return \Esgi\Store\Api\Data\LocatorSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $criteria)
    {
        /** @var \Esgi\Store\Model\ResourceModel\Locator\Collection $collection */
        $collection = $this->locatorCollectionFactory->create();

        /** @var Data\LocatorSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }

    /**
     * Delete Locator
     *
     * @param \Esgi\Store\Api\Data\LocatorInterface $locator
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(Data\LocatorInterface $locator)
    {
        try {
            $this->resource->delete($locator);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }

        return true;
    }

    /**
     * Delete Locator by given Locator Identity
     *
     * @param string $locatorId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById($locatorId)
    {
        return $this->delete($this->getById($locatorId));
    }
}
