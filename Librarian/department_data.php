<table class="table table-border" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>N<sup>o</sup></th>
                        <th>Department Fullname</th>
                        <th>Department Shortname</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" >
<?php
include '../php/connection.php';
$i=1;
$select_department="SELECT * FROM department ";
$cselect_department=$connect->prepare($select_department);
$cselect_department->execute();
while ($row_cselect_department=$cselect_department->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row_cselect_department['d_fullname']; ?></td>
                        <td><?php echo $row_cselect_department['d_shortname']; ?></td>
                        <td>
                          <a href="department_datas.php?d_id=<?php echo $row_cselect_department['d_id']; ?>" class="btn btn-primary "><i class="far fa-edit"></i></a>
                        </td>
                        <?php 
$before_delete="SELECT * FROM options WHERE d_id='".$row_cselect_department['d_id']."'";
$cbefore_delete=$connect->prepare($before_delete);
$cbefore_delete->execute();
$row_cbefore_delete=$cbefore_delete->fetch(PDO::FETCH_ASSOC);
if ($row_cbefore_delete) {
                         ?>
                         <td><button class="btn btn-warning"><i class="fa fa-exclamation"></i></button></td>
                       <?php }else{ ?>
                        <?php 
$department_id=$row_cselect_department['d_id'];
$delete_department=json_encode(['d_id' => $department_id]);
 ?>
                        <td><button class="btn btn-danger" onclick='delete_department(<?php echo $delete_department; ?>)'><i class="fa fa-trash"></i></button></td>
                      <?php } ?>
   </tr>
                        
 <?php  } ?>
 </tbody>
                  </table>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script> 