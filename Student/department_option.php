<?php 
include '../php/connection.php';
$d_id=$_GET['d_id'];
$_SESSION['d_id']=$d_id;
 ?>
<div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="fas fa-hdd"></i
                              ></span>
                              <select class="form-select form-select-lg" name="o_id" onchange="show_program(this.value)">
                                <option selected="disabled">Select Option</option>
                                <?php 
$select_option="SELECT * FROM options WHERE d_id='$d_id'";
$cselect_option=$connect->prepare($select_option);
$cselect_option->execute();
while($row_cselect_option=$cselect_option->fetch(PDO::FETCH_ASSOC)){
                             ?>
                             <option value="<?php echo $row_cselect_option['o_id']; ?>"><?php echo $row_cselect_option['o_shortname'];?></option>
                           <?php } ?>
                              </select>
                            </div>