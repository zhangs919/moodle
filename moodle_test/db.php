<?php
/**
 * 数据库控制
 *
 * 增、删、改、查
 *
 * @package    db
 * @copyright  2017 andy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../config.php');

/**
 * select 查询
 */
// $result = $DB->get_record('user', array('id' => 2));
// $result = $DB->get_record_sql('SELECT * FROM {user} WHERE id = ?', array(2));
// $result = $DB->get_record_select('user', "id = 2");
// $result = $DB->get_records_list('user', 'id', array(2,3));

/*$table = 'user';
$conditions = array('id' => 2);
$result = $DB->get_records_menu($table, $conditions);*/

/*$sort = 'id';
$fields = 'id, auth';
$result = $DB->get_records_menu($table, $conditions, $sort, $fields);*/

/*$table = 'user';
$select = 'auth = ? AND id <> ? ';
$params = array('manual', 5);
$fields = 'id, username';
$sort = 'id desc';
$result = $DB->get_records_select_menu($table, $select, $params, $sort, $fields);
*/

/*$sql = 'SELECT * FROM {user} WHERE id <> ?';
$params = array(6);
$result = $DB->get_records_sql_menu($sql, $params);*/

// 根据条件获取指定field（username）
// $result = $DB->get_field('user', 'username', array('id' => 2));

// 根据条件获取指定field的一条数据
//$result = $DB->get_field_select("test", "name", "id < ?", array(5), IGNORE_MULTIPLE); // return admin

/*$sql = 'SELECT * FROM {test} WHERE id = ?';
$params = array(2);
$result = $DB->get_field_sql($sql, $params);*/

// Selects records and return values of chosen field as an array which match a particular WHERE clause.
//$result = $DB->get_fieldset_select('test', 'name', 'id <> ?', array(10));

// Selects records and return values (first field) as an array using a SQL statement.
//$result = $DB->get_fieldset_sql('SELECT name FROM {test} WHERE id <> ?', array(1));

/**
 * update 修改
 */
// Set a single field in every table record where all the given conditions met.
//$result = $DB->set_field_select('test', 'sort', 10, 'id <> 2');

/**
 * delete 删除
 */
//$result = $DB->delete_records('test', array('id' => 4));
//$result = $DB->delete_records_select('test', 'id > ? AND name != ?', array(3, 'd'));

/**
 * insert 插入
 */
/*$record = new stdClass();
$record->name = 'insert';
$record->description = 'desc';
$record->sort = 5;
$result = $lastinsertid = $DB->insert_record('test', $record);*/

/**
 * update 修改
 */
/*$record = new stdClass();
$record->id = 14;
$record->name = 'update';
$record->description = 'update desc';
$record->sort = 12;
$result = $DB->update_record('test', $record);*/

/*$sql = 'update {test} set sort = ? WHERE id = ?';
$result = $DB->execute($sql, array(200,14));*/

/*$rs = $DB->get_recordset(....) {
    foreach ($rs as $record) {
        // Do whatever you want with this record
    }
    $rs->close(); // Don't forget to close the recordset!
    */

$result = $DB->get_recordset('test', [],'id desc');
foreach ($result as $record) {

    $record->name = 'operate data';
    $record->description = 'op desc';
    $DB->update_record('test', $record);
}
$result->close();
var_dump($result);