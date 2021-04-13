<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php print htmlentities($site['name']); ?></title>
</head>
<body>
<table width="780" align="center" border="1">
<tr>
<td>
<?php
print '<center>';
print 'hello '.$name;
print '<p>';
print $dbInfo['dsn'];
print '</p>';
print '</center>';
?>
</td>
</tr>
</table>
</body>
</html>
