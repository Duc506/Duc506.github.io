
<?php
$do="\033[1;31m";
$xl="\033[1;32m";
$vang="\033[1;33m";
$xn="\033[1;34m";
$hong="\033[1;35m";
$nau="\033[1;36m";


$den= "\e[1;47;30m";


$xn2= "\033[1;96m";

$do2="\033[1;91m";
$luc="\033[1;92m";
$vang3="\033[1;93m";

$hong="\033[1;95m";
$trang="\033[1;97m";
$tim="\033[0;35m";
echo "{$tim}Cookie  : ";
$ck= trim(fgets(STDIN));
echo "{$tim}nhập User-Agent : ";
$us= trim(fgets(STDIN));

system('clear');
$banner = "{$xn}________                                         ________           ______
___  __/__________________ _______  _____  __    ___  {$do2}__/______________  /
__  /  _  _ \_  ___/_  __ `__ \  / / /_  |/_/    __  /  _  __ \  __ \_  / 
_ {$hong} /   /  __/  /   _  / / / / / /_/ /__>  <      _  /   / /_/ / /_/ /  /  
{$trang}/_/    \___//_/    /_/ /_/ /_/\__,_/ /_/|_|      /_/    \____/\____//_/   \t
                                                                          
                    {$do} Bản Quyền By Termux Tool \t
                     {$trang}Kênh : Termux tool \t
                     {$tim}Facebook : Thien Nguyen (ảnh anh da đen)\t
                     {$xn}Telegram : https://t.me/q06012008\t
                     {$luc}Gmail : thiensa2k8@gmail.com \t
";
echo $banner;
while(true){
$url="https://ads-social.online/kiemtien";
$data="g-recaptcha-response=03AGdBq258lOmvZNopQoaS4GWBsyuAdZTJ7hYZMJG81gkB6Py2zkylQbQ-o0z3s7vKk6Ry3XYd3I1ZfkcTpsZFn8W8QmrElUSvD4AgdPQCrOKMmoVpJ9rzc4mShEehm0MEpuSTMH5rSceoM7h7MK1QSoZC1wOrhD_n12diCsyrSpXctURgJD-l8YXGWfJIHsk3zfewKCrg9PjL3CdM--oqzU6bmwt9D5vMSlgK0iEb9Ilc_VbqIWKDNvTwYLDg4LWzgPQI0BMUJtN9fPvu6b1TdYi-gN6YtqB3zyxwPYtRlXARMGq4toWtJOg_KbdvZxF7Li9k25H4k2BjDibdUVgy0UT0cDq1F5-PFNdVaRe-tMmptOrkf44YS4aghVQBTjh0BZNZe07kFyaSPogc3iCif8BN44zXfHp8yRCnrt5mRgh9F5tw82Xg_WLxUvXPkykzpHkT8g6mLCmcnMLX7lDGxX_UvfQOwSdfZw";

$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $header = array(
 
    "Host:ads-social.online",
    "User-Agent:$us",
    "Cookie:$ck",
    "",
    "",
    )));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true); 
$ten = explode('</i>Đăng Xuất (',$mr2)[1];
$ten = explode(')</a></li>',$ten)[0];
$token= explode('<button id="',$mr2)[1];
$token= explode('"',$token)[0];

echo $trang,"tên bạn là : $ten\n";
echo "{$xn2}============================================================================";
$url="https://ads-social.online/nhantien.php";
$data="token=$token";
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $header));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true); 
$tt=$json['message'];
echo "{$do}bạn nhận được $tt"; 

}