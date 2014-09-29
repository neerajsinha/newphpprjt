<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    $( document ).ready(function() {
    	
		
		$("#form1").submit(function(){
    		
    		valid = true;
    	   		
    		if(valid && $("#name").val()=='')
    		{
    			$(".errorr").text('Please enter name');
    			valid = false;
    		}
    		return valid;
    	});
		
		$("#form1").submit(function(){
    		
    		valid = true;
    	   		
    		if(valid && $("#email").val()=='')
    		{
    			$(".errorrr").text('Please enter mail id');
    			valid = false;
    		}
    		return valid;
    	});
		
		$("#form1").submit(function(){
    		
    		valid = true;
    	   		
    		if(valid && $("#msg").val()=='')
    		{
    			$(".errorrrr").text('Please enter message');
    			valid = false;
    		}
    		return valid;
    	});
		
		$("#form1").submit(function(){
    		
    		valid = true;
    	   		
    		if(valid && $("#contact").val()=='')
    		{
    			$(".errorrrrr").text('Please enter contact no.');
    			valid = false;
    		}
    		return valid;
    	});
    	
    	$("#form1").submit(function(){
    		
    		valid = true;
    	   		
    		if(valid && $("#file1").val()=='')
    		{
    			$(".error").text('Please select file');
    			valid = false;
    		}
    		return valid;
    	});
		
		
    	$("#file1").change(function(){
    		
    		//$(".error").text("change");
    		
    		var ext = $('#file1').val().split('.').pop().toLowerCase();
			if($.inArray(ext, ['docx','png','jpg','jpeg','doc']) == -1) {
			    $(this).val('');
			    $(".error").text('invalid extension!');
			}
    	});
      
    });
 
    </script>


</head>
<body>


<form id="form1" name="form1">
	<p>
		<label>Name :</label>
		<input type="text" id="name" name="name" />
		<label class="errorr" style="color: red;"></label>
	</p>
	
	<p>
		<label>Email :</label>
		<input type="text" id="email" name="email" />
		<label class="errorrr" style="color: red;"></label>
	</p>
	
	<p>
		<label>Message :</label>
		<textarea id="msg" name="msg"></textarea>
		<label class="errorrrr" style="color: red;"></label>
	</p>
	
	<p>
		<label>Contact :</label>
		<input type="text" id="contact" name="contact" />
		<label class="errorrrrr" style="color: red;"></label>
	</p>
	
	<p>
		<label>Upload file :</label>
		<input type="file" id="file1" name="file1" />
		<label class="error" style="color: red;"></label>
	</p>
	<input type="submit" />
	
	
</form>





</body>
</html>
