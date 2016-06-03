<?php

require_once("functions.php");
html_header("Login");

$showRegister = $AD_CONFIG["ALLOW_REGISTRATION"];
?>
<div id="Body">
<div class="navBar"><span class="tab active" onClick="pickTab('loginTab')">Login</span><?php if ($showRegister) print "<span class=\"tab\" onClick=\"pickTab('registerTab')\">Register</span>" ?></div>
<div id = "loginTab" class="tabBody narrow">
  <div class="error" id="loginError"><?php echo $error; ?></div>
  <form action="" method="post" >
  <div><div class="login firstColumn">Username: </div><input class="secondColumn" type="text" name="username"></div>
  <div><div class="password firstColumn">Password:</div> <input class="secondColumn" type="password" name="password"></div>
  <div><input type="submit" value="Login"></div>
  </form>
</div>
<?php
if ($showRegister)
{
  require_once("templates/register.php");
}
echo "</div>";
html_footer();
?>
