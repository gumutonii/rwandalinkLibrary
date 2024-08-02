<?php
include '../php/connection.php';
$i=1;
$select_librarian="SELECT * FROM librarian ";
$cselect_librarian=$connect->prepare($select_librarian);
$cselect_librarian->execute();
while ($row_cselect_librarian=$cselect_librarian->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row_cselect_librarian['lb_fname']; ?></td>
                        <td><?php echo $row_cselect_librarian['lb_lname']; ?></td>
                        <td><?php echo $row_cselect_librarian['lb_email']; ?></td>
                        <td><?php echo $row_cselect_librarian['lb_phone']; ?></td>
                        <td>
                          <a href="admin_update_librarian.php?lb_id=<?php echo $row_cselect_librarian['lb_id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                          <?php 
$librarian_id=$row_cselect_librarian['lb_id'];
$delete_librarians=json_encode(['lb_id' => $librarian_id]);
 ?>
                        <td><button class="btn btn-danger" onclick='delete_librarian(<?php echo $delete_librarians; ?>)'><i class="fa fa-trash"></i></button></td>
   </tr>
                        
 <?php  } ?>