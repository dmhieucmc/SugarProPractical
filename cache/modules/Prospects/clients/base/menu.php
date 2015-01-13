<?php
$clientCache['Prospects']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Prospects/create',
        'label' => 'LNK_NEW_PROSPECT',
        'acl_action' => 'create',
        'acl_module' => 'Prospects',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Prospects/layout/dnb-bal',
        'label' => 'LBL_BAL',
        'acl_action' => 'create',
        'acl_module' => 'Prospects',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#Prospects/vcard-import',
        'label' => 'LNK_IMPORT_VCARD',
        'acl_action' => 'create',
        'acl_module' => 'Prospects',
        'icon' => 'icon-plus',
      ),
      3 => 
      array (
        'route' => '#Prospects',
        'label' => 'LNK_PROSPECT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Prospects',
        'icon' => 'icon-reorder',
      ),
      4 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Prospects&return_module=Prospects&return_action=index',
        'label' => 'LNK_IMPORT_PROSPECTS',
        'acl_action' => 'import',
        'acl_module' => 'Prospects',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_PROSPECT',
      'visible' => false,
      'icon' => 'icon-plus',
    ),
  ),
  '_hash' => '1f36352e460e7700e48dbe50b1a9e4aa',
);

