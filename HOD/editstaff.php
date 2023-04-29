<?php
include "db.php";
if(!isset($_SESSION['uid'])){
    header('location:index.php');
    }
    $useremai=$_SESSION['uid'];
    $staff_mail = $_GET['staff_email'];
    
if(isset($_POST['submit'])){
   

$staff_name=$_POST['staff_name'];
$birth_date=$_POST['birth_date'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$staff_email=$_POST['staff_email'];
$address=$_POST['address'];
$qualification=$_POST['qualification'];
$position_title=$_POST['position_title'];
$employment_type=$_POST['employment_type'];
$adhar_no=$_POST['adhar_no'];
$date_of_joining=$_POST['date_of_joining'];
$contract_end_date=$_POST['contract_end_date'];
$salary=$_POST['salary'];
$retaintion=$_POST['retaintion'];
$special_charge=$_POST['special_charge'];
$hod_email = $useremai;


$sql=mysqli_query($con,"UPDATE  `staffdtl`SET `staff_name`='$staff_name', `birth_date`='$birth_date', `gender`='$gender', `phone`='$phone', `staff_email`='$staff_email', `address`='$address', `qualification`='$qualification', `position_title`='$position_title',`employment_type`='$employment_type', `adhar_no`='$adhar_no', `date_of_joining`='$date_of_joining', `contract_end_date` = '$contract_end_date', `salary` = '$salary', `retaintion` = '$retaintion', `special_charge`= '$special_charge' WHERE `staff_email` = '$staff_mail' ");
if($sql){
echo "<script>alert('Data Inserted Successfully!!')p</script>";
}
else{
    echo "<script>alert('Data not Inserted Successfully!!')p</script>";
}


}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <title>Institute Management System</title>
    <style>
       a{
            margin:40px;
            
            
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script src="js/script.js"></script>
  </head>
  <body class="gradient-custom-3">
  <div class='dashboard'>
  <div class="dashboard-nav navbar-light" style="z-index: 2; background-color: #20232e; width:250px;padding-top:75px;">

            <nav class="dashboard-nav-list"><a href="deptdtl.php" class="dashboard-nav-item "><i class="fas fa-tachometer-alt"></i> Department Details
                </a>
                </a>

                <a href="stdtl.php" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i> Staff Details
                </a>

                <a href="courdtl.php" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i> Course Details
                </a>


                <div class="nav-item-divider"></div>
                <a href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
            </nav>
        </div>
        <div class='dashboard-app' style="width:550px;">
            <header class='dashboard-toolbar' style="padding-left: 2px;"><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>    <div class='dashboard-content'>
            <div class='container-fluid'>
                <div class='card'>
                    <div class='card-header'>
                    <div style="margin:auto;width:10%">
              <img src="img/logo.gif" alt="" >
              </div>

                    <h1 class="text-center">Staff</h1>
                    </div>
                    <div class='card-body'>
                    <div class="container card p-2 mb-4">
    <div class="row">
        <div class="col-md-12">
           

        <form id="contact-form" method="post" action="">
        <?php $selprintstaff=mysqli_query($con,"select * from `staffdtl` where `staff_email`='$staff_mail'");
							$rowpde=mysqli_fetch_array($selprintstaff);?>
                        <?php
                            $gen= $rowpde['gender'];
                            $male='';
                            $female='';
                            $other ='';
                           
                            if($gen == "male"){
                                $male = 'selected';
                            }
                            elseif($gen == "female")
                            {
                                $female ='selected';
                            }
                            elseif($gen == "other")
                            {
                                $other='selected';                                
                            }
                           
                        ?>
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Staff Name</label>
                        <input id="" type="text" name="staff_name" class="form-control" value="<?php echo $rowpde['staff_name'];?>" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Birth date</label>
                        <input id="" type="date" name="birth_date" class="form-control" value="<?php echo $rowpde['birth_date'];?>" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" id="" class="form-control" required>
                          <option value="" >Select value</option>
                          <option value="male" <?php echo $male ; ?>>Male</option>
                          <option value="female" <?php echo $female ; ?>>Female</option>
                          <option value="others" <?php echo $other ; ?>>Other</option>
                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input id="" type="number" name="phone" value="<?php echo $rowpde['phone'];?>"class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input id="" type="email" name="staff_email" value="<?php echo $staff_mail?>"class="form-control" placeholder="" required="required" >
                    
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Address</label>

                        <input id="" type="text" name="address" class="form-control" value="<?php echo $rowpde['address'];?>"placeholder="" required="required" >
                           
                        

                        <!-- <input id="" type="text" name="regional_office" class="form-control" placeholder="" required="required" data-error="Regional Office is required."> -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            
 
            <div class="row">
                
            <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Qualification</label>

                        <input id="" type="text" name="qualification" class="form-control" value="<?php echo $rowpde['qualification'];?>" placeholder="" required="required" >                  
                        

                        <!-- <input id="" type="text" name="regional_office" class="form-control" placeholder="" required="required" data-error="Regional Office is required."> -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <?php
                            $ptitle= $rowpde['position_title'];
                            $teaching='';
                            $nonteaching='';
                            
                           
                            if($ptitle == "Yes"){
                                $teaching = 'selected';
                            }
                            elseif($ptitle == "No")
                            {
                                $nonteaching ='selected';
                            }
                           
                           
                        ?>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Position title</label>
                      <select name="position_title" id="" class="form-control">
                          <option value="" >Select value</option>
                          <option value="Yes" <?php echo $teaching ; ?>>Teaching</option>
                          <option value="No" <?php echo $nonteaching ; ?>>non teaching</option>
                      </select>

                        <!-- <input id="" type="text" name="type" class="form-control" placeholder="" required="required" > -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <?php
                            $etype= $rowpde['employment_type'];
                            $ftime='';
                            $ptime='';
                            $other='';
                            
                           
                            if($etype == "Full time"){
                                $ftime = 'selected';
                            }
                            elseif($etype == "Part time")
                            {
                                $ptime ='selected';
                            }
                            elseif($etype == "OTHER")
                            {
                                $other ='selected';
                            }
                           

                           
                        ?>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Employment type</label>

                        <select name="employment_type" id="" class="form-control">
                          <option value="">Select</option>
                          <option value="Full time" <?php echo $ftime ; ?>>Full time</option>
                          <option value="Part time"<?php echo $ptime ; ?>>Part time</option>
                          <option value="OTHER"<?php echo $other ; ?>>OTHER</option>
                      </select>                           
                        

                        <!-- <input id="" type="text" name="regional_office" class="form-control" placeholder="" required="required" data-error="Regional Office is required."> -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
               
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Adhar No</label>
                        <input id="" type="number" name="adhar_no" value="<?php echo $rowpde['adhar_no'];?>"class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
               
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Date of joining</label>
                        <input id="" type="date" name="date_of_joining" value="<?php echo $rowpde['date_of_joining'];?>"class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Contract end date(if applicable)</label>
                        <input id="" type="date" name="contract_end_date" value="<?php echo $rowpde['contract_end_date'];?>"class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
<!-- Institute Name, Institute Code, Year of Establishment,Land Area(in acres),principal Name,principal Qualification,Regional Office,Type,Address,Contact Number,Affiliations By,Affiliations approval Date,Accredations,Intake of boys hostel,Intake of girls hostel -->


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Salary</label>
                        <input id="" type="text" name="salary" class="form-control" value="<?php echo $rowpde['salary'];?>"placeholder="" required="required" >

                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Retaintion(if any) </label>
                        <input id="" type="text" name="retaintion" value="<?php echo $rowpde['retaintion'];?>"class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Special charge</label>
                        <input id="" type="text" name="special_charge" value="<?php echo $rowpde['special_charge'];?>"class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
            </div>
            <!-- <select name="government" id="" class="form-control">
                          <option value="">Select value</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                      </select> -->
                      
        <div class="clearfix"></div>

         <div class="row">
            <!--<div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="send a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>-->
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-warning btn-send" value="Submit">
            </div>
        </div> 
        
    </form>
        </div>
        </div>
        </div>

        <div>
            &nbsp;
        </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
        <table class="table table-striped" id="myTable">
  <thead>
    <tr>
 
      <th scope="col">#</th>
   
      <th scope="col">Staff Name</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Qualification</th>
      <th scope="col">Position Title</th>
      <th scope="col">Employment Type</th>
      <th scope="col">Aadhar No.</th>
      <th scope="col">Date of Joining </th>
      <th scope="col">Contract and Date</th>
      <th scope="col">Salary</th>
     
      <th scope="col"> Retaintion (If Any)</th>
      <th scope="col">Special Charge</th>
      
      <th scope="col">Activity</th>
     
   
     

      
    </tr>
  </thead>
  <tbody>
      <?php
      $i=0;
      $sqlstaffdtl=mysqli_query($con,"select * from `staffdtl` where `hod_email` = '$useremai'");
      while($rowdb=mysqli_fetch_array($sqlstaffdtl)){
      $i=$i+1;
      ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
     
      <td><?php echo $rowdb['staff_name']; ?></td>
      <td><?php echo $rowdb['birth_date']; ?></td>
      <td><?php echo $rowdb['gender']; ?></td>
      <td><?php echo $rowdb['phone']; ?></td>
      <td><?php echo $rowdb['staff_email']; ?></td>
      <td><?php echo $rowdb['address']; ?></td>
      <td><?php echo $rowdb['qualification']; ?></td>
      <td><?php echo $rowdb['position_title']; ?></td>
      <td><?php echo $rowdb['employment_type']; ?></td>
      <td><?php echo $rowdb['adhar_no']; ?></td>
      <td><?php echo $rowdb['date_of_joining']; ?></td>
      <td><?php echo $rowdb['contract_end_date']; ?></td>
      <td><?php echo $rowdb['salary']; ?></td>
      <td><?php echo $rowdb['retaintion']; ?></td>
      <td><?php echo $rowdb['special_charge']; ?></td>
      
     <td><a href="editstaff.php?staff_email=<?php echo $rowdb['staff_email']; ?>"><i class='fas fa-edit' style='font-size:24px'></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
  </body>
</html>
