<?php
namespace Magenest\Movie\Setup;
use Magento\Backend\Block\Widget\Tab;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)

    {
        if(version_compare($context->getVersion(),'2.0.2')<0){
            $setup->startSetup();
            $table1 = $setup->getConnection()->newTable($setup->getTable('magenest_movie'))
                ->addColumn(
                    'movie_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity'=>true,
                        'unsigned'=>true,
                        'nullable'=>false,
                        'primary'=>true
                    ],
                    'Movie_Id'
                )->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Name'
                )->addColumn(
                    'description',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Description'
                )->addColumn(
                    'rating',
                    Table::TYPE_TEXT,
                    1,
                    [],
                    'Rating'
                )->addColumn(
                    'director_id',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Director_id'
                )->setComment('Mangenest_Movie');
            $setup->getConnection()->createTable($table1);


            $table2 = $setup->getConnection()->newTable($setup->getTable('magenest_director'))
                ->addColumn(
                    'director_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity'=>true,
                        'primary'=>true,
                        'unsigned'=>true,
                        'nullable'=>false
                    ],
                    'Director_id'
                )->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Name'
                )
                ->setComment('Magenest_Director');
            $setup->getConnection()->createTable($table2);


            $table3 = $setup->getConnection()->newTable($setup->getTable('magenest_actor'))
                ->addColumn(
                    'actor_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity'=>true,
                        'primary'=>true,
                        'unsigned'=>true,
                        'nullable'=>false
                    ],
                    'Director_id'
                )->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Name'
                )
                ->setComment('Magenest_Director');
            $setup->getConnection()->createTable($table3);


            $table4 = $setup->getConnection()->newTable($setup->getTable('magenest_movie_actor'))
                ->addColumn(
                    'movie_id',
                    Table::TYPE_INTEGER,
                    null,
                    [],
                    'Movie_id'
                )->addColumn(
                    'actor_id',
                    Table::TYPE_TEXT,
                    null,
                    [],
                    'Actor_id'
                )
                ->setComment('Magenest_Movie_Actor');
            $setup->getConnection()->createTable($table4);

            $setup->endSetup();
        }
    }
}
