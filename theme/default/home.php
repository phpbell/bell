<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print htmlentities($site['name']); ?></title>
    <?php
    print $asset('css/style.css',false);
    ?>
</head>
<body>

</body>
</html>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php print htmlentities($site['name']); ?></title>
</head>
<body>
<table width="800" align="center">
<tr>
<td>
<?php
print '<center>';
print 'hello '.$name;
print '</center>';
print '<pre>';
print implode('<br>',$dbInfo);
print '</pre>';
?>
</td>
</tr>
</table>
</body>
</html>
