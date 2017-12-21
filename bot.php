<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'b6dc516f03854bdced649b7b5d298945';
$access_token  = '/My+w1/zCs4FCLnoFQvOH3x4R4VAWviIahyQxmmAifhUlNMs+R3jAZGeZTMgNMdIdTwkwsJpxJ3gu/B6cQPRV71KGib2gHgS9w7kxokVNoBWxNbHKekcUOHIeisZOC+gf1wLTxrirH0W2LLHZecu/wdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
