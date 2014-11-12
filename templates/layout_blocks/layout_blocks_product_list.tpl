 {config_load file="setting.conf"}

<html>
<head>
  <title>{#pageTitle#}</title>
  {block name=head}{/block}
</head>
<body bgcolor="{#bodyColor#}" >
<div id="xyz_main">
{block name=headerA}{/block}
<br> <br><br><br><br>
{block name=productLeftSidePanel}{/block}

{block name=productlist}{/block}

</div>
</body>
</html>