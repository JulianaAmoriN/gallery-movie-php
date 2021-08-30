<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Movie Gallery</title>
</head>

<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="register.php">Register</a></li>
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
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w200/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"> <a
                        class="btn-floating halfway-fab waves-effect waves-light red"><i
                            class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i></a> 9,7</p>
                    <span class="card-title">Filme</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I
                        require little markup to use effectively.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>