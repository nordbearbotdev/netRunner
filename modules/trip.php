<?php
function trac() {
  logo();
  $cyn="\033[01;36m";
  $yel="\033[01;33m";
  $prompt="\n\033[00m";
  echo $prompt;
  $ip = readline('  Enter IP : ');
  $data = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
  $FCL="\033[01;33m";
  $MCL="\033[01;37m>\033[01;32m";
  $NCL="\033[00m";
  date_default_timezone_set($data['timezone']);
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m 
     \033[01;31m(_)\033[01;33m  
     ███▄    █ ▓█████▄▄▄█████▓ ██▀███   █    ██  ███▄    █  ███▄    █ ▓█████  ██▀███  
     ██ ▀█   █ ▓█   ▀▓  ██▒ ▓▒▓██ ▒ ██▒ ██  ▓██▒ ██ ▀█   █  ██ ▀█   █ ▓█   ▀ ▓██ ▒ ██▒
    ▓██  ▀█ ██▒▒███  ▒ ▓██░ ▒░▓██ ░▄█ ▒▓██  ▒██░▓██  ▀█ ██▒▓██  ▀█ ██▒▒███   ▓██ ░▄█ ▒
    ▓██▒  ▐▌██▒▒▓█  ▄░ ▓██▓ ░ ▒██▀▀█▄  ▓▓█  ░██░▓██▒  ▐▌██▒▓██▒  ▐▌██▒▒▓█  ▄ ▒██▀▀█▄  
    ▒██░   ▓██░░▒████▒ ▒██▒ ░ ░██▓ ▒██▒▒▒█████▓ ▒██░   ▓██░▒██░   ▓██░░▒████▒░██▓ ▒██▒
    ░ ▒░   ▒ ▒ ░░ ▒░ ░ ▒ ░░   ░ ▒▓ ░▒▓░░▒▓▒ ▒ ▒ ░ ▒░   ▒ ▒ ░ ▒░   ▒ ▒ ░░ ▒░ ░░ ▒▓ ░▒▓░
    ░ ░░   ░ ▒░ ░ ░  ░   ░      ░▒ ░ ▒░░░▒░ ░ ░ ░ ░░   ░ ▒░░ ░░   ░ ▒░ ░ ░  ░  ░▒ ░ ▒░
       ░   ░ ░    ░    ░        ░░   ░  ░░░ ░ ░    ░   ░ ░    ░   ░ ░    ░     ░░   ░ 
             ░    ░  ░           ░        ░              ░          ░    ░  ░   ░     
                                                                                      
       

   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m--------------- \033[01;32mIP Информация\033[01;31m ---------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;

  if($data['status'] == 'Успешно') {
    echo "\n ".$FCL."IP Адрес     ".$MCL."   ".$data['query'];
    echo "\n ".$FCL."Код страны   ".$MCL."   ".$data['countryCode'];
    echo "\n ".$FCL."Страна        ".$MCL."   ".$data['country'];
    echo "\n ".$FCL."Дата & Время  ".$MCL."   ".date("F j, Y, g:i a");
    echo "\n ".$FCL."Код Региона   ".$MCL."   ".$data['region'];
    echo "\n ".$FCL."Регион        ".$MCL."   ".$data['regionName'];
    echo "\n ".$FCL."Город         ".$MCL."   ".$data['city'];
    echo "\n ".$FCL."Zip код       ".$MCL."   ".$data['zip'];
    echo "\n ".$FCL."Часовой пояс  ".$MCL."   ".$data['timezone'];
    echo "\n ".$FCL."ISP           ".$MCL."   ".$data['isp'];
    echo "\n ".$FCL."Oрганизация   ".$MCL."   ".$data['org'];
    echo "\n ".$FCL."ASN           ".$MCL."   ".$data['as'];
    echo "\n ".$FCL."Широта        ".$MCL."   ".$data['lat'];
    echo "\n ".$FCL."Долгота       ".$MCL."   ".$data['lon'];
    echo "\n ".$FCL."Местоположение".$MCL."   ".$data['lat'].",".$data['lon'];
    echo "\n\n$NCL";
  } else {
    echo "\n\033[01;31m Прости, чел. Нам не удалось отледить \033[01;33m IP адрес\033[01;31m !!!\033[00m\n";
    echo "\033[01;31m Проверь свое \033[01;33mИнтернет соединение\033[01;31m !!\033[00m\n";
    echo "\033[01;31m Если ты\033[01;33mонлайн\033[01;31m проверь свой \033[01;33mIP адрес\033[01;31m !!\033[00m\n\n";
  }
  $prompt="\033[00m";
  echo $prompt;
  $getact = readline(' NetRunner >> ');
  menu();
}
?>
