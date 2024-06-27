

            <div class="container col-12">
                <div class="container col-11 mt-4 border shadow d-flex align-items-center justify-content-around p-3 rounded">
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
                <div class="container d-flex justify-content-end mb-2 mt-3">
                    <button type="button" class="btn btn-primary col-1 "data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Ajouter</button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Demande</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnAdd"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" id="Fourform" method="post">
                                    <div class="container col-12 d-flex align-items-center justify-content-around mb-2">
                                        <div class="col-5">
                                            <label for="recipient-name" class="col-form-label col-5">Prenom</label>
                                            <input type="text" class="form-control" id="nameInput" name="nomF">
                                        </div>
                                        <div class="col-5">
                                            <label for="recipient-name" class="col-form-label col-5">Nom</label>
                                            <input type="text" class="form-control" id="nameInput" name="nomF">
                                        </div>
                                    </div>
                                    <div class="container col-12 d-flex align-items-center justify-content-around mb-2">
                                        <div class="col-5">
                                            <label for="recipient-name" class="col-form-label col-5">Email</label>
                                            <input type="email" class="form-control" id="nameEmail" name="Email">
                                        </div>
                                        <div class="col-5">
                                            <label for="recipient-name" class="col-form-label col-5">Type Compte</label>
                                                <select id="inputType" class="form-select">
                                                <option selected>All</option>
                                                <option>Compte Courant</option>
                                                <option>Compte Épargne</option>
                                                <option>Compte Courant</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container col-12 d-flex align-items-center justify-content-around mb-2">
                                        <div class="col-5">
                                            <label for="recipient-name" class="col-form-label col-5">Date</label>
                                            <input type="date" class="form-control" id="DateInput" name="DateName">
                                        </div>
                                        <div class="col-5">
                                            <label for="recipient-name" class="col-form-label col-5">Telephone</label>
                                            <input type="text" class="form-control" id="InputTel" name="nomF">
                                        </div>
                                    </div>
                                <input type="hidden" name="btnAdd" value="ajouter">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary " id="reset" name="">Annuler</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnSave" name="btnAdd">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="container d-flex align-items-center justify-content-between rounded-2 col-12 mt-3 mb-3  rounded">
                <div class="container rounded-3 col-12  mt-5  shadow p-1  rounded">
                    <table class="table">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">
                                    <input class="" type="checkbox" name="" id="doneAll">
                                </th>
                                <th scope="col">Date</th>
                                <th scope="col">Client</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="tBody">                 
                        </tbody>
                    </table>
                    <div class=" container col-12 d-flex align-items-center justify-content-center mt-3">
                        <nav aria-label="Page navigation example">
                        <ul class="pagination" id="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                        </nav>   
                    </div>                
                </div>          
            </div>
                
            </div>

    <script src="<?=WEBROOT?>/js/demande.js"></script>

