<?php
    header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title><?php echo $title ?></title>
    <!--Fonts from Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
        <div class="header">
            <div class="header-layout layout">
                <div class="header-navigation">
                    <ul class="navigation-bar">
                        <li><a href="/main">Обо мне</a>
                        <li><a href="/portfolio">Портфолио</a>
                        <li><a href="#">Услуги</a>
                        <li><a href="#">Блог</a>
                        <li><a href="/contacts">Контакты</a>
                    </ul>
                </div>
            </div>
        </div>
    <!-- Container -->
    <div class="container">
        <!-- Подключаем контент -->
        <?php include 'application/views/'.$content_view; ?>
    </div>
    <!-- Container-end -->

    <!-- Footer -->
        <div class="footer">
            <div class="footer-layout">
                <span class="copyright">
                    Кот
                </span>
            </div>
        </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>