<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
<?php include('header.php'); ?>
<link href="css/Style2.css" type="text/css" rel="stylesheet">
<style type="text/css" ><align-items:center;/>  </style> 
    </head>
    
<body>

    <div class="container" style="margin-left: 20%;">
    <form>
        <div class="form-row" > <h3>Contact Us</h3></div>
  <div class="form-row">
  
    <div class="form-group col-md-5">
      <label for="input">First Name</label>
      <input type="text" class="form-control" id="input" placeholder="First Name">
    </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-5" >

    <label for="inputEmail4">Email</label>
      <input type="Email" class="form-control" id="inputEmail4" placeholder="Email">

  </div>
 </div>  
   <div class="form-row" >
  <div class="form-group col-md-5">
      <label for="inputphone">Phone number</label>
      <input type="text" class="form-control" id="inputPhone4" placeholder="03xxxxxxxx">
    </div>
</div>
  
  

  <div class="form-row">
  <div class="form-group col-md-5"  >
    <label for="inputAddress" >Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div> 
  </div>
   <div class="form-row" >
  <div class="form-group col-md-5">
  <label for="inputMessage" >Message</label>
   <textarea rows="5" cols="50" id="messagebox" placeholder="Enter message"> </textarea>
  </div>
  </div>
  <button type="submit" class="btn-lg"><a href="#">Submit</a></button>
</form>
   </div>    
<?php include("includes/footer.php"); ?>  		    	
	</body>
</html>
