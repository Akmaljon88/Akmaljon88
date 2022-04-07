<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';


$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();


$time=date("H:i",strtotime("2 hour"));
$sana=date('d-m-y');


$MadelineProto->account->updateProfile(['first_name'=>''.$time,'about'=>'Soat'.$time.' Sana'.$sana.'']);
$Bool = $MadelineProto->account->updateStatus(['offline' => false, ]);
?>