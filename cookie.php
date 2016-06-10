<?php
/* Made by Verpz https://github.com/Verpz/ Licensed Under MIT License Details On GitHub */

// Visit ipinfodb.com to register an API key. Instruction on Github https://github.com/Verpz/Location-Based-Cookie-Consent

$apikey = '#';
// Message shown on popup
$message = 'This website uses cookies to improve your experience.';
// By default after the $message "To find out more, click here" is shown
// URL used on popup
$url = "#";


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
$html = '<div id="cookie-consent"><link rel="stylesheet" type="text/css" href="cookie.css"><input onclick="setCookieConsent()" type="checkbox" id="cookie-hide" /><div class="cookie" id="cookie-exit"><p>' . $message . 'To find out more, click<a href="' . $url . '" target="_blank"> here</a></p><label for="cookie-hide">Close</label></div><script src="https://cdn.rawgit.com/Verpz/Location-Based-Cookie-Consent/master/cookie-js.js"></script></div>';
$xml = simplexml_load_file("https://api.ipinfodb.com/v3/ip-country/?key=$apikey&format=xml&ip=$address");
$country = $xml->countryName;
// Add or remove countries below
$EU = array("Austria", "Belgium", "Bulgaria", "Croatia", "Republic of Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Germany", "Greece", "Hungary", "Ireland", "Italy", "Latvia", "Lithuania", "Luxembourg", "Malta", "Netherlands", "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden", "United Kingdom");
if (in_array($country, $EU)) {
  // Is inside the EU
  echo $html;
} else {
  // Is outside the EU
}
?>
