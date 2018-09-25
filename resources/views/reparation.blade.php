<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/fav_logo.png')}}">

    <title>reparation</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/form-validation.css')}}" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <img class="d-inline-block  mb-6" src="{{asset('img/fav_logo.png')}}" alt="" width="100" height="100">
        <h2>AJOUT D'UNE REPARATION</h2>
    </div>
{{-- INFORMATION APPAREIL--}}
     <div class="col-md-12 order-md-1">
        <h4 class="mb-3 text-center text-primary">INFORMATION APPAREIL</h4>
        <form class="needs-validation" novalidate>

                <div class="mb-3">
                    {{-- MARQUE --}}
                    <label for="marque">Marque</label>
                    <input type="text" class="form-control" id="marque" placeholder="Apple" value="" required>
                    <div class="invalid-feedback">
                        Merci d'entrée une Marque.
                    </div>
                </div>
                {{-- MODELE --}}
                <div class="mb-3">
                    <label for="modele">Modele</label>
                    <input type="text" class="form-control" id="modele" placeholder="iPhone" value="" required>
                    <div class="invalid-feedback">
                        Merci d'entrée un Modele.
                    </div>
                </div>


            {{-- IMEI --}}
            <div class="mb-3">
                <label for="imei">IMEI </label>
                <input type="number" class="form-control" id="imei" required>
                <div class="invalid-feedback">
                    Merci d'ajouter un IMEI.
                </div>
            </div>
            {{-- PRIX --}}
            <div class="mb-3">
                <label for="prix">PRIX</label>
                <input type="text" class="form-control" id="prix" placeholder="25€" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>
            {{-- REPARATION --}}
            <div class="mb-3">
                <label for="reparation">Réparation </label>
                <input type="text" class="form-control" id="reparation" placeholder="exemple : Changement LCD" required>
            </div>

            <hr class="mb-4">

        </form>
    </div>

    {{-- INFORMATION CLIENT --}}
    <div class="col-md-12 order-md-1">
        <h4 class="mb-3 text-center text-primary">INFORMATION CLIENT</h4>
        <form class="needs-validation" novalidate>

            <div class="mb-3">
                {{-- PRENOM --}}
                <label for="firstName">Prénom</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>
            {{-- NOM --}}
            <div class="mb-3">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>

            {{-- EMAIL --}}
            <div class="mb-3">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>
            {{-- ADRESSE --}}
            <div class="mb-3">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address" placeholder="55 avenue hoche" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>
            {{-- COMPLEMENT ADRESSE--}}
            <div class="mb-3">
                <label for="address2">Complément d'adresse <span class="text-muted">(Facultatif)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="">
            </div>
            {{-- CODE POSTALE --}}
            <div class="mb-3">
                <label for="zip">Code Postale</label>
                <input type="number" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                    Code postale Obligatoire.
                </div>
            </div>

            <hr class="mb-4">


            <h4 class="mb-3">Paiement</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="credit">Carte Bleu</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">Chéque</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="paypal">Especes</label>
                </div>
            </div>


            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Valider la demande de réparation</button>
        </form>
    </div>
</div>
</div>


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Repare-ton-mobile</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"><\/script>')</script>
<script src="{{asset('css/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/holder.min.js')}}"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>
