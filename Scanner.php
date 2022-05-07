<?php


/*
             ,----------------,              ,---------,
        ,-----------------------,          ,"        ,"|
      ,"                      ,"|        ,"        ,"  |
     +-----------------------+  |      ,"        ,"    |
     |  .-----------------.  |  |     +---------+      |
     |  |                 |  |  |     | -==----'|      |
     |  |  localhost      |  |  |     |         |      |
     |  |                 |  |  |/----|`---=    |      |
     |  |  C:\>_          |  |  |   ,/|==== ooo |      ;
     |  |                 |  |  |  // |(((( [33]|    ,"
     |  `-----------------'  |," .;'| |((((     |  ,"
     +-----------------------+  ;;  | |         |,"
        /_)______________(_/  //'   | +---------+
   ___________________________/___  `,
  /  oooooooooooooooo  .o.  oooo /,   \,"-----------
 / ==ooooooooooooooo==.o.  ooo= //   ,`\--{)B     ,"
/_==__==========__==_ooo__ooo=_/'   /___________,"
 ╔═══════════════════════════ ஜ۩☆۩ஜ ══════════════════════════╗
 .·★·.·´¯`·.·★·..    Coded By Nasr Bechir    ..·★·.·´¯`·.·★·.
 ╚═══════════════════════════ ஜ۩☆۩ஜ ══════════════════════════╝
#[Detect Version]  
#[Detect User]  
#[Detect Theme]  
#[Detect Plugins]  
*/

print("
 __       __  _______         __       __  __            __         ______                                                                    
/  |  _  /  |/       \       /  \     /  |/  |          /  |       /      \                                                                   
$$ | / \ $$ |$$$$$$$  |      $$  \   /$$ |$$/  _______  $$/       /$$$$$$  |  _______   ______   _______   _______    ______    ______        
$$ |/$  \$$ |$$ |__$$ |      $$$  \ /$$$ |/  |/       \ /  |      $$ \__$$/  /       | /      \ /       \ /       \  /      \  /      \       
$$ /$$$  $$ |$$    $$/       $$$$  /$$$$ |$$ |$$$$$$$  |$$ |      $$      \ /$$$$$$$/  $$$$$$  |$$$$$$$  |$$$$$$$  |/$$$$$$  |/$$$$$$  |      
$$ $$/$$ $$ |$$$$$$$/        $$ $$ $$/$$ |$$ |$$ |  $$ |$$ |       $$$$$$  |$$ |       /    $$ |$$ |  $$ |$$ |  $$ |$$    $$ |$$ |  $$/       
$$$$/  $$$$ |$$ |            $$ |$$$/ $$ |$$ |$$ |  $$ |$$ |      /  \__$$ |$$ \_____ /$$$$$$$ |$$ |  $$ |$$ |  $$ |$$$$$$$$/ $$ |            
$$$/    $$$ |$$ |            $$ | $/  $$ |$$ |$$ |  $$ |$$ |      $$    $$/ $$       |$$    $$ |$$ |  $$ |$$ |  $$ |$$       |$$ |            
$$/      $$/ $$/             $$/      $$/ $$/ $$/   $$/ $$/        $$$$$$/   $$$$$$$/  $$$$$$$/ $$/   $$/ $$/   $$/  $$$$$$$/ $$/             
                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                   
      Wordpress Mini Scanner V1
");
function cURL($url)
{
    $zcURL = curl_init();
    curl_setopt($zcURL, CURLOPT_HEADER, 1);
    curl_setopt($zcURL, CURLOPT_TIMEOUT, 15);
    curl_setopt($zcURL, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($zcURL, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($zcURL, CURLOPT_URL, $url);
    curl_setopt($zcURL, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1; rv:7.0.1) Gecko/20100101 Firefox/7.0.1");
    curl_setopt($zcURL, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($zcURL);
    if ($result) {
        return $result;
    }
}
if (!$argv[1]) {
    die("usage $argv[0] http://localhost/wordpress");
};
$site = $argv[1];
$str = "";
echo "\n\n[+][+]Scanning : $site" . '[+][+]';
$content = cURL($site);
if (preg_match("#WordPress (.*?)/>#", $content, $version)) {
    $str = str_replace('/>', "", $version[0]);
    $str = str_replace('"', "", $str);
    $users = @file_get_contents("$site/?author=1");
    preg_match('/<title>(.*?)<\/title>/si', $users, $user);
    if (isset($user[1])) {
        $wpuser = explode('|', $user[1]);
        echo "\n User : " . $wpuser[0];
    }
    echo "\n Version : " . $str;
}
preg_match_all("/wp-content\/themes\/(.*?)\/style\.css/", $content, $ret_1);
preg_match_all("/\<meta name=\"generator\" content=\"WordPress (.*?)\" \/\>/", $content, $ret_3);
echo "\n Theme : " . trim($ret_1[1][0]);
preg_match_all("/wp-content\/plugins\/(.*?)\//", $content, $match);
foreach ($match[1] as $blugin) {
    $Purl = $site . "/wp-content/plugins/" . $blugin;
    if (!isset($Arr[$blugin]) and !is_null($blugin) and !empty($blugin)) {
        echo "  \n  ->Plugin :" . $blugin;
    }
    $nArr[] = $blugin;
    $Arr[$blugin] = true;
}
echo " \n ";
