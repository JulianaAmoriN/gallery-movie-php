<?php include "header.php"?>
<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="gallery.php">Gallery</a></li>
                <li><a href="registry.php">Registry</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Movie Gallery</h1>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Movie Registry</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="movie" type="text" class="validate" require>
                            <label for="movie">Movie Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="synopsis" class="materialize-textarea"></textarea>
                                    <label for="synopsis">Synopsis</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <input id="note" type="number" step=".1" min=0 max=10 class="validate" require>
                            <label for="note">Note</label>
                        </div>
                    </div>


                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn purple light-2">
                                <span>File</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </form>

                    <div class="card-action">
                        <a class="waves-effect waves-light btn grey" href="gallery.php">Cancel</a>
                        <a href="#" class="waves-effect waves-light btn purple">Save</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>