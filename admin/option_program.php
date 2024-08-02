<?php 
include '../php/connection.php';
$o_id=$_GET['o_id'];
 ?>
<?php 
$select_option="SELECT * FROM options WHERE o_id='$o_id'";
$cselect_option=$connect->prepare($select_option);
$cselect_option->execute();
$row_cselect_option=$cselect_option->fetch(PDO::FETCH_ASSOC);

 ?>


                        <label class="form-label" >Program</label>
                          <div class="input-group" >
                          <input type="checkbox" name="program" value="Advanced Diploma In <?php echo $row_cselect_option['o_fullname']; ?>" class="form-check-input">Advanced Diploma In <?php echo $row_cselect_option['o_fullname']; ?>
                          
                        </div>