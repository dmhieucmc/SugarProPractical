<?php
$clientCache['Documents']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Documents&action=editview',
        'label' => 'LNK_NEW_DOCUMENT',
        'acl_action' => 'create',
        'acl_module' => 'Documents',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Documents',
        'label' => 'LNK_DOCUMENT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Documents',
        'icon' => 'icon-reorder',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_DOCUMENT',
      'visible' => true,
      'order' => 4,
      'icon' => 'icon-plus',
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Accounts',
          'link' => 'documents',
        ),
        1 => 
        array (
          'module' => 'Contacts',
          'link' => 'documents',
        ),
        2 => 
        array (
          'module' => 'Opportunities',
          'link' => 'documents',
        ),
        3 => 
        array (
          'module' => 'RevenueLineItems',
          'link' => 'documents',
        ),
      ),
    ),
  ),
  '_hash' => '207cf4fbf778ecd64d72c513a0aaa6d8',
);

