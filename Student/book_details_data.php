<?php 
include '../php/connection.php';
session_start();
$book_type_id=$_GET['book_type_id'];
$d_id=$_GET['d_id'];
$i=1;
$select_bsn="SELECT * FROM book_in_stock WHERE b_status='available'";
$cselect_bsn=$connect->prepare($select_bsn);
$cselect_bsn->execute();
while($row_cselect_bsn=$cselect_bsn->fetch(PDO::FETCH_ASSOC)){

$select_book="SELECT * FROM books WHERE d_id='$d_id' AND book_type_id='$book_type_id' AND b_SN='".$row_cselect_bsn['b_SN']."'";
$cselect_book=$connect->prepare($select_book);
$cselect_book->execute();
while($row_cselect_book=$cselect_book->fetch(PDO::FETCH_ASSOC)){
 ?>
 <tr>
  <td><?php echo $i++; ?></td>
   <td><?php echo $row_cselect_book['b_Author']; ?></td>
   <td><?php echo $row_cselect_book['b_title']; ?></td>
   <td><?php echo $row_cselect_book['b_Year_Publisher']; ?></td>
   <td><?php echo $row_cselect_book['b_Publisher']; ?></td>
   <td><?php echo $row_cselect_book['b_Edition']; ?></td>
<?php 
$b_SN=$row_cselect_book['b_SN'];
$s_id=$_SESSION['s_id'];
$sr_order_no=100000;
$sr_status='SENT';
$sr_date=date("Y-F-d");
$insert_request=json_encode(['b_SN' => $b_SN,'s_id' => $s_id,'sr_order_no' => $sr_order_no,'sr_status'=> $sr_status,'sr_date' => $sr_date]);
 ?>


   <td>
   	<button class="btn btn-info" onclick='request_book(<?php echo $insert_request; ?>)'><i class="fas fa-check-circle"></i></button>
  
   </td>
 </tr>
 <?php } }?>