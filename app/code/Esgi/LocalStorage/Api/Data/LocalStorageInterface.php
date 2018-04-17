<?php
namespace Esgi\LocalStorage\Api\Data;

/**
 * Esgi local storage interface.
 * @api
 */
interface LocalStorageInterface
{
    /**#@+
     * Constants for keys of data array.
     */
    const ID      = 'entity_id';
    const TITLE    = 'title';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set ID
     *
     * @param int $id
     * @return LocalStorageInterface
     */
    public function setId($id);

    /**
     * Set title
     *
     * @param string $title
     * @return LocalStorageInterface
     */
    public function setTitle($title);

}
