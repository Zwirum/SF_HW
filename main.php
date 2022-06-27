<?php
    include 'knowladge.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <?php include 'inc/header.inc.php';?>
    </header>

    <section class="content">
        <div class="container">
            <div class="content__background">
                <div id="about" class="about-me">
                    <hr>
                    <h1 class="title">
                        <?php echo $hello; ?>
                    </h1>
                    <div class="info__list">
                        <ul>
                            <li>My name is: <span><?php echo $name;?></span></li>
                            <li>My surname is: <span><?php echo $surname;?></span></li>
                            <li>I'm: <span><?php echo $age;?></span></li>
                            <li>My hometown is: <span><?php echo $country;?></span></li>
                        </ul>
                    </div>
                </div>
                <div id="knowladge" class="knowledge">
                    <hr>
                    <h2 class="title">
                        My acquired knowledge
                    </h2>
                    <div class="info__list">
                        <ul>
                            <li><span>Output of text: </span><?php echo $a,' ',$b,' ',$c; ?></li>
                            <li><span>Output of int: </span> <?php echo "The decimal system $int10 <br>";?></li>
                            <li><span>Output of nowdoc-text: </span><?php echo <<<'EOD'
                            Пример текста,
                            занимающего несколько строк,
                            с помощью синтаксиса nowdoc. Обратные слеши всегда обрабатываются буквально,
                            например, \\ и \'.
                            EOD; ?></li>
                            <li><span>If-construction: </span><?php echo $num; ?></li>
                            <li><span>Addition: </span><?php echo $d+$e; ?></li>
                            <li><span>Subraction: </span><?php echo $d-$e; ?></li>
                            <li><span>Multiplication: </span><?php echo $d*$e; ?></li>
                            <li><span>Division: </span><?php echo $d/$e; ?></li>
                            <li><span>Remainder of division: </span><?php echo $d%$e; ?></li>
                            <li><span>Exponentiation: </span><?php echo $d**$e; ?></li>
                            <li><span>Example of a link: </span><?php echo $d+$e; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class='footer'>
        <?php include 'inc/footer.inc.php';?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>