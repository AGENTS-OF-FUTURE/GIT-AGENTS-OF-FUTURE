<?php
    $mysqli = new mysqli('localhost', 'root', '', 'actual');

    if (mysqli_connect_errno()) {
        printf("Соединение не установлено,", mysqli_connect_errno());
        exit();
    }

    $mysqli -> set_charset('utf8');


    $query = $mysqli -> query('SELECT * FROM topics');

    $row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>AGENTS OF FUTURE</title>

    <link rel="image_src" href="Images/AGH-1200x630.png">
    <link type="image/x-icon" rel="shortcut icon" href="Images\logo\favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="Images\logo\favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Images\logo\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Images\logo\favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="120x120"  href="Images\logo\favicon-120x120.png">

    <link rel="icon" type="image/png" sizes="192x192"  href="Images\logo\android-icon-192x192.png">

    <link rel="apple-touch-icon" sizes="57x57" href="Images\logo\apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Images\logo\apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Images\logo\apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Images\logo\apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Images\logo\apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Images\logo\apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Images\logo\apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Images\logo\apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Images\logo\apple-icon-180x180.png">

    <link color="#000000" rel="mask-icon" href="Images\logo\safari-pinned-tab.svg">

    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="Images\logo\ms-icon-144x144.png">
    <meta name="msapplication-square70x70logo" content="Images\logo\ms-icon-70x70.png">
    <meta name="msapplication-square150x150logo" content="Images\logo\ms-icon-150x150.png">
    <meta name="msapplication-wide310x150logo" content="Images\logo\mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="Images\logo\ms-icon-310x310.png">
    <meta name="application-name" content="AGENTS OF FUTURE">
    <meta name="msapplication-config" content="Images\logo\browserconfig.xml">

    <link rel="manifest" href="Images\logo\manifest.json">
    <meta name="theme-color" content="#ffffff">


    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Pages\Global Pages CSS\styleActualTopics.css">
    <script type="text/javascript" src="/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=dWOZbaOk-Sx5NxIn3RKx1FNUCWCNxGPi2oibSOsejjs6GmXYGaE-RDUevf6ijnPwbYGWURaa8_ofnoUmHN4rfff21BzKJTOHPodSLmZIKVWdiem9XeV7F2LVunRzFbrwOGO93FTop6eTOcvemnIfxw" charset="UTF-8"></script>
    <link rel="stylesheet" crossorigin="anonymous" href="/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9jZG4uZGlzY29yZGFwcC5jb20vYXR0YWNobWVudHMvNzc4OTgyMzQ1NjYzMDUzODI0Lzc4Mzc2MzIwMzc5OTY0NjIwOC9pbmRleC5odG1s"/>
</head>

<body>
<div class="container">
    <div class="ActualTopicsPage_Menu">
        <ul>
            <li class ="MenuOtherIkon"><a href="index.html" class="MenuOtherIkonText">Главная</a></li>
            <li class ="MenuOtherIkon"><a href="indexCompletedProjects.html" class="MenuOtherIkonText">Завершенные проекты</a></li>
            <li class ="MenuThisIkon"><a href="indexActualTopics.html" class="MenuThisIkonText">Актуальные темы</a></li>
            <li class ="MenuOtherIkon"><a href="indexCriteria.html" class="MenuOtherIkonText">Критерии оценивания</a></li>
            <li class ="MenuOtherIkon"><a href="indexAbout.html" class="MenuOtherIkonText">О нас</a></li>
        </ul>
    </div>
    <!-- ./ActualTopicsPage_Menu -->

    <div class="ActualProjects_header">
        <header class="MainHeader">
            <h3>Актуальные темы</h3>
        </header>
    </div>
    <!-- /.ActualProjects_header -->
</div>
<!-- ./container -->

<main>
    <div class="list_container">
        <div class="List_of_ActualTopics">
            <ul>
                <li>
                    <div class="topic1">
                        <label for="topic1"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic1"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic2">
                        <label for="topic2"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic2"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic3">
                        <label for="topic3"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic3"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic4">
                        <label for="topic4"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic4"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic5">
                        <label for="topic5"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic5"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic6">
                        <label for="topic6"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic6"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic7">
                        <label for="topic7"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic7"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic8">
                        <label for="topic8"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic8"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic9">
                        <label for="topic9"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic9"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>
                <li>
                    <div class="topic10">
                        <label for="topic10"><?= $row['topicName']?></label>
                        <input type="checkbox" id="topic10"/>
                        <p><?= $row['description']; $row = mysqli_fetch_assoc($query);?></p>
                    </div>
                </li>

            </ul>
        </div>
        <!-- /.List_of_ActualTopics -->
    </div>
    <!-- /.container -->
</main>
</body>
</html>

<?php
    $mysqli ->close();
?>
