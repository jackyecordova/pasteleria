<?php 

   
                          $query= "SELECT *
                                              FROM dulces
                                              
                                              where codigo like '%".$_POST['texto']."%' or 
                                                  nombre like '%".$_POST['texto']."%' 
                                                 

                                                  )

                                              ";
   
                                              include './conexion.php';
                                              $consulta=$mysqli->query($query )or die($mysqli->error);
                                              while ( $fila=mysqli_fetch_array($consulta)) {
                                                              # code...
                                                ?>
                                                <li>
                                                        <td><?php $fila['codigo'] ?></td>
                                                        <td><?php $fila['nombre'] ?></td>
                                                        <td><?php $fila['precio'] ?></td>
                                                        <td><button type="submit" class="btn btn-success btn-xs pull-right" style="margin-left:1%;margin-right:45%;">
                                                        <a href="...php" style="text-decoration: none;color:white;"> <i class="fa fa-plus"></i></a>
                                                          </button></td>
                                                    
                                                </li>
                                                <?php  } ?>
                               
                                               