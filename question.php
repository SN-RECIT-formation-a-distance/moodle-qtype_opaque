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
 * Opaque question definition class.
 *
 * @package   qtype_opaque
 * @copyright 2009 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

/**
 * Represents an Opaque question.
 *
 * @copyright 2009 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_opaque_question extends question_with_responses {
    /** @var integer the ID of the question engine that serves this question. */
    public $engineid;
    /** @var string the id by which the question engine knows this question. */
    public $remoteid;
    /** @var string the version number of this question to use. */
    public $remoteversion;
    /** @var integer if we show hint after a number of attempt. */
    public $showhintafter;
    /** @var interger if we show solution after a number of attempt. */
    public $showsolutionafter;
    /** @var interger if we show solution after test is finished. */
    public $showsolutionaftertest;
    /** @var interger Num of attempt before read only. */
    public $numattemptlock;
    /** @var interger if we use exam mode. */
    public $exammode;

    public function make_behaviour(question_attempt $qa, $preferredbehaviour) {
        return question_engine::make_behaviour('opaque', $qa, $preferredbehaviour);
    }

    public function get_expected_data() {
        return question_attempt::USE_RAW_DATA;
    }

    public function get_correct_response() {
        // Not possible to say, so just return nothing.
        return array();
    }

    public function get_variants_selection_seed() {
        return "All opaque questions in a usage should get the same variant!";
    }

    public function get_num_variants() {
        // Let Moodle generate the random seed for us.
        return 1000000;
    }

    public function is_complete_response(array $response) {
        // Not acutally used by the behaviour.
        return null;
    }

    public function is_same_response(array $prevresponse, array $newresponse) {
        // Not acutally used by the behaviour.
        return null;
    }

    public function summarise_response(array $response) {	

       /* if ($response["sameans"] == 1){
            unset($response);
            $response = "Réponse identique";
            return $response;
        } */

        //else {
			for ($i = 0; $i < 50; $i++){
			 unset($response[$i]);
			}
			
			foreach($response as $key => $val) {
				$part = substr($key, 0, strpos($key, '0'));
				if($part == "previous_AnSwEr") {
					unset($response[$key]);
				}
			}
			
			$num = 0;
			
			foreach($response as $key => $val) {
				$part = substr($key, 0, strpos($key, '0'));
				if($part == "AnSwEr") {
					$num++;
					$nom = "Réponse";
					$nom .= $num;
					$response[$nom] = $response[$key];
					unset($response[$key]);
				}
			}
			
			if ($response["try"] == 1){
                $response["Variante du problème"] = $response["computed_problem_seed"];
				$response["WeBWorK"] = $response["questionid"];
			}
			$response["Tentative"] = $response["tryHS"];
            unset($response["Hshow"], $response["Sshow"], $response["answers"],
             $response["WWsubmit"], $response["attempt"], $response["courseName"], 
             $response["display_correctness"], $response["display_feedback"], 
             $response["display_generalfeedback"], $response["display_feedback"],
             $response["display_markdp"], $response["display_marks"], $response["display_readonly"],
             $response["endingquestionsolution"], $response["language"], $response["localstate"],
             $response["maxnumattempt"], $response["modeexam"], $response["navigatorVersion"],
             $response["passKey"], $response["preferredbehaviour"], $response["problemSeed"],
             $response["questionhint"], $response["questionid"], $response["questionsolution"],
             $response["randomseed"], $response["tryHS"], $response["userid"], $response["sameans"],
			 $response["computed_problem_seed"], $response["submit"], $response["displayMode"],
			 $response["pasttry"],$response["try"]
            );
			
        //}

        ksort($response, SORT_NATURAL);

        $formatteddata = array();
        foreach ($response as $name => $value) {
            $formatteddata[] = $name . ' => ' . $value;
        };	
		
        return implode(' | ', $formatteddata);
    }
}
