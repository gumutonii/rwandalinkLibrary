<?php 
include '../php/connection.php';
$i=1;
$select_academic="SELECT * FROM academic_year";
$cselect_academic=$connect->prepare($select_academic);
$cselect_academic->execute();
while($row_cselect_academic=$cselect_academic->fetch(PDO::FETCH_ASSOC)){
 ?>
 <tr>
 	<td><?php echo $i++; ?></td>
 	<td><?php echo $row_cselect_academic['ac_name']; ?></td>





	 <?php 

$select_unique_status="select * from academic_year where ac_id='".$row_cselect_academic['ac_id']."'  ";

$pselect_unique_status=$connect->prepare($select_unique_status);
$pselect_unique_status->execute();
$row_unique_status=$pselect_unique_status->fetch(PDO::FETCH_ASSOC);
if ($row_unique_status['ac_status'] == "PENDING") {

                     ?>



<?php 
$id=$row_unique_status['ac_id'];
$close_year=json_encode(['ac_id' => $id,]);
 ?>
 <td><button class="btn btn-success" onclick='close_years(<?php echo $close_year; ?>)'><i class="fas fa-sync-alt"></i>Close</button></td>


                                        <?php }
                                        else{ ?>
<?php 
$id=$row_unique_status['ac_id'];
$pending_year=json_encode(['ac_id' => $id,]);
 ?>

 <td><button class="btn btn-primary" onclick='year_pending(<?php echo $pending_year; ?>)'><i class="fas fa-sync-alt"></i>Pending again</button></td>
 <?php } ?>




 	<td><a href="update_academicYear.php?ac_id=<?php echo $row_cselect_academic['ac_id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
 	<?php 
$academic_id=$row_cselect_academic['ac_id'];
$delete_academic=json_encode(['ac_id' => $academic_id]);


 	 ?>
 	 <?php 
$select_no="SELECT * FROM student WHERE academic_year='".$row_cselect_academic['ac_id']."'";
$cselect_no=$connect->prepare($select_no);
$cselect_no->execute();
$row_cselect_no=$cselect_no->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_no) {
 	  ?>
 	  <td><button class="btn btn-warning" ><i class="fas fa-exclamation"></i></button></td>
 	<?php }else{ ?>

 	<td><button class="btn btn-danger" onclick='delete_academic_year(<?php echo $delete_academic; ?>)'><i class="fas fa-trash"></i></button></td>
 <?php } ?>
 </tr>
 <?php } ?>