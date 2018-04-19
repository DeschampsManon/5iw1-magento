<?php
namespace Esgi\Store\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Esgi store CRUD interface.
 * @api
 */
interface LocatorRepositoryInterface
{
    /**
     * Save block.
     *
     * @param \Esgi\Store\Api\Data\LocatorInterface $locator
     * @return \Esgi\Store\Api\Data\LocatorInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\LocatorInterface $locator);

    /**
     * Retrieve $locator.
     *
     * @param int $locatorId
     * @return \Esgi\Store\Api\Data\LocatorInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($locatorId);

    /**
     * Retrieve locators matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Esgi\Store\Api\Data\LocatorSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete locator.
     *
     * @param \Esgi\Store\Api\Data\LocatorInterface $locator
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\LocatorInterface $locator);

    /**
     * Delete locator by ID.
     *
     * @param int $locatorId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($locatorId);
}
