<?php

set_time_limit(0);

require_once 'Elemental.php';

define('BOT_TOKEN', '1611764844:AAFiE_sdGrA1YnisTZGHsXYrYajlkbeLiIM');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
