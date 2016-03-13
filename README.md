# Location-Based-Cookie-Consent

[Website] (http://verpz.github.io/Location-Based-Cookie-Consent)

To comply with the European [Cookie Law](https://www.cookielaw.org/the-cookie-law/) - This script will show a cookie consent popup specifically to users inside Europe. This prevents those annoying messages everytime you visit a website when you are out of the required area. It does this by fetching the user's IP address and then sending it to an API, to get the user's country.

TO-DO: Set cookie to prevent the popup from showing multiple times.

Requirements:

  * A brain in your PCI-E slot.
  * PHP

Uses a CDN for CSS.
This script does not require javascript.

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

**Disclaimer:** This script aims to comply with the Cookie Law as best as possible, but I am not responsable for any legal issues that arise from using this script.

![Popup](https://i.imgur.com/0zDnKAs.png)


Credit to Chris Wiegman for the GETIP() Function.
