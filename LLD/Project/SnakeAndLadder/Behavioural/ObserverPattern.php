<?php

require_once __DIR__ . '/ObserverInterface.php';
require_once __DIR__ . '/GameEventNotifier.php';
require_once __DIR__ . '/PlayerObserver.php';
require_once __DIR__ . '/ConsoleLogger.php';

$notifier = new GameEventNotifier();

$player1 = new PlayerObserver('Rahul');
$player2 = new PlayerObserver('Vicky');
$logger = new ConsoleLogger();

$notifier->addObserver($player1);
$notifier->addObserver($player2);
$notifier->addObserver($logger);

$notifier->notifyAll('Player hits Snake', '🐍 Rahul hit a snake and moved down');
$notifier->notifyAll('Player hits Ladder', '🪜 Vicky climbed a ladder and moved up');
$notifier->notifyAll('Player wins', '🏆 Rahul won the game');
$notifier->notifyAll('Player rolls dice', '🎲 Rahul rolled a 5');
