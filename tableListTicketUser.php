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
                                                </tr>
                                            </thead>                                   
                                            <tbody>
                                                <form action="envioDiscord.php" method="get">
                                                    <input type="submit"  class="btn btn-primary " value="Enviar">
                                                    <?php 
                                                    
                                                    foreach($listResponsavel as $nivel1) { ?>
    
                                                    <tr>
                                                        <td> 
                                                            <input type="checkbox" value="<?php echo $nivel1['id'];?>" name="id-ticket-<?php echo $nivel1['id'];?>">                                                            
                                                        </td>
                                                        <td>
                                                            <?php echo $nivel1['prioridade'] ?>  
                                                            <input type="text" value="<?php echo $nivel1['id'];?>" name="id-ticket-<?php echo $nivel1['id'];?>">
                                                         </td>
                                                        <td>
                                                            <?php echo $nivel1['tipo_ticket'] ?>
                                                        </td>
                                                        <td><?php echo $nivel1['titulo'] ?></td>
                                                        <td><?php echo $nivel1['responsavel'] ?></td>
                                                        <td><a href="<?php echo $admin->linkTicket.$nivel1['id'] ?>" target="_blank">Link</a></td>
                                                    
                                                    </tr>
                                                <?php } ?>
                                                </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>