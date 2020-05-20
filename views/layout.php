<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)): echo $this->escape($title) . '-'; endif?>Mini Blog</title>
</head>
<body>
<div id="header">
    <h1><a href="<?php echo $base_url;?>/">Mini Blog</h1>
</div>
    <div id="content">
        <?php echo $content; ?>
    </div>
</body>
</html>