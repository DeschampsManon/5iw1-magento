<?php
namespace Esgi\Store\Model;

use Esgi\Store\Api\Data\LocatorInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Locator extends AbstractModel implements LocatorInterface, IdentityInterface
{
    /**
     * Esgi store locator cache tag
     */
    const CACHE_TAG = 'esgi_store_l';

    /**#@-*/
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'esgi_store';

    /**
     * Parameter name in event
     *
     * In observe method you can use $observer->getEvent()->getObject() in this case
     *
     * @var string
     */
    protected $_eventObject = 'locator';

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
        $this->_init(\Esgi\Store\Model\ResourceModel\Locator::class);
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
     * Retrieve locator id
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Retrieve locator name
     *
     * @return string
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Retrieve locator description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Retrieve locator address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }

    /**
     * Retrieve locator city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->getData(self::CITY);
    }

    /**
     * Retrieve locator postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->getData(self::POSTCODE);
    }

    /**
     * Retrieve locator country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->getData(self::COUNTRY);
    }

    /**
     * Retrieve locator latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->getData(self::LATITUDE);
    }

    /**
     * Retrieve locator longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->getData(self::LONGITUDE);
    }

    /**
     * Retrieve locator email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Retrieve locator phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->getData(self::PHONE);
    }

    /**
     * Retrieve locator website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->getData(self::WEBSITE);
    }

    /**
     * Retrieve locator created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Retrieve locator updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return LocatorInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Set name
     *
     * @param string $name
     * @return LocatorInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Set description
     *
     * @param string $description
     * @return LocatorInterface
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * Set address
     *
     * @param string $address
     * @return LocatorInterface
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }

    /**
     * Set city
     *
     * @param string $city
     * @return LocatorInterface
     */
    public function setCity($city)
    {
        return $this->setData(self::CITY, $city);
    }
    /**
     * Set postcode
     *
     * @param string $postcode
     * @return LocatorInterface
     */
    public function setPostcode($postcode)
    {
        return $this->setData(self::POSTCODE, $postcode);
    }

    /**
     * Set country
     *
     * @param string $country
     * @return LocatorInterface
     */
    public function setCountry($country)
    {
        return $this->setData(self::COUNTRY, $country);
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return LocatorInterface
     */
    public function setLatitude($latitude)
    {
        return $this->setData(self::LATITUDE, $latitude);
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return LocatorInterface
     */
    public function setLongitude($longitude)
    {
        return $this->setData(self::LONGITUDE, $longitude);
    }

    /**
     * Set email
     *
     * @param string $email
     * @return LocatorInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return LocatorInterface
     */
    public function setPhone($phone)
    {
        return $this->setData(self::PHONE, $phone);
    }

    /**
     * Set website
     *
     * @param string $wesbite
     * @return LocatorInterface
     */
    public function setWebsite($website)
    {
        return $this->setData(self::WEBSITE, $website);
    }

    /**
     * Set created_at
     *
     * @param string $created_ad
     * @return LocatorInterface
     */
    public function setCreatedAt($created_ad)
    {
        return $this->setData(self::CREATED_AT, $created_ad);
    }

    /**
     * Set updated_at
     *
     * @param string $updated_at
     * @return LocatorInterface
     */
    public function setUpdatedAt($updated_at)
    {
        return $this->setData(self::UPDATED_AT, $updated_at);
    }
}
