<?php
$dictionary=array(
'SUPERVISOR_STATUS_ENDPOINT'=>'API endpoint',
'SUPERVISOR_STATUS_METHOD'=>'HTTP method',
'SUPERVISOR_STATUS_TOKEN'=>'Access token',
'SUPERVISOR_STATUS_REGION'=>'Region / route',
'SUPERVISOR_STATUS_TRACKING'=>'Tracking number',
'SUPERVISOR_STATUS_PAYLOAD'=>'POST payload template',
'SUPERVISOR_STATUS_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'SUPERVISOR_STATUS_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}