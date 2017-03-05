<?php
/**
 * 主题设置相关技巧
 *
 * @package Settings
 * @copyright  2017 andy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// 继承自bootstrapbase
$THEME->parents = array('bootstrapbase');

// 排除父主题中的样式文件 moodle editor 基本上所有样式都没有了，自定义主题样式时可能需要设置
$THEME->parents_exclude_sheets = array('bootstrapbase' => array(/*'moodle',*/ 'editor'));

// 引入样式文件
$THEME->sheets = array('andy');
$THEME->sheets = array('custom');

// 模块是否可停靠 设置为false后，每个模块右上角的停靠图标消失，不支持停靠功能。
$THEME->enable_dock = false;