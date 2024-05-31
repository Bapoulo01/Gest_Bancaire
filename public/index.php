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
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container-fluid col-12 d-flex vh-100 ">
            <div class="container col-2  shadow">
                <img src="Images/logo.jpg" class="img-fluid col-7" alt="">
                <p class="fw-light fs-6 mt-3 mb-3">-MENU</p>
                <ul class="list-group">
                    <li class="list-group-item ">

                        <a href="" class="list-group-item list-group-item-action active d-flex align-item-center"> <span
                                class="material-symbols-outlined px-2"> dashboard </span>Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> checkbook </span>Promos</a>
                    </li>
                    <li class="list-group-item">
                        <a href="" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> date_range </span>Referentiels</a>
                    </li>
                    <li class="list-group-item">
                        <a href="" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> account_circle </span>Utilisateurs</a>
                    </li>
                    <li class="list-group-item">
                        <a href="" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> account_circle </span>Visisteurs</a>
                    </li>
                    <li class="list-group-item">
                        <a href="" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> account_circle </span>Presence</a>
                    </li>
                    <li class="list-group-item">
                        <a href="" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> checkbook </span>Evenement</a>
                    </li>
                </ul>

            </div>

            <div class="container col-10 border">
                <div
                    class="container d-flex align-items-center justify-content-between rounded-2 col-12 mt-1  shadow  rounded">
                    <div class="d-flex align-items-center justify-content-around ">
                        <span class="material-symbols-outlined p-2"> menu</span>
                        <span class="material-symbols-outlined p-2"> grid_view</span>
                        <div class="input-group  d-flex align-items-center border">
                            <input type="text" class="form-control" aria-label="Text input " placeholder="Filtrer">
                            <span class="material-symbols-outlined p-2 text-secondary"> search</span>
                        </div>

                    </div>

                    <div class="d-flex align-items-center justify-content-around col-5">
                        <div class="d-flex align-items-center justify-content-between col-9 ">
                            <input type="date" name="" id="" aria-label="date input" class="mx-2">
                            <img src="Images/class.jpg" class="rounded-circle col-2 " alt="...">

                            <div class="d-flex flex-column fs-6 text-secondary fw-light mt-2 mb-2 mx-2">
                                <p class="fs-6">SUPER ADMIN</p>
                                <select class="form-select fs-6 " name="" id="" aria-label="Default select example">
                                    <option value="5">Admin Admin</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container d-flex align-items-center justify-content-between rounded-2 col-12 mt-3 mb-3  rounded">
                    <div><span class="text-primary">Apprenants</div>
                    <div><span class="text-primary">Promotion .Liste .Details .Apprenants</span></div>
                </div>
                <div
                    class="container d-flex align-items-center justify-content-between rounded-2 col-12  shadow p-2  rounded">
                    <div><span class="text-primary">Promotions:</span> <span class="text-danger"> Promotion 6</span>
                    </div>
                    <div><span class="text-primary">Referentiel:</span> <span class="text-danger"> Dev Web/Mobile</span>
                    </div>
                </div>
                <div class="container rounded-3 col-12  mt-2  shadow p-1  rounded">
                    <h4 class="mb-3 px-2">Apprenants</h4>
                    <div class="container col-12 d-flex align-items-center justify-content-between mb-4">
                        <div class="col-md-3 ">
                            <h5 class="fs-5">Listes des Apprenants ()</h5>
                        </div>
                        <div class="container d-flex col-md-8 align-items-center justify-content-around ">
                            <button type="button" class="btn bg-success d-flex text-white fw-bold">
                                <span class="material-symbols-outlined "> add</span> Nouvelle
                            </button>
                            <button type="button" class="btn bg-warning  text-white fw-bold px-2">Insertion en
                                masse</button>
                            <button type="button" class="btn btn-success text-white fw-bold px-2">
                                <div class="d-flex"><span class="material-symbols-outlined "> download</span>Fichier
                                    Model</div>
                            </button>
                            <button type="button" class="btn btn-primary text-white fw-bold px-2">Liste des
                                Exclus</button>
                        </div>
                    </div>
                    <div class="input-group mb-3 d-flex align-items-center border">
                        <span class="material-symbols-outlined px-2 text-secondary"> search</span>
                        <input type="text" class="form-control" aria-label="Text input " placeholder="Filtrer">
                    </div>
                    <table class="table">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">email</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tBody">
                   
                        </tbody>
                    </table>
                </div>
                    <!-- <?php
                        require_once("../controllers/html/compteController.php");
                        $controller=new CompteController();
                    ?> -->
            </div>

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
</body>

</html>