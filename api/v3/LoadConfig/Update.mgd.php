<?php
// This file declares a managed database record of type "Job".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'Cron:LoadConfig.Update',
    'entity' => 'Job',
    'params' => 
    array (
      'version' => 3,
      'name' => 'AIVL Update Street Import Data Setup ',
      'description' => 'AIVL create or update data setup configuration for Street Import (should ONLY be run manually)',
      'run_frequency' => 'Daily',
      'api_entity' => 'LoadConfig',
      'api_action' => 'Update',
      'parameters' => '',
      'is_active' => 0
    ),
  ),
);