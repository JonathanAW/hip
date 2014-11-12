{config_load file="setting.conf"}
<html>
<head>
  <title>{#pageTitle#}</title>
  {block name=head}{/block}
</head>
<body bgcolor="{#bodyColor#}" >
<div id="xyz_main">
<br> <br><br><br><br>




<div style="width:973px">
    <div style="float:left; width:400px">
    {block name=productInfoLeftSidePanel}{/block}
    </div>
    <div style="float:right;width:563px;margin-left:10px;">
    {block name=productlist}{/block}
    </div>
</div>




<div style="clear:both"></div>

{block name=bottomInfo}{/block}

</div>
</body>
</html>