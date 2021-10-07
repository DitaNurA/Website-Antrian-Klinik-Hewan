<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="klinikhewan.css" rel="stylesheet">
<link href="Input.css" rel="stylesheet">
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
<div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:2;">
<img src="images/home.gif" id="Image1" alt="" width="455" height="341">
</div>
</div>
<div class="col-2">
<div id="wb_LayoutGrid1">
<form name="LayoutGrid1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:3;">
<h1 id="Heading1">Input Data Anda di Sini<br></h1>
</div>
<input type="text" id="Editbox1" style="display:block;width: 100%;height:32px;z-index:4;" name="Nama Pemilik" value="" spellcheck="false" placeholder="Nama Pemilik">
<hr id="Line2" style="display:block;width: 100%;z-index:5;">
<input type="text" id="Editbox2" style="display:block;width: 100%;height:32px;z-index:6;" name="Editbox2" value="" spellcheck="false" placeholder="Nama Hewan">
<hr id="Line3" style="display:block;width: 100%;z-index:7;">
<input type="text" id="Editbox4" style="display:block;width: 100%;height:32px;z-index:8;" name="Jenis Hewan" value="" spellcheck="false" placeholder="Jenis Hewan">
<hr id="Line4" style="display:block;width: 100%;z-index:9;">
<input type="text" id="Editbox3" style="display:block;width: 100%;height:32px;z-index:10;" name="Jenis Kelamin" value="" spellcheck="false" placeholder="Jenis Kelamin">
<hr id="Line5" style="display:block;width: 100%;z-index:11;">
<input type="submit" id="Button1" name="" value="Kirim" style="display:inline-block;width:84px;height:45px;z-index:12;">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>