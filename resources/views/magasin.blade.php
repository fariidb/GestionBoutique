<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/fav_logo.png')}}">

    <title>Magasin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/album.css')}}" rel="stylesheet">
</head>

<body>

<header>

</header>

<main role="main" class="bg-success">

    <section class="jumbotron text-center">
        <div class="container">
            <img class="mb-4" src="{{asset('img/fav_logo.png')}}" alt="" width="100" height="100">
            <h1 class="jumbotron-heading text-capitalize font-weight-bold">Bienvenue Dans le magasin .....</h1>
            <h6 class="text-success font-weight-bold">Nombre de telephone réparé ce mois-ci: ...</h6>
            <h6 class="text-danger font-weight-bold">Nombre de telephone en cours de réparation: ...</h6>

        </div>
    </section>

    <div class="album py-5 bg-dark">
        <div class="container">

            <div class="row">
            <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=AJOUTER UNE REPARATION" alt="">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group btn-block">
                                    <a href="/login/reparation" class="btn btn-sm btn-outline-success btn-block">Voir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=CHOIX MAGASIN" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center card text-center">
                                <div class="btn-group btn-block">
                                    <a href="/" class="btn btn-sm btn-outline-success btn-block">Voir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=STOCK" alt="">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group btn-block">
                                    <button type="button" class="btn btn-sm btn-outline-success btn-block">Voir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=TARIFS" alt="">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group btn-block">
                                    <button type="button" class="btn btn-sm btn-outline-success btn-block">Voir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; RTM</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/holder.min.js')}}"></script>
</body>
</html>