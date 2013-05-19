<?php $page = (isset($_GET['page'])) ? $_GET['page'] : false; ?>

<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Front-end template for <?php echo $page; ?> - Project name</title>
    <meta name="description" content="Lorem ipsum">
    
    <!-- delete if non-responsive project -->
    <meta name="viewport" content="initial-scale=1">
    
    <?php include "assets/files-header.php"; ?>
</head>

<body>

    <div class="global">
        <?php include 'modules/header.php'; ?>

        <div class="main clearfix" role="main">
            <?php
            // page or list
            if ($page && file_exists('pages/'.$page.'.php')) {
                include 'pages/'.$page.'.php';
            } else {
                include 'pages/__integration.php';
            }
            ?>
        </div><!-- end .main -->

        <?php include 'modules/footer.php'; ?>
    </div><!-- end .global -->

    <?php include 'assets/files-footer.php'; ?>
</body>

</html>