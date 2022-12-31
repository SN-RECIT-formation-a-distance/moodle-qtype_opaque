@ou @ou_vle @qtype @qtype_webwork_opaque
Feature: webwork_opaque question type configuration UI
  In order to use webwork_opaque question engines.
  As an admin
  I need configure remote engines.

  Background:
    Given I log in as "admin"

  @javascript
  Scenario: Test the question engine configuration UI.
    # Configure a question engine.
    And I navigate to "Plugins > Question types > webwork_opaque" in site administration
    And I follow "Add another engine"
    And I set the following fields to these values:
      | Engine name          | Example engine                   |
      | Question engine URLs | http://example.com/webwork_opaque/engine |
      | Question bank URLs   | http://example.com/webwork_opaque/bank   |
    And I press "Save changes"
    Then I should see "Example engine (Not used)"

    # Edit that configuration.
    When I follow "Edit"
    Then the following fields match these values:
      | Engine name          | Example engine                   |
      | Question engine URLs | http://example.com/webwork_opaque/engine |
      | Question bank URLs   | http://example.com/webwork_opaque/bank   |
    And I set the following fields to these values:
      | Engine name          | Edited engine name               |
    And I press "Save changes"
    Then I should see "Edited engine name (Not used)"

    # Delete that configuration.
    When I follow "Delete"
    Then I should see "Are you sure you want to delete the configuration of engine Edited engine name?"
    When I press "Continue"
    Then I should see "Currenly, there are no configured remote engines."

    # Test the connection.
    When I set up webwork_opaque using the test configuration
    And I reload the page
    And I follow "Test connection"
    Then I should see "Connection test passed."
