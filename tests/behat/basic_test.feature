@ou @ou_vle @qtype @qtype_webwork_opaque
Feature: Test all the basic functionality of opaque question type
  In order evaluate students calculating ability
  As an teacher
  I need to create and preview variable numeric questions.

  Background:
    Given the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1        | topics |
    And the following "users" exist:
      | username | firstname |
      | teacher  | Teacher   |
    And the following "course enrolments" exist:
      | user    | course | role           |
      | teacher | C1     | editingteacher |
    And I set up webwork_opaque using the test configuration
    And I log in as "teacher"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  @javascript
  Scenario: Create, edit then preview an webwork_opaque question.
    # Create a new question.
    And I add a "webwork_opaque" question filling the form with:
      | Question name    | Test webwork_opaque question |
      | Question id      | omdemo.text.q01      |
      | Question version | 1.2                  |
    Then I should see "Test webwork_opaque question"

    # Preview it.
    When I choose "Preview" action for "Test webwork_opaque question" in the question bank
    And I switch to "questionpreview" window
    And I set the following fields to these values:
      | Marks | Show mark and max |
    And I press "Start again with these options"
    Then I should see "A catalyst speeds up a reaction"
    And the state of "A catalyst speeds up a reaction" question is shown as "You have 3 tries."
    When I set the field with xpath "//input[contains(@id, '_omval_input')]" to "Lubrication"
    And I press "Check"
    Then I should see "Your answer is  incorrect."
    When I press "Try again"
    Then the state of "A catalyst speeds up a reaction" question is shown as "You have 2 tries left."
    When I set the field with xpath "//input[contains(@id, '_omval_input')]" to "Heat"
    And I press "Check"
    Then I should see "Increasing temperature always speeds up a reaction."
    And the state of "A catalyst speeds up a reaction" question is shown as "Correct"
    And I should see "Mark 2.00 out of 3.00"
    And I switch to the main window

    # Backup the course and restore it.
    When I log out
    And I log in as "admin"
    When I backup "Course 1" course using this options:
      | Confirmation | Filename | test_backup.mbz |
    When I restore "test_backup.mbz" backup into a new course using this options:
      | Schema | Course name | Course 2 |
    Then I should see "Course 2"
    When I navigate to "Question bank" in current page administration
    Then I should see "Test webwork_opaque question"

    # Edit the copy and verify the form field contents.
    When I choose "Edit question" action for "Test webwork_opaque question" in the question bank
    Then the following fields match these values:
      | Question name    | Test webwork_opaque question |
      | Question id      | omdemo.text.q01      |
      | Question version | 1.2                  |
    And I set the following fields to these values:
      | Question name | Edited question name |
    And I press "id_submitbutton"
    Then I should see "Edited question name"

    # Verify that the engine definition was reused, not duplicated.
    When I navigate to "Plugins > Question types > webwork_opaque" in site administration
    Then I should see "webwork_opaque engine for tests (Used by 2 questions)"
