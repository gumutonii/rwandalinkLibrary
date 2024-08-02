<?php 
include 'php/connection.php';
$s_regno=$_GET['s_regno'];
$show_adademic="SELECT * FROM academic_year WHERE ac_status='PENDING'";
$cshow_adademic=$connect->prepare($show_adademic);
$cshow_adademic->execute();
$row_cshow_adademic=$cshow_adademic->fetch(PDO::FETCH_ASSOC);

$show_student="SELECT * FROM student WHERE s_regno='$s_regno' AND academic_year='".$row_cshow_adademic['ac_id']."'";
 $cshow_student=$connect->prepare($show_student);
 $cshow_student->execute();
 $row_cshow_student=$cshow_student->fetch(PDO::FETCH_ASSOC);
 if ($row_cshow_student) {
  $select_status="SELECT * FROM student_status WHERE id='".$row_cshow_student['s_status']."'";
  $cselect_status=$connect->prepare($select_status);
  $cselect_status->execute();
  $row_cselect_status=$cselect_status->fetch(PDO::FETCH_ASSOC);
  if ($row_cselect_status['name']=="Active") {

if ($row_cshow_student['s_email'] =="") {
  ?>

<div class="row">
                  <div class="col-md-6">
                  <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">First Name</label>
                    
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      
                      class="form-control"
                      name="s_fname"
                      value="<?php echo $row_cshow_student['s_fname'] ?>"
                      placeholder="Enter your First Name"
                      autofocus
                    />
                  </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="s_lname"
                    value="<?php echo $row_cshow_student['s_lname'] ?>"
                    placeholder="Enter your Last Name"
                    autofocus
                  />
                </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                  <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Gender</label>
                    
                  </div>
                  <select class="form-control" name="s_gender">

                    <option selected="disabled">Select Gender</option>
                    <?php 
$select_gender="SELECT * FROM gender";
$cselect_gender=$connect->prepare($select_gender);
$cselect_gender->execute();
while($row_cselect_gender=$cselect_gender->fetch(PDO::FETCH_ASSOC)){
  if ($row_cselect_gender['g_name']== $row_cshow_student['s_gender']) {
                     ?>
                    <option selected="true" value="<?php echo $row_cselect_gender['g_name']; ?>"><?php echo $row_cselect_gender['g_name']; ?></option>
                  <?php }else{ ?>
                    <option value="<?php echo $row_cselect_gender['g_name']; ?>"><?php echo $row_cselect_gender['g_name']; ?></option>
                  <?php } }?>
                    
                  </select>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Department</label>
                  <?php 
$select_department="SELECT * FROM department WHERE d_id='".$row_cshow_student['d_id']."'";
$cselect_department=$connect->prepare($select_department);
$cselect_department->execute();
$row_cselect_department=$cselect_department->fetch(PDO::FETCH_ASSOC);
                   ?>
                  <input
                    type="text"
                    class="form-control"
                    readonly
                    value="<?php echo $row_cselect_department['d_shortname']; ?>"
                    autofocus
                  />
                </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                  <div class="mb-3">
                  <label for="email" class="form-label">Option</label>
                  <?php 
$select_s_option="SELECT * FROM options WHERE o_id='".$row_cshow_student['o_id']."'";
$cselect_s_option=$connect->prepare($select_s_option);
$cselect_s_option->execute();
$row_cselect_s_option=$cselect_s_option->fetch(PDO::FETCH_ASSOC);
                   ?>
                  <input
                    type="text"
                    class="form-control"
                    readonly
                    value="<?php echo $row_cselect_s_option['o_shortname']; ?>"
                    autofocus
                  />
                </div>
              </div>
                <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Year Of study</label>
                  <?php 
$select_s_year="SELECT * FROM year_study WHERE y_id='".$row_cshow_student['y_id']."'";
$cselect_s_year=$connect->prepare($select_s_year);
$cselect_s_year->execute();
$row_cselect_s_year=$cselect_s_year->fetch(PDO::FETCH_ASSOC);
                   ?>
                  <input
                    type="text"
                    class="form-control"
                    readonly
                    value="<?php echo $row_cselect_s_year['y_name']; ?>"
                    autofocus
                  />
                </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label for="email" class="form-label">Program</label>
                  <input
                    type="text"
                    class="form-control"
                    readonly
                    value="<?php echo $row_cshow_student['program']; ?>"
                    autofocus
                  />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label for="email" class="form-label">Study mode</label>
                  <input
                    type="text"
                    class="form-control"
                    readonly
                    value="<?php echo $row_cshow_student['study_mode']; ?>"
                    autofocus
                  />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    name="s_email"
                    autofocus
                  />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label for="email" class="form-label">Phone number</label>
                  <input
                    type="text"
                    class="form-control"
                    name="s_phone"
                    autofocus
                  />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label for="email" class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="s_password"
                    id="realPassword"
                    autofocus
                  />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label for="email" class="form-label">Confirm password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="con_password"
                    id="confPassword"
                    autofocus
                  />
                  </div>
                </div>
              </div>
              <input type="hidden" name="s_id" value="<?php echo $row_cshow_student['s_id']; ?>">
            </div>
            <div class="row">
              <div class="col-md-6">
                <label class="form-check-label">
                            <input type="checkbox" id="hide3" onclick="myPasswordConfirm()" aria-hidden="true" value="Check Password"> Show Password
                          </label>
              </div>
            </div>
             <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit" id="student_registration">Sign in</button>
                </div>




  <?php
 }
 else
 {
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                     <strong class='pull-left'>YOU HAVE COMPLETED CREATED ACCOUNT &nbsp;&nbsp;&nbsp;<span data-dismiss='alert' aria-label='close' style='float:right;cursor: pointer;'>X</span> </strong>
                                 </div>";
 }
}
}else
{
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                     <strong class='pull-left'>YOU HAVE NO ACCOUNT &nbsp;&nbsp;&nbsp;<span data-dismiss='alert' aria-label='close' style='float:right;cursor: pointer;'>X</span> </strong>
                                 </div>";
}


 ?>