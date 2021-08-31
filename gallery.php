<?php include "header.php"?>

<?php

$movie1 = ["title"=> "Vingadores", "note"=> 9.6, "synopsis"=>"The Avengers become divided over how to approach Loki and the revelation that S.H.I.E.L.D. plans to harness the Tesseract to develop nuclear weapons as a deterrent against hostile extraterrestrials. ", "image"=>"https://m.media-amazon.com/images/I/912QisnylbL._AC_SX425_.jpg"];
$movie2 = ["title"=> "Vingadores", "note"=> 9.6, "synopsis"=>"The Avengers become divided over how to approach Loki and the revelation that S.H.I.E.L.D. plans to harness the Tesseract to develop nuclear weapons as a deterrent against hostile extraterrestrials. ", "image"=>"https://m.media-amazon.com/images/I/912QisnylbL._AC_SX425_.jpg"];

$movies= [$movie1, $movie2]

?>

<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="registry.php">Registry</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Movie Gallery</h1>
        </div>
        <div class="nav-content purple darken-1">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="active" href="#test1">All</a></li>
                <li class="tab"><a href="#test2">Watched</a></li>
                <li class="tab"><a href="#test3">Favorites</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <?php
            foreach ($movies as $movie) : ?>
            <!-- for ($indice=0; $indice<count($movies); $indice ++){$movie = $movies[$indice]}; -->
                <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $movie["image"]?>"> <a
                            class="btn-floating halfway-fab waves-effect waves-light red"><i
                                class="material-icons purple">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper"><i class="material-icons amber-text">star</i></a><?= $movie["note"]?></p>
                        <span class="card-title"><?php echo $movie["title"]?></span>
                        <p><?= $movie["synopsis"]?></p>
                    </div>
                </div>
            </div>
            <?php endforeach?>
    </div>
</body>

</html>