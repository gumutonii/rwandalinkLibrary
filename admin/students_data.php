<?php
include '../php/connection.php';
$i=1;
$academic_year=$_GET['academic_year'];
$y_id=$_GET['y_id'];
$o_id=$_GET['o_id'];
$d_id=$_GET['d_id'];
$select_student="SELECT * FROM student WHERE academic_year='$academic_year' AND y_id='$y_id' AND o_id='$o_id' AND d_id='$d_id'";
$cselect_student=$connect->prepare($select_student);
$cselect_student->execute();
while ($row_cselect_student=$cselect_student->fetch(PDO::FETCH_ASSOC)) {
                       ?>

                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row_cselect_student['s_fname']; ?></td>
                        <td><?php echo $row_cselect_student['s_lname']; ?></td>
                        <td><?php echo $row_cselect_student['s_gender']; ?></td>
                        <td><?php echo $row_cselect_student['s_email']; ?></td>
                        <td><?php echo $row_cselect_student['s_regno']; ?></td>
                        <td>

                          <a href="update_student.php?s_id=<?php echo $row_cselect_student['s_id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        </td>
<?php 
$student_id=$row_cselect_student['s_id'];
$delete_student=json_encode(['s_id' => $student_id]);
 ?>

                        <td>
                          <button class="btn btn-danger" onclick='student_delete(<?php echo $delete_student; ?>)'><i class="fa fa-trash"></i></button>
                        </td>
                          
   </tr>
                        
 <?php  } ?>