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

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Invert Navbar to dark background.
    $name = 'theme_andy/invert';
    $title = get_string('invert', 'theme_andy');
    $description = get_string('invertdesc', 'theme_andy');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_andy/logo';
    $title = get_string('logo','theme_andy');
    $description = get_string('logodesc', 'theme_andy');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_andy/customcss';
    $title = get_string('customcss', 'theme_andy');
    $description = get_string('customcssdesc', 'theme_andy');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_andy/footnote';
    $title = get_string('footnote', 'theme_andy');
    $description = get_string('footnotedesc', 'theme_andy');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // 背景图片设置
    $name = 'theme_andy/pagebackground';
    $title = get_string('pagebackground', 'theme_andy');
    $description = get_string('pagebackgrounddesc', 'theme_andy');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pagebackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // 背景图片repeat设置
    $name = 'theme_andy/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_andy');
    $description = get_string('backgroundrepeat_desc', 'theme_andy');
    $default = 'repeat';
    $choices = [
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_andy'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_andy'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_andy'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_andy'),
    ];
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);


}
