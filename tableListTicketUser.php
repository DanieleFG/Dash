<div class="col-sm-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th></th>
                                                    <th>Prioridade</th>
                                                    <th>Tipo</th>
                                                    <th>Titulo</th>
                                                    <th>Responsavel</th>
                                                    <th>Link</th>
                                                    <th></th>
                                                </tr>
                                            </thead>                                   
                                            <tbody>
                                                <form action="envioDiscord.php" method="get">
                                                    <input type="submit"  class="btn btn-primary " value="Enviar">
                                                    <?php 
                                                    
                                                    foreach($listResponsavel as $nivel1) { ?>
    
                                                    <tr>
                                                        <td> 
                                                            <input type="checkbox" value="<?php echo $nivel1['titulo'];?>" name="<?php echo $nivel1['id'];?>">                                                            
                                                        </td>
                                                        <td>
                                                            <?php echo $nivel1['prioridade'] ?>  
                                                        </td>
                                                        <td>
                                                            <?php echo $nivel1['tipo_ticket'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $nivel1['titulo'] ?>

                                                        </td>
                                                        <td><?php echo $nivel1['responsavel'] ?></td>
                                                        <td><a href="<?php echo $admin->linkTicket.$nivel1['id'] ?>" target="_blank">Link</a></td>
                                                        <td>
                                                            <input type="hidden" id="urlTicket-<?php echo $nivel1['id'];?>" name="urlTicket" value="<?php echo $admin->linkTicket.$nivel1['id'] ?>">
                                                            <i class="fa fa-clone" style="cursor: pointer" data-toggle="tooltip" title="Copiar Link" onclick="copyInfo('urlTicket-<?php echo $nivel1['id'];?>')" aria-hidden="true"></i>
                                                        </td>
                                                    
                                                    </tr>
                                                <?php } ?>
                                                </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

