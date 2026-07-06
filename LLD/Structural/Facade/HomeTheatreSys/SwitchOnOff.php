<?php

require_once __DIR__ . '/HomeTheatreFacade.php';

$theaterFacade = new HomeTheatreFacade();
$theaterFacade->watchMovie("Mission Impossible");

echo "\n🎬 Movie is Done...\n";
$theaterFacade->endMovie();