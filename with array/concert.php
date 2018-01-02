<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stamford Concert Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#3366FF" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="seats" style="text-align:center;font-size:20px;"> 
  <p>Researve A Seat Today! </p>
  <p>
  <form action="concertResult.php" method="post" >
    <input type="checkbox" name="a1" id="a1" value="1"> A1 &nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="a2" id="a2" value="1"> A2 &nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="a3" id="a3" value="1"> A3 &nbsp;&nbsp;&nbsp;<br>
    <input type="checkbox" name="b1" id="b1" value="1"> B1 &nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="b2" id="b2" value="1"> B2 &nbsp;&nbsp;&nbsp; 
    <input type="checkbox" name="b3" id="b3" value="1"> B3 &nbsp;&nbsp;&nbsp;<br>
    <input type="checkbox" name="c1" id="c1" value="1"> C1 &nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="c2" id="c2" value="1"> C2 &nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="c3" id="c3" value="1"> C3 &nbsp;&nbsp;&nbsp;<br>
    <input type="submit" name="SubmitButton"/>
  </form>
  </p>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Stamford Concert</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">BAND</a></li>
        <li><a href="#tour">TOUR</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

,\
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpeg" alt="singer1" width="inherit" height="100px">
        <div class="carousel-caption">
          <h3>Meet Chaky!</h3>
          <p>An awsome heavy metal guitar palyer.</p>
        </div>      
      </div>

      <div class="item">
        <img src="2.jpeg" alt="Chicago" width="inherit" height="300px">
        <div class="carousel-caption">
          <h3>Meet Apiporn</h3>
          <p>Awsome vocolus that has been around for 100years.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="3.jpeg" alt="Los Angeles" width="1200" height="100%">
        <div class="carousel-caption">
          <h3>Electro Music to your ears</h3>
          <p>We dont just stop at instruments we have that base to get your mood pumping.</p>
        </div>      
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

<!-- Container (The Band Section) --><!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Built with bootstrap<a href="#" data-toggle="tooltip" title="Dan Goncalves">#</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>