<?php
    $options = get_option('redirect_options');
    $url =  $options['url'];
    ?>

<html>
<head>
<title>Site Moved
</title>
<meta http-equiv="refresh" content="5;<?php echo $url?>">
    <meta name="robot" content="noindex,follow">
<body>
Our Web Site has moved. Please update your links and bookmarks.
This page will redirect you to <a href="<?php echo $url?>">our new location</a> in five seconds.</a>
</body>
</html>
