<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';


$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();


$time=date("H:i",strtotime("5 hour"));
$sana=date('d-m-y');


$MadelineProto->account->updateProfile(['first_name'=>'NO NAME |'.$time,'about'=>'Bizda aniq soat⏰'.$time.' Bugungi sana📆 '.$sana.'📆 ']);
$Bool = $MadelineProto->account->updateStatus(['offline' => false, ]);
?>