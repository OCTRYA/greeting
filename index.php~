<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>;.

/**
 * @package     local_greetings
 * @copyright   2023 Christian Toisoul <info@iceet.be>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->dirroot. '/local/greetings/lib.php');



$context = context_system::instance();
$PAGE->set_context($context);

$PAGE->set_url(new moodle_url('/local/greetings/index.php'));

$PAGE->set_url(new moodle_url('/local/greetings/index.php'));

$PAGE->set_pagelayout('standard');

// Folowing lines have to be set before the $OUTPUT->header()
$PAGE->set_title($SITE->fullname);
$PAGE->set_heading(get_string('pluginname', 'local_greetings'));
// Instantiate the myform form from within the plugin.
$mform = new \local_greetings\form\myform();
echo $OUTPUT->header();
if (isloggedin()) {
    echo local_greetings_get_greeting($USER);
} else {
    echo get_string('greetinguser', 'local_greetings');
}



// Form processing and displaying is done here.
if ($mform->is_cancelled()) {
    // If there is a cancel element on the form, and it was pressed,
    // then the `is_cancelled()` function will return true.
    // You can handle the cancel operation here.
} else if ($fromform = $mform->get_data()) {
    // When the form is submitted, and the data is successfully validated,
    // the `get_data()` function will return the data posted in the form.
} else {
    // This branch is executed if the form is submitted but the data doesn't
    // validate and the form should be redisplayed or on the first display of the form.
   
    // Set default data (if any).
    $mform->set_data($toform);
   
    // Display the form.
    $mform->display();
}

echo $OUTPUT->footer();
