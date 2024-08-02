<table class="table table-border" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>BS N<sup>o</sup></th>
                        <th>Book Author</th>
                        <th>Book Titile</th>
                        <th>Year of Publisher</th>
                        <th>publisher</th>
                        <th>Edition</th>
                        <th>Update</th>
                        <th>Delete</th>

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0"> 
<?php 
include '../php/connection.php';
$book_type_id=$_GET['book_type_id'];
$d_id=$_GET['d_id'];

$select_book="SELECT * FROM books WHERE d_id='$d_id' AND book_type_id='$book_type_id'";
$cselect_book=$connect->prepare($select_book);
$cselect_book->execute();
while($row_cselect_book=$cselect_book->fetch(PDO::FETCH_ASSOC)){
 ?>

 <tr>
  <td><?php echo $row_cselect_book['b_SN']; ?></td>
   <td><?php echo $row_cselect_book['b_Author']; ?></td>
   <td><?php echo $row_cselect_book['b_title']; ?></td>
   <td><?php echo $row_cselect_book['b_Year_Publisher']; ?></td>
   <td><?php echo $row_cselect_book['b_Publisher']; ?></td>
   <td><?php echo $row_cselect_book['b_Edition']; ?></td>
   <td><a href="update_book.php?b_id=<?php echo $row_cselect_book['b_id'] ?>" class="btn btn-primary" ><i class="fas fa-edit"></i></a></td>
   <?php 
$b_SN=$row_cselect_book['b_SN'];
$delete_book=json_encode(['b_SN' => $b_SN]);
 ?>
<?php 
$no_del="SELECT * FROM student_request WHERE b_SN='".$row_cselect_book['b_SN']."' and sr_status='SENT'";
$cno_del=$connect->prepare($no_del);
$cno_del->execute();
$row_cno_del=$cno_del->fetch(PDO::FETCH_ASSOC);
if ($row_cno_del) {
 ?>
<td><button class="btn btn-warning"><i class="fa fa-exclamation"></i></button></td>
<?php }else{ ?>

 <td><button class="btn btn-danger" onclick='delete_books(<?php echo $delete_book; ?>)'><i class="fa fa-trash"></i></button></td>
<?php } ?>
 </tr>
 <?php } ?>
 </tbody>
                  </table>
<script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>                  