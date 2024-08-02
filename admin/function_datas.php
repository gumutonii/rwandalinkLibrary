<?php
include '../php/connection.php';
                      $i=1;
$select_functions="SELECT * FROM functions ";
$cselect_functions=$connect->prepare($select_functions);
$cselect_functions->execute();
while ($row_cselect_functions=$cselect_functions->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row_cselect_functions['function_name']; ?></td>
                        <td>
                          <a href="update_function.php?f_id=<?php echo $row_cselect_functions['f_id'];?>" class="btn btn-primary function_edit"><i class="far fa-edit"></i></a>
                        </td>
                        <?php 
$function_id=$row_cselect_functions['f_id'];
$delete_function=json_encode(['f_id' => $function_id]);
 ?>
                        <td> <button class=" btn btn-danger" onclick='delete_function(<?php echo $delete_function; ?>)'><i class="fa fa-trash"></i></button> </td>
   </tr>
                        
 <?php  } ?>