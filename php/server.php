<?php 
include 'connection.php';
session_start();
$u_email="";
$Login_admin="";
$register_admin_m="";
$register_admin_u="";

// if (isset($_POST['user_login'])) {
//     $u_email=$_POST['u_email'];
//     $u_password=$_POST['u_password'];
 
// $data_select=[
// 'u_email'=>$u_email,
// 'u_password' =>$u_password,
// ];
// $select_admin="SELECT * FROM users WHERE u_email=:u_email AND u_password=:u_password ";  
// $cselect_admin=$connect->prepare($select_admin);
// $cselect_admin->execute($data_select);
// $row_fetch=$cselect_admin->fetch(PDO::FETCH_ASSOC);
// if ($row_fetch) {
//     $_SESSION['u_id']=$row_fetch['u_id'];
//     $_SESSION['u_email']=$row_fetch['u_email'];
//     $_SESSION['u_lastname']=$row_fetch['u_last_name'];
//     $folder=$row_fetch['u_function'];
//     header("location:$folder/./");
// }
// else
// {
//    echo "<script>alert('Invalid Account ')</script>";
// }
// }

if (isset($_POST['student_login'])) {
    $s_email=$_POST['s_email'];
    $s_password=$_POST['s_password'];
    $select_student="SELECT * FROM student WHERE s_email='$s_email' AND s_password='$s_password'";
    $cselect_student=$connect->prepare($select_student);
    $cselect_student->execute();
    $row_cselect_student=$cselect_student->fetch(PDO::FETCH_ASSOC);
    if ($row_cselect_student) {
        $_SESSION['s_id']=$row_cselect_student['s_id'];
        header("location:Student/./");
    }
    else
    {
         echo "<script>alert('Invalid Account')</script>";
    }
}

if (isset($_POST['Lecturer_login'])) {
    $l_email=$_POST['l_email'];
    $l_password=$_POST['l_password'];
    $select_lecturer="SELECT * FROM lecturer WHERE l_email='$l_email' AND l_password='$l_password'";
    $cselect_lecturer=$connect->prepare($select_lecturer);
    $cselect_lecturer->execute();
    $row_cselect_lecturer=$cselect_lecturer->fetch(PDO::FETCH_ASSOC);
    if ($row_cselect_lecturer) {
        $_SESSION['l_id']=$row_cselect_lecturer['l_id'];
        header("location:Lecturer/./");
    }
    else
    {
        echo "<script>alert('Invalid Account')</script>";
    }
}
if (isset($_POST['librarian_login'])) {
    $lb_email=$_POST['lb_email'];
    $lb_password=$_POST['lb_password'];
    $select_librarian="SELECT * FROM librarian WHERE lb_email='$lb_email' AND  lb_password='$lb_password'";
    $cselect_librarian=$connect->prepare($select_librarian);
    $cselect_librarian->execute();
    $row_cselect_librarian=$cselect_librarian->fetch(PDO::FETCH_ASSOC);
    if ($row_cselect_librarian) {
        $_SESSION['lb_id']=$row_cselect_librarian['lb_id'];
        header("location:Librarian/./");
    }
    else
    {
         echo "<script>alert('Invalid Account')</script>";
    }
}

// $u_first_name="";
// $u_last_name="";
// $u_email="";
// $u_telphone="";
// $u_card_no="";
// $u_password="";
// $u_confirm_password="";
// $u_function="";
// if (isset($_POST['register_user'])) {
//     $u_first_name=$_POST['u_first_name'];
//     $u_last_name=$_POST['u_last_name'];
//     $u_email=$_POST['u_email'];
//     $u_telphone=$_POST['u_telphone'];
//     $u_card_no=$_POST['u_card_no'];
//     $u_password=$_POST['u_password'];
//     $u_confirm_password=$_POST['u_confirm_password'];
//     $u_function=$_POST['u_function'];
//     $u_status="inactive";
//     $user_data=[
//     'u_first_name'=>$u_first_name,
//     'u_last_name'=>$u_last_name,
//     'u_email'=>$u_email,
//     'u_telphone'=>$u_telphone,
//     'u_card_no'=>$u_card_no,
//     'u_password'=>$u_password,
//     'u_function'=>$u_function,
//     'u_status'=>$u_status,
//     ];
//     if ($u_confirm_password!=$u_password) {
//         echo"<script>alert('password Are Not Matchin')";
//     }
//     else
//     {
//     $insert_user="INSERT INTO users(`u_first_name`,`u_last_name`,`u_email`,`u_telphone`,`u_card_no`,`u_password`,`u_function`,`u_status`) values(:u_first_name, :u_last_name, :u_email, :u_telphone, :u_card_no,:u_password ,:u_function ,:u_status   )";
//     $cinsert_user= $connect->prepare($insert_user);
//     $cinsert_user-> execute($user_data);
//     if ($cinsert_user) {
//         echo "<script>alert('well registerd')</script>";
//         echo "<script>window.location.replace('login.php')</script>";
//     }
//     else
//     {
//         echo "<script>alert('failed  to register')</script>";
//     }
// }
    
// }
// if (isset($_GET['user_logout'])) {
//     unset($_SESSION['username']);
//     header("location:.././");
// }

// if (isset($_POST['delete_order'])) {
// $b_SN=$_POST['b_SN'];
// $delete_user_order="DELETE FROM users_requist WHERE b_SN='$b_SN'";
// $cdelete_user_order=$connect->prepare($delete_user_order);
// $cdelete_user_order->execute();
// if ($cdelete_user_order) {

//      echo"<script>alert('well deleted')</script>";
//      $update_user_order="UPDATE book_in_stock SET b_status='available' WHERE b_SN='$b_SN'";
//      $cupdate_user_order=$connect->prepare($update_user_order);
//      $cupdate_user_order->execute();
//     }
//     else
//     {
//     echo"<script>alert('failed')</script>";
//     }


// }
// if (isset($_POST['function_update'])) {
//     $u_first_name=$_POST['u_first_name'];
//     $u_last_name=$_POST['u_last_name'];
//     $u_email=$_POST['u_email'];
//     $u_telphone=$_POST['u_telphone'];
//     $u_card_no=$_POST['u_card_no'];
//     $u_password=$_POST['u_password'];
//     $oc=md5($u_password);
//     $u_id=$_POST['u_id'];
//     $data_function=[
//     'u_first_name'=>$u_first_name,
//     'u_last_name'=>$u_last_name,
//     'u_email'=>$u_email,
//     'u_telphone'=>$u_telphone,
//     'u_card_no'=>$u_card_no,
//     'oc'=>$oc,
//     ];
//     $update_function="UPDATE users SET u_first_name=:u_first_name,u_last_name=:u_last_name,u_email=:u_email,u_telphone=:u_telphone,u_card_no=:u_card_no,u_password=:oc WHERE u_id='$u_id'";
//     $cupadate_function=$connect->prepare($update_function);
//     $cupadate_function->execute($data_function);
//     if ($cupadate_function) {
//         echo"<script>alert('well updated')</script>";
//     }
//     else
//     {
//          echo"<script>alert('failed to be updated')</script>";
//     }

// }

// if (isset($_POST['user_oder'])) {
// $u_order_no = time() . '11';
// $u_id=$_SESSION['u_id'];
// $u_order_status='pending';
// $order_data=['u_order_no'=>$u_order_no,
// 'u_id'=>$u_id,
// 'u_order_status'=>$u_order_status
// ];
// $insert_order="INSERT INTO user_order_no VALUES('',:u_id,:u_order_no,:u_order_status)";
// $cinsert_order=$connect->prepare($insert_order);
// $cinsert_order->execute($order_data);
// if ($cinsert_order) {
//     echo"<script> alert('well created')</script>";
//     echo"<script> window.location.replace('books.php?u_order_no=$u_order_no')</script>";
// }
// else
// {
//    echo"<script> alert('failed created')</script>"; 
// }
// }

// if (isset($_POST['view_requist_book'])) {
//     if (empty($_POST['book_type_id']) && empty($_POST['d_id'])) {
//        echo "<script>alert('Check the box to continue')</script>";
//     }
//     else{
//    $book_type_id=$_POST['book_type_id'];
//    $u_order_no=$_GET['u_order_no'];
//    $d_id=$_POST['d_id'];
//    header("location:available_books.php?d_id=$d_id && book_type_id=$book_type_id");
// }
// }
// if (isset($_POST['back'])) {
//    $u_order_no=$_GET['u_order_no'];
//    header("location:books.php?u_order_no=$u_order_no");
// }





// if (isset($_GET['check_rent'])) {
  
// $check=$_GET['check_rent'];
//   $u_id=$_SESSION['u_id'];
//   $d_id=$_GET['d_id'];
//    $ur_status="Sent";
//     $r_date=date("Y-F-d");
//     $b_status="Booked";

//     $select_request_count="SELECT * FROM users_requist WHERE u_id='$u_id' AND r_date='$r_date' AND ur_status='Sent' ";
//     $cselect_request_count=$connect->prepare($select_request_count);
//     $cselect_request_count->execute();
//     $row_request_count=$cselect_request_count-> fetch(PDO::FETCH_ASSOC);
    
//     if ($row_request_count) {
//     $select_request_max="SELECT max(u_order_no) as max_u_order_no FROM users_requist WHERE u_id='$u_id' AND r_date='$r_date' AND ur_status='$ur_status'  ";
//     $cselect_request_max=$connect->prepare($select_request_max);
//     $cselect_request_max->execute();
//     $row_request_max=$cselect_request_max-> fetch(PDO::FETCH_ASSOC);
//     $count_m_u_order_no=$row_request_max['max_u_order_no']+1;
//     $data_insert=[
//         'b_SN' =>$check,
//         'u_id' =>$u_id,
//         'u_order_no' =>$count_m_u_order_no,
//         'ur_status' =>$ur_status,
//         'r_date' =>$r_date,
//         ];
            

//     $insert_user="INSERT INTO users_requist(`b_SN`,`u_id`,`u_order_no`,`ur_status`,`r_date`) VALUES(:b_SN,:u_id,:u_order_no,:ur_status,:r_date)";
// $cinsert_user=$connect->prepare($insert_user);
// $cinsert_user->execute($data_insert);
// if($cinsert_user){
//     $data_update=[
//         'b_status' =>$b_status,
//         'b_SN'=>$check,
        
        
//         ];
        
        
        
//         echo"<script> window.location.replace('available_books.php?d_id=$d_id && book_type_id=$book_type_id )</script>";
//         $update_picked="UPDATE book_in_stock SET b_status=:b_status WHERE b_SN=:b_SN ";
//         $cupdate_picked=$connect->prepare($update_picked);
//         $cupdate_picked-> execute($data_update);
//         if ($cupdate_picked) {
//         $update_picked_in_books="UPDATE books SET b_status=:b_status WHERE b_SN=:b_SN " ;
//         $cupdate_picked_in_books=$connect->prepare($update_picked_in_books);
//         $cupdate_picked_in_books-> execute($data_update);
//              echo"<script> alert('well booked')</script>";
//              echo"<script>window.location.replace('books.php')</script>";
//          } 
//          else
//          {
//             echo"<script> alert('try again')</script>";
//             echo"<script>window.location.replace('books.php')</script>";
//          }



// }

//     }





// $count_u_order_no=1000000; 
// $data_insert=[
// 'b_SN' =>$check,
// 'u_id' =>$u_id,
// 'u_order_no' =>$count_u_order_no,
// 'ur_status' =>$ur_status,
// 'r_date' =>$r_date,
// ];
    

        
// $insert_user="INSERT INTO users_requist(`b_SN`,`u_id`,`u_order_no`,`ur_status`,`r_date`) VALUES(:b_SN,:u_id,:u_order_no,:ur_status,:r_date)";
// $cinsert_user=$connect->prepare($insert_user);
// $cinsert_user->execute($data_insert);
// if($cinsert_user){
//     $data_update=[
//         'b_status' =>$b_status,
//         'b_SN'=>$check,
        
        
//         ];
        
        
        
//         echo"<script> window.location.replace('available_books.php?d_id=$d_id && book_type_id=$book_type_id )</script>";
//         $update_picked="UPDATE book_in_stock SET b_status=:b_status WHERE b_SN=:b_SN ";
//         $cupdate_picked=$connect->prepare($update_picked);
//         $cupdate_picked-> execute($data_update);
//         if ($cupdate_picked) {
//         $update_picked_in_books="UPDATE books SET b_status=:b_status WHERE b_SN=:b_SN " ;
//         $cupdate_picked_in_books=$connect->prepare($update_picked_in_books);
//         $cupdate_picked_in_books-> execute($data_update);
//              echo"<script> alert('well booked')</script>";
//              echo"<script>window.location.replace('books.php')</script>";
//          } 
//          else
//          {
//             echo"<script> alert('try again')</script>";
//          }

// }


//  }
//  $feedback_message="";

// if (isset($_POST['send_feedback'])) {
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $subject=$_POST['subject'];
//     $message=$_POST['message'];
//     $feedback_data=[
//         'name'=>$name,
//         'email'=>$email,
//         'subject'=>$subject,
//         'message'=>$message,
//     ];
//     $insert_feedback="INSERT INTO feedbacks VALUES('',:name,:email,:subject,:message)";
//     $cinsert_feedback=$connect->prepare($insert_feedback);
//     $cinsert_feedback->execute($feedback_data);
//     if ($cinsert_feedback) {
//         $feedback_message="<div class='alert alert-success alert-dismissible fade show'role='alert'><strong>Well Sent!</strong> We thank for Your comment</div>";
//     }
//     else
//     {
//         $feedback_message="<div class='alert alert-success alert-dismissible fade show'role='alert'><strong> Fail to be Sent!</strong> Try Again</div>";
//     }
// }

if (isset($_POST['admin_login'])) {
    $a_email=$_POST['a_email'];
    $a_password=$_POST['a_password'];
 
$data_select=[
'a_email'=>$a_email,
'a_password' =>$a_password,
];
$select_admin="SELECT * FROM admin WHERE a_email=:a_email AND a_password=:a_password ";  
$cselect_admin=$connect->prepare($select_admin);
$cselect_admin->execute($data_select);
$row_fetch=$cselect_admin->fetch(PDO::FETCH_ASSOC);
if ($row_fetch) {
    $_SESSION['a_id']=$row_fetch['a_id'];
    $_SESSION['a_email']=$row_fetch['a_email'];
    $_SESSION['a_last_name']=$row_fetch['a_last_name'];
    $folder=$row_fetch['a_function'];
    header("location:$folder/./");
}
else
{
   $Login_admin="<div class='alert alert-danger alert-dismissible' role='alert'>
                        Invalid Account
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
}
}

if (isset($_GET['admin_sign_out'])) {
  session_destroy();
  unset($_SESSION['a_last_name']);
  header("location:../index.php");
}

if (isset($_POST['register_admin'])) {
    
    $a_first_name=$_POST['a_first_name'];
    $a_last_name=$_POST['a_last_name'];
    $a_email=$_POST['a_email'];
    $a_telphone=$_POST['a_telphone'];
    $a_password=$_POST['a_password'];
    $a_gender=$_POST['a_gender'];
    $a_profile=$_POST['a_gender'].'.jpg';
    $a_function='Admin';
    $admin_data=[
        'a_first_name'=>$a_first_name,
        'a_last_name'=>$a_last_name,
        'a_email'=>$a_email,
        'a_telphone'=>$a_telphone,
        'a_password'=>$a_password,
        'a_gender'=>$a_gender,
        'a_profile'=>$a_profile,
        'a_function'=>$a_function,
    ];
    $insert_admin="INSERT INTO admin(a_first_name,a_last_name,a_email,a_telphone,a_password,a_gender,a_function,a_profile) VALUES(:a_first_name,:a_last_name,:a_email,:a_telphone,:a_password,:a_gender,:a_function,:a_profile)";
    $cinsert_admin=$connect->prepare($insert_admin);
    $cinsert_admin->execute($admin_data);
    if ($cinsert_admin) {
        $register_admin_m="<div class='alert alert-success alert-dismissible' role='alert'>
                        Admin well Registered
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
    }
    else{
        $register_admin_m="<div class='alert alert-danger alert-dismissible' role='alert'>
                        Admin Failed to Be Registered
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
    }
}

if (isset($_POST['update_admin'])) {
    $a_id=$_POST['a_id'];
    $a_first_name=$_POST['a_first_name'];
    $a_last_name=$_POST['a_last_name'];
    $a_email=$_POST['a_email'];
    $a_telphone=$_POST['a_telphone'];
    $a_password=$_POST['a_password'];
    $a_gender=$_POST['a_gender'];
    $a_profile=$_POST['a_gender'].'.jpg';
    $admin_data=[
        'a_first_name'=>$a_first_name,
        'a_last_name'=>$a_last_name,
        'a_email'=>$a_email,
        'a_telphone'=>$a_telphone,
        'a_password'=>$a_password,
        'a_gender'=>$a_gender,
        'a_profile'=>$a_profile,
    ];
    $update_admin="UPDATE admin SET a_first_name=:a_first_name,a_last_name=:a_last_name,a_email=:a_email,a_telphone=:a_telphone,a_password=:a_password,a_gender=:a_gender,a_profile=:a_profile WHERE a_id='$a_id'";
    $cupdate_admin=$connect->prepare($update_admin);
    $cupdate_admin->execute($admin_data);
    if ($cupdate_admin) {
        $register_admin_u="<div class='alert alert-success alert-dismissible' role='alert'>
                        Account well Updated
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
    }
    else
    {
        $register_admin_u="<div class='alert alert-danger alert-dismissible' role='alert'>
                        Account Failed To Be Updated
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
    }
}

// if (isset($_POST['users_logins'])) {
//    $user_email=$_['user_email'];
//    $user_password=$_POST['user_password'];
//    $select_lecturer="SELECT * FROM lecturer WHERE l_email='$user_email' AND l_password='$user_password'";
//    $cselect_lecturer=$connect->prepare($select_lecturer);
//    $cselect_lecturer->execute();
//    $row_cselect_lecturer=$cselect_lecturer->fetch(PDO::FETCH_ASSOC);

//    $select_student="SELECT * FROM student WHERE s_email='$user_email' AND s_password='$user_password'";
//    $cselect_student=$connect->prepare($select_student);
//    $cselect_student->execute();
//    $row_cselect_student=$cselect_student->fetch(PDO::FETCH_ASSOC);

//    $select_librarian="SELECT * FROM librarian WHERE lb_email='$user_email' AND lb_password='$user_password'";
//    $cselect_librarian=$connect->prepare($select_librarian);
//    $cselect_librarian->execute();
//    $row_cselect_librarian=$cselect_librarian->fetch(PDO::FETCH_ASSOC);

//    if ($row_cselect_lecturer>0) {
//      while ($row_cselect_lecturers=$row_cselect_lecturer) {
//        # code...
//      }
//    }

   
// }

// if(isset($_POST["users_logins"]))
// {
//   $user_email=$_POST['user_email'];
//   $user_password=$_POST['user_password'];
//   $select_lecturer="SELECT * FROM lecturer WHERE l_email='$user_email' AND l_password='$user_password'";
//   $cselect_lecturer=$connect->prepare($select_lecturer);
//   $cselect_lecturer->execute();
//   $row_cselect_lecturer=$cselect_lecturer->fetch(PDO::FETCH_ASSOC);

//   $select_student="SELECT * FROM student WHERE s_email='$user_email' AND s_password='$user_password'";
//    $cselect_student=$connect->prepare($select_student);
//    $cselect_student->execute();
//    $row_cselect_student=$cselect_student->fetch(PDO::FETCH_ASSOC);

//    $select_librarian="SELECT * FROM librarian WHERE lb_email='$user_email' AND lb_password='$user_password'";
//    $cselect_librarian=$connect->prepare($select_librarian);
//    $cselect_librarian->execute();
//    $row_cselect_librarian=$cselect_librarian->fetch(PDO::FETCH_ASSOC);


  
//   if($row_cselect_lecturer>0)
//   {
//     while($row_cselect_lecturers=$cselect_lecturer->fetch(PDO::FETCH_ASSOC))
//     {
//       $lecturer_email=$row_cselect_lecturers['l_email'];
//       $lecturer_pass=$row_cselect_lecturers['l_password'];
//     }
//     // echo "Yess";
//   }
//   if($row_cselect_student>0)
//   {
//     while($row_cselect_students=$cselect_student->fetch(PDO::FETCH_ASSOC))
//     {
//       $student_email=$row_cselect_students['s_email'];
//       $student_pass=$row_cselect_students['s_password'];
//     }
//     // echo "Yes";
//   }

//   if($select_librarian>0)
//   {
//     while($select_librarians=$cselect_librarian->fetch(PDO::FETCH_ASSOC))
//     {
//       $librarian_email=$cselect_librarian['lb_email'];
//       $librarian_pass=$cselect_librarian['lb_password'];
//     }
//     // echo "Yes";
//   }
  
  
//   if(isset($lecturer_email))
//   {
//     if($user_email==$lecturer_email and $user_password==$lecturer_pass)
//     {
//       echo "<script>alert('You are a lecturer')</script>";
//     }
//   }
//   if (isset($student_email))
//   {
//     if($user_email==$student_email and $user_password==$student_pass)
//     {
//       echo "<script>alert('your student')</script>";
//     }
//   }
//   if (isset($librarian_email))
//   {
//     if($user_email==$librarian_email and $user_password==$librarian_pass)
//     {
//       echo "<script>('your librarian')</script>";
//     }
//   }

  
//   if(!isset($user_email) and !isset($user_password))
//   {
//     echo "Invalid U and P";
//   }



// }

// if (isset($_POST['users_logins'])) {
//   $user_email=$_POST['user_email'];
//   $user_password=$_POST['user_password'];

//    $select_lecturer="SELECT * FROM lecturer WHERE l_email='$user_email' AND l_password='$user_password'";
//   $cselect_lecturer=$connect->prepare($select_lecturer);
//   $cselect_lecturer->execute();
//   $row_cselect_lecturer=$cselect_lecturer->fetch(PDO::FETCH_ASSOC);

//   $select_student="SELECT * FROM student WHERE s_email='$user_email' AND s_password='$user_password'";
//    $cselect_student=$connect->prepare($select_student);
//    $cselect_student->execute();
//    $row_cselect_student=$cselect_student->fetch(PDO::FETCH_ASSOC);

//    $select_librarian="SELECT * FROM librarian WHERE lb_email='$user_email' AND lb_password='$user_password'";
//    $cselect_librarian=$connect->prepare($select_librarian);
//    $cselect_librarian->execute();
//    $row_cselect_librarian=$cselect_librarian->fetch(PDO::FETCH_ASSOC);
   
//    if ($row_cselect_lecturer) {
//      while($rows_cselect_lecturer=$cselect_lecturer->fetch(PDO::FETCH_ASSOC)){
//       $lecturer_email=$rows_cselect_lecturer['l_email'];
//       $lecturer_pass=$rows_cselect_lecturer['l_password'];
//            echo "<script>alert('lecture')</script>";
//      }
//    }
//    if ($row_cselect_student) {
//      while($rows_cselect_student=$cselect_student->fetch(PDO::FETCH_ASSOC)){
//       $student_email=$rows_cselect_student['s_email'];
//       $student_pass=$rows_cselect_student['s_password'];
//             echo "<script>alert('student')</script>";

//      }
//    }
//    if ($row_cselect_librarian) {
//     while($rows_cselect_librarian=$cselect_librarian->fetch(PDO::FETCH_ASSOC)){
//      $librarian_email=$rows_cselect_librarian['lb_email'];
//      $librarian_pass=$rows_cselect_librarian['lb_password'];
//             echo "<script>alert('librarian')</script>";
//    }
//    }
//    // if (isset($lecturer_email)) {
//    //   if ($user_email==$lecturer_email && $user_password==$lecturer_pass) {
//    //     echo "<script>alert('lecture')</script>";
//    //   }
//    // }
//    // if (isset($student_email)) {
//    //   if ($user_email==$student_email && $user_password==$student_pass) {
//    //     echo "<script>alert('student')</script>";
//    //   }
//    // }
//    // if (isset($librarian_email)) {
//    //   if ($user_email==$librarian_email && $user_password==$librarian_pass) {
//    //     echo "<script>alert('librarian')</script>";
//    //   }
//    // }
//    else
//    {
//     echo "<script>alert('invalid')</script>";
//    }




// }

 ?>