<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
{
   unset($_SESSION['username']);
   unset($_SESSION['fullname']);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="klinikhewan.css" rel="stylesheet">
<link href="hmeadmn.css" rel="stylesheet">
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
<div id="wb_LoginName1" style="display:inline-block;width:100%;text-align:right;z-index:2;">
<span id="LoginName1">Selamat Dr. <?php
if (isset($_SESSION['username']))
{
   echo $_SESSION['username'];
}
else
{
   echo 'Not logged in';
}
?></span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<a id="Button5" href="./datapsien.php" style="display:inline-block;width:200px;height:70px;z-index:3;">DATA PASIEN</a>
</div>
<div class="col-2">
<a id="Button4" href="./perbarui.php" style="display:inline-block;width:297px;height:70px;z-index:4;">PERBARUI JADWAL</a>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="col-1">
<a id="Button1" href="./rkmmds.php" style="display:inline-block;width:200px;height:70px;z-index:5;">REKAM MEDIS</a>
</div>
</div>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="wb_Logout1" style="display:inline-block;width:100%;text-align:center;z-index:6;">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform" style="display:inline">
<input type="hidden" name="form_name" value="logoutform">
<button type="submit" name="logout" value="Logout" id="Logout1">Logout</button>
</form>

</div>
</div>
<div class="col-2">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>