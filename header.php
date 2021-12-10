<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">
    </script>

    <title>American Village</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="all">
        <header>                
                <ul class="header-right">
                    <li>Menu01</li>
                    <li>Menu02</li>
                    <li>Menu03</li>
                    <li>Menu04</li>
                </ul>
            <div class ="header-items">
                <!-- ハンバーガーメニュー -->
                <label class="hamburger" for="hamburger">
                    <span class="pate"></span>
                </label>
                <div class ="logo-oya">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="logo">
                </div>
            </div>
            
        </header>