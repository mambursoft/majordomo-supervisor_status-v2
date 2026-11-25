<?php
$dictionary=array(
'SUPERVISOR_STATUS_ENDPOINT'=>'Адреса API',
'SUPERVISOR_STATUS_METHOD'=>'HTTP-метод',
'SUPERVISOR_STATUS_TOKEN'=>'Токен доступу',
'SUPERVISOR_STATUS_REGION'=>'Регіон / маршрут',
'SUPERVISOR_STATUS_TRACKING'=>'Номер відправлення',
'SUPERVISOR_STATUS_PAYLOAD'=>'Шаблон POST-запиту',
'SUPERVISOR_STATUS_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'SUPERVISOR_STATUS_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}