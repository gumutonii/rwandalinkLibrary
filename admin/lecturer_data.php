<?php
include '../php/connection.php';
$i=1;
$o_id=$_GET['o_id'];
$d_id=$_GET['d_id'];
$select_lecturer="SELECT * FROM lecturer WHERE d_id='$d_id' AND o_id='$o_id'";
$cselect_lecturer=$connect->prepare($select_lecturer);
$cselect_lecturer->execute();
while ($row_cselect_lecturer=$cselect_lecturer->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row_cselect_lecturer['l_fname']; ?></td>
                        <td><?php echo $row_cselect_lecturer['l_lname']; ?></td>
                        <td><?php echo $row_cselect_lecturer['l_gender']; ?></td>
                        <td><?php echo $row_cselect_lecturer['l_email']; ?></td>
                        <td><?php echo $row_cselect_lecturer['l_phone']; ?></td>
                        <td>
                          <a href="update_lecturer.php?l_id=<?php echo $row_cselect_lecturer['l_id']?>" class="btn btn-primary function_edit" ><i class="far fa-edit"></i></a>
                        </td>
                        <?php 
$lecturer_id=$row_cselect_lecturer['l_id'];
$delete_lecturer=json_encode(['l_id' => $lecturer_id]);
 ?>
                        <td>
                          <button class="btn btn-danger" onclick='lecturer_delete(<?php echo $delete_lecturer; ?>)'><i class="fa fa-trash"></i></button>
                        </td>
   </tr>
                        
 <?php  } ?>