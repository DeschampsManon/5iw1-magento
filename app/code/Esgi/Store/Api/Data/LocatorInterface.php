<?php
namespace Esgi\Store\Api\Data;

/**
 * Esgi store locator interface.
 * @api
 */
interface LocatorInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                  = 'entity_id';
    const NAME                = 'name';
    const DESCRIPTION         = 'description';
    const ADDRESS             = 'address';
    const CITY                = 'city';
    const POSTCODE            = 'postcode';
    const COUNTRY             = 'country';
    const LATITUDE            = 'latitude';
    const LONGITUDE           = 'longitude';
    const EMAIL               = 'email';
    const PHONE               = 'phone';    
    const WEBSITE             = 'website';
    const CREATED_AT          = 'created_at';
    const UPDATED_AT          = 'updated_at';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();

     /**
     * Get address
     *
     * @return string
     */
    public function getAddress();
    
    /**
     * Get city
     *
     * @return string
     */
    public function getCity();

     /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode();

      /**
     * Get country
     *
     * @return string
     */
    public function getCountry();

     /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude();
    
    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude();

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();
    
    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone();

    /**
     * Get store website
     *
     * @return string
     */
    public function getWebsite();

     /**
     * Get created at
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * Get updated at
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * set id
     *
     * @param $id
     * @return LocatorInterface
     */
    public function setId($id);

    /**
     * set name
     *
     * @param $name
     * @return LocatorInterface
     */
    public function setName($name);

    /**
     * set description
     *
     * @param $description
     * @return LocatorInterface
     */
    public function setDescription($description);

    /**
     * set address
     *
     * @param $address
     * @return LocatorInterface
     */
    public function setAddress($address);

    /**
     * set city
     *
     * @param $city
     * @return LocatorInterface
     */
    public function setCity($city);
    
    /**
     * set postcode
     *
     * @param $postcode
     * @return LocatorInterface
     */
    public function setPostcode($postcode);

    /**
     * Set country
     *
     * @param $country
     * @return LocatorInterface
     */
    public function setCountry($country);
    
    /**
     * set latitude
     *
     * @param $latitude
     * @return LocatorInterface
     */
    public function setLatitude($latitude);
    
    /**
     * set longitude
     *
     * @param $longitude
     * @return LocatorInterface
     */
    public function setLongitude($longitude);

    /**
     * set email
     *
     * @param $email
     * @return LocatorInterface
     */
    public function setEmail($email);
    
    /**
     * set phone
     *
     * @param $phone
     * @return LocatorInterface
     */
    public function setPhone($phone);

    /**
     * set website
     *
     * @param $website
     * @return LocatorInterface
     */
    public function setWebsite($website);

    /**
     * set created at
     *
     * @param $createdAt
     * @return LocatorInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * set updated at
     *
     * @param $updatedAt
     * @return LocatorInterface
     */
    public function setUpdatedAt($updatedAt);
}