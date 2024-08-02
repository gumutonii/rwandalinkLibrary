<?php 
include '../php/connection.php';
session_start();
$s_id=$_SESSION['s_id'];
$i=1;
$select_s_request="SELECT * FROM student_request WHERE s_id='$s_id' AND sr_status='SENT'";
$cselect_s_request=$connect->prepare($select_s_request);
$cselect_s_request->execute();
while ($row_cselect_s_request=$cselect_s_request->fetch(PDO::FETCH_ASSOC)) {
	$requested_book="SELECT * FROM book_in_stock WHERE b_SN='".$row_cselect_s_request['b_SN']."' AND b_status='BOOKED'";
	$crequested_book=$connect->prepare($requested_book);
	$crequested_book->execute();
	while($row_crequested_book=$crequested_book->fetch(PDO::FETCH_ASSOC)){
		$show_book="SELECT * FROM books WHERE b_SN='".$row_crequested_book['b_SN']."'";
		$cshow_book=$connect->prepare($show_book);
		$cshow_book->execute();
		while($row_cshow_book=$cshow_book->fetch(PDO::FETCH_ASSOC)){
	
?>
 <tr>
  <td><?php echo $i++; ?></td>
   <td><?php echo $row_cshow_book['b_Author']; ?></td>
   <td><?php echo $row_cshow_book['b_title']; ?></td>
   <td><?php echo $row_cshow_book['b_Year_Publisher']; ?></td>
   <td><?php echo $row_cshow_book['b_Publisher']; ?></td>
   <td><?php echo $row_cshow_book['b_Edition']; ?></td>
<?php 
$b_SN=$row_cshow_book['b_SN'];
$delete_request=json_encode(['b_SN' => $b_SN]);

 ?>

   <td>
   	<button class="btn btn-danger" onclick='delete_request_book(<?php echo $delete_request; ?>)'><i class="fas fa-times-circle"></i></button>
  
   </td>
 </tr>
 <?php 
}
}
}
 ?>