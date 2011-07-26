# Features/ls.feature
Feature: listing feature
  In order to know what I have on file
  As an ubuntu beginner
  I want to be told the files and folders on directory

#  @mink:sahi
  Scenario: listing files and folders
    Given I am in a directory "/home/cordoval/sites-2/FormModelProjectBundle"
    When I run "app/console cordova:ls /home/cordoval/sites-2/FormModelProjectBundle"
    Then I should see:
    """
    app
    bin
    deps
    deps.lock
    LICENSE
    README
    README.md
    src
    vendor
    web
    """