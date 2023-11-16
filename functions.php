<?php
setlocale(LC_ALL, "sv_SE.UTF-8");
setlocale(LC_ALL, "swedish");
date_default_timezone_set("Europe/Stockholm");

function translateWeekDay($weekday)
{
  switch ($weekday) {
    case "Monday":
      return "Måndag";
    case "Tuesday":
      return "Tisdag";
    case "Wednesday":
      return "Onsdag";
    case "Thursday":
      return "Torsdag";
    case "Friday":
      return "Fredag";
    case "Saturday":
      return "Lördag";
    case "Sunday":
      return "Söndag";
  }
}

function printDateIsEvenString($dateAsString)
{
  $time_input = strtotime($dateAsString);
  $date_input = getDate($time_input);
  $day_of_month = $date_input['mday'];
  $month = $date_input['month'];

  if ($day_of_month % 2 == 0) {
    return "Dagens datum är jämnt";
  }
  if ($day_of_month % 2 == 1) {
    return "Dagens datum är udda";
  }
}

function getGreetingBasedOnTime()
{
  // $d = strtotime("02:30am");
  // $currentHour = date('G', $d); Testa denna ifall du vill se vad som händer ifall du är uppe för sent.

  $currentHour = date('G');
  $timeGreetings = array("Godmorgon, klockan är: " . date('H:i:s'), "God förmiddag, klockan är: " . date('H:i:s'), "God eftermiddag, klockan är: " . date('H:i:s'), "Godkväll, klockan är: " . date('H:i:s'), "Du borde sova!! Klockan är: " . date('H:i:s'));
  if ($currentHour >= 6 && $currentHour < 9) {
    return $timeGreetings[0];
  } elseif ($currentHour >= 9 && $currentHour < 12) {
    return $timeGreetings[1];
  } elseif ($currentHour >= 12 && $currentHour < 18) {
    return $timeGreetings[2];
  } elseif ($currentHour >= 18 && $currentHour < 24) {
    return $timeGreetings[3];
  } else {
    //  return "Du borde sova!! Klockan är: " . date('H:i:s', $d);
    return $timeGreetings[4];
  }
}

function calculatePrice()
{
  $usage = isset($_GET['usage']) ? $_GET['usage'] : 0;
  $elpris = isset($_GET['elpris']) ? $_GET['elpris'] : 0;

  // Ensure values are numeric and non-negative
  if (!is_numeric($usage) || !is_numeric($elpris) || $usage < 0 || $elpris < 0) {
    return "Felaktiga värden. Ange positiva numeriska värden.";
  }

  // Round up to the nearest upper integer
  $usage = ceil($usage);
  $elpris = ceil($elpris);

  $totalPrice = $elpris * $usage;
  if ($totalPrice == 0) {
    return "Ange värden för att beräkna priset.";
  }
  if ($totalPrice !== 0) {
    return "Det beräknade priset blev: " . $totalPrice;
  }
}
?>
