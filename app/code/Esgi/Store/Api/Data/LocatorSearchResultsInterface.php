<?php
namespace Esgi\Store\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for store locator search results.
 * @api
 */
interface LocatorSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get locators list.
     *
     * @return \Esgi\Store\Api\Data\LocatorInterface[]
     */
    public function getItems();

    /**
     * Set locators list.
     *
     * @param \Esgi\Store\Api\Data\LocatorInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
