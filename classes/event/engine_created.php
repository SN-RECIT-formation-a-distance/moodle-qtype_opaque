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
 * The question engine created event.
 *
 * @package    qtype_webwork_opaque
 * @copyright  2014 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace qtype_webwork_opaque\event;

/**
 * The question engine created event class.
 *
 * @since     Moodle 2.7
 * @copyright 2014 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 **/
class engine_created extends \core\event\base {
    protected function init() {
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->data['objecttable'] = 'qtype_webwork_opaque_engines';
    }

    public static function get_name() {
        return get_string('eventengine_created', 'qtype_webwork_opaque');
    }

    public function get_description() {
        return "The user with id {$this->userid} created an webwork_opaque question engine with id {$this->objectid}.";
    }

    public function get_url() {
        return new \moodle_url('/question/type/webwork_opaque/testengine.php?', array('engineid' => '1'));
    }

    public function get_legacy_logdata() {
        return array($this->courseid, 'qtype_webwork_opaque', 'question/type/webwork_opaque/engines.php',
                $this->objectid, $this->contextinstanceid);
    }
}
