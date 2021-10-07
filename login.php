<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="klinikhewan.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">
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
</div>
<div class="col-2">
</div>
<div class="col-3">
<picture id="wb_Picture2" style="display:block;width: 100%;height:auto;z-index:5">
<img src="images/logo.png" id="Picture2" alt="" width="455" height="455">
</picture>
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:6;">
<h1 id="Heading1">Login Sebagai ?</h1>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<a id="Button5" href="./Admin.php" style="display:inline-block;width:112px;height:28px;z-index:2;">ADMIN</a>
</div>
<div class="col-2">
<a id="Button1" href="./Pasien.php" style="display:inline-block;width:112px;height:28px;z-index:3;">PASIEN</a>
</div>
</div>
</div>
</div>
<div id="wb_Heading2" style="display:inline-block;width:100%;z-index:8;">
<h1 id="Heading2">Belum Punya akun ?</h1>
</div>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<a id="Button2" href="./Daftar.php" style="display:inline-block;width:112px;height:28px;z-index:4;">DAFTAR</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-4">
</div>
<div class="col-5">
</div>
</div>
</div>
</div>
</body>
</html>