<?php
function help() {
    logo();
    echo <<<EOL
\033[01;37m -----------------------------------------------
|         \033[01;36mcommand\033[01;37m        |        \033[01;36mUse\033[01;37m           |
 -----------------------------------------------
| \033[01;32mtrace -m\033[01;37m               | \033[01;33mУзнать мой IP\033[01;37m        |
| \033[01;32mtrace -t <traget-ip>\033[01;37m   | \033[01;33mОтследить IP\033[01;37m             |
| \033[01;32mtrace --help\033[01;37m           | \033[01;33mБольше информации\033[01;37m |
 -----------------------------------------------

\033[01;33m Примечание :- \033[01;31ip-api будет автоматически блокировать IP адрес за более 150 запросов в минуту.  \033[00m


EOL;
  $prompt="\033[00m";
  echo $prompt;
  $getact = readline(' NetRunner >> ');
  menu();
}
?>