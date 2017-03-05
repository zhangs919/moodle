<?php
/**
 * For capability function test
 *
 * @package    theme_photo
 * @copyright  2017 andy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once('../config.php');
//require_once($CFG->libdir .'/accesslib.php');


$systemcontext = context_system::instance();
//$usercontext = context_user::instance($user->id);
//$categorycontext = context_coursecat::instance($category->id);
//$coursecontext = context_course::instance($course->id);
//$contextmodule = context_module::instance($cm->id); //上下文模块
//
//$context = context::instance_by_id($contextid);

var_dump($systemcontext->contextlevel);
/**
 * get_context_instance
 *
 * @param $contextlevel
 * @param int $instance
 * @param int $strictness
 */
/*function get_context_instance($contextlevel, $instance = 0, $strictness = IGNORE_MISSING) {
    global $CFG;
}*/

/**
 * get_context_instance_by_id
 *
 * @param $id
 * @param int $strictness
 */
/*function get_context_instance_by_id($id, $strictness = IGNORE_MISSING) {
    global $CFG;
}*/

/**
 * has_capability
 *
 * @param $capability
 * @param context $context
 * @param null $user
 * @param bool $doanything
 */
//function has_capability($capability, context $context, $user = null, $doanything = true) {
//    global $CFG;
//}

/**
 * require_capability
 *
 * @param $capability
 * @param context $context
 * @param null $userid
 * @param bool $doanyting
 * @param string $errormessage
 * @param string $stringfile
 */
/*function require_capability($capability, context $context, $userid = null, $doanyting = true, $errormessage = 'nopermissions', $stringfile = '') {
    global $CFG;
}*/
require_login();
$user = $USER->id;

echo $user;
$usercontext = context_user::instance($USER->id);
$bool = has_capability('mod/forum', $usercontext);
var_dump($bool);
