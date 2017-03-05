<?php 

// webservice API 

// 获取用户的token ??
// http://localhost/moodle/login/token.php?username=admin&password=#Zhangs0919&service=moodle_mobile_app

// 获取所有课程
// http://localhost/moodle/webservice/rest/server.php?wstoken=2dedce3bac0849fba97d4fcf5ece64dc&wsfunction=core_course_get_courses&moodlewsrestformat=json

// 创建日历事件
// http://localhost/moodle/webservice/rest/server.php?wstoken=2dedce3bac0849fba97d4fcf5ece64dc&wsfunction=core_calendar_create_calendar_events&events[0][name]=事件名称&events[0][description]=事件描述内容展示！！！&moodlewsrestformat=json

// 删除日历事件
// http://localhost/moodle/webservice/rest/server.php?wstoken=2dedce3bac0849fba97d4fcf5ece64dc&wsfunction=core_calendar_delete_calendar_events&events[0][eventid]=2&events[0][repeat]=1&moodlewsrestformat=json

// 获取日历事件
// http://localhost/moodle/webservice/rest/server.php?wstoken=2dedce3bac0849fba97d4fcf5ece64dc&wsfunction=core_calendar_get_calendar_events&moodlewsrestformat=json