<?php 
echo $_POST['texto'];
                                               $query= "SELECT * FROM dulces  where codigo like '%".$_POST['texto']."%' or 
                                                  nombre like '%".$_POST['texto']."%' ) ";
   
                                              include './conexion.php';
                                              $consulta=$mysqli->query($query )or die($mysqli->error);
                                              while ( $fila=mysqli_fetch_array($consulta)) {
                                                              # code...
                                                ?>
                                                
                                                           <td> <?php echo $fila['codigo'] ?></td>
                                <td><?php echo $fila['nombre'] ?></td>
                                <td><?php echo $fila['precio'] ?></td>
                                <td><select style=" background: transparent;border: none;font-size: 14px;height: 30px;padding: 5px;width: 50px;">
                                        <?php for ($i=1; $i <10 ; $i++) {
                                       ?><option><?php echo $i ?></option><?php  }  ?>
                                     </select></td>
                                  <td><button type="submit" class="btn btn-success btn-xs pull-right" style="margin-left:1%;margin-right:45%;"
                                            data-codigoagregar="<?php echo $fila['codigo'] ?>"
                                             data-nombreagregar="<?php echo $fila['nombre'] ?>"
                                              data-precioagregar="<?php echo $fila['precio'] ?>"
                                              data-cantidadagregar="<?php echo $cantidad ?>">
                                  <a href="...php" style="text-decoration: none;color:white;"> <i class="fa fa-plus"></i></a>
                                    </button></td>
                                                    
                                                
                                                <?php  }?                                               
                                               ?>
                               
                                               