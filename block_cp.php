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
 * Form for editing CP block instances.
 *
 * @package   block_cp
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_cp extends block_base {

    private stdClass $image;

    function init() {
        $this->title = get_string('pluginname', 'block_cp');
    }

    function has_config()
    {
        return true;
    }

    function get_content() {

        if ($this->content !== NULL) {
            return $this->content;
        }

        $content = '';
        // Just a test for the settings part.
        // It doesn't affect functionality, but can be extended from hier.
        $marked_checked = get_config('block_cp', 'togglecheck');
        if ($marked_checked) {
            $content .= 'You checked!' . '</br>';
        } else {
            $content  .= '<hr>';
        }

        $this->content = new stdClass;
        $this->content->text = $content;
        $this->content->footer = html_writer::div(
            html_writer::link('/moodle40/blocks/cp/index.php', get_string('startwithcp', 'block_cp')),
            'goto_cp'
        );
        return $this->content;
    }
}
