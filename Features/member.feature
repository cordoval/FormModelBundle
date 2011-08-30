Feature: Member rents video
  As a video-club member
  I want to rent a video
  So that I can take it away with me and watch it conveniently at home

Feature: Members rents video
  As a video-club member
  I want to rent a video
  So that I can take it away with me and watch it conveniently at home

  Scenario: Renting single video from oldies section
    Given I am in the "review" page
      And the selected video is "Revolution OS"
     When I click on "Rent"
     Then "£2" is added to my total

  Scenario: Renting 3 videos from oldies promotion
    Given I am in the "review" page
      And "Revolution OS" is selected
      And "Blade Runner" is selected
      And "The Wall" is selected
     When I click on "Rent"
     Then "£5" is added to my total