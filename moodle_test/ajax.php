<?php 

require_once(dirname(__FILE__) . '/../config.php');


$bool = Moodle::Api.core_calendar_get_calendar_events();

var_dump($bool);