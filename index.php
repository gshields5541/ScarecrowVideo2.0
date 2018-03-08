<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index.php</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<!--    <img class="log-img" src="./images/SCrowLogo.png">-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./css/animate.min.css"/>
    <link rel="stylesheet" href="./css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./css/main.css"/>

    <style>
        .parallax {
            /* The image used */
            background-image: url("./images/background.png");

            /* Set a specific height */
            min-height: 450px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>
<body>
<a href="#" class="navbar-brand p0 pull-left"><img src="./images/SCrowLogo.png" class="img-responsive log-img"></a>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> LogIn</a></li>
        </ul>
    </div>
</div>
<div class="parallax"></div>
<div class="mainContainer">
    <div class="mainHeading">
        <div class="row row-centered">
            <div class="col-md-12 col-lg-12">
                <div class="jumbotron">
                    <div class="centered">
                        <h1>Scarecrow Movie Finder</h1>
                        <p>The quest to find you the perfect movie for tonight</p>
                        <p><a class="btn btn-primary btn-lg" href="#" id="go" role="button">Embark on your quest</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="step2" class="row-centered searchRow">
        <div class="col-md-6 col-centered">
            <h3>Begin your movie quest:</h3>
            <div class="input-group">
                <input type="text" data-bind="value: searchTerm" placeholder="Enter your search movie..." width="50%"
                       class="form-control searchForm" aria-label="...">
                <div class="input-group-btn">
                    <!-- Button and dropdown menu -->

                    <button type="button" data-bind="click: searchForMovies" class="btn btn-primary">Search</button>
                    <button type="button" data-bind="click: clear" class="btn btn-danger">Clear</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row" data-bind="visible: error">
        <h3 data-bind="text: errorMessage"></h3></div>


    <div class="row results" data-bind="visible: movies().length > 0, foreach: movies">
        <div class="col-sm-6 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" data-bind="text: Title"></h3>
                </div>
                <div class="panel-body maxHeight">
                    <div class="center">
                        <img data-bind="attr: { src: Poster}" class="img" alt="Movie Poster image">

                        <ul class="list-group">
                            <li class="list-group-item">Type: <span data-bind="text: Type"></span></li>
                            <li class="list-group-item">Year: <span data-bind="text: Year"></span></li>
                            <li class="list-group-item"><a
                                    data-bind="attr: { href: 'http://www.imdb.com/title/' + imdbID() }">Click here to
                                view IMDB</a></li>
                        </ul>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-bind="click: $root.viewMoreInfo" data-target="#myModal">View more Info
                        </button>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<div class="parallax"></div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <div class="center">
                    <h4 class="modal-title" id="myModalLabel" data-bind="text: currentMovie.Title"></h4>
                </div>
                <div class="modal-body">
                    <div class="center">
                        <img data-bind="attr: { src: currentMovie.Poster}" class="img" alt="Movie Poster image">
                    </div>
                    <li class="list-group-item"><strong class="emp">Type:</strong> <span
                            data-bind="text: currentMovie.Type"></span></li>
                    <li class="list-group-item"><strong class="emp">Year:</strong> <span
                            data-bind="text: currentMovie.Year"></span></li>
                    <li class="list-group-item"><strong class="emp">Genre:</strong> <span
                            data-bind="text: currentMovie.Genre"></span></li>
                    <li class="list-group-item"><strong class="emp">Released:</strong> <span
                            data-bind="text: currentMovie.Released"></span></li>
                    <li class="list-group-item"><strong class="emp">Runtime:</strong> <span
                            data-bind="text: currentMovie.Runtime"></span></li>
                    <li class="list-group-item"><strong class="emp">Rated: </strong><span
                            data-bind="text: currentMovie.Rated"></span></li>
                    <li class="list-group-item"><strong class="emp">IMDB Rating:</strong> <span
                            data-bind="text: currentMovie.imdbRating"></span></li>
                    <li class="list-group-item"><strong class="emp">IMDB Votes:</strong> <span
                            data-bind="text: currentMovie.imdbVotes"></span></li>
                    <li class="list-group-item"><strong class="emp">Metascore:</strong> <span
                            data-bind="text: currentMovie.Metascore"></span></li>
                    <li class="list-group-item"><strong class="emp">Language:</strong> <span
                            data-bind="text: currentMovie.Language"></span></li>
                    <li class="list-group-item"><strong class="emp">Country:</strong> <span
                            data-bind="text: currentMovie.Country"></span></li>
                    <li class="list-group-item"><strong class="emp">Writer:</strong> <span
                            data-bind="text: currentMovie.Writer"></span></li>
                    <li class="list-group-item"><strong class="emp">Director:</strong> <span
                            data-bind="text: currentMovie.Director"></span></li>
                    <li class="list-group-item"><strong class="emp">Actors: </strong><span
                            data-bind="text: currentMovie.Actors"></span></li>
                    <li class="list-group-item"><strong class="emp">Plot:</strong> <span
                            data-bind="text: currentMovie.Plot"></span></li>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bind="click: viewMoreInfo" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script src="./js/jquery.min.js"></script>
<script src="./js/jquery-ui.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/knockout.js"></script>
<script src="./js/knockout.mapping.js"></script>

<script src="./js/ecom.js"></script>
<script src="./js/app.js"></script>
<script src="./js/pageFlow.js"></script>
</body>

</html>
