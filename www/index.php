<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LAMP STACK</title>
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        LAMP STACK
                    </h1>
                    <h2 class="subtitle">
                        Vaše místní vývojové prostředí
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Prostředí</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

                                    if (mysqli_connect_errno()) {
                                        printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                    } else {
                                        /* print server version */
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                    }
                                    /* close connection */
                                    mysqli_close($link);
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Projekty</h3>
                        <hr>
                        <div class="content">
                            <ul>
                            <?php 
                                $dirs = array_filter(glob('projects/*'), 'is_dir');
                                foreach ($dirs as $key => $value): ?>
                                <?php $FolderName = str_replace("projects/", "", $value) ?>
                                <li><a href="<?= $value ?>"><?= $FolderName ?></a></li>
                            <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Rychlé odkazy</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="/phpinfo.php">phpinfo()</a></li>
                                <li><a href="http://localhost:<? print $_ENV['PMA_PORT']; ?>">phpMyAdmin</a></li>
                                <li><a href="/test_db.php">Otestujte připojení DB pomocí mysqli</a></li>
                                <li><a href="/test_db_pdo.php">Test připojení DB s PDO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
