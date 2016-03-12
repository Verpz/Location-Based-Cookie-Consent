<?php
/* Made by Verpz https://github.com/Verpz/ Licensed Under Apache License 2.0 Details On GitHub */
function GetIP()
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
    {
        if (array_key_exists($key, $_SERVER) === true)
        {
            foreach (array_map('trim', explode(',', $_SERVER[$key])) as $ip)
            {
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                {
                    print $ip;
                }
            }
        }
    }
}

$address = GetIP();
$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$address");
echo $xml->geoplugin_countryName ;

?>
