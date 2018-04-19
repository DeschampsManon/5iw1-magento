<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Esgi\Store\Block\Adminhtml\Locator\Edit;

use Magento\Backend\Block\Widget\Context;
use Esgi\Store\Api\LocatorRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class GenericButton
 */
class GenericButton
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var LocatorRepositoryInterface
     */
    protected $locatorRepository;

    /**
     * @param Context $context
     * @param LocatorRepositoryInterface $locatorRepository
     */
    public function __construct(
        Context $context,
        LocatorRepositoryInterface $locatorRepository
    ) {
        $this->context              = $context;
        $this->locatorRepository    = $locatorRepository;
    }

    /**
     * Return store ID
     *
     * @return int|null
     */
    public function getLocatorId()
    {
        try {
            return $this->locatorRepository->getById(
                $this->context->getRequest()->getParam('id')
            )->getId();
        } catch (NoSuchEntityException $e) {
        }
        return null;
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
