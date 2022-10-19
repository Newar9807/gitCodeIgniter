<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1 style="text-decoration: none;">
            <nav>
                <?php echo anchor('pages/view/about', 'About') ?>
                <?php echo anchor('pages/view/service', 'Service') ?>
                <?php echo anchor('pages/view/contact', 'Contact') ?>
            </nav>
        </h1>
        <hr>