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
 * Defines the editing form for the Opaque question type.
 *
 * @package   qtype_opaque
 * @copyright 2006 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/question/type/opaque/enginemanager.php');


/**
 * Form definition base class. This defines the common fields that
 * all question types need. Question types should define their own
 * class that inherits from this one, and implements the definition_inner()
 * method.
 *
 * @copyright 2006 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_opaque_edit_form extends question_edit_form {
    protected function definition() {
        parent::definition();
        $mform = $this->_form;
        $mform->removeElement('questiontext');    
    /*    $mform->removeElement('generalfeedback'); */
        $mform->removeElement('defaultmark');
        $mform->addElement('hidden', 'defaultmark');
        $mform->setType('defaultmark', PARAM_FLOAT);
        $mform->setDefault('defaultmark', 1);
    }

    protected function definition_inner($mform) {
        $mform->addElement('select', 'engineid', get_string('questionengine', 'qtype_opaque'),
                qtype_opaque_engine_manager::get()->choices());
        $mform->setType('engineid', PARAM_INT);
        $mform->addRule('engineid', null, 'required', null, 'client');
        $mform->addHelpButton('engineid', 'questionengine', 'qtype_opaque');

        $mform->addElement('text', 'remoteid',
                get_string('questionid', 'qtype_opaque'), array('size' => 50));
        $mform->setType('remoteid', PARAM_RAW);
        $mform->addRule('remoteid', null, 'required', null, 'client');
        $mform->addHelpButton('remoteid', 'questionid', 'qtype_opaque');


        $mform->addElement('text', 'remoteversion',
                get_string('questionversion', 'qtype_opaque'), array('size' => 3));
        $mform->setType('remoteversion', PARAM_RAW);
        $mform->setDefault('remoteversion', '1.0');
        $mform->addRule('remoteversion', null, 'required', null, 'client');

        $mform->addElement('text', 'showhintafter',
                get_string('questionhint', 'qtype_opaque'), array('size' => 4));
        $mform->setType('showhintafter', PARAM_INT);
        $mform->setDefault('showhintafter', 0);
        $mform->addRule('showhintafter', null, 'required', null, 'client');
        $mform->addHelpButton('showhintafter', 'questionhint', 'qtype_opaque');


        $mform->addElement('text', 'showsolutionafter',
                get_string('questionsolution', 'qtype_opaque'), 'size="4"');
        $mform->setType('showsolutionafter', PARAM_INT);
        $mform->setDefault('showsolutionafter', 0);
        $mform->addRule('showsolutionafter', null, 'required', null, 'client');
        $mform->addHelpButton('showsolutionafter', 'questionsolution', 'qtype_opaque');
		
		$mform->addElement('select', 'showsolutionaftertest', get_string('endingquestionsolution', 'qtype_opaque'), array(1=>'oui',0=>'non'));
		$mform->setDefault('showsolutionaftertest', 0);
		$mform->addRule('showsolutionaftertest', null, 'required', null, 'client');
        $mform->addHelpButton('showsolutionaftertest', 'endingquestionsolution', 'qtype_opaque');
        
        $mform->addElement('text', 'numattemptlock',
                get_string('maxnumattempt', 'qtype_opaque'), 'size="4"');
        $mform->setType('numattemptlock', PARAM_INT);
        $mform->setDefault('numattemptlock', 0);
        $mform->addRule('numattemptlock', null, 'required', null, 'client');
        $mform->addHelpButton('numattemptlock', 'maxnumattempt', 'qtype_opaque');
		
		$mform->addElement('select', 'exammode', get_string('modeexam', 'qtype_opaque'), array(1=>'oui',0=>'non'));
		$mform->setDefault('exammode', 0);
		$mform->addRule('exammode', null, 'required', null, 'client');
        $mform->addHelpButton('exammode', 'modeexam', 'qtype_opaque');

    }

    public function validation($data, $files) {
        $errors = parent::validation($data, $files);
        $enginemanager = qtype_opaque_engine_manager::get();

        // Check we can connect to this questoin engine.
        $engine = $enginemanager->load($data['engineid']);
        if (is_string($engine)) {
            $errors['engineid'] = $engine;
        }

        $remoteidok = true;
        $partregexp = '[_a-z][_a-zA-Z0-9]*';
        if (!preg_match("/^$partregexp(\\.$partregexp)*\$/", $data['remoteid'])) {
            $errors['remoteid'] = get_string('invalidquestionidsyntax', 'qtype_opaque');
            $remoteidok = false;
        }
        
        if (!preg_match('/^\d+\.\d+$/', $data['remoteversion'])) {
            $errors['remoteversion'] = get_string('invalidquestionversionsyntax', 'qtype_opaque');
            $remoteidok = false;
        }

        if (!preg_match('/^\d+$/', $data['showhintafter'])) {
            $errors['showhintafter'] = get_string('invalidquestionhintsyntax', 'qtype_opaque');
            $remoteidok = false;
        }
        if (!preg_match('/^\d+$/', $data['showsolutionafter'])) {
            $errors['showsolutionafter'] = get_string('invalidquestionsolutionsyntax', 'qtype_opaque');
            $remoteidok = false;
        }
        if (!preg_match('/^\d+$/', $data['showsolutionaftertest'])) {
            $errors['showsolutionaftertest'] = get_string('invalidendingquestionsolutionsyntax', 'qtype_opaque');
            $remoteidok = false;
        }
        if (!preg_match('/^\d+$/', $data['numattemptlock'])) {
            $errors['numattemptlock'] = get_string('invalidmaxnumattemptsyntax', 'qtype_opaque');
            $remoteidok = false;
        }
        if (!preg_match('/^\d+$/', $data['exammode'])) {
            $errors['exammode'] = get_string('invalidmodeexamsyntax', 'qtype_opaque');
            $remoteidok = false;
        } 

        // Try connecting to the remote question engine both as extra validation of the id, and
        // also to get the default grade.
        if ($remoteidok) {
            try {
                $metadata = $enginemanager->get_connection($engine)->get_question_metadata(
                        $data['remoteid'], $data['remoteversion'], $data['showhintafter'], $data['showsolutionafter'],
                        $data['showsolutionaftertest'], $data['numattemptlock'], $data['exammode']);
                if (isset($metadata['questionmetadata']['#']['scoring'][0]['#']['marks'][0]['#'])) {
                    $this->_defaultmark = $metadata['questionmetadata']['#']['scoring']
                            [0]['#']['marks'][0]['#'];
                } else {
                    $errors['remoteid'] = get_string('maxgradenotreturned');
                }
            } catch (SoapFault $sf) {
                $errors['remoteid'] = get_string('couldnotgetquestionmetadata', 'qtype_opaque',
                        s($sf->getMessage()));
            }
        }

        return $errors;
    }

    public function set_data($question) {
        // This is a nasty hack to prevent problems in the superclass. We don't
        // use these fields at all, but the parent method blows up if they are empty.
        if (empty($question->questiontext)) {
            $question->questiontext = ' ';
        }
        if (empty($question->generalfeedback)) {
            $question->generalfeedback = ' ';
        }
        parent::set_data($question);
    }

    public function get_data($slashed = true) {
        // We override get_data to to add the defaultmark, which was determined
        // during validation, to the data that is returned.
        $data = parent::get_data($slashed);
        if (is_object($data) && isset($this->_defaultmark)) {
            $data->defaultmark = $this->_defaultmark;
        }
        return $data;
    }

    public function qtype() {
        return 'opaque';
    }
}
