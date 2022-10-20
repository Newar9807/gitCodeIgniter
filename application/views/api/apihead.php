<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <style>
        label{
            font-size: 15px;
            font-weight: bolder;
        }
        input{
            font-size: 15px;
        }
    </style>
    <body>
        <h1 style="text-decoration: none;">
            This is the header
        </h1>
        <strong>
            <?php echo anchor('api/data/GetControlDetails/false', 'GET'); ?>
        </strong>
        <hr>