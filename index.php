<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index.php</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./css/animate.min.css"/>
    <link rel="stylesheet" href="./css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./css/main.css"/>

    <!--<script src="js/sampleProductCategories.js" defer></script>-->
    <!--<script src="./js/cart.js"></script>-->

    <script src="./js/jquery.min.js" defer></script>
    <script src="./js/jquery-ui.min.js" defer></script>
    <script src="./js/bootstrap.min.js" defer></script>
    <script src="./js/knockout.js" defer></script>
    <script src="./js/knockout.mapping.js"defer></script>
    <script src="./js/ecom.js" defer></script>
    <script src="./js/app.js" defer></script>
    <script src="./js/pageFlow.js" defer></script>



    <style>
        .parallax {
            /* The image used */
            background-image: url("./images/background.png");

            /* Set a specific height */
            min-height: 400px;

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
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                            class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
                <div class="dropdown-menu" style="width:450px;">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <table width='100%'>
                                <thead>
                                <tr>
                                    <th>IMDb</th><th>Title</th><th>Year</th><th>Price</th>
                                </tr>
                                </thead>
                                <tbody data-bind="foreach: currentMovie">
                                <tr>
                                    <td data-bind="text: currentMovie.imdbID"></td>
                                    <td data-bind="text: currentMovie.Title"></td>
                                    <td data-bind="text: currentMovie.Year"></td>
                                </tr>
                                </tbody>
                            </table>
                      <!--      <p class='grandTotal'>
                                Total value: <span data-bind='text: formatCurrency(grandTotal())'> </span>
                            </p>
                            <button data-bind='click: addLine'>Add product</button>
                            <button data-bind='click: save'>Submit order</button>-->
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                            class="glyphicon glyphicon-log-in"></span> Log In</a>
                <ul class="dropdown-menu">
                    <div style="width:300px;">
                        <div class="panel panel-warning">
                            <div class="panel-heading">Login</div>
                            <div class="panel-heading">
                                <form onsubmit="return false" id="login">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required/>
                                    <label for="email">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required/>
                                    <li class="divider"></li>
                                    <a href="#" style="color:white; list-style:none;">Forgotten Password</a><input
                                            type="submit" class="btn btn-warning" style="float:right;">
                                </form>
                            </div>
                            <div class="panel-footer" id="e_msg"></div>
                        </div>
                    </div>
                </ul>
            </li>
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
                        <p><a class="btn btn-warning btn-md" href="#" id="go" role="button">Embark on your quest</a></p>
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

                    <button type="button" data-bind="click: searchForMovies" class="btn btn-warning">Search</button>
                    <button type="button" data-bind="click: clear" class="btn btn-danger">Clear</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row" data-bind="visible: error">
        <h3 data-bind="text: errorMessage"></h3></div>


    <div class="row results" data-bind="visible: movies().length > 0, foreach: movies">
        <div class="col-sm-8 col-md-4">
            <div class="panel panel-warning">
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
                                        data-bind="attr: { href: 'http://www.imdb.com/title/' + imdbID() }">Click here
                                    to
                                    view IMDB</a></li>
                            <li class="list-group-item">Rental: $3.99  Purchase: $14.99</li>
                            <li class="list-group-item"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal"
                                    data-bind="click: $root.viewMoreInfo" data-target="#myModal">View more Info
                            </button></li>
                            <li class="list-group-item"><button type="button" data-bind="click: $parent.addToCart" href="#" class="btn btn-sm btn-danger">Add To Cart</button></li>
                        </ul>
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
</body>
</html>
