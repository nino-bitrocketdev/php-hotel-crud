<?php
  include __DIR__."/../database.php";
  $roomId = $_POST["id"];
  $roomNumber = $_POST["room_number"];
  $roomFloor = $_POST["floor_number"];
  $roomBeds = $_POST["beds"];
  echo $roomId;
  if (empty($roomId)) {
    die("numero id sbagliato");
  }
  if (empty($roomFloor)) {
    die("piano vuoto");
  }
  if (empty($roomNumber)) {
    die("numero stanza vuoto");
  }
  if (empty($roomBeds)) {
    die("numero letti vuoto");
  }
 ?>