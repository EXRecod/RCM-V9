<?php
if ($x_stop_lp == 0 ) {
//////////////////////////////////////////////////
if (strpos($msgr, ixz.'kick ') !== false){   
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !kick 5 ( 5 = id)
 
	xcon('clientkick '. $x_idn, '');
  //xcon('akick '. $x_idn.' " ^6[^7Kicked by Admin^6]"', ''); 
	  AddToLog("[".$datetime."] KICKED by: (" . $nickr . ") ");    
echo '  bb  '.substr($tfinishh = (microtime(true) - $start),0,7);	
}	     
 
/////////////////////////////////////////////////////////
if (strpos($msgr, ixz.'kickall') !== false){  
 require $cpath  .  'ReCodMod/functions/core/cod_rcon.php'; 
 foreach ($rconarray as $j => $e)
	{ 
 $i_id = $e["num"]; $i_ping = $e["ping"]; $i_ip = $e["ip"]; $i_name = $e["name"]; $i_guid = $e["guid"]; $chistx = $i_name;  
  usleep($sleep_rcon);
  xcon('clientkick '. $i_id, '');
//xcon('akick '. $i_id.' " ^6[^7Kicked by Admin^6]"', '');
	  AddToLog("[".$datetime."] KICKED: " . $i_ip . " (" . $nickr . ") (" . $i_id . ") BY: (" . $x_nickx . ") ");    
echo '  bb  '.substr($tfinishh = (microtime(true) - $start),0,7);	     
}
}
}
?>
 