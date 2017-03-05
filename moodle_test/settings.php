<?php

//defined('MOODLE_INTERNAL') || die();
//
//if ($ADMIN->fulltree) {
//
//    $settings = new theme_boost_admin_settingspage_tabs('themesettingphoto', get_string('configtitle', 'theme_photo'));
//    $page = new admin_settingpage('theme_photo_general', get_string('generalsettings', 'theme_photo'));
//
//    // Preset
//    $name = 'theme_photo/preset';
//    $title = get_string('preset', 'theme_photo');
//    $description = get_string('preset_desc', 'theme_photo');
//    $default = 'default.scss';
//
//    // Files select
//    $context = context_system::instance();
//    $fs = get_file_storage();
//    $files = $fs->get_area_files($context->id, 'theme_photo', 'preset', 0, 'itemid, filepath, filename', false);
//
//    $choices = [];
//    foreach ($files as $file) {
//        $choices[$file->get_filename()] = $file->get_filename();
//    }
//
//    $choices['default.scss'] = 'default.scss';
//    $choices['plain.scss'] = 'plain.scss';
//
//    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
//    $setting->set_updatedcallback('theme_reset_all_caches');
//    $page->add($setting);
//
//    // Preset files
//    $name = 'theme_photo/presetfiles';
//    $title = get_string('presetfiles', 'theme_photo');
//    $description = get_string('presetfiles_desc', 'theme_photo');
//
//    $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
//        array('maxfiles' => 20, 'accepted_types' => array('.scss')));
//    $page->add($setting);
//
//    // Variable $brand-color
//    $name = 'theme_photo/brandcolor';
//    $title = get_string('brandcolor', 'theme_photo');
//    $description = get_string('brandcolor_desc', 'theme_photo');
//    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
//    $setting->set_updatedcallback('theme_reset_all_caches');
//    $page->add($setting);
//
//    // 在定义完所有设置后必须添加页面到tab settings对象
//    $settings->add($page);
//
//    // 每个页面都是一个tab - 第二个tab是背景设置
//    $page = new admin_settingpage('theme_photo_backgrounds', get_string('backgrounds', 'theme_photo'));
//
//    // 默认背景设置
//    $name = 'theme_photo/defaultbackgroundimage';
//    $title = get_string('defaultbackgroundimage', 'theme_photo');
//    $description = get_string('defaultbackgroundimage_desc', 'theme_photo');
//
//    // 创建一个新的设置
//    $setting = new admin_setting_configstoredfile($name, $title, $description, 'defaultbackgroundimage');
//    $setting->set_updatedcallback('theme_photo_update_settings_images');
//    $page->add($setting);
//
//    // 登录页面背景设置
//    $name = 'theme_photo/loginbackgroundimage';
//    $title = get_string('loginbackgroundimage', 'theme_photo');
//    $description = get_string('loginbackgroundimage_desc', 'theme_photo');
//
//    // 创建一个新的设置
//    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackgroundimage');
//    $setting->set_updatedcallback('theme_photo_update_settings_images');
//    $page->add($setting);
//
//    // 前端页面背景设置
//    $name = 'theme_photo/frontpagebackgroundimage';
//    $title = get_string('frontpagebackgroundimage', 'theme_photo');
//    $description = get_string('frontpagebackgroundimage_desc', 'theme_photo');
//
//    // 创建一个新的设置
//    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagebackgroundimage');
//    $setting->set_updatedcallback('theme_photo_update_settings_images');
//    $page->add($setting);
//
//    // 仪表盘页面背景设置
//    $name = 'theme_photo/dashboardbackgroundimage';
//    $title = get_string('dashboardbackgroundimage', 'theme_photo');
//    $description = get_string('dashboardbackgroundimage_desc', 'theme_photo');
//
//    // 创建一个新的设置
//    $setting = new admin_setting_configstoredfile($name, $title, $description, 'dashboardbackgroundimage');
//    $setting->set_updatedcallback('theme_photo_update_settings_images');
//    $page->add($setting);
//
//    // 课程页面背景设置
//    $name = 'theme_photo/incoursebackgroundimage';
//    $title = get_string('incoursebackgroundimage', 'theme_photo');
//    $description = get_string('incoursebackgroundimage_desc', 'theme_photo');
//
//    //创建一个新的设置
//    $setting = new admin_setting_configstoredfile($name, $title, $description, 'incoursebackgroundimage');
//    $setting->set_updatedcallback('theme_photo_update_settings_images');
//    $page->add($setting);
//
//    // 在定义完所有设置后必须添加页面到tab settings对象
//    $settings->add($page);
//
//    // 高级设置
//    $page = new admin_settingpage('theme_photo_advanced', get_string('advancedsettings', 'theme_photo'));
//
//    // 在内容之前引入原生SCSS
//    $setting = new admin_setting_configtextarea('theme_photo/scsspre',
//        get_string('rawscsspre', 'theme_photo'), get_string('rawscsspre_desc', 'theme_photo'), '', PARAM_RAW);
//    $setting->set_updatedcallback('theme_reset_all_caches');
//    $page->add($setting);
//
//    // 在内容之后引入原生SCSS
//    $setting = new admin_setting_configtextarea('theme_photo/scss', get_string('rawscss', 'theme_photo'),
//        get_string('rawscss_desc','theme_photo'), '', PARAM_RAW);
//    $setting->set_updatedcallback('theme_reset_all_caches');
//    $page->add($setting);
//
//    // 在定义完所有设置后必须添加页面到tab settings对象
//    $settings->add($page);
//}