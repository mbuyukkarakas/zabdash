<?php

require_once 'inc/functions.inc.php';

$zabServer = "10.20.0.232";
$zabUser = "admin";
$zabPass = "zabbix";
$zabURL = "http://10.20.0.232/zabbix/";

$useridlang = get_userid(CWebUser::getSessionCookie());
$lang = get_user_lang($useridlang);

//Translate
$labels = include_once 'locales/'.$lang.'.php';


?>
