<table class="table table-border" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      
                      <tr>
                        <th>Student Names</th>
                        <th>Book Author</th>
                        <th>Book Title</th>
                        <th>Book Serial N<sup>o</sup></th>
                        <th>Action</th>
                        <th>Cancel Request</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" >
<?php 
include '../php/connection.php';
$i=1;
$select_requested="SELECT distinct(s_id) FROM student_request where sr_status='SENT'";
$cselect_requested=$connect->prepare($select_requested);
$cselect_requested->execute();
while($row_cselect_requested=$cselect_requested->fetch(PDO::FETCH_ASSOC)){

	

 ?>


<tr>

	
	<td>
		<?php 

$requested_student="SELECT * FROM student WHERE s_id='".$row_cselect_requested['s_id']."'";
$crequested_student=$connect->prepare($requested_student);
$crequested_student->execute();
while($row_crequested_student=$crequested_student->fetch(PDO::FETCH_ASSOC)){
	echo $row_crequested_student['s_fname'];
}

		 ?>
	</td>
	<td>
		<?php 
		$i=1;
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' "; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
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
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' "; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
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
		
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' "; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
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
		
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' "; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
$cselect_all_title_show=$connect->prepare($select_all_title_show);
$cselect_all_title_show->execute();
while($row_cselect_all_title_show=$cselect_all_title_show->fetch(PDO::FETCH_ASSOC)){

$show_book="SELECT * FROM books WHERE b_SN='".$row_cselect_all_title_show['b_SN']."'";
$cshow_book=$connect->prepare($show_book);
$cshow_book->execute();
$row_show_book=$cshow_book ->fetch(PDO::FETCH_ASSOC); 
?>
<a title="AProve Request" href="approve_request.php?sr_id=<?php echo $row_cselect_all_title_show['sr_id']; ?>" class="btn btn-success"><i class="fas fa-check"></i></a>
 
                                <?php }

                                 echo"<hr>";
                                 }
                                 ?>
	</td> 
	<td>
		<?php 
		
$select_all_title="SELECT distinct(sr_order_no) FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' "; 
$cselect_all_title=$connect->prepare($select_all_title);
$cselect_all_title->execute();
 while($row_cselect_all_title=$cselect_all_title->fetch(PDO::FETCH_ASSOC)){

$select_all_title_show="SELECT * FROM student_request WHERE sr_status='SENT' and  s_id='".$row_cselect_requested['s_id']."' AND sr_order_no='".$row_cselect_all_title['sr_order_no']."' "; 
$cselect_all_title_show=$connect->prepare($select_all_title_show);
$cselect_all_title_show->execute();
while($row_cselect_all_title_show=$cselect_all_title_show->fetch(PDO::FETCH_ASSOC)){

$show_book="SELECT * FROM books WHERE b_SN='".$row_cselect_all_title_show['b_SN']."'";
$cshow_book=$connect->prepare($show_book);
$cshow_book->execute();
$row_show_book=$cshow_book ->fetch(PDO::FETCH_ASSOC); 
?>
<?php 
$sr_id=$row_cselect_all_title_show['sr_id'];
$b_SN=$row_show_book['b_SN'];
$delete_request=json_encode(['sr_id' => $sr_id,'b_SN'=>$b_SN]);
 ?>
<button title="Delete" class="btn btn-danger" onclick='delete_requestes(<?php echo $delete_request; ?>)'><i class="fa fa-trash"></i></button>
 
                                <?php }

                                 echo"<hr>";
                                 }
                                 ?>
	</td> 
</tr>




<?php } ?>
</tbody>
                  </table>
                  <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>