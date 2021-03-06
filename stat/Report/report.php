<?php
date_default_timezone_set("PRC");
$ss_log_filename = '/data/tmp/report/report.' . date('Ymd') . '.log';
$dateStr=date('Ymd H:i:s');

$result=array();
$result["ret"]=0;
$result["msg"]="success";

$action =$_REQUEST["action"];
if($action == "register"){
    registerReport();
}else if($action == "login"){
    loginReport();
}else if($action == "createRoom"){
    createRoomReport();
}else if($action == "cashChange"){
    cashChangeReport();
}else if($action == "charge"){
    chargeReport();
}else if($action == "playInfo"){
    playInfoReport();
}else{
    $result["ret"]=-1;
	$result["msg"]="failed";
}

echo json_encode($result);
exit;

function registerReport()
{
    $action = $_REQUEST["action"];
    $appId = $_REQUEST["appId"];
    $uid = $_REQUEST["uid"];
    $openId = isset($_REQUEST["openId"]) ? $_REQUEST["openId"] : "";
	$nickName = isset($_REQUEST["nickName"]) ? $_REQUEST["nickName"] : "";

    $regTs = $_REQUEST["regTs"];

    global   $dateStr;
    $line =  $dateStr;
    $line = $line . "|" . $action;
    $line = $line . "|" . $appId;
    $line = $line . "|" . $uid;
    $line = $line . "|" . $openId;
	$line = $line . "|" . $nickName;
    $line = $line . "|" . $regTs;

    global $ss_log_filename;
    file_put_contents($ss_log_filename, $line. "\n", FILE_APPEND);
}

function loginReport()
{
    $action = $_REQUEST["action"];
    $appId = $_REQUEST["appId"];
    $uid = $_REQUEST["uid"];
    $openId = isset($_REQUEST["openId"]) ? $_REQUEST["openId"] : "";
	$name = $_REQUEST["name"];
    $loginTs = $_REQUEST["loginTs"];

    global   $dateStr;
    $line =  $dateStr;
    $line = $line . "|" . $action;
    $line = $line . "|" . $appId;
    $line = $line . "|" . $uid;
    $line = $line . "|" . $openId;
	$line = $line . "|" . $name;
    $line = $line . "|" . $loginTs;

    global $ss_log_filename;
    file_put_contents($ss_log_filename, $line. "\n", FILE_APPEND);
}

function createRoomReport()
{
    $action = $_REQUEST["action"];
    $appId = $_REQUEST["appId"];
	$type = $_REQUEST["type"];
    $juShu = $_REQUEST["juShu"];
    $count = $_REQUEST["count"];
	$ts = $_REQUEST["ts"];

    global   $dateStr;
    $line =  $dateStr;
    $line = $line . "|" . $action;
    $line = $line . "|" . $appId;
    $line = $line . "|" . $juShu;
    $line = $line . "|" . $count;
    $line = $line . "|" . $ts;

    global $ss_log_filename;
    file_put_contents($ss_log_filename, $line. "\n", FILE_APPEND);
}

function cashChangeReport()
{
    $action = $_REQUEST["action"];
    $appId = $_REQUEST["appId"];
    $uid = $_REQUEST["uid"];
    $openId = isset($_REQUEST["openId"]) ? $_REQUEST["openId"] : "";
    $cash = $_REQUEST["cash"];
    $balance = $_REQUEST["balance"];
    $reason = $_REQUEST["reason"];
	$ts = $_REQUEST["ts"];
    global   $dateStr;
    $line =  $dateStr;
    $line = $line . "|" . $action;
    $line = $line . "|" . $appId;
    $line = $line . "|" . $uid;
    $line = $line . "|" . $openId;
    $line = $line . "|" . $cash;
    $line = $line . "|" . $balance;
    $line = $line . "|" . $reason;
    $line = $line . "|" . $ts;

    global $ss_log_filename;
    file_put_contents($ss_log_filename, $line. "\n", FILE_APPEND);
}

function chargeReport()
{
    $action = $_REQUEST["action"];
    $appId = $_REQUEST["appId"];
    $uid = $_REQUEST["uid"];
    $openId = isset($_REQUEST["openId"]) ? $_REQUEST["openId"] : "";
    $cash = $_REQUEST["cash"];
    $rmb = $_REQUEST["rmb"];
    $awardCash = $_REQUEST["awardCash"];
	$chargeTs = $_REQUEST["ts"];

    global   $dateStr;
    $line =  $dateStr;
    $line = $line . "|" . $action;
    $line = $line . "|" . $appId;
    $line = $line . "|" . $uid;
    $line = $line . "|" . $openId;
    $line = $line . "|" . $cash;
    $line = $line . "|" . $rmb;
    $line = $line . "|" . $awardCash;
    $line = $line . "|" . $chargeTs;

    global $ss_log_filename;
    file_put_contents($ss_log_filename, $line. "\n", FILE_APPEND);
}

function playInfoReport()
{	
	//	$params = array ("appId" => $appId,"uid" => $uid,"openId" => $openId, "ziMo"=>$ziMo,"fangPao"=>$fangPao,"jiePao"=>$jiePao,"mingGang"=>$mingGang,"xuGang"=>$xuGang,"anGang"=>$anGang,"action"=>$action,"total"=>$total,"ts"=>$ts,"playTime"=>$playTime,"juShu"=>$juShu,"count"=>$playCount);
    $action = $_REQUEST["action"];
    $appId = $_REQUEST["appId"];
    $uid = $_REQUEST["uid"];
    $openId = isset($_REQUEST["openId"]) ? $_REQUEST["openId"] : "";
	$ziMo = $_REQUEST["ziMo"];
	$fangPao = $_REQUEST["fangPao"];
	$jiePao = $_REQUEST["jiePao"];
	$mingGang = $_REQUEST["mingGang"];
	$xuGang = $_REQUEST["xuGang"];
	$anGang = $_REQUEST["anGang"];
    $ts = $_REQUEST["ts"];
	$playTime =  $_REQUEST["playTime"];
    $juShu = $_REQUEST["juShu"];
    $count = $_REQUEST["count"];
    $points = $_REQUEST["total"];
	$roomId = $_REQUEST["roomId"];
    global   $dateStr;
    $line =  $dateStr;
    $line = $line . "|" . $action;
    $line = $line . "|" . $appId;
    $line = $line . "|" . $uid;
    $line = $line . "|" . $openId;
	$line = $line . "|" . $ziMo;
    $line = $line . "|" . $fangPao;
    $line = $line . "|" . $jiePao;
    $line = $line . "|" . $mingGang;
    $line = $line . "|" . $xuGang;
    $line = $line . "|" . $anGang;
	$line = $line . "|" . $playTime;
    $line = $line . "|" . $juShu;
    $line = $line . "|" . $count;
    $line = $line . "|" . $points;
    $line = $line . "|" . $roomId;
    $line = $line . "|" . $ts;


    global $ss_log_filename;
    file_put_contents($ss_log_filename, $line . "\n", FILE_APPEND);
}

?>

