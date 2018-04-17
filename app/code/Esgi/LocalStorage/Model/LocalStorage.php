<?php
namespace Esgi\LocalStorage\Model;

use Esgi\LocalStorage\Api\Data\LocalStorageInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class LocalStorage extends AbstractModel implements LocalStorageInterface, IdentityInterface
{
    /**
     * Esgi Job department cache tag
     */
    const CACHE_TAG = 'esgi_localstorage_d';

    /**#@-*/
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'esgi_localstorage';

    /**
     * Parameter name in event
     *
     * In observe method you can use $observer->getEvent()->getObject() in this case
     *
     * @var string
     */
    protected $_eventObject = 'localstorage';

    /**
     * Name of object id field
     *
     * @var string
     */
    protected $_idFieldName = 'entity_id';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Esgi\LocalStorage\Model\ResourceModel\LocalStorage::class);
    }

    /**
     * Get identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Retrieve local storage id
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Retrieve local storage title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }


    /**
     * Set ID
     *
     * @param int $id
     * @return LocalStorageInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Set title
     *
     * @param string $title
     * @return LocalStorageInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
}
