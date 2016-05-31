# Location-Based-Cookie-Consent

[Website] (http://verpz.github.io/Location-Based-Cookie-Consent)

To comply with the European [Cookie Law](https://www.cookielaw.org/the-cookie-law/) - This script will show a cookie consent popup specifically to users inside Europe. This prevents those annoying messages every time you visit a website when you are out of the EU. It does this by fetching the user's IP address and then sending it out to an API to get the user's country.

Requirements:

  * A brain in your PCI-E slot.
  * PHP
  * Javascript enabled client-side for the pop-up to stay hid once dismissed for the browsing session.

Uses a CDN for CSS and Javascript.
This script does not require javascript for the user to close the popup.

To install:

  1. Add "cookie.php" to your project folder.
  2. Put the following code at the bottom of your page:
  ```
  <?php
  require("cookie.php");
  ?>
  ```
  3. Visit [ipinfodb.com] (https://www.ipinfodb.com/register.php) to create a free account and to receive an API key.
  4. Edit cookie.php to edit the popup's text, url and to add your API key.

If you wish to not use the CDN, simply download and add cookie.css and cookie-js.js, to your project folder. Then update the URLs in cookie.php.

The popup is displayed in the bottom corner out of the way.

HTTPS is used between the server/client to the API.

**Disclaimer:** This script aims to comply with the Cookie Law as best as possible, however I am not responsable for any legal issues that arise from using this script. I am not associated with the API, please read their privacy policy before the use of this script. [IPINFODB] (https://www.ipinfodb.com/)

Credit to Chris Wiegman for the GETIP() Function.

![Popup](https://i.imgur.com/0zDnKAs.png)
