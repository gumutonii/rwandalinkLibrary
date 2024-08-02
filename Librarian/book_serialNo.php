<?php include '../php/connection.php'; ?>

  <?php 
$select_sm="SELECT max(b_SN) max_b_SN FROM books";
$cselect_sm= $connect->prepare($select_sm);
$cselect_sm-> execute();
$row_cselect=$cselect_sm ->fetch(PDO::FETCH_ASSOC);
if ($row_cselect['max_b_SN'] >0) {
$new_max=$row_cselect['max_b_SN']+1;

 ?>
<label for="b_SN" class="form-label">Book Serial n<sup>o</sup></label>
                            <input
                              class="form-control"
                              type="text"
                              name="b_SN"
                              value="<?= $new_max;?>"
                              readonly
                            />
<?php }else{

$max=1;
 ?>                            
 <label for="b_SN" class="form-label">Book Serial n<sup>o</sup></label>
                            <input
                              class="form-control"
                              type="text"
                              name="b_SN"
                              value="<?php echo $max; ?>"
                              readonly
                          />
                          <?php } ?>  