<div class="container">
            <div class="container d-flex align-items-center justify-content-between rounded-2 col-12 mt-3 mb-3  rounded">
                <div class="container rounded-3 col-12  mt-5  shadow p-1  rounded">
                    <table class="table">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Client</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="tBody">

                        <?php
                            foreach ($datas as $data) {
                              
                            }
                        ?>
                            <tr>
                                <td class="col"><?=$data->dated?></td> 
                                <td class="col"><?=$data->idu?></td>
                                <td class="col">Tel</td>
                                <td class="col">Email</td>
                                <td class="col"><?=$data->idtc?></td>
                                <td class="col">Status</td>
                            </tr>             
                        <?php

                        ?>
                        </tbody>
                    </table>
                </div>
</div>