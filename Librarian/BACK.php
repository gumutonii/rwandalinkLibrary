<?php 
include '../php/connection.php';

$select_users="SELECT distinct(s_id) FROM student_request WHERE sr_status='ACCEPTED'";
$cselect_users=$connect->prepare($select_users);
$cselect_users->execute();
while ($row_cselect_users=$cselect_users->fetch(PDO::FETCH_ASSOC)){
 ?>
 <tr>
 	<td>
 		
<?php 
$requested_student_name="SELECT * FROM student WHERE s_id='".$row_cselect_users['s_id']."'";
$crequested_student_name=$connect->prepare($requested_student_name);
$crequested_student_name->execute();
while($row_crequested_student_name=$crequested_student_name->fetch(PDO::FETCH_ASSOC)){
	echo $row_crequested_student_name['s_fname'];
}

 		 ?>
 	</td>
 	<td>
 		<?php 
		$i=1;
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='ACCEPTED' and  s_id='".$row_cselect_users['s_id']."'"; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='ACCEPTED' and  s_id='".$row_cselect_users['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
$cselect_all_title_show=$connect->prepare($select_all_title_show);
$cselect_all_title_show->execute();
while($row_cselect_all_title_show=$cselect_all_title_show->fetch(PDO::FETCH_ASSOC)){

$show_book="SELECT * FROM books WHERE b_SN='".$row_cselect_all_title_show['b_SN']."'";
$cshow_book=$connect->prepare($show_book);
$cshow_book->execute();
$row_show_book=$cshow_book ->fetch(PDO::FETCH_ASSOC); 
?>
<b><?php echo $i++; ?></b> <?php echo $row_show_book['b_Author']."<br>"; ?>
                                <?php }

                                 echo"<hr>";
                                 }
                                 ?>	
 	</td>
 	<td>
 		<?php 
		$i=1;
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='ACCEPTED' and  s_id='".$row_cselect_users['s_id']."'"; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='ACCEPTED' and  s_id='".$row_cselect_users['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
$cselect_all_title_show=$connect->prepare($select_all_title_show);
$cselect_all_title_show->execute();
while($row_cselect_all_title_show=$cselect_all_title_show->fetch(PDO::FETCH_ASSOC)){

$show_book="SELECT * FROM books WHERE b_SN='".$row_cselect_all_title_show['b_SN']."'";
$cshow_book=$connect->prepare($show_book);
$cshow_book->execute();
$row_show_book=$cshow_book ->fetch(PDO::FETCH_ASSOC); 
?>
<b><?php echo $i++; ?></b> <?php echo $row_show_book['b_title']."<br>"; ?>
                                <?php }

                                 echo"<hr>";
                                 }
                                 ?>
 	</td>
 	<td>
 		<?php 
		$i=1;
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='ACCEPTED' and  s_id='".$row_cselect_users['s_id']."'"; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='ACCEPTED' and  s_id='".$row_cselect_users['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
$cselect_all_title_show=$connect->prepare($select_all_title_show);
$cselect_all_title_show->execute();
while($row_cselect_all_title_show=$cselect_all_title_show->fetch(PDO::FETCH_ASSOC)){

$show_book="SELECT * FROM books WHERE b_SN='".$row_cselect_all_title_show['b_SN']."'";
$cshow_book=$connect->prepare($show_book);
$cshow_book->execute();
$row_show_book=$cshow_book ->fetch(PDO::FETCH_ASSOC); 
?>
 <?php echo $row_show_book['b_SN']."<br>"; ?>
                                <?php }

                                 echo"<hr>";
                                 }
                                 ?>
 	</td>
 	<td>
 		<?php 
		$i=1;
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='ACCEPTED' and  s_id='".$row_cselect_users['s_id']."'"; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='ACCEPTED' and  s_id='".$row_cselect_users['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
$cselect_all_title_show=$connect->prepare($select_all_title_show);
$cselect_all_title_show->execute();
while($row_cselect_all_title_show=$cselect_all_title_show->fetch(PDO::FETCH_ASSOC)){

$show_book="SELECT * FROM books WHERE b_SN='".$row_cselect_all_title_show['b_SN']."'";
$cshow_book=$connect->prepare($show_book);
$cshow_book->execute();
$row_show_book=$cshow_book ->fetch(PDO::FETCH_ASSOC);

$select_borrowed="SELECT * FROM borrowed_book_student WHERE sr_id='".$row_cselect_all_title_show['sr_id']."'" 
?>

<button class="btn btn-info" onclick='borrow_back_book(<?php echo $borrow_back; ?>)'>Borrow Back</button>
                                <?php }

                                 echo"<hr>";
                                 }
                                 ?>
 	</td>
 </tr>
 <?php } ?>