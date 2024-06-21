<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../img/logo.jpeg"/>
<title> SHW HomePage </title>

<?php require ('header.php'); ?>
</head>
<body>
<div class="container" >
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active" >
        <img src="img/freya-sofa.jpg">
        <div class="carousel-caption">
         <p><h2><b>
                    SHW Furniture:
                    </b></h2>
          <h4>
                     	SHW furnitures is relatively a new Online furniture shopping website established in 2019 but the seeds of the productivity for the cheapest and best quality of furniture had been sowed into the minds of its three founders. SHW furniture allows you to buy any furniture online and pay at your own convinience. SHW furniture gives a wide range of Custom furnitures, custom antique furniture, and Modern funiture as well for younger audience.</h4>
            </p>
        </div>
      </div>

      <div class="item">
        <img src="img/autumn.jpg">
      </div>
 
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- -->
<?php include("includes/3prods.php"); ?>  
<?php include("includes/footer.php"); ?>
</body>
</html>
