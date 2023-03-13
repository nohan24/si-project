<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/input-file.css">
    <title>Ajouter une entité</title>
</head>

<body>
    <!-- include nav-bar -->

    <main class="d-flex justify-content-center p-5">
        <form class="w-75 row g-3" method="post" action="#">

            <h1 class="text-center my-5">Ajouter un entité</h1>

            <div class="col-md-5 m-auto d-flex justify-content-center align-items-center gap-2">
                <label class="label d-flex justify-content-center">
                    <input type="file" name="logo" id="images" />
                    <span id="sp-file">Logo de l'entité <img src="../assets/img/photo-svgrepo-com.svg"></span>
                </label>
                <img src="../assets/img/remove-circle-svgrepo-com.svg" height="40" id="remove">
            </div>

            <div class="col-md-12 d-flex my-3 justify-content-center">
                <img id="sary">
            </div>

            <div class="col-md-6">
                <label for="nom-societe" class="form-label">Nom de la société</label>
                <input type="text" name="nom" class="form-control" id="nom-societe">
            </div>

            <div class="col-md-6">
                <label class="form-label">Dirigeant</label>
                <input type="text" name="dirigeant" class="form-control">
                <div class="form-text">* Optionnel</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Objet de la société</label>
                <input type="text" name="objet" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Début d'exercice</label>
                <input type="date" name="date_debut" class="form-control text-center">
            </div>

            <div class="col-md-6">
                <label class="form-label">Siège / Adresse</label>
                <input type="text" name="siege" class="form-control" placeholder="ex : 2G7M+J43, 7, Antananarivo, Andoharanofotsy">
            </div>

            <div class="col-md-4">
                <label class=" form-label">NIF</label>
                <input type="text" name="nif" class="form-control" placeholder="ex : 5002457652">
            </div>

            <div class="col-md-4">
                <label class=" form-label">STAT</label>
                <input type="text" name="stat" class="form-control" placeholder="ex : 46101112016010800">
            </div>

            <div class="col-md-4">
                <label class="form-label">RCS</label>
                <input type="text" name="rcs" class="form-control" placeholder="ex : 2016B00789">
            </div>

            <div class="mb-3">
                <label class="form-label">Statut</label>
                <select class="form-select" name="status" aria-label="Default select example">
                    <option selected>Choisissez le statut de la société</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tenu de compte</label>
                <input type="text" name="tenue_de_compte" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Devise d'équivalence</label>
                <input type="text" name="devise_equivalence" class="form-control">
                <div class="form-text">* Optionnel</div>
            </div>

            <button type="submit" class="btn btn-success col-md-2">Ajouter +</button>
        </form>
    </main>
    <script src="../assets/js/upload-preview.js"></script>
</body>

</html>