<?php
include "db.php";
if(!isset($_SESSION['uid'])){
    header('location:index.php');
    }
    $useremai=$_SESSION['uid'];
if(isset($_POST['submit'])){
   //  department_name department_id year_of_commencement aicte_approved_intake duration nba_accredation_status nba_accredation_date
// no_of_labs no_of_classroom no_of_tutorial_rooms no_of_seminar_hall departmental_library student_comp_ratio hod_name hod_qualification 

//hod_charge total_stud_in_first_yr total_stud_in_second_yr total_stud_in_final_yr student_faculty_ratio no_of_regular_faculties no_of_vacant_post_for_faculty No_of_vacant_post_for_hod no_of_pg_phd_faculties no_of_lab_assistants first_class_students_in_final_year result_of_last_final_year_per_pass average_result_last_three_year_final_year no_of_industry_oriented_projects no_of_sponsered_project  placement_details faculty_details
$department_name=$_POST['department_name'];
$department_id=$_POST['department_id'];
$year_of_commencement=$_POST['year_of_commencement'];
$aicte_approved_intake=$_POST['aicte_approved_intake'];
$duration=$_POST['duration'];
$nba_accredation_status=$_POST['nba_accredation_status'];
$nba_accredation_date=$_POST['nba_accredation_date'];
$no_of_labs=$_POST['no_of_labs'];
$no_of_classroom=$_POST['no_of_classroom'];
$no_of_tutorial_rooms=$_POST['no_of_tutorial_rooms'];
$no_of_seminar_hall=$_POST['no_of_seminar_hall'];
$departmental_library=$_POST['departmental_library'];
$student_comp_ratio=$_POST['student_comp_ratio'];
$hod_name=$_POST['hod_name'];
$hod_qualification=$_POST['hod_qualification'];
$hod_charge=$_POST['hod_charge'];
$total_stud_in_first_yr=$_POST['total_stud_in_first_yr'];
$total_stud_in_second_yr=$_POST['total_stud_in_second_yr'];
$total_stud_in_final_yr=$_POST['total_stud_in_final_yr'];
$student_faculty_ratio=$_POST['student_faculty_ratio'];
$no_of_regular_faculties=$_POST['no_of_regular_faculties'];
$no_of_vacant_post_for_faculty=$_POST['no_of_vacant_post_for_faculty'];
$No_of_vacant_post_for_hod=$_POST['No_of_vacant_post_for_hod'];
$no_of_pg_phd_faculties=$_POST['no_of_pg_phd_faculties'];
$no_of_lab_assistants=$_POST['no_of_lab_assistants'];
$first_class_students_in_final_year=$_POST['first_class_students_in_final_year'];
$result_of_last_final_year_per_pass=$_POST['result_of_last_final_year_per_pass'];
$average_result_last_three_year_final_year=$_POST['average_result_last_three_year_final_year'];
$no_of_industry_oriented_projects=$_POST['no_of_industry_oriented_projects'];
$no_of_sponsered_project=$_POST['no_of_sponsered_project'];
//placement_details faculty_details
$target_dir1 = "placement_details/";
$target_dir2 = "faculty_details/";

$target_file1 = $target_dir1 . basename($_FILES["placement_details"]["name"]);
$target_file2 = $target_dir2 . basename($_FILES["faculty_details"]["name"]);

move_uploaded_file($_FILES["placement_details"]["tmp_name"], $target_file1);
move_uploaded_file($_FILES["faculty_details"]["tmp_name"], $target_file2);

$sql=mysqli_query($con,"INSERT INTO `deptdetails`(`department_name`, `department_id`, `year_of_commencement`, `aicte_approved_intake`, `duration`, `nba_accredation_status`, `nba_accredation_date`, `no_of_labs`, `no_of_classroom`, `no_of_tutorial_rooms`, `no_of_seminar_hall`, `departmental_library`, `student_comp_ratio`, `hod_name`, `hod_qualification`, `hod_charge`, `total_stud_in_first_yr`, `total_stud_in_second_yr`, `total_stud_in_final_yr`, `student_faculty_ratio`, `no_of_regular_faculties`, `no_of_vacant_post_for_faculty`, `No_of_vacant_post_for_hod`, `no_of_pg_phd_faculties`, `no_of_lab_assistants`, `first_class_students_in_final_year`, `result_of_last_final_year_per_pass`, `average_result_last_three_year_final_year`, `no_of_industry_oriented_projects`, `no_of_sponsered_project`, `placement_details`, `faculty_details`,`principal_email`) VALUES ('$department_name','$department_id','$year_of_commencement','$aicte_approved_intake','$duration','$nba_accredation_status','$nba_accredation_date','$no_of_labs','$no_of_classroom','$no_of_tutorial_rooms','$no_of_seminar_hall','$departmental_library','$student_comp_ratio','$hod_name','$hod_qualification','$hod_charge','$total_stud_in_first_yr','$total_stud_in_second_yr','$total_stud_in_final_yr','$student_faculty_ratio','$no_of_regular_faculties','$no_of_vacant_post_for_faculty','$No_of_vacant_post_for_hod','$no_of_pg_phd_faculties','$no_of_lab_assistants','$first_class_students_in_final_year','$result_of_last_final_year_per_pass','$average_result_last_three_year_final_year','$no_of_industry_oriented_projects','$no_of_sponsered_project','$target_file1','$target_file2','$useremai')");

if($sql){
echo "<script>alert('Data Inserted Successfully!!')p</script>";
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
    <div class="dashboard-nav" style="z-index: 2;">
    
        <nav class="dashboard-nav-list"><a
                href="dashboard.php" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> Institute Details
        </a>

        <a
                href="deptdtl.php" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i> Department Details
        </a>
            <!-- <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-photo-video"></i> Media </a>
                <div class='dashboard-nav-dropdown-menu'><a href="#"
                                                            class="dashboard-nav-dropdown-item">All</a><a
                        href="#" class="dashboard-nav-dropdown-item">Recent</a><a
                        href="#" class="dashboard-nav-dropdown-item">Images</a><a
                        href="#" class="dashboard-nav-dropdown-item">Video</a></div>
            </div> -->
           
           
          <div class="nav-item-divider"></div>
          <a
                    href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container-fluid'>
                <div class='card'>
                    <div class='card-header'>
                    <div style="margin:auto;width:10%">
              <img src="img/logo.gif" alt="" >
              </div>

                    <h1 class="text-center">Department Details</h1>
                    </div>
                    <div class='card-body'>
                    <div class="container card p-2 mb-4">
    


        <div class="container">
    <div class="row"><b><h3>Accredated departments</h3></b></div><br>
        <div class="col-md-12 table-responsive">
        <table class="table table-striped" id="myTable">
  <thead>
    <tr>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Department Name</th>
      <th scope="col">Department ID</th>
      <th scope="col">Year of commencement</th>
      <th scope="col">AICTE Approved Intake</th>
      <th scope="col">Duration (in year)</th>
      <th scope="col">NBA Accredation Status</th>
      <th scope="col">Accredation date</th>
      <th scope="col">No of labs</th>
      <th scope="col">No of classrooms</th>
      <th scope="col">No of tutorial rooms</th>
      <th scope="col">No of seminar halls</th>
      <th scope="col">Departmental library</th>
      <th scope="col">Student-computer ratio</th>
      <th scope="col">HOD Name</th>
      <th scope="col">HOD qualification</th>
      <th scope="col">HOD charge</th>
      <th scope="col">Total Students in first year</th>
      <th scope="col">Total Students in second year</th>
      <th scope="col">Total Students in final year</th>
      <th scope="col">Student Faculty Ratio(SFR-2019-20)</th>
      <th scope="col">Number of Regular Faculties in Department</th>
      <th scope="col">Number of vacant posts for faculty</th>
      <th scope="col">Number of vacant posts for HOD</th>
      <th scope="col">Number of PG./PhD faculties</th>
      <th scope="col">Number of Lab Assistants</th>
      <th scope="col">Number of students passed in First class in final year</th>
      <th scope="col">Result of last final year (% passing)</th>
      <th scope="col">Average result of final year of last three years (% passing)</th>
      <th scope="col">Number of Industry oriented/ Application type projects</th>
      <th scope="col">Number of Sponsored projects</th>
      <th scope="col">Placement details (attached file)</th>
      <th scope="col">Faculty details (attached file)</th>
      <th scope="col">Activity</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=0;
      $sqldeptdtl=mysqli_query($con,"select * from `deptdetails` where `principal_email`='$useremai' AND `nba_accredation_status`='Accredated' ");
      while($rowdb=mysqli_fetch_array($sqldeptdtl)){
      $i=$i+1;
      ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
     
      <td><?php echo $rowdb['department_name']; ?></td>
      <td><?php echo $rowdb['department_id']; ?></td>
      <td><?php echo $rowdb['year_of_commencement']; ?></td>
      <td><?php echo $rowdb['aicte_approved_intake']; ?></td>
      <td><?php echo $rowdb['duration']; ?></td>
      <td><?php echo $rowdb['nba_accredation_status']; ?></td>
      <td><?php echo $rowdb['nba_accredation_date']; ?></td>
      <td><?php echo $rowdb['no_of_labs']; ?></td>
      <td><?php echo $rowdb['no_of_classroom']; ?></td>
      <td><?php echo $rowdb['no_of_tutorial_rooms']; ?></td>
      <td><?php echo $rowdb['no_of_seminar_hall']; ?></td>
      <td><?php echo $rowdb['departmental_library']; ?></td>
      <td><?php echo $rowdb['student_comp_ratio']; ?></td>
      <td><?php echo $rowdb['hod_name']; ?></td>
      <td><?php echo $rowdb['hod_qualification']; ?></td>
      <td><?php echo $rowdb['hod_charge']; ?></td>
      <td><?php echo $rowdb['total_stud_in_first_yr']; ?></td>
      <td><?php echo $rowdb['total_stud_in_second_yr']; ?></td>
      <td><?php echo $rowdb['total_stud_in_final_yr']; ?></td>
      <td><?php echo $rowdb['student_faculty_ratio']; ?></td>
      <td><?php echo $rowdb['no_of_regular_faculties']; ?></td>
      <td><?php echo $rowdb['no_of_vacant_post_for_faculty']; ?></td>
      <td><?php echo $rowdb['No_of_vacant_post_for_hod']; ?></td>
      <td><?php echo $rowdb['no_of_pg_phd_faculties']; ?></td>
      <td><?php echo $rowdb['no_of_lab_assistants']; ?></td>
   
      <td><?php echo $rowdb['first_class_students_in_final_year']; ?></td>
      <td><?php echo $rowdb['result_of_last_final_year_per_pass']; ?></td>
      <td><?php echo $rowdb['average_result_last_three_year_final_year']; ?></td>
      <td><?php echo $rowdb['no_of_industry_oriented_projects']; ?></td>
      <td><?php echo $rowdb['no_of_sponsered_project']; ?></td>
      <td><a href="<?php echo $rowdb['placement_details']; ?>" download>Download</a> </td>
      <td><a href="<?php echo $rowdb['faculty_details']; ?>" download>Download</a> </td>
     <td><a href="editdept.php?deptid=<?php echo $rowdb['department_id']; ?>"><i class='fas fa-edit' style='font-size:24px'></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<br><br>
<div class="col-md-12 table-responsive">
<table class="table table-striped" id="myTable">
  <thead>
    <tr>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Department Name</th>
      <th scope="col">Department ID</th>
      <th scope="col">Year of commencement</th>
      <th scope="col">AICTE Approved Intake</th>
      <th scope="col">Duration (in year)</th>
      <th scope="col">NBA Accredation Status</th>
      <th scope="col">Accredation date</th>
      <th scope="col">No of labs</th>
      <th scope="col">No of classrooms</th>
      <th scope="col">No of tutorial rooms</th>
      <th scope="col">No of seminar halls</th>
      <th scope="col">Departmental library</th>
      <th scope="col">Student-computer ratio</th>
      <th scope="col">HOD Name</th>
      <th scope="col">HOD qualification</th>
      <th scope="col">HOD charge</th>
      <th scope="col">Total Students in first year</th>
      <th scope="col">Total Students in second year</th>
      <th scope="col">Total Students in final year</th>
      <th scope="col">Student Faculty Ratio(SFR-2019-20)</th>
      <th scope="col">Number of Regular Faculties in Department</th>
      <th scope="col">Number of vacant posts for faculty</th>
      <th scope="col">Number of vacant posts for HOD</th>
      <th scope="col">Number of PG./PhD faculties</th>
      <th scope="col">Number of Lab Assistants</th>
      <th style="width: 500px;" scope="col">Number of students passed in First class in final year</th>
      <th scope="col">Result of last final year (% passing)</th>
      <th scope="col"style="width: 500px;">Average result of final year of last three years (% passing)</th>
      <th scope="col" style="width: 20px;">Number of Industry oriented/ Application type projects</th>
      <th scope="col">Number of Sponsored projects</th>
      <th scope="col">Placement details (attached file)</th>
      <th scope="col">Faculty details (attached file)</th>
      <th scope="col">Activity</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=0;
      $sqldeptdtl=mysqli_query($con,"select * from `deptdetails` where `principal_email`='$useremai' AND `nba_accredation_status`='Not Accredated' ");
      while($rowdb=mysqli_fetch_array($sqldeptdtl)){
      $i=$i+1;
      ?>
      <div class="row"><b><h3>Not accredated departments</h3></b></div><br>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
     
      <td><?php echo $rowdb['department_name']; ?></td>
      <td><?php echo $rowdb['department_id']; ?></td>
      <td><?php echo $rowdb['year_of_commencement']; ?></td>
      <td><?php echo $rowdb['aicte_approved_intake']; ?></td>
      <td><?php echo $rowdb['duration']; ?></td>
      <td><?php echo $rowdb['nba_accredation_status']; ?></td>
      <td><?php echo $rowdb['nba_accredation_date']; ?></td>
      <td><?php echo $rowdb['no_of_labs']; ?></td>
      <td><?php echo $rowdb['no_of_classroom']; ?></td>
      <td><?php echo $rowdb['no_of_tutorial_rooms']; ?></td>
      <td><?php echo $rowdb['no_of_seminar_hall']; ?></td>
      <td><?php echo $rowdb['departmental_library']; ?></td>
      <td><?php echo $rowdb['student_comp_ratio']; ?></td>
      <td><?php echo $rowdb['hod_name']; ?></td>
      <td><?php echo $rowdb['hod_qualification']; ?></td>
      <td><?php echo $rowdb['hod_charge']; ?></td>
      <td><?php echo $rowdb['total_stud_in_first_yr']; ?></td>
      <td><?php echo $rowdb['total_stud_in_second_yr']; ?></td>
      <td><?php echo $rowdb['total_stud_in_final_yr']; ?></td>
      <td style="color:red;"><b><?php echo $rowdb['student_faculty_ratio']; ?></b></td>
      <td><?php echo $rowdb['no_of_regular_faculties']; ?></td>
      <td><?php echo $rowdb['no_of_vacant_post_for_faculty']; ?></td>
      <td><?php echo $rowdb['No_of_vacant_post_for_hod']; ?></td>
      <td><?php echo $rowdb['no_of_pg_phd_faculties']; ?></td>
      <td><?php echo $rowdb['no_of_lab_assistants']; ?></td>
   
      <td><?php echo $rowdb['first_class_students_in_final_year']; ?></td>
      <td><?php echo $rowdb['result_of_last_final_year_per_pass']; ?></td>
      <td style="width: 500px;"><?php echo $rowdb['average_result_last_three_year_final_year']; ?></td>
      <td><?php echo $rowdb['no_of_industry_oriented_projects']; ?></td>
      <td><?php echo $rowdb['no_of_sponsered_project']; ?></td>
      <td><a href="<?php echo $rowdb['placement_details']; ?>" download>Download</a> </td>
      <td><a href="<?php echo $rowdb['faculty_details']; ?>" download>Download</a> </td>
     <td><a href="editdept.php?deptid=<?php echo $rowdb['department_id']; ?>"><i class='fas fa-edit' style='font-size:24px'></i></a></td>
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