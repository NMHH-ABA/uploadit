#!/usr/bin/env php
<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
    }
    include 'madeline.php';
    $MadelineProto = new \danog\MadelineProto\API('session.madeline');
    $MadelineProto->start();
    $MadelineProto->messages->sendMessage(['peer' => '@StageExtraAdmin', 'message' => 'SALAM']);
    
	$peer = '@StageExtraAdmin';
	$sentMessage =  $MadelineProto->messages->sendMedia([
    'peer' => $peer,
    'media' => [
        '_' => 'inputMediaDocumentExternal',
        'url' => 'https://d2rwmwucnr0d10.cloudfront.net/videoClips/1572.mp4',
    ],
]);
