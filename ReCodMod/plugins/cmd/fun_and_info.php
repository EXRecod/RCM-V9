<?php
if ($x_stop_lp == 0) {
  if (('ty' == mb_strtolower(trim(clearnamex($msgr)))) && ($x_number != 1)) {
    rcon('say ^3' . $thxq . '!', '');
    ++$x_number;
  }
  if (('thx' == mb_strtolower(trim(clearnamex($msgr)))) && ($x_number != 1)) {
    rcon('say ^3Thank you!', '');
    ++$x_number;
  }
  if (($msgr == 'gg' || $msgr == 'GG') && ($x_number == 0)) {
    $words  = array(
      '^3' . $gggq . '! ',
      '^3' . $gggq . ' ;) ',
      '^3Good Game All :D ',
      '^3Good game today! ',
      '^3' . $gggq . ' ^^ ',
      '^3GG Players :D '
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl, '');
    ++$x_number;
  } else if (($msgr == 'gj' || $msgr == 'GJ') && ($x_number == 0)) {
    $words  = array(
      '^3Good Job! ',
      '^3GOOD JOB ;) ',
      '^3YEAH GOOD JOB :D ',
      '^3Good JOB today! ',
      '^3Good JOB ^^ ',
      '^3GJ Players :D '
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl, '');
    ++$x_number;
  } else if (($msgr == 'WP' || $msgr == 'wp') && ($x_number == 0)) {
    $words  = array(
      '^3Well Played! ',
      '^3WELL PLAYED ;) ',
      '^3WELL PLAYED ;/ ',
      '^3WELL PLAYED :D '
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl, '');
    ++$x_number;
  } else if (($msgr == 'n1' || $msgr == 'N1') && ($x_number == 0)) {
    $words  = array(
      '^3Nice ONE! ',
      '^3NUMBER ONE ;) ',
      '^3THE BEST ;/ ',
      '^3NUMBER ONE PLAYER :D '
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl, '');
    ++$x_number;
  } else if ((strpos($msgr, 'sps') !== false) && ($x_number != 1)) {
    $words  = array(
      '^3CIIACU6o! ;) ',
      '^3CIIACU6o Urpok! ',
      '^3CIIC! ',
      '^3CIIACU6o!'
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl, '');
    ++$x_number;
  } else if ((strpos($msgr, 'bb ') !== false) && ($x_number == 0) || (strpos($msgr, 'BB ') !== false) && ($x_number == 0) || ($msgr == 'BB') && ($x_number == 0) || ($msgr == 'bb') && ($x_number == 0)) {
    $words  = array(
      '^3Bye, bye, thanks for playing! ;D ',
      '^3Bye, Bye! ;) ',
      '^3Bye, Bye friend! ',
      '^3Bye, bye and goodluck! ',
      '^3Bye, bye and back again! ;) ',
      '^3Bye, bye and visit our website ^2htp:^2/^2/' . website . '/ ;) ',
      '^3BB ;) ',
      '^3Bye, bye gamer!'
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl, '');
    ++$x_number;
  } else if ((strpos($msgr, 'haker') !== false) && ($x_number != 1)) {
    rcon('say ^1REPORT @ ^7https:/^7/^7zona-ato-game.ru/', '');
    $message = AddCheatHelp("[" . $datetime . "] CHEATER ALARM: " . $server_ip . "_" . $server_port . " (" . $nickr . ") (" . $msgr . ")");
    ++$x_number;
  } else if ((strpos($msgr, 'fps') !== false) && ($x_number != 1)) {
    rcon('say cg_drawfps 1 ^3/^7 cg_drawlagometer 1 ^3/^7 com_maxfps 125 ^3/^7 snaps 30 ^3/^7 maxpackets 100', '');
    $message = AddCheatHelp("[" . $datetime . "] CHEATER ALARM: " . $server_ip . "_" . $server_port . " (" . $nickr . ") (" . $msgr . ")");
    ++$x_number;
  } else if ((strpos('ping', $msgr) !== false) && ($x_number != 1)) {
    rcon('say cg_drawfps 1 ^3/^7 cg_drawlagometer 1 ^3/^7 com_maxfps 125 ^3/^7 snaps 30 ^3/^7 maxpackets 100', '');
    AddToLogInfo("[" . $datetime . "] QUESTION: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: Q");
    ++$x_number;
  } else if ((strpos('hi', $msgr) !== false) && ($x_number != 1)) {
    $words  = array(
      '^3Hi, ',
      '^3Hey;) ',
      '^3Welcome @ ^2' . website . ',^7 ',
      '^3Hello, ',
      '^3Hi there ^73;^1)  ',
      '^3Hi friend, ',
      '^3Welcome gamer, '
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl . ' ^7' . $nickr . ' ^3!', '');
    ++$x_number;
  } else if ((strpos('hi server', $msgr) !== false) && ($x_number != 1)) {
    $words  = array(
      '^3Hi  ',
      '^3Hey ;) ',
      '^3Welcome  '
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl . ' ^7' . $nickr . ' ^3!', '');
    ++$x_number;
  } else if ((strpos('hello', $msgr) !== false) && ($x_number != 1)) {
    $words  = array(
      '^3Hi player ',
      '^3Hey ;) ',
      '^3Welcome friend ',
      '^3Hi all here ',
      '^3Hello ',
      '^3Hi friend ',
      '^3Welcome gamer'
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl . ' ^7' . $nickr . ' ^3!', '');
    ++$x_number;
  } else if ((strpos('qq', $msgr) !== false) && ($x_number != 1)) {
    $words  = array(
      '^3Ky Ky :D ',
      '^3Ku Ku :D ',
      '^3Hi ',
      '^3Hey! ;) ',
      '^3Welcome friend, ',
      '^3Hello, ',
      '^3Hi friend, ',
      '^3Welcome gamer,'
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl . ' ^7' . $nickr . ' ^3!', '');
    ++$x_number;
  } else if ((strpos('tits', $msgr) !== false) && ($x_number != 1)) {
    $words  = array(
      '^3(  o  ) (  o  ) ',
      '^3( o ) ( o ) ',
      '^3( . ) ( . ) ',
      '^3:Q  ( . ) ( . ) ',
      '^3(.)(.) ',
      '^3( * )( * ) ',
      '^3( o )( o )'
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl, '');
    ++$x_number;
  } else if ((strpos('xxx', $msgr) !== false) && ($x_number != 1)) {
    rcon('say    ^7O');
    rcon('say    ^7|\\ __o');
    rcon('say    ^7_|_| \\');
    ++$x_number;
  } else if ((strpos('xl', $msgr) !== false) && ($x_number != 1)) {
    rcon('say    ^7O');
    rcon('say    ^7|\\ o');
    rcon('say    ^7_|  /|_');
    ++$x_number;
  } else if ((strpos(ixz . 'shit', $msgr) !== false) && ($x_number != 1)) {
    rcon("say \r\r ^7)");
    rcon("say \r ^7(shi)");
    rcon("say ^7(__T__)");
    ++$x_number;
  } else if ((strpos('rabbit', $msgr) !== false) && ($x_number != 1)) {
    rcon('say    ^7( \/ )');
    rcon('say    ^7( . o)');
    rcon("say    ^7c('')('')");
    ++$x_number;
  } else if ((strpos('ch', $msgr) !== false) && ($x_number != 1)) {
    rcon('say ^3    < >');
    rcon('say ^2/^2\"');
    rcon('say ^2/^7*^2\"');
    rcon('say ^6^2/^7*^7*^7*^2\"');
    ++$x_number;
  } else if ((strpos('dr', $msgr) !== false) && ($x_number != 1)) {
    rcon('say ' . $fckqq1 . '');
    rcon('say ' . $fckqq2 . '');
    ++$x_number;
  } else if ((strpos('vdk', $msgr) !== false) && ($x_number != 1)) {
    rcon('say ' . $vodqqq . '');
    ++$x_number;
  } else if ((strpos('mc', $msgr) !== false) && ($x_number != 1)) {
    rcon('say ^3' . $merrycrr . '');
    ++$x_number;
  } else if ((strpos('ny', $msgr) !== false) && ($x_number != 1)) {
    rcon('say ^3' . $nyyycrr . '');
    ++$x_number;
  } else if ((strpos('gl', $msgr) !== false) && ($x_number != 1)) {
    rcon('say  ^3Good Luck!');
    ++$x_number;
  } else if ((strpos('bl', $msgr) !== false) && ($x_number != 1)) {
    rcon('say  ^3Bad Luck!');
    ++$x_number;
  } else if ((strpos('stfu', $msgr) !== false) && ($x_number != 1)) {
    rcon('say  ^3Shut ta f..k up!');
    ++$x_number;
  } else if ((strpos('afk', $msgr) !== false) && ($x_number != 1)) {
    rcon('say  ^3' . $afffk . '');
    ++$x_number;
  }
  if ((strpos('#fp', $msgr) !== false) && ($x_number != 1)) {
    rcon("say    ^3##^7__^3##^7_^3#####^7__^3##^7_____^3##^7______^3####");
    rcon("say    ^3##^7__^3##^7_^3##^7_____^3##^7_____^3##^7_____^3##^7__^3##");
    rcon("say    ^3######^7_^3####^7___^3##^7_____^3##^7_____^3##^7__^3##");
    rcon("say    ^3##^7__^3##^7_^3##^7_____^3##^7_____^3##^7_____^3##^7__^3##");
    rcon("say    ^3##^7__^3##^7_^3#####^7__^3######^7_^3######^7__^3####");
    ++$x_number;
  }
  if ((strpos($msgr, 'govn') !== false) && ($x_number != 1) || (strpos($msgr, 'gavn') !== false) && ($x_number != 1)) {
    $words  = array(
      "^3I'OBHO DOJIEKO OT TE69 HE YIIIJIO ",
      "^3DABAU DOCBUDAHU9!",
      "^3TAK, TYT TE69 HUKTO HE DEP};{UT",
      "^3HPABUTC9 - HE HPABUTC9, CIIU MO9 KPACABUII,A",
      "^3I'ABHO Y TE69 BO PTY ",
      "^3IIEHUC TBOU B I'ABHE",
      "^3I'ABHO BO PTY TbI HOCUIII",
      "^3TBO9 PO};{A I'ABHO ",
      "^3POT 3AKPOU U UDU I'ABHO ",
      "^3I'ABHO Y TE69 BO PTY ",
      "^3TbI CAM I'OBHO  "
    );
    $text   = array();
    $slovam = 1;
    for ($i = 0; $i < $slovam; $i++) {
      $ran = rand(0, count($words) - 1);
      if (!in_array($words[$ran], $text)) {
        $text[] = $words[$ran];
      } else {
        $i--;
      }
    }
    foreach ($text as $wordl) {
      echo $wordl . "\n";
    }
    rcon('say ' . $wordl . ' ^7' . $nickr . ' ^3!', '');
    ++$x_number;
  }
  if (strpos($msgr, ixz . 'cmd') !== false) {
    if (strpos($game_patch, 'cod1_') !== false) {
      if (!empty($commands0)) {
        rcon('say (^1' . ixz . '^7)' . $commands0 . '', '');
      }
      if (!empty($commands1)) {
        if (strlen($commands1) > 125) {
          $keywords = str_replace(";", ",", $commands1);
          $keyword  = preg_split("/,/", $keywords);
          $keyword  = array_chunk($keyword, 18, true);
          for ($i = 0; $i <= 10; $i++) {
            if (!empty($keyword[$i])) {
              rcon('say (^2' . ixz . '^7) ' . (implode(",", $keyword[$i])) . '', '');
            }
          }
        } else
          rcon('say (^2' . ixz . '^7)' . $commands1 . '', '');
      }
      if (!empty($commands_costum)) {
        if (strlen($commands_costum) > 125) {
          $keywords = str_replace(";", ",", $commands_costum);
          $keyword  = preg_split("/,/", $keywords);
          $keyword  = array_chunk($keyword, 18, true);
          for ($i = 0; $i <= 10; $i++) {
            if (!empty($keyword[$i])) {
              rcon('say (^2' . ixz . '^7) ' . (implode(",", $keyword[$i])) . '', '');
            }
          }
        } else
          rcon('say (^3' . ixz . '^7)' . $commands_costum . '', '');
        rcon('say ^6' . ixz . 'fun', '');
      }
    } else {
      if (!empty($commands0)) {
        if (strlen($commands0) > 125) {
          $keywords = str_replace(";", ",", $commands0);
          $keyword  = preg_split("/,/", $keywords);
          $keyword  = array_chunk($keyword, 18, true);
          for ($i = 0; $i <= 10; $i++) {
            if (!empty($keyword[$i])) {
              rcon('say (^2' . ixz . '^7) ' . (implode(",", $keyword[$i])) . '', '');
            }
          }
        } else
          rcon('tell ' . $idnum . ' (^1' . ixz . '^7)' . $commands0 . '', '');
      }
      if (!empty($commands1)) {
        if (strlen($commands1) > 125) {
          $keywords = str_replace(";", ",", $commands1);
          $keyword  = preg_split("/,/", $keywords);
          $keyword  = array_chunk($keyword, 18, true);
          for ($i = 0; $i <= 10; $i++) {
            if (!empty($keyword[$i])) {
              rcon('say (^2' . ixz . '^7) ' . (implode(",", $keyword[$i])) . '', '');
            }
          }
        } else
          rcon('tell ' . $idnum . ' (^2' . ixz . '^7)' . $commands1 . '', '');
      }
      if (!empty($commands_costum)) {
        rcon('tell ' . $idnum . ' (^3' . ixz . '^7)' . $commands_costum . '', '');
        rcon('tell ' . $idnum . ' ' . ixz . 'fun', '');
      }
    }
    ++$x_stop_lp;
  } else if ((strpos($msgr, ixz . 'fun') !== false) && ($x_number != 1)) {
    ++$x_stop_lp;
    rcon('say ' . $commands2 . '', '');
    AddToLogInfo("[" . $datetime . "] cmd: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") ");
    echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
  }
  if ((strpos($msgr, ixz . 'info') !== false) && ($x_number != 1)) {
    rcon('say ^6^7__^1***^7_________^1*** ^3Admintool xxxreal.ru', '');
    rcon('say ^6^7__^1***^7________^1*****  ', '');
    rcon('say ^6^7__^1***^7_______^1***^7__^1***  ^3skype: larocca2012', '');
    rcon('say ^6^7__^1*******^7__^1*********** ', '');
    rcon('say ^6^7__^1*******^7_^1***^7_______^1***  ^3(c) ^3LA|ROCCA', '');
    ++$x_number;
    echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
    ++$x_stop_lp;
  }
  if ((strpos($msgr, 'chea') !== false) && ($x_number != 1) || (strpos($msgr, 'wallhack') !== false) && ($x_number != 1) || (strpos($msgr, 'haker') !== false) && ($x_number != 1) || (strpos($msgr, 'hack') !== false) && ($x_number != 1) || (strpos($msgr, 'aimbot') !== false) && ($x_number != 1)) {
    rcon('say ^1' . $pppanix . '', '');
    AddToLogInfo("[" . $datetime . "] REPORTED: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: G+id");
    ++$x_number;
    echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
    ++$x_stop_lp;
  } else if ((strpos($msgr, 'admin') !== false) && ($x_number != 1)) {
    rcon('say ^1' . $adminppp, '');
    AddToLogInfo("[" . $datetime . "] REPORTED: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: G+id");
    ++$x_number;
    echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
    ++$x_stop_lp;
  }
}
?>