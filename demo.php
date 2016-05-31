<!-- Made by Verpz https://github.com/Verpz/ Licensed Under MIT License Details On GitHub -->

<html>
  <head>
    <title>This Is A Demo</title>

  </head>
  <body>
    <h2>If your IP address is located in a Euro Country, the popup will show.</h2><br /><h2> To see what the popup looks like normally, refer to popup-demo.html</h2>
  </body>
  <?php
    require("cookie.php");
    echo 'Current country: ' . $country . '<br />';
    echo 'IP: ' . GetIP();
   ?>
</html>
