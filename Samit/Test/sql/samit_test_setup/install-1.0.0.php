<?php
$installer = $this;

$installer->startSetup(); 
$table = $installer->getConnection()->newTable(
$installer-> getTable('rs_store_entity')	
)->addColumn(
    'id',
    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
    null,
    array('identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true),
    'Entity Id'
)->addColumn(
	'identifier',
    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
    255,
    array()
)->addColumn(
	'status',
    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
    null,
    array()
)->addIndex( $installer->getIdxName('rs_store_entity', array('status')),
    array('status')
)->setComment('Sales Flat Order');
$installer->getConnection()->createTable($table);
$installer->endSetup();