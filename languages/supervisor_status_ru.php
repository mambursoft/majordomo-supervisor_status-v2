<?php
$dictionary=array(
'SUPERVISOR_STATUS_ENDPOINT'=>'Адрес API',
'SUPERVISOR_STATUS_METHOD'=>'HTTP-метод',
'SUPERVISOR_STATUS_TOKEN'=>'Токен доступа',
'SUPERVISOR_STATUS_REGION'=>'Регион / маршрут',
'SUPERVISOR_STATUS_TRACKING'=>'Номер отправления',
'SUPERVISOR_STATUS_PAYLOAD'=>'Шаблон POST-запроса',
'SUPERVISOR_STATUS_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'SUPERVISOR_STATUS_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}