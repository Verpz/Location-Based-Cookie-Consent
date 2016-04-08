<?php
/* Made by Verpz https://github.com/Verpz/ Licensed Under MIT License Details On GitHub */
function GetIP()
 {
		//GetIP function by Chris Wiegman
		if ( function_exists( 'apache_request_headers' ) ) {
			$headers = apache_request_headers();
		} else {
			$headers = $_SERVER;
		}

		if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
			$the_ip = $headers['X-Forwarded-For'];
		} elseif ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )
		) {
			$the_ip = $headers['HTTP_X_FORWARDED_FOR'];
		} else {

			$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );
		}
		return $the_ip;
	}

$address = GetIP();
$html = '<div id="cookie-consent"><link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Verpz/Location-Based-Cookie-Consent/master/cookie.css"><input onclick="setCookieConsent()" type="checkbox" id="cookie-hide" /><div class="cookie" id="cookie-exit"><p>This website uses cookies to improve your experience. To find out more, click<a href="#" target="_blank"> here</a></p><label for="cookie-hide">Close</label></div><script src="cookie-js.js"></script></div>';
$xml = simplexml_load_file("https://ip-json.rhcloud.com/xml/$address");
$country = $xml->country_name;
$EU = array("Austria", "Belgium", "Bulgaria", "Croatia", "Republic of Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Germany", "Greece", "Hungary", "Ireland", "Italy", "Latvia", "Lithuania", "Luxembourg", "Malta", "Netherlands", "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden", "United Kingdom", "Australia");
if (in_array($country, $EU)) {
  echo $html;
} else {
}
?>
