<?php

// This is a simple example of fetching event data from a database
// You can replace this with your own data retrieval logic

$events = array(
  array(
    "name" => "Music Concert",
    "date" => "2023-06-10",
    "time" => "19:00",
    "location" => "City Stadium",
    "description" => "Enjoy a night of live music from top artists.",
    "category" => "music"
  ),
  array(
    "name" => "Football Match",
    "date" => "2023-06-15",
    "time" => "15:30",
    "location" => "Sports Arena",
    "description" => "Watch an exciting football match between two rival teams.",
    "category" => "sports"
  ),
  array(
    "name" => "Art Exhibition",
    "date" => "2023-06-20",
    "time" => "10:00",
    "location" => "Art Gallery",
    "description" => "Explore a collection of beautiful artworks.",
    "category" => "art"
  )
);

foreach ($events as $event) {
  echo '<div class="event-card">';
  echo '<div class="name">' . $event["name"] . '</div>';
  echo '<div class="date">' . $event["date"] . ' ' . $event["time"] . '</div>';
  echo '<div class="location">' . $event["location"] . '</div>';
  echo '<div class="description">' . $event["description"] . '</div>';
  echo '</div>';
}

?>
