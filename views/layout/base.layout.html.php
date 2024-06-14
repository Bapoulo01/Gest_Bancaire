<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="<?=WEBROOT?>/css/style.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
    <div class="container-fluid col-12 d-flex vh-100 ">
        <?php
            require_once("../views/partial/menu.php");
        ?>       

            <div class="container col-10 border">
                <div class="container col-11 mt-3 border shadow d-flex align-items-center justify-content-around p-3 rounded">
                    <div class="col-md-3 d-flex align-items-center">
                        <label for="inputCity" class="form-label  mx-2">Tel</label>
                        <input type="text" class="form-control" id="inputTel">
                    </div>
                    <div class="col-md-4 d-flex d-flex align-items-center">
                        <label for="inputState" class="form-label  mx-2">Type</label>
                        <select id="inputType" class="form-select">
                            <option selected>All</option>
                            <option>Compte Courant</option>
                            <option>Compte Épargne</option>
                            <option>Compte Courant</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <label for="inputState" class="form-label mx-2">Statut</label>
                        <select id="inputStatut" class="form-select">
                            <option selected>All</option>
                            <option>En cours</option>
                            <option>En traitement</option>
                            <option>Traitée</option>
                        </select>
                    </div>
                </div>
                <div class="container">
                    <?php
                        echo $contentForView;
                    ?>
                </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <!-- <script src="script.js"></script> -->

    <script src="<?=WEBROOT?>/js/demande.js"></script>
</body>

</html>
