#!/bin/sh

RED="\033[1;31m" 
BLUE="\033[1;34m"
GREEN="\033[1;32m"

Color_Off='\033[0m'       # Text Reset
Yellow='\033[0;33m'       # Yellow
Cyan='\033[0;36m'         # Cyan
NC="" 

DIRFILE=`readlink -e "$0"`
CURFILE=`basename "$DIRFILE"`
CURDIR=`dirname "$DIRFILE"`

echo "\n"
echo "${RED} Devoleped by ExRecod${NC}"
echo "${BLUE} Forum http://xxxreal.ru/{NC}"
echo "${RED} MULTI SERVERS RCM ADMIN MOD v.9.x ${NC}"
sleep 1

# check if nohup is installed
command php --version >/dev/null 2>&1 || (

echo "\n"
echo "${Red} PHP install ${NC}"
sleep 1

update() {
	echo "\n ${Cyan} Updating package repositories.. ${Color_Off}"
	sudo apt -qq update 
}

installPHP() {
	echo "\n ${Cyan} Installing PHP and common Modules.. ${Color_Off}"
	# PHP7 (latest)
	sudo apt -qy install php php-fpm php-pear php-dev php-common php-fpm php-gd php-cli php-mbstring php-curl php-gd php-gettext php-intl php-mbstring php-sqlite3 php-mysql php-pear php-pspell php-recode php-xml php-zip
}

# RUN
update
installPHP

echo "${Yellow} PHP install finished ${NC}"
echo "\n"
echo "\n"
sudo php -v
echo "\n"
)
 
# check if nohup is installed
command nohup --version >/dev/null 2>&1 || (echo "install nohup if you want to use this script"; exit 1)

#if [ -d $CURDIR/cache_ms/ ]; then
#rm $CURDIR/cache_ms/
#fi

if ! [ -d $CURDIR/cache_ms/ ]; then
mkdir -m 777 $CURDIR/cache_ms/
mkdir -m 777 $CURDIR/cache_ms/functions/
fi
 
 
while read line ; do
  IFS=";"
  set -- $line
  ip=$1
  port=$2
  rcon=$3
  log=$4
  IPPORT=$1
IPPORT=$(echo $ip | sed -e "s/\.//g")
IPPORTW=$IPPORT$port 

echo "$IPPORTW \n"
 
if (echo "$IPPORTW" | grep -E -q "^?[0-9]+$"); then 
  
  echo "$port->$rcon->$log => \n"  

pkill -f go_$IPPORTW.sh 
pkill -f go_$IPPORTW.php 

  echo "Killed go_$IPPORTW \n"
 fi
done < $CURDIR/cfg/servers.cfg 
 

 

 # ESLI EST, PROVERKU NADO
 #echo $(ps aux | grep 'php -q -f');
 
while read line ; do
  IFS=";"
  set -- $line
  ip=$1
  port=$2
  rcon=$3
  log=$4
  IPPORT=$1
  
IPPORT=$(echo $ip | sed -e "s/\.//g")
IPPORTW=$IPPORT$port 

echo "$IPPORTW \n"
  
if (echo "$IPPORTW" | grep -E -q "^?[0-9]+$"); then 

##########RESET   /////////////////////RESET ON START                       fopen($mplogfile, "w");
###  php -q -f $CURDIR/cache_ms/functions/cleaner_'$IPPORTW'.php '$port' '$rcon' '$log' 
###  sleep 1

  if [ -f $CURDIR/go_$IPPORTW.sh ]; then 
   echo ""
else
echo '#!/bin/sh

DIRFILE=`readlink -e "$0"`
CURFILE=`basename "$DIRFILE"`
CURDIR=`dirname "$DIRFILE"`

setterm -term linux -back black
while (true) 
do
  php -q -f $CURDIR/cache_ms/go_'$IPPORTW'.php '$port' '$rcon' '$log'
done;
' > $CURDIR/go_$IPPORTW.sh  
  fi   
  
if [ -f $CURDIR/cache_ms/go_$IPPORTW.php ]; then 
   echo ""
else
echo '#!/bin/php
<?php
header("Content-Type: text/html; charset=UTF-8");
function hxh($sc)
 {
  $sc = str_replace(array(
    "cache_ms/go_'$IPPORTW'.php","cache_ms\go_'$IPPORTW'.php","cache_ms\\go_'$IPPORTW'.php"
  ), "", $sc);
  return $sc . "";
 }
$cpath = hxh(__FILE__);

error_reporting(E_ALL); // Error engine - always TRUE!
ini_set("ignore_repeated_errors", TRUE); // always TRUE
ini_set("display_errors", TRUE); // Error display - FALSE only in production environment or real server
ini_set("log_errors", TRUE); // Error logging engine
ini_set("error_log", $cpath."ReCodMod/php-all-errors.log");

$server_ip = "'$ip'";
$server_port = "'$port'";
$server_rconpass = "'$rcon'";
$mplogfile = "'$log'";

$server_port = trim($server_port);

$nullLogFiles = 1;
 
if (empty($_SERVER["OS"])) $_SERVER["OS"] = "";
if (strpos($_SERVER["OS"], "Win") !== false) {
  function hxlog2($scwin) {
    $scwin = str_replace(array(
      "//////"
    ) , "\\", $scwin);
    $scwin = str_replace(array(
      "/////"
    ) , "\\", $scwin);
    $scwin = str_replace(array(
      "////"
    ) , "\\", $scwin);
    $scwin = str_replace(array(
      "///"
    ) , "\\", $scwin);
    $scwin = str_replace(array(
      "//"
    ) , "\\", $scwin);
    $scwin = str_replace(array(
      "/"
    ) , "\\", $scwin);
    $scwin = str_replace(array(
      "\\\\"
    ) , "\\", $scwin);
    $scwin = str_replace(array(
      "\\\"
    ) , "\\", $scwin);
    $scwin = str_replace(array(
      "\\"
    ) , "\\", $scwin);
    return $scwin . "";
  }
}
else {
  function hxlog2($scwin) {
    $scwin = str_replace(array(
      "//////"
    ) , "/", $scwin);
    $scwin = str_replace(array(
      "/////"
    ) , "/", $scwin);
    $scwin = str_replace(array(
      "////"
    ) , "/", $scwin);
    $scwin = str_replace(array(
      "///"
    ) , "/", $scwin);
    $scwin = str_replace(array(
      "//"
    ) , "/", $scwin);
    $scwin = str_replace(array(
      "\\\\"
    ) , "/", $scwin);
    $scwin = str_replace(array(
      "'\\\'"
    ) , "/", $scwin);
    $scwin = str_replace(array(
      "\\"
    ) , "/", $scwin);
    $scwin = str_replace(array(
      "\\"
    ) , "/", $scwin);
    return $scwin . "";
  }
}
function debuglog2($s) {
  global $cpath;
   $s = str_replace(array("\r","\n"), "", $s);
  $fp = fopen($cpath . "ReCodMod/cache/x_errors/debug.log", "a");
  fwrite($fp, " [".date('Y.m.d H:i:s')."] Debug : ".$s . "\n");
  fclose($fp);
}
function ftp_to_upload_ftp2($conn_idqnew, $ftp_q_url, $filei, $file){
	global $cpath,$server_ip,$server_port;
if (@ftp_put($conn_idqnew, $ftp_q_url, $filei, FTP_BINARY)) {
 if (is_resource($conn_idqnew))
       ftp_quit($conn_idqnew);
                        $fpa = fopen($file, "w+");
                        fputs($fpa, "---");
                        fclose($fpa);
						
                        $fpb = fopen($cpath . "ReCodMod/cache/x_cache/" . $server_ip . "_" . $server_port . "_pos.txt", "w+");
                        fputs($fpb, "0");
                        fclose($fpb);
						
                        $hu = fopen($cpath . "ReCodMod/cache/x_cache/" . $server_ip . "_" . $server_port . "_pos_ftp.txt", "w+");
                        fwrite($hub, "1");
                        fclose($hub);							
  return true;						
}else{
  if (is_resource($conn_idqnew))
    ftp_quit($conn_idqnew);
	return false;		
}}

function ftp2locallog2($gmlobame) {
  global $mplogfile;
  $mplogfilei = str_replace(array(
    "ftp://"
  ) , '', $mplogfile);
  $ftp_user_explode = explode(':', $mplogfilei);
  $ftp_exp_user = $ftp_user_explode[0];
  $ftp_pass_explode = explode('@', $ftp_user_explode[1]);
  $ftp_exp_password = $ftp_pass_explode[0];
  $mssf = explode('@', $ftp_user_explode[1]);
  $mssy = explode('/', $mssf[1]);
  $ftp_exp_ip = $mssy[0];
  $mssy = explode($mssy[0], $mssf[1]);
  $ftp_exp_url = $mssy[1];
  $gmlobame = basename($ftp_exp_url);
  return $ftp_exp_user . "%" . $ftp_exp_password . "%" . $ftp_exp_ip . "%" . $ftp_exp_url . "%" . $gmlobame;
}


if (strpos($mplogfile, "ftp:") !== false) {
            list($ftp_exp_user, $ftp_exp_password, $ftp_exp_ip, $ftp_exp_url, $gmlobame) = explode("%", ftp2locallog2($mplogfile));
	$filei = $cpath."ReCodMod/cache/server_empty_ftp_log.log"; 
        $file = hxlog2($cpath."ReCodMod/cache/".$server_ip."_".$server_port."_".$gmlobame);
	     $posftpe = ftp_to_upload_ftp2($conn_idqnew, $ftp_q_url, $filei, $file);
	
if($posftpe != false)
 { 
debuglog2((__FILE__)."\n * RCM DEBUG: ".$server_ip."_".$server_port." Обнуление фтп лога. УСПЕХ! ");
$ftp_fatal_error = 1;
$fileh = hxlog2($cpath."ReCodMod/cache/".$server_ip."_".$server_port."_".$gmlobame);
$fp = fopen($fileh, "w");
fputs($fp, " ---\n");
						
                        $fpb = fopen($cpath . "ReCodMod/cache/x_cache/" . $server_ip . "_" . $server_port . "_pos.txt", "w+");
                        fputs($fpb, "0");
                        fclose($fpb);
						
                        $hu = fopen($cpath . "ReCodMod/cache/x_cache/" . $server_ip . "_" . $server_port . "_pos_ftp.txt", "w+");
                        fwrite($hub, "1");
                        fclose($hub);		
	
 }
 else
 {
debuglog2((__FILE__)."\n * ФАТАЛЬНАЯ ОШИБКА: НЕ МОЖЕТ ЗАГРУЗИТЬ НУЛЕВОЙ ФАЙЛ $filei НА ЗАМЕНУ и НЕ ОБНУЛИЛО $file !!! ПРОШЛО $xftp_time СЕКУНД! ".$server_ip."_".$server_port.".");
 }	
}

require $cpath . "w.php";

'> $CURDIR/cache_ms/go_$IPPORTW.php  
  fi   

 if [ ! -x $CURDIR"/go_$IPPORTW.sh" ]; then
  #chown root:root $CURDIR"/go_$port.sh" && echo "The go_$port.sh is now chmod root"
  #chmod 700 $CURDIR"/go_$port.sh" && echo "The go_$port.sh is now chmod 700"
  chmod +x $CURDIR"/go_$IPPORTW.sh" && echo "The file is now chmod X"
 else
  echo "The file is already for chmod X" 
 fi 
  
#gnome-terminal -e $CURDIR"/go_$port.sh" &> /dev/null  
nohup $CURDIR"/go_$IPPORTW.sh" >/dev/null 2>&1 & # runs in background, still doesn't create nohup.out
else  
 echo '';
fi 
done < $CURDIR/cfg/servers.cfg 
