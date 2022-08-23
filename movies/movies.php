<?php
if(!empty($_POST['movies'])) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_POST['movies']; ?> en streaming gratuit : WywiStream</title>
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>
    <body>
        <?php
            // Uncharted
            if ($_POST['movies'] == "Uncharted") {
                include('../assets/header&footer/header.php');
                ?>
                <div class="content-info-movies">
                    <div class="title-movies">Uncharted</div>
                    <div class="info-movies">Tous publics 2022 ‧ Aventure/Action ‧ 1h 56m</div>
                </div>
                <div class="container-iframes">
                    <iframe class="responsive-iframe" allowfullscreen="" frameborder="0"  src="https://uqload.com/embed-31u8w0fv8hqc.html"  sandbox = "allow-forms allow-pointer-lock allow-same-Origin allow-scripts allow-top-navigation"></iframe>
                </div>
                <?php
                include('../assets/header&footer/footer.php');
            }

            // the batman
            elseif ($_POST['movies'] == "The Batman") {
                include('../assets/header&footer/header.php');
                ?>
                <div class="content-info-movies">
                    <div class="title-movies">The Batman</div>
                    <div class="info-movies">Tous publics 2022 ‧ Action/Aventure ‧ 2h 55m</div>
                </div>
                <div class="container-iframes">
                    <iframe class="responsive-iframe" allowfullscreen="" frameborder="0"  src="https://uqload.com/embed-0b2m7cjk7q00.html" sandbox = "allow-forms allow-pointer-lock allow-same-Origin allow-scripts allow-top-navigation" ></iframe>
                </div>
                <?php
                include('../assets/header&footer/footer.php');
            }

            // Thor: Love and Thunder
            elseif ($_POST['movies'] == "Thor: Love and Thunder") {
                include('../assets/header&footer/header.php');
                ?>
                <div class="content-info-movies">
                    <div class="title-movies">Thor: Love and Thunder</div>
                    <div class="info-movies">Tous publics 2022 ‧ Action/Aventure ‧ 2h 13m</div>
                </div>
                <div class="container-iframes">
                    <iframe class="responsive-iframe" allowfullscreen="" frameborder="0"  src="https://uqload.com/embed-0fx8tkonj8ko.html" sandbox = "allow-forms allow-pointer-lock allow-same-Origin allow-scripts allow-top-navigation" ></iframe>
                </div>
                <?php
                include('../assets/header&footer/footer.php');
            }

            // Avatar
            elseif ($_POST['movies'] == "Avatar") {
                include('../assets/header&footer/header.php');
                ?>
                <div class="content-info-movies">
                    <div class="title-movies">Avatar</div>
                    <div class="info-movies">Tous publics 2009 ‧ SF/Aventure ‧ 2h 40m</div>
                </div>
                <div class="container-iframes">
                    <iframe class="responsive-iframe" allowfullscreen="" frameborder="0"  src="https://uqload.com/embed-qhqsyi5omv3u.html" sandbox = "allow-forms allow-pointer-lock allow-same-Origin allow-scripts allow-top-navigation" ></iframe>
                </div>
                <?php
                include('../assets/header&footer/footer.php');
            }

            // gladiator
            elseif ($_POST['movies'] == "gladiator") {
                include('../assets/header&footer/header.php');
                ?>
                <div class="content-info-movies">
                    <div class="title-movies">Gladiator</div>
                    <div class="info-movies">Tous publics 2000 ‧ Action/Aventure ‧ 2h 35m</div>
                </div>
                <div class="container-iframes">
                    <iframe class="responsive-iframe" allowfullscreen="" frameborder="0"  src="https://uqload.com/embed-s0skbawzu3d6.html" sandbox = "allow-forms allow-pointer-lock allow-same-Origin allow-scripts allow-top-navigation" ></iframe>
                </div>
                <?php
                include('../assets/header&footer/footer.php');
            }
        ?>
        <div class="content-pub"></div>
    </body>
</html>
<?php
} else { header('location: ../index.php'); }
?>