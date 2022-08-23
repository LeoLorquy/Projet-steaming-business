<!DOCTYPE html>
<html>
    <head>
        <title>WywiStream</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="mobile-web-app-capable" content="yes">
    </head>
    <body>

        <!-- header / menu -->
        <?php include('assets/header&footer/header.php'); ?>

        <main>
            <!-- titre de la page -->
            <div class="title-page">
                Introducing the world's best streaming app
            </div>

            <!-- article -->
            <div class="content-elements">
                <div class="parent">
                    <div class="div1">
                        <div class="content-noir-div1">
                            DISCOVER <strong class="esp">THE</strong> STREAMING
                        </div>
                    </div>
                    <div class="div2">
                        <strong class="content-gris-items">
                            SCIENCE FICTION
                        </strong>
                    </div>
                    <div class="div3">
                        <strong class="content-gris-items">
                            JEUNESSE
                        </strong>
                    </div>
                    <div class="div4">
                        <strong class="content-gris-items">
                            HORREUR
                        </strong>
                    </div>
                </div>
                
                <div class="content-categ">
                    <div class="sous-content">
                        <div class="title-categ">Nouveautés</div>
                        <div class="items">
                            <form action="movies/movies.php" method="post">
                                <div class="item" ><input class="banner-movies uncharted" type="submit" id="movies" name="movies" value="Uncharted"></div>
                            </form>
                            <form action="movies/movies.php" method="post">
                                <div class="item" ><input class="banner-movies the-batman" type="submit" id="movies" name="movies" value="The Batman"></div>
                            </form>
                            <form action="movies/movies.php" method="post">
                                <div class="item" ><input class="banner-movies thorloveandthunder" type="submit" id="movies" name="movies" value="Thor: Love and Thunder"></div>
                            </form>
                            <form action="movies/movies.php" method="post">
                                <div class="item" ><input class="banner-movies avatar" type="submit" id="movies" name="movies" value="Avatar"></div>
                            </form>
                            <form action="movies/movies.php" method="post">
                                <div class="item" ><input class="banner-movies gladiator" type="submit" id="movies" name="movies" value="Avatar"></div>
                            </form>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                        </div>
                    </div>
                    <div class="sous-content">
                        <div class="title-categ">Recommandation</div>
                        <div class="items">
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                        </div>
                    </div>
                    <div class="sous-content">
                        <div class="title-categ">Populaire</div>
                        <div class="items">
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                        </div>
                    </div>
                    <div class="sous-content">
                        <div class="title-categ">Films</div>
                        <div class="items">
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                        </div>
                    </div>
                    <div class="sous-content">
                        <div class="title-categ">Series</div>
                        <div class="items">
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                            <div class="item" ><div class="banner-movies"></div></div>
                        </div>
                    </div>
                </div> 
            </div>
        </main>

        <!-- footer -->
        <?php include('assets/header&footer/footer.php'); ?>

        <!-- wishflix prend exemple sur mon code stp -->

    </body>
</html>