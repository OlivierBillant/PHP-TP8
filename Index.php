<?php
require("connexionProvider.php");
require("controller/indexController.php");
$arr = IndexController::index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Stock</title>
</head>

<body>
    <div class="container-fluid col-6 offset-3">
        <div class="row text-center">
            <h1>Formulaire d'inscription</h1>
        </div>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label class="form-label">Adresse email</label>
                <input type="text" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="dateNaissance">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Date d'inscription</label>
                <input type="date" class="form-control" id="dateInscription">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <div class="container-fluid">
        <div class="row text-center">
            <h1>Liste des utilisateurs</h1>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>email</th>
                            <th>date de naissance</th>
                            <th>username</th>
                            <th>password</th>
                            <th>date d'inscription</th>
                        </tr>
                    <tbody>

                        <?php foreach ($arr as $key => $value) : ?>
                            <tr>
                                <td><?= $value['id'] ?> </td>
                                <td><?= $value['prenom'] ?> </td>
                                <td><?= $value['nom'] ?> </td>
                                <td><?= $value['email'] ?> </td>
                                <td><?= $value['date_naissance'] ?> </td>
                                <td><?= $value['username'] ?> </td>
                                <td><?= $value['password'] ?> </td>
                                <td><?= $value['date_inscription'] ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>