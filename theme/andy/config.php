<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Clean theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_andy
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'andy';

/////////////////////////////////
// The only thing you need to change in this file when copying it to
// create a new theme is the name above. You also need to change the name
// in version.php and lang/en/theme_andy.php as well.
//////////////////////////////////
//
$THEME->doctype = 'html5';
// 继承自bootstrapbase
$THEME->parents = array('bootstrapbase');


// 排除父主题中的样式文件 moodle editor 基本上所有样式都没有了，自定义主题样式时可能需要设置
//$THEME->parents_exclude_sheets = array('bootstrapbase' => array('moodle', 'editor'));

// 引入样式文件
$THEME->sheets = array('andy', 'custom');

$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();
$THEME->enable_dock = false; // 模块是否可停靠
$THEME->editor_sheets = array();


$onecolumnregions[] = 'page-top';
$standardregions[] = 'page-top';

$THEME->layouts = array(
    // Front page.
    'frontpage' => array(
        'file' => 'columns3.php',
        'regions' => array('side-pre', 'footer-left', 'footer-middle', 'footer-right', 'hidden-dock'),
        'defaultregion' => 'side-pre',
    ),
);

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_andy_process_css';

// 在主题选择器中是否隐藏此主题
$THEME->hidefromselector = false;