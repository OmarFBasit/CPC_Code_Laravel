<!DOCTYPE html>
<html>
<head>
	<title>Calculator Project</title>

	<link href="{{asset('frontend/a1/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/a1/css/forumcss1.css')}}" rel="stylesheet">


</head>
<body>


  <div class="form-body">
<div class="row">
<div class="form-holder">
  <div class="form-content">
      <div class="form-items">
          
          <p>Total Calculation Result = {{$tot}} </p>
          <p>Actual Result = {{$C}} </p>

          <?php

if ($tot==$C) {
	?>
	<h3>Correct !</h3>
  
  <?php 
} 


else {

	?>
	<h3>Not Correct !</h3>
  
  <?php
}
?>


          
            
      </div>
  </div>
</div>
</div>
    </div>

	

</body>
</html>
