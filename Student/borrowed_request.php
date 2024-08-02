<?php
session_start();
include '../php/connection.php';
?>
<table class="table table-border" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      
                      <tr>
                        <th>Student Names</th>
                        <th>Student Phone N<sup>o</sup></th>
                        <th>Book Author</th>
                        <th>Book Title</th>
                        <th>Book Serial N<sup>o</sup></th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" >
<?php 


$select_users="SELECT distinct(s_id) FROM student_request WHERE sr_status='ACCEPTED' and s_id='".$_SESSION['s_id']."'";
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
$requested_student_name="SELECT * FROM student WHERE s_id='".$row_cselect_users['s_id']."'";
$crequested_student_name=$connect->prepare($requested_student_name);
$crequested_student_name->execute();
while($row_crequested_student_name=$crequested_student_name->fetch(PDO::FETCH_ASSOC)){
    echo $row_crequested_student_name['s_phone'];
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

$select_borrowed="SELECT * FROM borrowed_book_student WHERE sr_id='".$row_cselect_all_title_show['sr_id']."' AND bbs_status='BORROWED'";
$cselect_borrowed=$connect->prepare($select_borrowed);
$cselect_borrowed->execute();
while($row_cselect_borrowed=$cselect_borrowed->fetch(PDO::FETCH_ASSOC)){

   $select_money_id="SELECT * FROM student_pernarity WHERE bbs_id='".$row_cselect_borrowed['bbs_id']."' AND s_id='".$row_cselect_users['s_id']."'";
   $cselect_money_id=$connect->prepare($select_money_id);
   $cselect_money_id->execute();
   $row_cselect_money_id=$cselect_money_id->fetch(PDO::FETCH_ASSOC);


$select_penarity="SELECT SUM(sp_pernarity) AS total_penarities FROM student_pernarity WHERE bbs_id='".$row_cselect_borrowed['bbs_id']."' AND s_id='".$row_cselect_users['s_id']."' AND sp_status='pending'";
 $cselect_penarity=$connect->prepare($select_penarity);
 $cselect_penarity->execute();
 $row_cselect_penarity=$cselect_penarity->fetch(PDO::FETCH_ASSOC);
 if ($row_cselect_penarity['total_penarities']>0) {
?>
<a href="student_payPanarity.php?bbs_id=<?php echo $row_cselect_borrowed['bbs_id']; ?>&&s_id=<?php echo $row_cselect_users['s_id']; ?>&&sp_id=<?php echo $row_cselect_money_id['sp_id']; ?>" class="btn btn-warning">Pay Penarity</a>
<?php }else{ ?>

        <?php 

 $sr_id=$row_cselect_all_title_show['sr_id'];
$borrow_back=json_encode(['sr_id' => $sr_id]);
         ?>
        <button class="btn btn-info" onclick='borrow_back_book(<?php echo $borrow_back; ?>)'>Borrow Back</button>

                                <?php }}

                                 echo"<hr>";
                                 }}
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