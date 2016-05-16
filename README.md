# Location-Based-Cookie-Consent

[Website] (http://verpz.github.io/Location-Based-Cookie-Consent)

To comply with the European [Cookie Law](https://www.cookielaw.org/the-cookie-law/) - This script will show a cookie consent popup specifically to users inside Europe. This prevents those annoying messages everytime you visit a website when you are out of the required area. It does this by fetching the user's IP address and then sending it to an API, to get the user's country.

TO-DO: Use a MaxMind Database instead of API as the API is unreliable. Or, find a better API.

Requirements:

  * A brain in your PCI-E slot.
  * PHP
  * Javascript enabled client-side for it to stay hided for the browsing session.

Uses a CDN for CSS.
This script does not require javascript for the user to close the popup.

To install:
  
  1. Add "cookie.php" to your project folder.
  2. Put the following code at the bottom of your page: 
  ``` 
  <?php
  require("cookie.php");
  ?>
  ```
  3. Edit cookie.php to edit the popup text and to add your privacy policy link.

If you wish to not use the CDN, simply download cookie.css, add it to your project folder, then update cookie.php.

**Disclaimer:** This script aims to comply with the Cookie Law as best as possible, however I am not responsable for any legal issues that arise from using this script. I am not associated with the API, please read their privacy policy before the use of this script. [IP-JSON] (https://ip-json.rhcloud.com)

Credit to Chris Wiegman for the GETIP() Function.

The popup is displayed in the bottom corner out of the way.

![Popup](https://i.imgur.com/0zDnKAs.png)
