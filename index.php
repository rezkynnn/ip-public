<?php
// ip-public.php
$situsInfoIP = @file_get_contents("https://ip.jaranguda.com");
 
// pastikan IP yang di dapat adalah IP publik, bukan private IP atau lainnya
// bila anda membutuhkan selain IPv4 modifikasi FILTER_FLAG_xxx
if (! filter_var($situsInfoIP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        $situsInfoIP = @file_get_contents("http://icanhazip.com");
}
 
echo $situsInfoIP;

?>
