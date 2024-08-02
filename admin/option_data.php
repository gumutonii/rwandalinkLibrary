<?php
include '../php/connection.php';
$i=1;
$select_option="SELECT * FROM options ";
$cselect_option=$connect->prepare($select_option);
$cselect_option->execute();
while ($row_cselect_option=$cselect_option->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row_cselect_option['o_fullname']; ?></td>
                        <td><?php echo $row_cselect_option['o_shortname']; ?></td>
                        <td>
                          <a class="btn btn-primary" href="update_option_data.php?o_id=<?php echo $row_cselect_option['o_id'] ?>"><i class="far fa-edit"></i></a>
                        </td>
                        <?php 
$option_id=$row_cselect_option['o_id'];
$delete_options=json_encode(['o_id' => $option_id]);
 ?>
 <?php 
$select_no="SELECT * FROM student WHERE o_id='".$row_cselect_option['o_id']."'";
$cselect_no=$connect->prepare($select_no);
$cselect_no->execute();
$row_cselect_no=$cselect_no->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_no) {
    ?>
    <td><button class="btn btn-warning" ><i class="fas fa-exclamation"></i></button></td>
  <?php }else{ ?>
                        <td><button class="btn btn-danger" onclick='delete_option(<?php echo $delete_options; ?>)'><i class="fa fa-trash"></i></button></td>
                      <?php } ?>
   </tr>
                        
 <?php  } ?>