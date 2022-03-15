<?php
Session_start();
error_reporting(0);
?>

<?php


if(isset($_POST['submit-5']))
{
$examtype = $_POST['examtype'];
$class = $_POST['class'];
$schoolname = $_POST['schoolname'];
$year = $_POST['year'];
$prepare = $_POST['prepare'];
$subs = $_POST['subs'];
$percentage = $_POST['percentage'];
$tmm = $_POST['tmm'];


 
 $query = array(
    'sub1' => $_POST['sub-1-5'],
    'sub2' => $_POST['sub-2-5'],
    'sub3' => $_POST['sub-3-5'],
    'sub4' => $_POST['sub-4-5'],
    'sub5' => $_POST['sub-5-5'],
    'examtype' => $_POST['examtype'],
    'class' => $_POST['class'],
    'schoolname' => $_POST['schoolname'],
    'year' => $_POST['year'],
    'prepare' => $_POST['prepare'],
    'subs' => $_POST['subs'],
    'percentage' => $_POST['percentage'],
    'tmm' => $_POST['tmm'],
    );

$query = http_build_query($query);
header("Location: working-area-5.php?$query");
 

}



if(isset($_POST['submit-6']))
{
$examtype = $_POST['examtype'];
$class = $_POST['class'];
$schoolname = $_POST['schoolname'];
$year = $_POST['year'];
$prepare = $_POST['prepare'];
$subs = $_POST['subs'];
$percentage = $_POST['percentage'];
$tmm = $_POST['tmm'];


 
 $query = array(
    'sub1' => $_POST['sub-1-6'],
    'sub2' => $_POST['sub-2-6'],
    'sub3' => $_POST['sub-3-6'],
    'sub4' => $_POST['sub-4-6'],
    'sub5' => $_POST['sub-5-6'],
    'sub6' => $_POST['sub-6-6'],
    'examtype' => $_POST['examtype'],
    'class' => $_POST['class'],
    'schoolname' => $_POST['schoolname'],
    'year' => $_POST['year'],
    'prepare' => $_POST['prepare'],
    'subs' => $_POST['subs'],
    'percentage' => $_POST['percentage'],
    'tmm' => $_POST['tmm'],
    );

$query = http_build_query($query);
header("Location: working-area-6.php?$query");
 

}



if(isset($_POST['submit-7']))
{
$examtype = $_POST['examtype'];
$class = $_POST['class'];
$schoolname = $_POST['schoolname'];
$year = $_POST['year'];
$prepare = $_POST['prepare'];
$subs = $_POST['subs'];
$percentage = $_POST['percentage'];
$tmm = $_POST['tmm'];



 
 $query = array(
    'sub1' => $_POST['sub-1-7'],
    'sub2' => $_POST['sub-2-7'],
    'sub3' => $_POST['sub-3-7'],
    'sub4' => $_POST['sub-4-7'],
    'sub5' => $_POST['sub-5-7'],
    'sub6' => $_POST['sub-6-7'],
    'sub7' => $_POST['sub-7-7'],
    'examtype' => $_POST['examtype'],
    'class' => $_POST['class'],
    'schoolname' => $_POST['schoolname'],
    'year' => $_POST['year'],
    'prepare' => $_POST['prepare'],
    'subs' => $_POST['subs'],
    'percentage' => $_POST['percentage'],
    'tmm' => $_POST['tmm'],
    );

$query = http_build_query($query);
header("Location: working-area-7.php?$query");
 
}




if(isset($_POST['submit-8']))
{
$examtype = $_POST['examtype'];
$class = $_POST['class'];
$schoolname = $_POST['schoolname'];
$year = $_POST['year'];
$prepare = $_POST['prepare'];
$subs = $_POST['subs'];
$percentage = $_POST['percentage'];
$tmm = $_POST['tmm'];



 
 $query = array(
    'sub1' => $_POST['sub-1-8'],
    'sub2' => $_POST['sub-2-8'],
    'sub3' => $_POST['sub-3-8'],
    'sub4' => $_POST['sub-4-8'],
    'sub5' => $_POST['sub-5-8'],
    'sub6' => $_POST['sub-6-8'],
    'sub7' => $_POST['sub-7-8'],
    'sub8' => $_POST['sub-8-8'],
    'examtype' => $_POST['examtype'],
    'class' => $_POST['class'],
    'schoolname' => $_POST['schoolname'],
    'year' => $_POST['year'],
    'prepare' => $_POST['prepare'],
    'subs' => $_POST['subs'],
    'percentage' => $_POST['percentage'],
    'tmm' => $_POST['tmm'],
    );

$query = http_build_query($query);
header("Location: working-area-8.php?$query");

 
}



if(isset($_POST['submit-9']))
{
$examtype = $_POST['examtype'];
$class = $_POST['class'];
$schoolname = $_POST['schoolname'];
$year = $_POST['year'];
$prepare = $_POST['prepare'];
$subs = $_POST['subs'];
$percentage = $_POST['percentage'];
$tmm = $_POST['tmm'];


 
 $query = array(
    'sub1' => $_POST['sub-1-9'],
    'sub2' => $_POST['sub-2-9'],
    'sub3' => $_POST['sub-3-9'],
    'sub4' => $_POST['sub-4-9'],
    'sub5' => $_POST['sub-5-9'],
    'sub6' => $_POST['sub-6-9'],
    'sub7' => $_POST['sub-7-9'],
    'sub8' => $_POST['sub-8-9'],
    'sub9' => $_POST['sub-9-9'],
    'examtype' => $_POST['examtype'],
    'class' => $_POST['class'],
    'schoolname' => $_POST['schoolname'],
    'year' => $_POST['year'],
    'prepare' => $_POST['prepare'],
    'subs' => $_POST['subs'],
    'percentage' => $_POST['percentage'],
    'tmm' => $_POST['tmm'],
    );

$query = http_build_query($query);
header("Location: working-area-9.php?$query");
 


}
?>



<html lang="en">
<head>
  <title>powerResults - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <script src="https://kit.fontawesome.com/yourcode.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="save.css">
  <script src="save.js"></script>
  
  
  </head>
  <style>
  /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}



  </style>

<body>

<!-- Nav Bar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand"  style="-webkit-user-select:none;">powerResults <span class="badge bg-danger">pR</span></a>
        
      </button>
      
            <div class="d-flex ms-auto">
                <a class="shadow-none btn btn-primary border-0"  href="about_developer.php" style="background-color:#4992ca;">About Developer</a>
            </div>
      </div>
    </div>
  </nav>
  

  
  <!-- create button-->

 <section class="my-5">
    <div class="container">
      <div class="p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
	   <form method ="POST" class="row g-3">
	    
  <div class="col-md-5">
    <input type="text" class="shadow-none form-control" name="examtype" id="examtype" placeholder="Exam Type e.g. Mid Term Examimation Result">
  </div>
  <div class="col-md-3"><select id="class" class="shadow-none form-select" name="class">
      <option selected>Select Class</option>
      <option>Class VIII</option>
      <option>Class IX</option>
      <option>Class X</option>
      <option>Class XI</option>
      <option>Class XII</option>
    </select></div>
	
  <div class="col-md-4">
    <input type="text" class="shadow-none form-control" id="schoolname" name="schoolname" placeholder="School Name">
  </div>
  <div class="col-3""><select id="inputState" class="shadow-none form-select" name="year">
      <option selected>Select Session Year</option>
      <option>2020-2021</option>
      <option>2021-2022</option>
      <option>2022-2023</option>
    </select></div>
  <!-- <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="prepare" name="prepare" placeholder="Preparing By">
  </div> -->
  <div class="col-md-3">
    <select id="select-subs" name="subs" class="shadow-none form-select">
      <option selected value="selected">No. of subjects</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
  </div>
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="percentage" name="percentage" placeholder="% / weightage">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="tmm" name="tmm" placeholder="Total Maximum Marks">
  </div>
  
  

  </div>
  
  </div>
  
  
  </section>
  
  <!-- toggling-->

	   
      </div>
    </div>
  </section>
  
  
  
<!--   5 subjects --->
  
  
<section class="my-5" >
    <div class="container" id="box-sub-5" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-5" name="sub-1-5" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-5" name="sub-2-5" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-5" name="sub-3-5" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-5" name="sub-4-5" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-5" name="sub-5-5" placeholder="Subject 5">
  </div>
  
   <div class="col-12">
    <button type="submit" id="submit-5" style="background-color:#4992ca;border:none;" name="submit-5" class="shadow-none btn btn-primary">Save Configurations</button>
  </div>

  </div>
  
  </div>

  </section>
  
  <!-- 6 subjects-->
  
  
  
<section class="my-5">
    <div class="container" id="box-sub-6" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
 <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-6" name="sub-1-6" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-6" name="sub-2-6" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-6" name="sub-3-6" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-6" name="sub-4-6" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-6" name="sub-5-6" placeholder="Subject 5">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-6-6" name="sub-6-6" placeholder="Subject 6">
  </div>
  
   <div class="col-12">
    <button type="submit" id="submit-6" style="background-color:#4992ca;border:none;" name="submit-6" class="shadow-none btn btn-primary">Save Configurations</button>
  </div>



  </div>
  
  </div>
  
  </section>

	   
     
  
  <!-- 7 subjects-->
  
  
  
<section class="my-5">
    <div class="container" id="box-sub-7" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-7" name="sub-1-7" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-7" name="sub-2-7" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-7" name="sub-3-7" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-7" name="sub-4-7" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-7" name="sub-5-7" placeholder="Subject 5">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-6-7" name="sub-6-7" placeholder="Subject 6">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-7-7" name="sub-7-7" placeholder="Subject 7">
  </div>
  
   <div class="col-12">
    <button type="submit" id="submit-7" style="background-color:#4992ca;border:none;" name="submit-7" class="shadow-none btn btn-primary">Save Configurations</button>
  </div>



  </div>
  
  </div>
  
  </section>
  
  
  
    <!-- 8 subjects-->
  
  
  
<section class="my-5">
    <div class="container" id="box-sub-8" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-8" name="sub-1-8" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-8" name="sub-2-8" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-8" name="sub-3-8" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-8" name="sub-4-8" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-8" name="sub-5-8" placeholder="Subject 5">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-6-8" name="sub-6-8" placeholder="Subject 6">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-7-8" name="sub-7-8" placeholder="Subject 7">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-8-8" name="sub-8-8" placeholder="Subject 8">
  </div>
  
  
   <div class="col-12">
    <button type="submit" id="submit-8" style="background-color:#4992ca;border:none;" name="submit-8" class="shadow-none btn btn-primary">Save Configurations</button>
  </div>


  </div>
  
  </div>
  
  </section>

  <!-- 9 subjects-->
  
  
  
<section class="my-5">
    <div class="container" id="box-sub-9" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
	   
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-9" name="sub-1-9" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-9" name="sub-2-9" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-9" name="sub-3-9" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-9" name="sub-4-9" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-9" name="sub-5-9" placeholder="Subject 5">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-6-9" name="sub-6-9" placeholder="Subject 6">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-7-9" name="sub-7-9" placeholder="Subject 7">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-8-9" name="sub-8-9" placeholder="Subject 8">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-9-9" name="sub-9-9" placeholder="Subject 9">
  </div>
  
  
   <div class="col-12">
    <button type="submit" id="submit-9" name="submit-9" class="shadow-none btn btn-primary" style="background-color:#4992ca;border:none;">Save Configurations</button>
  </div>


  </div>
  
  </div>
  
  </section>
  
 </div>
    </div>
  </section>
</form>

</body>


</html>

<script>



</script>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>