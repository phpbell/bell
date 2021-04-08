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
    <?php
    print '<center>';
    print 'hello '.$name;
    print '</center>';
    print '<pre>';
    print implode('<br>',$dbInfo);
    print '</pre>';
    ?>
</body>
</html>
