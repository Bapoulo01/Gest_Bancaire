<!-- <!doctype html>
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
                <!-- <img src="Images/logo.jpg" class="img-fluid col-7" alt=""> -->
                <p class="fw-light fs-6 mt-3 mb-3">-MENU</p>
                <ul class="list-group">
                    <li class="list-group-item ">
                        <a href="<?=WEBROOT?>/ressource=html&?controller=demande" class="list-group-item list-group-item-action active d-flex align-item-center"> 
                            Demande
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?=WEBROOT?>/ressource=html&?controller=compte" class="list-group-item list-group-item-action d-flex align-item-center"><span
                            class="material-symbols-outlined px-2"> checkbook </span>Compte</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?=WEBROOT?>/?ressource=html&controller=client" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> checkbook </span>Client</a>
                    </li>
                </ul>

            </div>

            <div class="container col-10 border">
                <div class="container">
            <div class="container d-flex align-items-center justify-content-between rounded-2 col-12 mt-3 mb-3  rounded">
                <div class="container rounded-3 col-12  mt-5  shadow p-1  rounded">
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

                        <?php foreach ($datas as $data):?>                            <tr>
                                <td class="col">Image</td> 
                                <td class="col">Nom</td>
                                <td class="col">Prenom</td>
                                <td class="col">Email</td>
                                <td class="col">tel</td>
                                <td class="col">genre</td>
                                <td class="col">Action</td>
                            </tr>             
                        <?php endforeach;?>                        
                        </tbody>
                    </table>
                </div>
</div>
                
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
        <script src="<?=WEBROOT?>/js/compte.js"></script>

</body>

</html