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
 * Opaque question type upgrade code.
 *
 * @package   qtype_webwork_opaque
 * @copyright 2011 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Upgrade code for the Opaque question type.
 * @param int $oldversion the version we are upgrading from.
 */
function xmldb_qtype_webwork_opaque_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2011092600) {

        // Define field timeout to be added to question_opaque_engines.
        $table = new xmldb_table('question_opaque_engines');
        $field = new xmldb_field('timeout', XMLDB_TYPE_INTEGER, '10', null,
                XMLDB_NOTNULL, null, '10', 'passkey');

        // Conditionally launch add field timeout.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Qtype opaque savepoint reached.
        upgrade_plugin_savepoint(true, 2011092600, 'qtype', 'webwork_opaque');
    }
    
    if ($oldversion < 2021111709) {

        // Define table question_opaque to be renamed to qtype_webwork_opaque.
        $table = new xmldb_table('qtype_webwork_opaque_options');
        $field1 = new xmldb_field('showsolutionaftertest', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0', 'showsolutionafter');
        $field2 = new xmldb_field('exammode', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0', 'showsolutionaftertest');

        // Conditionally launch add field showsolutionaftertest and exammode.
        if (!$dbman->field_exists($table, $field1)) {
            $dbman->add_field($table, $field1);
        }
        if (!$dbman->field_exists($table, $field2)) {
            $dbman->add_field($table, $field2);
        }

        // Qtype opaque savepoint reached.
        upgrade_plugin_savepoint(true, 2021111709, 'qtype', 'webwork_opaque');
    }

    if ($oldversion < 2021111710) {

        // Define table question_opaque to be renamed to qtype_webwork_opaque.
        $table = new xmldb_table('qtype_webwork_opaque_options');
        $field1 = new xmldb_field('numattemptlock', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0', 'showsolutionaftertest');

        // Conditionally launch add field numattemptlock.
        if (!$dbman->field_exists($table, $field1)) {
            $dbman->add_field($table, $field1);
		}

        // Qtype opaque savepoint reached.
        upgrade_plugin_savepoint(true, 2021111710, 'qtype', 'webwork_opaque');
    }

    return true;
}
