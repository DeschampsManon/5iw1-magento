<?php

namespace Esgi\Store\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        /**
         * Create table 'esgi_store_locator'
         */

        $table = $installer->getConnection()->newTable(
            $installer->getTable('esgi_store_locator'))
            ->addColumn(
                    'entity_id',
                    Table::   TYPE_SMALLINT,
                    null,
                    ['identity' => true, 
                     'nullable' => false, 
                     'primary' => true],
                    'Store ID'
                )->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'  => false],
                    'Store Name'
                )
                ->addColumn(
                    'description',
                    Table::TYPE_TEXT,
                    '2M',
                    [],
                    'Store Description'
                )
                ->addColumn(
                    'address',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'  => false],
                    'Store Address'
                )
                ->addColumn(
                    'city',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'  => false],
                    'City'
                )
                ->addColumn(
                    'country',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'  => false],
                    'Country'
                )
                ->addColumn(
                    'postcode',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'  => false],
                    'Postcode'
                )
                ->addColumn(
                    'email',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Email'
                )
                ->addColumn(
                    'phone',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Phone'
                )
                ->addColumn(
                    'website',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'website'
                )
                ->addColumn(
                    'latitude',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Latitude'
                )
                ->addColumn(
                    'longitude',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Longitude'
                )
                ->addColumn(
                    'updated_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    [],
                    'Update at'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    [],
                    'Creation Time'
                )
                ->setComment('Locator management for Esgi Store module');
        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}
