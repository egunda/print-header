<html>
<head>
<title>Check headers received by server</title>
<head>
<body>
<?php
    $headers = apache_request_headers();

    foreach ($headers as $header => $value) {
        echo "$header: $value <br />\n";
    }

header('Cache-Control: max-age=60');
?>

</body>
</html>
