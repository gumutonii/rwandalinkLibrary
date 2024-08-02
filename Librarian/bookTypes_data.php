<table class="table table-border" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>N<sup>o</sup></th>
                        <th>Book Type Name</th>
                        <th>Book type Department</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" >
<?php
include '../php/connection.php';
$i=1;
$select_book_type="SELECT * FROM books_type ";
$cselect_book_type=$connect->prepare($select_book_type);
$cselect_book_type->execute();
while ($row_cselect_book_type=$cselect_book_type->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row_cselect_book_type['book_type_name']; ?></td>
                        <?php 
$select_dep="SELECT * FROM department WHERE d_id='".$row_cselect_book_type['d_id']."'";
$cselect_dep=$connect->prepare($select_dep);
$cselect_dep->execute();
$row_cselect_dep=$cselect_dep->fetch(PDO::FETCH_ASSOC);


                         ?>
                        <td><?php echo $row_cselect_dep['d_shortname']; ?></td>
                        <td>
                          <a href="update_bookTypes.php?book_type_id=<?php echo $row_cselect_book_type['book_type_id']; ?>" class="btn btn-primary "><i class="far fa-edit"></i></a>
                        </td>
                        
                       
                        <?php 
$bookType_id=$row_cselect_book_type['book_type_id'];
$delete_book_type=json_encode(['book_type_id' => $bookType_id]);
 ?>
                        <td><button class="btn btn-danger" onclick='delete_bookTypes(<?php echo $delete_book_type; ?>)'><i class="fa fa-trash"></i></button></td>
                      
   </tr>
                        
 <?php  } ?>
 </tbody>
</table>
<script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script> 