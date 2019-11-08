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
             https://www.facebook.com/nasr.bechir

 Dont change the right of code ;)

#[Detect Version]  
#[Detect User]  
#[Detect Theme]  
#[Detect Plugins]  
Gr33tz To : webplus.tn & youcan.tn

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
                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                   
      Wordpress Scanner V1 By Nasr Bechir
");



if(!$argv[1]){
     die("usage $argv[0] http://www.sitewordpress.com");
   }
;
   $site= $argv[1];
        echo "\n\n[+][+]Scanning : $site".'[+][+]';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$site");
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)");
$get = curl_exec($ch);
curl_close($ch);
    if(preg_match("#WordPress (.*?)/>#", $get, $version)){
    $str = str_replace('/>', "", $version[0]);
    $str = str_replace('"', "", $str);
   
    $users = @file_get_contents("$site/?author=1");
    preg_match('/<title>(.*?)<\/title>/si',$users,$user);
    $wpuser = explode('|',$user[1]);
echo "\n User : ".$wpuser[0]; }


echo "\n Version : ".$str; 
 
 
 $content = cURL($site);
 
 
 
 	preg_match_all("/wp-content\/themes\/(.*?)\/style\.css/", $content, $ret_1);
				preg_match_all("/\<meta name=\"generator\" content=\"WordPress (.*?)\" \/\>/", $content, $ret_3);
				
				echo "\n Theme : ".trim($ret_1[1][0]) ;
					preg_match_all("/wp-content\/plugins\/(.*?)\//", $content, $match);
				foreach($match[1] as $blugin) 
				{
					$Purl = $site. "/wp-content/plugins/" .$blugin;
					if(!isset($Arr[$blugin]) and !is_null($blugin) and !empty($blugin)) 
					{ 
					echo "  \n  ->Plugin :".$blugin;
					}
					$nArr[] = $blugin;
					$Arr[$blugin] = true;
					
				}
				
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
		if($result) 
		{
			return $result;
			
		}
	}
 
 

//http://www.valdenzanews.it 
?>
