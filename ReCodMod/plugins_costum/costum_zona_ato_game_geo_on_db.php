<?php

/*
КОД4Х


ADD in _globallogic.gsc 
AFTER self waittill ( "spawned_player" );


prestige = "0";
lpselfnum = self getEntityNumber();
geo = self getgeolocation(0);
lpGuid = self getGuid(); 
ping = self getPing();
fps = self getcountedfps(); 
ip = self getuserinfo("ip");
logPrint("GEO;" + lpGuid + ";" + geo + ";" + ip + ";" + ping + ";" + fps + ";" + prestige + ";"  + lpselfnum + ";" + self.name + "\n");
 


 
 
 
Example:
 
//5:37       GEO;2310346614295160279;RU;145.255.174.215:49779<=>0.0.0.0:28961;57;333;pr;10;Slawius                 cod4
*/
 
  if ((strpos($parseline, ' GEO;') !== false)&&(strpos($parseline, '<=>') !== false)) {
	 $datetime = date('Y-m-d H:i:s'); 
	usleep(190555);  
	 
	$cod4xprestigex = ''; 
	 
    $counttdot    = substr_count($parseline, ';');
    if ($counttdot < 6)
        $qx_close = 10;
	else
		$qx_close = 0;
    ///////////////error fix

    
    if ($qx_close == 0) {	 
	 
list($noon, $guid, $cod4xgeo, $cod4xip,  $cod4xping, $cod4xfps, $cod4xprestige, $idk, $nickname) = explode(';', $parseline);

		
if((empty($guid)) && (empty(reg_guid_stats)))		
		     $qx_close = 20;
		  
////////////////////////////////////////////////////////////////////////////////////////////////
  list($cod4xipu) = explode(':', $cod4xip);
  
   
////////////////////////////////////////////////////////////////////////////////////////////////		 
		 
if (empty($stats_array[$conisq]['ip_adress'])) { 
 $stats_array[$conisq]['ip_adress'] = $cod4xipu;
 
	 usleep(1555);

if ($qx_close == 0)
 {
 
	
	 $datetimex = date('YmdHis');
if ($x_loopsv == 0)
 {
//'145.255.174.215:49779<=>0.0.0.0:28961

	//		if(empty(array_key_exists($guid, $player_geoip)))
	// $player_geoip[''.$idk.''][''.$guid.''][''.html_entity_decode($nickname).''][''.$cod4xip.''] = $guid;


if(!empty($cod4xgeo))
	{
list($cod4xip) = explode(':', $cod4xip);

 
  
if (empty($stats_array[$conisq]['ip_adress'])) 
 $stats_array[$conisq]['ip_adress'] = $cod4xip;
 
  

  $x4vvv = clearSymbols($nickname);
  $date  = date('Y-m-d H:i:s');
  $x_date  = date('Y-m-d H:i:s');
 
////////////////////////////////////////////////////////////////////////////////////				   
////////////////////////////////////////////////////////////////////////////////////
//////////////////////                                        ////////////////////// 
//////////////////////        CHAT SQLITE WALL ON SITE        ////////////////////// 			
//////////////////////                                        ////////////////////// 
////////////////////////////////////////////////////////////////////////////////////			
////////////////////////////////////////////////////////////////////////////////////						  
try{
	 	 
    $dbc = new PDO('sqlite:' . chatdb);
 
             //if(preg_match("/[\d]+[\d]{14,22}/",$guid)) 
				 if(!empty($guid))
				{
							if(!empty($record))
							  $xxccode = ($record->country_code); 
						       else
								  $xxccode = '';
			//$nservername = meessagee($servername);
			//$nservername = matmat($nservername);
			//$nservername = md5($nservername);
			  $nservername = $server_port;
			
			$nickname = clearSymbols($nickname);
 			
			if(empty($i_ip))
				$xipadr = '0';
			else
$xipadr = '1';

/*
$data = [
    'servername' => $servername,
    's_port' => $server_port,
    'guid' => $guid,
	'nickname' => $nickname,
	'time' => $datetime,
	'timeh' => '0',
	'text' => '0',
	'st1' => '0',
	'st1days' => '0',
	'st2' => '0',
	'st2days' => '0',
    'ip' => $cod4xip,
	'geo' => $cod4xgeo,
	'z' => '1',
	't' => '0',
	'x' => $xipadr,
	'c' => '0',
];
				
$stmt= $dbc->prepare($sql);
$stmt->execute($data);	 
*/
echo '-125';
	  
$sql = "INSERT INTO chat (servername, s_port, guid, nickname, time, timeh, text, st1, st1days, st2, st2days, ip, geo, z, t, x, c) 
					VALUES ('".$servername."', '".$svipport."', '".$guid."', '".$nickname."', '".$datetime."', '".$datetime."', '0', '0', '0', '0', '0', '".$cod4xip."', '".$cod4xgeo."', '1', '0', '$xipadr', '0')";	
$dbc->query($sql);
      
echo '-130';
$dbc->query("UPDATE chat SET geo='".$cod4xgeo."', ip='".$cod4xip."',x='1' WHERE guid='".$guid."' and z='0'");
 				
					
 					
				
				
				}
$dbc = null;				
require $cpath . 'ReCodMod/functions/null_db_connection.php'; 			
}catch(PDOException $e){die($e->getMessage());}						  
////////////////////////////////////////////////////////////////////////////////////				   
////////////////////////////////////////////////////////////////////////////////////
//////////////////////                                        ////////////////////// 
//////////////////////        CHAT SQLITE WALL ON SITE        ////////////////////// 			
//////////////////////                                        ////////////////////// 
////////////////////////////////////////////////////////////////////////////////////			
////////////////////////////////////////////////////////////////////////////////////			
		
	
		if(!empty($cod4xgeo)){	 
		
    try {
 	
 if(empty(SqlDataBase))
{
		$db3  = new PDO('sqlite:' . $cpath .  'ReCodMod/databases/db3.sqlite');
		$db4  = new PDO('sqlite:' . $cpath .  'ReCodMod/databases/db4.sqlite'); 
        $dbw3 = new PDO('sqlite:' . $cpath .  'ReCodMod/databases/dbw3.sqlite');
		$dbm3day = new PDO('sqlite:' . $cpath .  'ReCodMod/databases/dbm3.sqlite');
} 
else
   {      
    
	$dsn = "mysql:host=".host_adress.";dbname=".db_name.";charset=$charset_db";
   
   if(empty($msqlconnect)) 
	   $msqlconnect = new PDO($dsn, db_user, db_pass); 
   
    $db3 = $msqlconnect;
    $db4 = $msqlconnect;
	$dbw3 = $msqlconnect;
	$dbm3day = $msqlconnect;
   }		
	
					///////////////////////////SHID = PORT+GUID	
					  $shid = trim($server_port.$guid);	 
	                //$shid = CRC16::calculate($shid);
	                  $shid = dbGuid(4).(abs(hexdec(crc32($shid))));
		
		
		echo '-',$shid;			  
		echo '-',$x_date;
        echo '-',$cod4xip;
		echo '-',$x4vvv;
		echo '-',$guid;
		
		

/*			
	echo '-183';
	 
 if(!empty(SqlDataBase))
{		
     
	if($db4->query("UPDATE x_db_players SET x_db_date='".$x_date."', x_db_ip='".$cod4xip."', x_db_name = '".$x4vvv."' WHERE x_db_guid='".$guid."'"))
	{
	echo '-186';
	} else echo '-000187';
}
else
{
	usleep(10000);
$data = [
    'x_db_date' => $x_date,
    'x_db_ip' => $cod4xip,
    'x_db_name' => $x4vvv,
    'x_db_guid' => $guid,
];
$sql = "UPDATE x_db_players SET x_db_date=:x_db_date, x_db_ip=:x_db_ip, x_db_name=:x_db_name WHERE x_db_guid=:x_db_guid";
$stmt= $db4->prepare($sql);
$stmt->execute($data);		
echo '-186';	
}	
	
	
	
	usleep(20000);
 if(!empty(SqlDataBase))
{	
	if($db3->query("UPDATE db_stats_2 SET w_ip='".$cod4xip."' WHERE s_pg='".$shid."'"))
	{
	echo '-187';
	}else echo '-000192';
}	
else
{
	
$data = [
    'w_ip' => $cod4xip,
    's_pg' => $shid,
];
$sql = "UPDATE db_stats_2 SET w_ip=:w_ip WHERE s_pg=:s_pg";
$stmt= $db3->prepare($sql);
$stmt->execute($data);		
echo '-187';	
}	
*/	
	
	slowscript(__FILE__);   
$fin = microtime(true) - $start;
if($fin > 30)
{
require $cpath . 'ReCodMod/functions/null.php';	
echo 'ERROR';
exit;
}
else if($fin > 4.5)
{
require $cpath . 'ReCodMod/functions/null.php';
exit;	
}   
	
	AddToLogGUID("[" . $datetime . "] WELLCOME -" . $nickname . " : " . $guid . " : " . $cod4xgeo . "");


	 usleep(70000);
	 
	 $sql    = "select id FROM db_stats_1 where s_pg='$shid' limit 1";
					  
$stat   = $db3->query($sql)->fetch(PDO::FETCH_LAZY);

//print_r($stat);
if(!empty($stat))
{
$stq = 0;
echo "\n\n";
foreach($stat as $key => $value) {   
echo $key ."\n" . $value . "\n";

if(empty($stq))
  {
   if ((empty($key))&&(empty($value))){
			 
						  
					  
						  
						  
if($cod4xprestige == '+1')
	$cod4xprestigex = '1';
else if($cod4xprestige == 'x')
	$cod4xprestigex = '0';

 



usleep(13333);
$sql = "INSERT INTO db_stats_week (servername,s_pg,w_guid,w_port,s_player,s_kills,s_killsweap,s_killsweap_min,s_deaths,s_deathsweap_min,s_heads,s_time,s_lasttime)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$servername,$shid,$guid,$svipport,$nickname,0,0,0,0,0,0,$date,$date]); 
 
 
usleep(13333);
$sql = "INSERT INTO db_stats_day (servername,s_pg,w_guid,w_port,s_player,s_kills,s_deaths,s_heads,s_time,s_lasttime)
VALUES (?,?,?,?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$servername,$shid,$guid,$svipport,$nickname,0,0,0,$date,$date]); 
 
 
usleep(11333);
$sql = "INSERT INTO db_stats_0 (s_pg,s_guid, s_port, servername,s_player,s_time,s_lasttime)
VALUES (?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$shid, $guid, $svipport, $servername, $nickname, $date, $date]); 
 
usleep(11333);
$sql = "INSERT INTO db_stats_1 (s_pg,s_kills,s_deaths,s_heads,s_suicids,s_fall,s_melle,s_dmg)
VALUES (?,?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$shid,0,0,0,0,0,0,0]);
 

usleep(11333);
$sql = "INSERT INTO db_stats_2 (s_pg,s_port,w_place,w_skill,w_ratio,w_geo,
w_prestige,w_fps,w_ip,w_ping,n_kills,n_deaths,n_heads,n_kills_min,n_deaths_min) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$shid,$svipport,0,1000,0,$cod4xgeo,$cod4xprestigex,$cod4xfps,$cod4xip,$cod4xping,0,0,0,0,0]); 
  

usleep(10000);
$sql = "INSERT INTO db_stats_3 (s_pg,claymore,c4,grenade,maps,heli,bombs,avia,artillery,camp,flags,saveflags,bonus,series,
bomb_plant,bomb_defused,juggernaut_kill,destroyed_helicopter,rcxd_destroyed,turret_destroyed,sam_kill) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$shid,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]);


usleep(10000);
$sql = "INSERT INTO db_stats_4 (s_pg,ak47_,ak74u_,deserteagle,m40a3_,m4_,m1014_,uzi_,g3_,g36c_,
remington700_,mp5_,winchester1200_,m16_,m14_,rpd_,m60e4_,rpg_,saw_,p90_,barrett_,mp44_,beretta_,colt45_,usp_,dragunov_,skorpion_) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$shid,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]);


usleep(10000); 
$sql = "INSERT INTO INTO db_stats_5 (s_pg,ac130_,airstrike_,at4_mp,aw50_,binoculars,cobra_,
defaultweapon_mp,destructible_car,destructible_bar,hind_ffar,helicopter_,radar_ ) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$shid,0,0,0,0,0,0,0,0,0,0,0,0]);
 

usleep(10000);	
$sql = "INSERT INTO db_stats_hits (s_pg,head,torso_lower,torso_upper,right_arm_lower,
	left_leg_upper,neck,right_arm_upper,left_hand,
left_arm_lower,none,right_leg_upper,left_arm_upper,right_leg_lower,left_foot,right_foot,
right_hand,left_leg_lower) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $db3->prepare($sql);
$stmt->execute([$shid,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]);


echo "==================   INSERT ============================\n";
 
					 
$stmt = NULL;					 
$db3 = NULL;	

	$stq = 1;
					 
}
	else{
		
		echo "==================   UPDATE ============================\n";
		$stq = 1;
		
		$shid = $server_port.$guid;
		//$shid = CRC16::calculate($shid);
		  $shid = dbGuid(4).(abs(hexdec(crc32($shid))));
echo '-260';		
    if($cod4xprestige == '+1')		
$db3->query("UPDATE db_stats_2 SET w_prestige = w_prestige +1, w_geo ='$cod4xgeo',w_ping ='$cod4xping',w_fps='$cod4xfps' WHERE s_pg='$shid'");		
	else if($cod4xprestige == 'x')	
$db3->query("UPDATE db_stats_2 SET w_geo ='$cod4xgeo',w_ping ='$cod4xping',w_fps='$cod4xfps' WHERE s_pg='$shid'");		
	else
$db3->query("UPDATE db_stats_2 SET w_prestige='$cod4xprestige',w_geo ='$cod4xgeo',w_ping ='$cod4xping',w_fps='$cod4xfps' WHERE s_pg='$shid'");		
		
 		

	
	}	
}
					  
}
					 
	}					 

























	
/* ############################################################################################ */	
/* ############################################################################################ */		
/* ############################################################################################ */
	  
	 $chw = 0;
	 echo '-280';
	 	 usleep(70000);
	 $sql    = "select id FROM x_db_players where x_db_guid = '".$guid."' limit 1";
                      $stat   = $db4->query($sql)->fetch(PDO::FETCH_LAZY);
                      
if(!empty($stat))
{					  
			echo "\n\n";
foreach($stat as $key => $value) {   
echo $key ."\n" . $value . "\n";
if(empty($chw))
{	
   if ((empty($key))&&(empty($value))){					
				 $chw = 1;				 
$db4->query("INSERT INTO x_db_players (s_port,x_db_name, x_up_name, x_db_ip, x_up_ip, x_db_ping, x_db_guid, x_db_conn, x_db_date, x_db_warn, x_date_reg, stat)
    VALUES ('$svipport','".$x4vvv."', '0', '$cod4xip', '0', '$cod4xping', '$guid', '1', '$x_date', '0', '$x_date', '1')");
$db4->query("INSERT INTO x_up_players (name, ip, guid) VALUES ('".$x4vvv."','$cod4xip','$guid')");	
						   } 
						   }
}
	//ECHO "\n TUT GRUZIT =============== \n ";
	
	
	
	}
						   
						   
						   
						   
						   
						   
						   
						   
	
	slowscript(__FILE__);   
$fin = microtime(true) - $start;
if($fin > 30)
{
require $cpath . 'ReCodMod/functions/null.php';	
echo 'ERROR';
exit;
}
else if($fin > 4.5)
{
require $cpath . 'ReCodMod/functions/null.php';
exit;	
}
 if($chw == 0){
	 echo '-309';
	 	 usleep(70000);
  $sql    = "select guid,name FROM x_up_players where ip = '".$cod4xip."' and name='".$x4vvv."' limit 1";
                     $stat   = $db4->query($sql)->fetch(PDO::FETCH_LAZY);
                    //print_r($stat);
if(!empty($stat))
{	
					echo "\n\n";
					$ftr = 0;
foreach($stat as $key => $value) {

if(empty($ftr))
{	
echo $key ."\n" . $value . "\n";
   if ((empty($key))&&(empty($value))){
						 echo '-314';
                        $db4->query("INSERT INTO x_up_players (name, ip, guid) VALUES ('".$x4vvv."','$cod4xip','$guid')");					
					 $ftr = 1;
					 
					 }}}
}
 }		
	
	
	
/* №№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№ 

	 $sql    = "select x_db_guid,x_db_name FROM x_db_players where x_db_guid = '".$guid."' and x_db_ip='".$cod4xip."' limit 1";
					  
                      $stat   = $db4->query($sql)->fetch(PDO::FETCH_LAZY);
                      if (empty($stat))	
$db4->query("INSERT INTO x_db_players (x_db_name, x_up_name, x_db_ip, x_up_ip, x_db_ping, x_db_guid, x_db_conn, x_db_date, x_db_warn, x_date_reg)
    VALUES ('".$x4vvv."', '0', '$cod4xip', '0', '$cod4xping', '$guid', '1', '$x_date', '0', '$x_date')");
			             else
$db4->query("UPDATE x_db_players SET x_db_date='{$x_date}',x_db_conn = x_db_conn +1 WHERE x_db_guid='{$guid}' and s_port='$svipport'");
*/	 
/* ############################################################################################ */	
/* ############################################################################################ */		
/* ############################################################################################ */	
require $cpath . 'ReCodMod/functions/null_db_connection.php';	
}catch(PDOException $e){die($e->getMessage());}			 
	 
	 
      //ob_end_flush(); 
      echo "\033[38;5;200m[W]\033[38;5;46m\n", $tfinishh = (microtime(true) - $start);
	  
	if(empty($tfinishh))
$tfinishh = 1;	  
	  
	  if($tfinishh > 30) {
		    errorzz("log_reader_geo_welcome.php 1156  - DATABASES READ TIME ERROR");
	if(!empty($db))
$db = NULL;
if(!empty($db1))
$db1 = NULL;
if(!empty($db2))
$db2 = null;
if(!empty($db3))
$db3 = NULL;
if(!empty($db4))
$db4 = NULL;
if(!empty($db5))
$db5 = NULL; 
	  require $cpath . 'ReCodMod/functions/null.php'; if(!empty($mysqlilink))mysqli_close($mysqlilink); exit;}
      //return;

  $zrandom  = rand(0, 8);
      if ($zrandom  == 4){
if(!empty($db))
$db = NULL;
if(!empty($db1))
$db1 = NULL;
if(!empty($db2))
$db2 = null;
if(!empty($db3))
$db3 = NULL;
if(!empty($db4))
$db4 = NULL;
if(!empty($db5))
$db5 = NULL;
	  }
	  
if(empty($tfinishh))	  
	$tfinishh = 1;	  
if($tfinishh > 30){
	errorzz("geo_on_db.php DATABASES READ TIME ERROR");
	require $cpath . 'ReCodMod/functions/null.php'; if(!empty($mysqlilink))mysqli_close($mysqlilink); exit;} 	 
	 
	}}}}} 
}slowscript(__FILE__);   
$fin = microtime(true) - $start;
if($fin > 4.5)
{
require $cpath . 'ReCodMod/functions/null.php';
exit;	
}}
?>