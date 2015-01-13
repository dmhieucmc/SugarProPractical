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
/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$tracker_config = 
  array (
    'tracker' => 
    array (
      'bean' => 'Tracker',
      'name' => 'Tracker',
      'metadata' => 'modules/Trackers/vardefs.php',
      'store' => 
      array (
        0 => 'DatabaseStore',
      ),
    ),
    'tracker_sessions' => 
    array (
      'bean' => 'TrackerSession',
      'name' => 'tracker_sessions',
      'metadata' => 'metadata/tracker_sessionsMetaData.php',
      'store' => 
      array (
        0 => 'TrackerSessionsDatabaseStore',
      ),
    ),
    'tracker_perf' => 
    array (
      'bean' => 'TrackerPerf',
      'name' => 'tracker_perf',
      'metadata' => 'metadata/tracker_perfMetaData.php',
      'store' => 
      array (
        0 => 'DatabaseStore',
      ),
    ),
    'tracker_queries' => 
    array (
      'bean' => 'TrackerQuery',
      'name' => 'tracker_queries',
      'metadata' => 'metadata/tracker_queriesMetaData.php',
      'store' => 
      array (
        0 => 'TrackerQueriesDatabaseStore',
      ),
    ),
    'tracker_tracker_queries' => 
    array (
      'name' => 'tracker_tracker_queries',
      'metadata' => 'metadata/tracker_tracker_queriesMetaData.php',
      'store' => 
      array (
        0 => 'DatabaseStore',
      ),
    ),
  );
?>