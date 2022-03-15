$(document).ready(function(){
  $("#select-subs").click(function(){
	    var yr = $(this).val();
		if(yr == '5')
		{
          $("#box-sub-5").show();
          $("#box-sub-6").hide();
          $("#box-sub-7").hide();
          $("#box-sub-8").hide();
          $("#box-sub-9").hide();
		}
		else if(yr == '6')
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").show();
          $("#box-sub-7").hide();
          $("#box-sub-8").hide();
          $("#box-sub-9").hide();
		}
		
		else if(yr == '7')
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").hide();
          $("#box-sub-7").show();
          $("#box-sub-8").hide();
          $("#box-sub-9").hide();
		}
		else if(yr == '8')
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").hide();
          $("#box-sub-7").hide();
          $("#box-sub-8").show();
          $("#box-sub-9").hide();
		}
		
		else if(yr == '9')
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").hide();
          $("#box-sub-7").hide();
          $("#box-sub-8").hide();
          $("#box-sub-9").show();
		}
		else
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").hide();
          $("#box-sub-7").hide();
          $("#box-sub-8").hide();
          $("#box-sub-9").hide();
		}
  });
 
});