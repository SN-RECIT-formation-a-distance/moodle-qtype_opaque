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
 * Strings for component 'qtype_webwork_opaque', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   qtype_webwork_opaque
 * @copyright 2006 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accessoutofsequence'] = 'You have accessed this page out of sequence. Please do not use the Back button when attempting questions.';
$string['addengine'] = 'Add another engine';
$string['cannotaccessfile'] = 'You are not allowed to access this file.';
$string['configuredquestionengines'] = 'Configured question engines';
$string['configuredquestionengines_help'] = 'Opaque is a way of connecting other compatible question engines into Moodle. For Moodle to use another question engine, it needs to be set up here. This screen lists all the question engines that have been configured. Lets you edit their configurations, delete configurations, and create new ones.';
$string['couldnotconnect'] = 'Could not connect to the opaque server {$a}.';
$string['couldnotgetengineinfo'] = 'Could not get the remote server information for engine id {$a}.';
$string['couldnotgetquestionmetadata'] = 'The question engine was not able to return the maximum grades for this question. Are you sure the remote id and version are correct? (Technical information: {$a})';
$string['couldnotloadenginename'] = 'Could not load the engine name from the database for engine id {$a}.';
$string['couldnotloadengineservers'] = 'Could not load the servers list from the database for engine id {$a}.';
$string['couldnotsaveengineinfo'] = 'Could not save the details of the question engine to the database.';
$string['deleteconfigareyousure'] = 'Are you sure you want to delete the configuration of engine {$a}?';
$string['deletefailed'] = 'Error when trying to delete the engine configuration.';
$string['editquestionengine'] = 'Editing Opaque question engine configuration';
$string['editquestionengine_help'] = 'Each remote system you configure must have a name, which will be used to identify it within Moodle. You must specify at least one question engine URL. You can also specify question bank URLs, if your remote question engine uses a separate question bank. When specifying URLs, you may specify several, one per line. Do this when you have several load-balanced servers. Calls to the question engines will be distributed approximately evenly over the different remote servers.';
$string['editquestionengineshort'] = 'Editing engine';
$string['endingquestionsolution'] = 'Show solution after test';
$string['endingquestionsolution_help'] = 'Select if you want solution to be showed when test is finished.';
$string['enginecannotbedeleted'] = 'This engine cannot be deleted. It is in use by some questions.';
$string['enginedeleted'] = 'Engine configuration deleted.';
$string['enginename'] = 'Engine name';
$string['enginenotused'] = '{$a->name} (Not used)';
$string['engineusedby'] = '{$a->name} (Used by {$a->count} questions)';
$string['eventengine_created'] = 'Question engine configuration created';
$string['eventengine_deleted'] = 'Question engine configuration deleted';
$string['eventengine_edited'] = 'Question engine configuration edited';
$string['getmetadatacallfailed'] = 'Failed to retrieve the metadata for this question.  Are you sure the remote id and version are correct?';
$string['invalidmaxnumattemptsyntax'] = 'This does not match the syntax for the maximum number of attempt';
$string['invalidquestionidsyntax'] = 'This does not match the syntax for a question id';
$string['invalidquestionversionsyntax'] = 'The question version should be of the form major.minor, where major and minor are integers.';
$string['invalidquestionhintsyntax'] = 'This does not match the syntax for a question hint';
$string['invalidquestionsolutionsyntax'] = 'This does not match the syntax for a question solution';
$string['invalidendingquestionsolutionsyntax'] = 'This does not match the syntax for a ending question solution';
$string['invalidmodeexamsyntax'] = 'This does not match the syntax for a question exam mode';
$string['managequestionengines'] = 'Manage the list of installed question engines.';
$string['maxgradenotreturned'] = 'The question engine was not able to return the maximum grades for this question. Are you sure the remote id and version are correct?';
$string['maxnumattempt'] = 'Number of attempt before read only';
$string['maxnumattempt_help'] = 'Insert the number of attempt before read only. 0 indicate infinite number of attempt.';
$string['missingenginedetailsinimport'] = 'Missing engine details when importing an Opaque question.';
$string['missingenginename'] = 'Missing engine name';
$string['missingengineurls'] = 'Missing question engine URLs';
$string['missingexammodeinimport'] = 'Missing if question is in exam mode';
$string['missingnumattemptlockinimport'] = 'Missing number of attempt before read only';
$string['missingremoteidinimport'] = 'Missing remote id in import file.';
$string['missingremoteversioninimport'] = 'Missing remote version in import file.';
$string['missingshowhintafterinimport'] = 'Missing number of attempt before showing hint. Use 0 for no hint';
$string['missingshowsolutionafterinimport'] = 'Missing number of attempt before showing solution. Use 0 for no solution';
$string['missingshowsolutionaftertestinimport'] = 'Missing if we show solution after test is finished';
$string['modeexam'] = 'Exam Mode';
$string['modeexam_help'] = 'Select if you want the question to be used in exam mode (no attempt result showned).';
$string['noengines'] = 'Currenly, there are no configured remote engines.';
$string['notcompleted'] = '[Not completed]';
$string['onequestionperpage'] = 'For technical reasons, this question cannot be shown here at this time. (Only one one question of this type can be displayed on each screen.) Please review one question at a time by clicking on the question number in the navigation panel.';
$string['pluginname'] = 'webwork_opaque';
$string['pluginname_help'] = 'Opaque is a way of connecting other compatible question engines into Moodle. This screen lets you create an Opaque question by identifying which remote question engine to connect to, and giving the identity of the question on that remote engine, as explained in the Opaque documentation. Question engines need to be configured on the question engine configuration admin screen.';
$string['pluginnameadding'] = 'Adding an Opaque question';
$string['pluginnameediting'] = 'Editing an opaque question';
$string['pluginnamesummary'] = 'Use a question provided by another question engine system.';
$string['passkey'] = 'Pass key';
$string['passkey_help'] = 'A pass key is a security measure that some question engines implement. You will only be able to connect to that question engine if you know the pass key. Consult the documentation for the particular type of question engine you are trying to connect to.';
$string['pluginname'] = 'webwork_opaque';
$string['processcallfailed'] = 'Failed to process a response. {$a}';
$string['questionbankurls'] = 'Question bank URLs';
$string['questionengineurls'] = 'Question engine URLs';
$string['questionengine'] = 'Question engine';
$string['questionengine_help'] = 'Select the remote question engine that hosts the question you wish to use.';
$string['questionid'] = 'Question id';
$string['questionid_help'] = 'Opaque questions are identified by both a question id and a question version number. The person who created the question you are trying to refer to will be able to tell you these.';
$string['questionversion'] = 'Question version';
$string['questionhint'] = 'Show hint after';
$string['questionhint_help'] = 'Insert the number of try before showing hint. 0 indicate no hint showed.';
$string['questionsolution'] = 'Show solution after';
$string['questionsolution_help'] = 'Insert the number of try before showing solution. 0 indicate no solution showed.';
$string['startcallfailed'] = 'Failed to start a question session. {$a}';
$string['stopcallfailed'] = 'Failed to close question session. {$a}';
$string['testconnection'] = 'Test connection';
$string['testconnectionfailed'] = 'Connection test failed.';
$string['testconnectionpassed'] = 'Connection test passed.';
$string['testconnectionto'] = 'Test connection to question engine {$a}';
$string['testconnectionunknownreturn'] = 'Connection test returned an unrecognised response.';
$string['testingengine'] = 'Testing question engine';
$string['timeout'] = 'Connection time-out (seconds)';
$string['timeout_help'] = 'The time-out controls how long Moodle will wait for the question engine to respond. If you set this time too short, errors will be reported when actually things would have worked eventually. If you set this time too long, then when the question engine is not responding, Moodle will sit there for a long time waiting for it. So, the right value is a balance between the two.';
$string['timeoutmustbepositive'] = 'The time-out must be a postive integer.';
$string['unknownengine'] = 'Unknown engine. {$a}';
$string['unrecognisedservertype'] = 'Unrecognised server type read from the database.';
$string['urlsinvalid'] = 'You must enter a list of URLs, one per line.';
$string['privacy:metadata'] = 'The Opaque plugin does not store any personal data.';
