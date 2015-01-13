<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
// adding project-to-products relationship
$dictionary['projects_products'] = array (
    'table' => 'projects_products',
    'fields' => array (
        array('name' => 'id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'product_id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'project_id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'date_modified', 'type' => 'datetime'),
        array('name' => 'deleted', 'type' => 'bool', 'len' => '1', 'default' => '0', 'required' => false),
    ),
    'indices' => array (
        array('name' => 'projects_products_pk', 'type' =>'primary', 'fields'=>array('id')),
        array('name' => 'idx_proj_prod_project', 'type' =>'index', 'fields'=>array('project_id')),
        array('name' => 'idx_proj_prod_product', 'type' =>'index', 'fields'=>array('product_id')),
        array('name' => 'projects_products_alt', 'type'=>'alternate_key', 'fields'=>array('project_id','product_id')),
    ),
    'relationships' => array (
        'projects_products' => array(
            'lhs_module' => 'Project',
            'lhs_table' => 'project',
            'lhs_key' => 'id',
            'rhs_module' => 'Products',
            'rhs_table' => 'products',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'projects_products',
            'join_key_lhs' => 'project_id',
            'join_key_rhs' => 'product_id',
        ),
    ),
);
?>
