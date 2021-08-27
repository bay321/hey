<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
</style>
</head>
<body>
    <?php
    echo file_get_contents($_GET['id'].".txt");
    ?>
</body>
</html>