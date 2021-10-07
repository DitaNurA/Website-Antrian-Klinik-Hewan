<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
{
   $success_page = './hmeadmn.php';
   $error_page = basename(__FILE__);
   $mysql_server = 'localhost';
   $mysql_username = 'admin';
   $mysql_password = 'admin';
   $mysql_database = 'johapetcare';
   $mysql_table = 'admin';
   $crypt_pass = md5($_POST['password']);
   $found = false;
   $fullname = '';
   $role = '';
   $avatar = '';
   $session_timeout = 600;
   $db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
   if (!$db)
   {
      die('Failed to connect to database server!<br>'.mysqli_error($db));
   }
   mysqli_select_db($db, $mysql_database) or die('Failed to select database<br>'.mysqli_error($db));
   mysqli_set_charset($db, 'utf8');
   $sql = "SELECT * FROM ".$mysql_table." WHERE username = '".mysqli_real_escape_string($db, $_POST['username'])."'";
   $result = mysqli_query($db, $sql);
   if ($data = mysqli_fetch_array($result))
   {
      if ($crypt_pass == $data['password'] && $data['active'] != 0)
      {
         $found = true;
         $fullname = $data['fullname'];
         $role = $data['role'];
         $folder = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
         $avatar = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$folder" . "avatars/" . $data['avatar'];
      }
   }
   mysqli_close($db);
   if ($found == false)
   {
      header('Location: '.$error_page);
      exit;
   }
   else
   {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['fullname'] = $fullname;
      $_SESSION['role'] = $role;
      $_SESSION['avatar'] = $avatar;
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout;
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme)
      {
         setcookie('username', $_POST['username'], time() + 3600*24*30);
         setcookie('password', $_POST['password'], time() + 3600*24*30);
      }
      header('Location: '.$success_page);
      exit;
   }
}
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="klinikhewan.css" rel="stylesheet">
<link href="Admin.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.lazyload.min.js"></script>
<script>
$(document).ready(function()
{
   $('img[data-src]').lazyload();
});
</script>
</head>
<body>

<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<picture id="wb_Picture1" style="display:block;width: 100%;height:auto;z-index:0">
<img src="images/logo.png" loading="lazy" id="Picture1" alt="" width="50" height="50">
</picture>
</div>
<div class="col-2">
</div>
<div class="col-3">
<div id="wb_ResponsiveMenu1" style="display:inline-block;width:455px;height:77px;z-index:1;">
<label class="toggle" for="ResponsiveMenu1-submenu" id="ResponsiveMenu1-title"><span id="ResponsiveMenu1-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
<input type="checkbox" id="ResponsiveMenu1-submenu">
<ul class="ResponsiveMenu1" id="ResponsiveMenu1" role="menu">
<li><a role="menuitem" href="">Home</a></li>
<li><a role="menuitem" href="">Tentang</a></li>
<li><a role="menuitem" href="">Info</a></li>
<li><a role="menuitem" href="">Hubungi</a></li>
</ul>

</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_Login1" style="display:inline-block;width:100%;z-index:2;">
<form name="loginform" method="post" accept-charset="UTF-8" action="<?php echo basename(__FILE__); ?>" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="header">Masuk Sebagai Admin</td>
</tr>
<tr>
   <td class="label"><label for="username">User Name</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="username" type="text" id="username" value="<?php echo $username; ?>"></td>
</tr>
<tr>
   <td class="label"><label for="password">Password</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="password" type="password" id="password" value="<?php echo $password; ?>"></td>
</tr>
<tr>
   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
</tr>
<tr>
   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="Masuk" id="login"></td>
</tr>
</table>
</form>

</div>
</div>
</div>
</div>
</div>
</body>
</html>