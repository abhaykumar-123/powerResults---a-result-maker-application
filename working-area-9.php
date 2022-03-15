<?php
Session_start();
error_reporting(0);
?>

<?php

$subname1 = $_GET['sub1'];
$subname2 = $_GET['sub2'];
$subname3 = $_GET['sub3'];
$subname4 = $_GET['sub4'];
$subname5 = $_GET['sub5'];
$subname6 = $_GET['sub6'];
$subname7 = $_GET['sub7'];
$subname8 = $_GET['sub8'];
$subname9 = $_GET['sub9'];

$examtype = $_GET['examtype'];
$class = $_GET['class'];
$schoolname = $_GET['schoolname'];
$year = $_GET['year'];
$prepare = $_GET['prepare'];
$subs = $_GET['subs'];
$percentage = intval($_GET['percentage']);
$tmm = intval($_GET['tmm']);


?>



<html lang="en">
<head>
  <title>powerResults - workingArea</title>
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

.split {
  position: fixed;
  z-index: 1;
  overflow-x: hidden;
}

table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border: 1px solid black;
  
}

th,td {
	 border: 1px solid black;
  text-align: center;
  padding: 4px;
}


tr
{
	transition:all .25s ease-in-out;
}

tr:hover
{
	background-color:lightgrey;
	cursor:pointer;
}

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

#pre
{
	border:none;
	border-left:none;
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
    <div class="container ">
      <div class="p-4 row g-3 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
        
  <div class="col-md-2 som">
    <input type="text" class="shadow-none form-control" name="rn" id="rn" placeholder="Roll no.">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" name="sn" id="sn" placeholder="Student Name">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" name="fn" id="fn" placeholder="Father Name">
  </div>
  
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="mn" name="mn" placeholder="Mother Name">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="dob" name="dob" placeholder="DOB">
  </div>
  
  
  
  <div class="col-2""><select id="sex" class="shadow-none form-select" name="sex">
      <option selected value="">Sex</option>
      <option value="M">M</option>
      <option value="F">F</option>
      <option value="O">O</option>
    </select></div>
	
 <div class="col-2""><select id="cat" class="shadow-none form-select" name="cat">
      <option selected value="">Category</option>
      <option value="General">General</option>
      <option value="OBC">OBC</option>
      <option value="SC">SC</option>
      <option value="ST">ST</option>
    </select></div>
  
  <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb1" name="sb1" placeholder="Marks in <?php echo "$subname1"; ?> ">
  </div>
  
  <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb2" name="sb2" placeholder="Marks in <?php echo "$subname2"; ?>">
  </div>
  
  <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb3" name="sb3" placeholder="Marks in <?php echo "$subname3"; ?> ">
  </div>
  
   <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb4" name="sb4" placeholder="Marks in <?php echo "$subname4"; ?> ">
  </div>
  
   <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb5" name="sb5" placeholder="Marks in <?php echo "$subname5"; ?> ">
  </div>
  
  <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb6" name="sb6" placeholder="Marks in <?php echo "$subname6"; ?> ">
  </div>
  
   <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb7" name="sb7" placeholder="Marks in <?php echo "$subname7"; ?> ">
  </div>
  
  <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb8" name="sb8" placeholder="Marks in <?php echo "$subname8"; ?> ">
  </div> 
  
  <div class="col-md-2">
    <input type="number" class="shadow-none form-control" id="sb9" name="sb9" placeholder="Marks in <?php echo "$subname9"; ?> ">
  </div> 
  
  <div class="col-12">
    <button  id="edit" style="background-color:#4992ca;border:none;" name="edit" onclick="editSelectable();" class="shadow-none btn btn-primary">Edit Selected</button>
 
    <button  id="add" style="background-color:#4992ca;border:none;" name="add"  onclick="addrow()" class="shadow-none btn btn-primary">Add Data</button>
 
    <button  id="remove" style="background-color:#4992ca;border:none;" name="remove" onclick="deleteselected()" class="shadow-none btn btn-primary">Remove Selected</button>
  </div>

  </div>
  
  </div>
  
  </section>
  
  <!-- Table comes here-->












	   
     
  
 <section class="my-5">
    <div class="container" style="overflow:hidden;">
      <div class="p-4  text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
	       <table id="record" class="record" width="100%" >
 

  
     <tr>
	  <th  colspan="3" style="border-right-style:none;"></th>
      <th  colspan="8" style="border-left-style:none;border-right-style:none;"><?php echo "$examtype"; ?></th>
	   <th  colspan="7" style="border-left-style:none;"></th>
    </tr>
  
     <tr>
      <th   colspan="3" style="border-right-style:none;"><?php echo "$class"; ?></th>
      <th   colspan="8" style="border-left-style:none;border-right-style:none;"><?php echo "$schoolname"; ?></th>
      <th   colspan="7" style="border-left-style:none;">Session : <?php echo "$year"; ?> </th>
    </tr>
   
    <tr>
      <th style="border-right:1px solid black;">Roll no.</th>
      <th style="border-right:1px solid black;">Student name</th>
      <th style="border-right:1px solid black;">Father name </th>
      <th style="border-right:1px solid black;">Mother name</th>
      <th style="border-right:1px solid black;">Date of Birth</th>
      <th style="border-right:1px solid black;">Sex</th>
      <th style="border-right:1px solid black;">Category</th>
      <th style="border-right:1px solid black;"><?php echo "$subname1"; ?></th>
      <th style="border-right:1px solid black;"><?php echo "$subname2"; ?></th>
      <th style="border-right:1px solid black;"><?php echo "$subname3"; ?></th>
      <th style="border-right:1px solid black;"><?php echo "$subname4"; ?></th>
      <th style="border-right:1px solid black;"><?php echo "$subname5"; ?></th>
      <th style="border-right:1px solid black;"><?php echo "$subname6"; ?></th>
      <th style="border-right:1px solid black;"><?php echo "$subname7"; ?></th>
      <th style="border-right:1px solid black;"><?php echo "$subname8"; ?></th>
      <th style="border-right:1px solid black;"><?php echo "$subname9"; ?></th>
      <th style="border-right:1px solid black;">Total Marks</th>
      <th style="border-right:1px solid black;">%age</th>
    </tr>
	
	
	
	
	
 

 
  </div>
  
  </table>
  </br>
  <div class="col-12">
    <button  id="export" style="background-color:#4992ca;border:none;" name="export" onclick="Export()" class="shadow-none btn btn-primary">Export to PDF (A2 size)</button>
   <button  id="exporta3" style="background-color:#4992ca;border:none;" name="exporta3" onclick="Exporta3()" class="shadow-none btn btn-primary">Export to PDF (A3 size)</button>
 
  </div>
  </br>
  <div class="col-12">
   <span style="color:red;">Note : If table doesn't fit in PDF file , try downloading in A2 size</span>
  </div>
  <div class="col-12">
   <span style="color:red;">A4 Paper size is not available</span>
  </div>
  
   
  
  </section>
  
  
  
  
  
  
  
  
  
  
  
  
  



</body>


</html>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


<script>

  $(function(){
       $("input").prop('required',true);
});

 var rIndex,table=document.getElementById("record");

$(document).ready(function(){
  $("#add").click(function(){
	  
	  
	  
	  var rn = $('#rn').val();
	    var sn = $('#sn').val();
	    var fn = $('#fn').val();
	    var mn = $('#mn').val();
	    var dob = $('#dob').val();
	    var sex = $('#sex').val();
	    var cat = $('#cat').val();
	    var sb1 = $('#sb1').val();
	    var sb2 = $('#sb2').val();
	    var sb3 = $('#sb3').val();
	    var sb4 = $('#sb4').val();
	    var sb5 = $('#sb5').val();
	    var sb6 = $('#sb6').val();
	    var sb7 = $('#sb7').val();
	    var sb8 = $('#sb8').val();
	    var sb9 = $('#sb9').val();
		
		var per = '<?php echo $percentage; ?>';
		var tmm = '<?php echo $tmm; ?>';
		var p = '<?php echo $pp; ?>';
		
		var a = parseFloat($('#sb1').val()),
            b = parseFloat($('#sb2').val()),
            c = parseFloat($('#sb3').val()),
            d = parseFloat($('#sb4').val()),
            e = parseFloat($('#sb5').val()),
            f = parseFloat($('#sb6').val());
            g = parseFloat($('#sb7').val());
            h = parseFloat($('#sb8').val());
            i = parseFloat($('#sb9').val());
			
			if(sb1 === '' || sb2 === '' || sb3 === '' || sb4 === '' || sb5 === '' || sb6 === '' || sb7 === '' || sb8 === '' ||  sb9 === '' ||
			    rn === '' || sn === '' || fn === '' || mn === '' || dob === '' || sex === '' || cat === ''
			)
			{
				alert("Please Enter all Data");
			}
	  
	 
           else
		   {
		
		$('#record').append(
    "<tr ><td>"+rn+"</td>"+
    "<td>"+sn+"</td>"+
    "<td>"+fn+"</td>"+
    "<td>"+mn+"</td>"+
    "<td>"+dob+"</td>"+
    "<td>"+sex+"</td>"+
    "<td>"+cat+"</td>"+
    "<td>"+sb1+"</td>"+
    "<td>"+sb2+"</td>"+
    "<td>"+sb3+"</td>"+
    "<td>"+sb4+"</td>"+
    "<td>"+sb5+"</td>"+
    "<td>"+sb6+"</td>"+
    "<td>"+sb7+"</td>"+
    "<td>"+sb8+"</td>"+
    "<td>"+sb9+"</td>"+
    "<td>"+(a+b+c+d+e+f+g+h+i)+"</td>"+
    "<td>"+(((a+b+c+d+e+f+g+h+i)/tmm)*per).toFixed(2)+"</td></tr>"
		  

	
  ) 
  }
 	selectedRowtoinput();
  });
 
});


function selectedRowtoinput()
{
	
	for(var i=3;i<table.rows.length;i++)
	{
		table.rows[i].onclick = function()
		{
			rIndex = this.rowIndex;
			document.getElementById("remove").disabled = false;
			document.getElementById("rn").value = this.cells[0].innerHTML;
			document.getElementById("sn").value = this.cells[1].innerHTML;
			document.getElementById("fn").value = this.cells[2].innerHTML;
			document.getElementById("mn").value = this.cells[3].innerHTML;
			document.getElementById("dob").value = this.cells[4].innerHTML;
			document.getElementById("sex").value = this.cells[5].innerHTML;
			document.getElementById("cat").value = this.cells[6].innerHTML;
			document.getElementById("sb1").value = this.cells[7].innerHTML;
			document.getElementById("sb2").value = this.cells[8].innerHTML;
			document.getElementById("sb3").value = this.cells[9].innerHTML;
			document.getElementById("sb4").value = this.cells[10].innerHTML;
			document.getElementById("sb5").value = this.cells[11].innerHTML;
		}
	}
}
selectedRowtoinput();

function editSelectable()
{
  
   
   var rn1 = document.getElementById("rn").value,
    sn1 = document.getElementById("sn").value,
    fn1 = document.getElementById("fn").value,
    mn1 = document.getElementById("mn").value,
    dob1 = document.getElementById("dob").value,
    sex1 = document.getElementById("sex").value,
    cat1 = document.getElementById("cat").value,
    sb11 = document.getElementById("sb1").value,
    sb21 = document.getElementById("sb2").value,
    sb31 = document.getElementById("sb3").value,
    sb41 = document.getElementById("sb4").value,
    sb51 = document.getElementById("sb5").value;
   
   
   table.rows[rIndex].cells[0].innerHTML = rn1;
   table.rows[rIndex].cells[1].innerHTML = sn1;
   table.rows[rIndex].cells[2].innerHTML = fn1;
   table.rows[rIndex].cells[3].innerHTML = mn1;
   table.rows[rIndex].cells[4].innerHTML = dob1;
   table.rows[rIndex].cells[5].innerHTML = sex1;
   table.rows[rIndex].cells[6].innerHTML = cat1;
   table.rows[rIndex].cells[7].innerHTML = sb11;
   table.rows[rIndex].cells[8].innerHTML = sb21;
   table.rows[rIndex].cells[9].innerHTML = sb31;
   table.rows[rIndex].cells[10].innerHTML = sb41;
   table.rows[rIndex].cells[11].innerHTML = sb51;
   
}

function deleteselected(){
	
	if(rIndex>=3)
	{
			table.deleteRow(rIndex);
			document.getElementById("remove").disabled = true;
	}
	
	
	

		
	
	
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="html2pdf.bundle.min.js"></script>
 <script src="es6-promise.auto.min.js"></script>
<script src="jspdf.min.js"></script>
<script src="html2canvas.min.js"></script>
<script src="html2pdf.min.js"></script>


 <script type="text/javascript">
        function Export() {
			
            var element = document.getElementById('record');
var opt = {
  margin:       0.3 ,
  filename:     'myfile.pdf',
  image:        { type: 'jpeg', quality: 1 },
  html2canvas:  { scale: 4 },
  jsPDF:        { unit: 'in', format: 'a2', orientation: 'landscape' }
};

// New Promise-based usage:
html2pdf().set(opt).from(element).save();




        }
    </script>
	
	
	 <script type="text/javascript">
        function Exporta3() {
            var element = document.getElementById('record');
var opt = {
  margin:       0.3 ,
  filename:     'myfile.pdf',
  image:        { type: 'jpeg', quality: 1 },
  html2canvas:  { scale: 4 },
  jsPDF:        { unit: 'in', format: 'a3', orientation: 'landscape' }
};

// New Promise-based usage:
html2pdf().set(opt).from(element).save();

        }
    </script>
	
	<!-- <script>
    
           function addrow()
		   {
			   var table=document.getElementById("#record");
			   newRow = table.insertRow(table.length);
			   cell1 = newRow.insertCell(0);
			   cell2 = newRow.insertCell(1);
			   cell3 = newRow.insertCell(2);
			   cell4 = newRow.insertCell(3);
			   cell5 = newRow.insertCell(4);
			   cell6 = newRow.insertCell(5);
			   cell7 = newRow.insertCell(6);
			   cell8 = newRow.insertCell(7);
			   cell9 = newRow.insertCell(8);
			   cell10 = newRow.insertCell(9);
			   cell11 = newRow.insertCell(10);
			   cell12 = newRow.insertCell(11);
			   cell13 = newRow.insertCell(12);
			   cell14 = newRow.insertCell(13);
			   
			   rn = document.getElementById("rn").value;
			   sn = document.getElementById("sn").value;
			   fn = ndocument.getElementById("fn").value;
			   mn = document.getElementById("mn").value;
			   dob = document.getElementById("dob").value;
			   sex = document.getElementById("sex").value;
			   cat = document.getElementById("cat").value;
			   sb1 = document.getElementById("sb1").value;
			   sb2 = document.getElementById("sb2").value;
			   sb3 = document.getElementById("sb3").value;
			   sb4 = document.getElementById("sb4").value;
			   sb5 = document.getElementById("sb5").value;
			   rn = document.getElementById("sn").value;
			   rn = document.getElementById("sn").value;
			   
			   
			   cell1.innerHTML = rn;
			   cell2.innerHTML = sn;
			   cell3.innerHTML = fn;
			   cell4.innerHTML = mn;
			   cell5.innerHTML = dob;
			   cell6.innerHTML = sex;
			   cell7.innerHTML = cat;
			   cell8.innerHTML = sb1;
			   cell9.innerHTML = sb2;
			   cell10.innerHTML = sb3;
			   cell11.innerHTML = sb4;
			   cell12.innerHTML = sb5;
			   cell13.innerHTML = rn;
			   cell1.innerHTML = rn;
			   
			   
			   
		   }
    
        </script> -->