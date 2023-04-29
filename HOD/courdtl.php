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
            margin:25px;
            
            
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script src="js/script.js"></script>
  </head>
  <body class="gradient-custom-3">
  <div class='dashboard'>
  <div class="dashboard-nav navbar-light" style="z-index: 2;  background-color: #20232e; width:250px;padding-top:75px;">

    
        
            <a
                href="deptdtl.php" class="dashboard-nav-item "><i class="fas fa-tachometer-alt"></i> Department Details
        </a>
        </a>

        <a
                href="stdtl.php" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i> Staff Details
        </a>
           
        <a
                href="courdtl.php" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i> Course Details
        </a>
          <div class="nav-item-divider"></div>
          <a
                    href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>

                    <!-- <nav class="navbar bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav> -->
       
    </div>


    <!-- <nav class="navbar bg-light"> -->

<!-- Links
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#">Link 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link 3</a>
  </li>
</ul>

</nav> -->

    <div class='dashboard-app'style="width:550px;">
        <header class='dashboard-toolbar'style="padding-left: 2px;"><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container-fluid'>
                <div class='card'>
                    <div class='card-header'>
                    <div style="margin:auto;width:10%">
              <img src="img/logo.gif" alt="" >
              </div>

                    <h1 class="text-center">Course</h1>
                    </div>
                    <div class='card-body'>
                    <div class="container card p-2 mb-4">
    <div class="row">
        <div class="col-md-12">
        <form id="contact-form" method="post" action="">
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input id="" type="text" name="course_name" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Course code</label>
                        <input id="" type="text" name="course_code" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Level of course</label>
                        <select name="level_of_course" id="" class="form-control" required>
                          <option value="">Select value</option>
                          <option value="i">I</option>
                          <option value="ii">II</option>
                          <option value="iii">III</option>
                          <option value="iv">IV</option>

                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div style="padding: 10px 10px 10px 10px;">
            <div class="row"><b>Teaching scheme</b></div>
            <br>
            
            <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Prerequisite</label>
                        <input id="" type="text" name="prerequisite" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>  
            <div class="row"><b>Weekly contact hrs</b></div><br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Lecture</label>
                        <input id="" type="text" name="lecture" class="form-control" placeholder="" required="required" >
                    
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">T....</label>

                        <input id="" type="text" name="t" class="form-control" placeholder="" required="required" >
                           
                        

                        <!-- <input id="" type="text" name="regional_office" class="form-control" placeholder="" required="required" data-error="Regional Office is required."> -->
                        <div class="help-block with-errors"></div>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Practical</label>

                        <input id="" type="text" name="practical" class="form-control" placeholder="" required="required" >
                           
                        

                        <!-- <input id="" type="text" name="regional_office" class="form-control" placeholder="" required="required" data-error="Regional Office is required."> -->
                        <div class="help-block with-errors"></div>
                    </div>

                </div>        
            </div>
            
 
            <div class="row"><b> Examination scheme</b></div>

            <div class="row" style="padding-left: 10px;">Theory marks</div>  
            <div class="row"> 
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">ESE</label>

                        <input id="" type="text" name="theory_ese" class="form-control" placeholder="" required="required" >                  
                        

                        <!-- <input id="" type="text" name="regional_office" class="form-control" placeholder="" required="required" data-error="Regional Office is required."> -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">PA</label>
                      
                        <input id="" type="text" name="theory_pa" class="form-control" placeholder="" required="required" >                  

                        <!-- <input id="" type="text" name="type" class="form-control" placeholder="" required="required" > -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>        
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Total </label>
                        <input id="" type="number" name="theory_total" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-left: 10px;">Practical marks</div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">ESE</label>
                        <input id="" type="text" name="theory_esa" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">PA</label>
                        <input id="" type="text" name="practical_pa" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
<!-- Institute Name, Institute Code, Year of Establishment,Land Area(in acres),principal Name,principal Qualification,Regional Office,Type,Address,Contact Number,Affiliations By,Affiliations approval Date,Accredations,Intake of boys hostel,Intake of girls hostel -->

    </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Total marks(including theory &practical)</label>
                        <input id="" type="text" name="total_marks" class="form-control" placeholder="" required="required" >

                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Upload curriculum </label>
                        <input id="" type="file" name="curriculam" class="form-control" placeholder="">
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


                    <div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
        <table class="table table-striped" id="myTable">
  <thead>
    <tr>
 
      <th scope="col">#</th>
   
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
      <th scope="col">Level of Course</th>
      <th scope="col">Prerequisite</th>
      <th scope="col">Lecture weekly</th>
      
      <th scope="col">t weekly</th>
      <th scope="col">practical weekly</th>
      <th scope="col">Theory marks ESE</th>
      <th scope="col">Theory marks PA</th>
      <th scope="col">Theory marks total</th>
      <th scope="col">Practical marks ESE</th>
      <th scope="col">Practical marks PA</th>
      <th scope="col">Total Marks</th>
      <th scope="col">curriculum</th>
   </tr>
  </thead>
  <tbody>
      <tr>
    </tr>
    
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