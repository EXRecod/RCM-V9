<?php
if ((strpos($parseline, ' K;') !== false) || (strpos($parseline, ' D;') !== false)) {
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////                             ////////////////////////////////////////////////
  /////////////////////////////////////////////       AUTO SCREENSHOTS      ////////////////////////////////////////////////
  /////////////////////////////////////////////                             ////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if (!empty(auto_getss)) {
    $adminornot = 1;
    if ($stats_array[(dbGuid(4) . (abs(hexdec(crc32(trim($server_port . $player_killer_guid)))))) ]['user_status'] != 'registered') $adminornot = 2;
    if ((strpos(auto_getss, $server_port) !== false) || (auto_getss == 1) || (auto_getss == '1')) {
      if (!empty($player_killer_guid)) {
        $player_cron_getss = $cpath . "ReCodMod/cache/x_cron/auto_getss_" . $server_ip . "_" . $server_port . '_' . $player_killer_guid;
        if (!file_exists($player_cron_getss)) touch($player_cron_getss);
        $cron_timeq = filemtime($player_cron_getss);
        if (time() - $cron_timeq >= 60 * auto_getss_time * $adminornot) {
          xcon('getss ' . $idkill, '');
          file_put_contents($player_cron_getss, "");
          $datetime = date('Y-m-d H:i:s');
          $player_auto_sc[$player_killer_guid]['' . $datetime . ''][$idkill] = $player_killer_guid;
        }
      }
    }
  }
  if (!empty(auto_getss)) {
    $adminornot = 1;
    if ($stats_array[(dbGuid(4) . (abs(hexdec(crc32(trim($server_port . $death_player_guid)))))) ]['user_status'] != 'registered') $adminornot = 2;
    if ((strpos(auto_getss, $server_port) !== false) || (auto_getss == 1) || (auto_getss == '1')) {
      if (!empty($death_player_guid)) {
        $player_cron_getss = $cpath . "ReCodMod/cache/x_cron/auto_getss_" . $server_ip . "_" . $server_port . '_' . $death_player_guid;
        if (!file_exists($player_cron_getss)) touch($player_cron_getss);
        $cron_timeq = filemtime($player_cron_getss);
        if (time() - $cron_timeq >= 60 * auto_getss_time * $adminornot) {
          xcon('getss ' . $idnumb, '');
          file_put_contents($player_cron_getss, "");
          $datetime = date('Y-m-d H:i:s');
          $player_auto_sc[$death_player_guid]['' . $datetime . ''][$idnumb] = $death_player_guid;
        }
      }
    }
  }
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////                             ////////////////////////////////////////////////
  /////////////////////////////////////////////       AUTO SCREENSHOTS      ////////////////////////////////////////////////
  /////////////////////////////////////////////                             ////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  
}
?>