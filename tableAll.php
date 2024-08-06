<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="50%" cellspacing="0">
                                            <thead>
                                                <tr class="table-danger">
                                                    <th>Prioridade</th>
                                                    <th>Tipo</th>
                                                    <th>Titulo</th>
                                                    <th>Responsavel</th>
                                                    <th>Link</th>
                                                </tr>
                                            </thead>                                   
                                            <tbody>
                                                <?php foreach($admin->listCritica as $nivel1) { ?>

                                                <tr>
                                                    <td><?php echo $nivel1['prioridade'] ?></td>
                                                    <td><?php echo $nivel1['tipo_ticket'] ?></td>
                                                    <td><?php echo $nivel1['titulo'] ?></td>
                                                    <td><?php echo $nivel1['responsavel'] ?></td>
                                                    <td><a href="<?php echo $admin->linkTicket.$nivel1['id'] ?>" >Link</a></td>
                                                
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="50%" cellspacing="0">
                                            <thead>
                                                <tr class="table-warning">
                                                    <th>Prioridade</th>
                                                    <th>Tipo</th>
                                                    <th>Titulo</th>
                                                    <th>Responsavel</th>
                                                    <th>Link</th>
                                                </tr>
                                            </thead>                                   
                                            <tbody>
                                                <?php foreach($admin->listAlta as $nivel1) { ?>

                                                <tr>
                                                    <td><?php echo $nivel1['prioridade'] ?></td>
                                                    <td><?php echo $nivel1['tipo_ticket'] ?></td>
                                                    <td><?php echo $nivel1['titulo'] ?></td>
                                                    <td><?php echo $nivel1['responsavel'] ?></td>
                                                    <td><a href="<?php echo $admin->linkTicket.$nivel1['id'] ?>" >Link</a></td>
                                                
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="50%" cellspacing="0">
                                            <thead>
                                                <tr class="table-info">
                                                    <th>Prioridade</th>
                                                    <th>Tipo</th>
                                                    <th>Titulo</th>
                                                    <th>Responsavel</th>
                                                    <th>Link</th>
                                                </tr>
                                            </thead>                                   
                                            <tbody>
                                                <?php foreach($admin->listMedia as $nivel1) { ?>

                                                <tr>
                                                    <td><?php echo $nivel1['prioridade'] ?></td>
                                                    <td><?php echo $nivel1['tipo_ticket'] ?></td>
                                                    <td><?php echo $nivel1['titulo'] ?></td>
                                                    <td><?php echo $nivel1['responsavel'] ?></td>
                                                    <td><a href="<?php echo $admin->linkTicket.$nivel1['id'] ?>" >Link</a></td>
                                                
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="50%" cellspacing="0">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>Prioridade</th>
                                                    <th>Tipo</th>
                                                    <th>Titulo</th>
                                                    <th>Responsavel</th>
                                                    <th>Link</th>
                                                </tr>
                                            </thead>                                   
                                            <tbody>
                                                <?php foreach($admin->listBaixa as $nivel1) { ?>

                                                <tr>
                                                    <td><?php echo $nivel1['prioridade'] ?></td>
                                                    <td><?php echo $nivel1['tipo_ticket'] ?></td>
                                                    <td><?php echo $nivel1['titulo'] ?></td>
                                                    <td><?php echo $nivel1['responsavel'] ?></td>
                                                    <td><a href="<?php echo $admin->linkTicket.$nivel1['id'] ?>" >Link</a></td>
                                                
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>