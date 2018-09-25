
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/fav_logo.png')}}">

    <title>Identification</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin">
    <img class="mb-4" src="{{asset('img/fav_logo.png')}}" alt="" width="100" height="100">
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>

</form>
</body>
</html>
