<?php 
include '../php/connection.php';
$d_id=$_GET['d_id'];
 ?>
 <label class="form-label" >Book Type</label>
                  <div class="input-group">
                  <select class="form-control" name="book_type_id">
                            <option selected disabled>Select Book Type</option>
                            <?php 
$select_book_type="SELECT * FROM books_type WHERE d_id='$d_id'";
$cselect_book_type=$connect->prepare($select_book_type);
$cselect_book_type->execute();
while($row_cselect_book_type=$cselect_book_type->fetch(PDO::FETCH_ASSOC)){
                             ?>
                             <option value="<?php echo $row_cselect_book_type['book_type_id'] ?>"><?php echo $row_cselect_book_type['book_type_name']; ?></option>
                         <?php } ?>
                          </select>