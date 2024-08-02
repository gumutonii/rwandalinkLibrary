<?php 
include '../php/connection.php';
$i=1;
$select="SELECT * FROM year_study";
$cselect=$connect->prepare($select);
$cselect->execute();
while ($row_cselect=$cselect->fetch(PDO::FETCH_ASSOC)) {
 ?>
 <tr>
 	<td><?php echo $i++; ?></td>
 	<td><?php echo $row_cselect['y_name']; ?></td>
 	<td><a href="update_yearStudy.php?y_id=<?php echo $row_cselect['y_id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
<?php 
$year_id=$row_cselect['y_id'];
$delete_year=json_encode(['y_id' => $year_id]);
 	 ?>
<?php 
$select_no="SELECT * FROM student WHERE y_id='".$row_cselect['y_id']."'";
$cselect_no=$connect->prepare($select_no);
$cselect_no->execute();
$row_cselect_no=$cselect_no->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_no) {
 	  ?>
 	<td><button class="btn btn-warning" ><i class="fas fa-exclamation"></i></button></td>
<?php }else{ ?>
 	<td><button class="btn btn-danger" onclick='delete_study_year(<?php echo $delete_year; ?>)'><i class="fas fa-trash"></i></button></td>
 <?php } ?>
 </tr>
 <?php } ?>