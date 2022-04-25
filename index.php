<!DOCTYPE html>
<html lang="en">
<head>
  <title>Octank University</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> $(hostname -f)</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h2>Octank University AWS Demo</h2>
  </div>
</div>
  
  <?php
$url = "http://169.254.169.254/latest/meta-data/instance-id";
$instance_id = file_get_contents($url);

$url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
$availability_zone = file_get_contents($url);

$url = "http://169.254.169.254/latest/meta-data/ami-id";
$ami_id = file_get_contents($url);

$url = "http://169.254.169.254/latest/user-data";
$userdata = file_get_contents($url);
?>
  
  <div class="container-fluid">
    <ul style="font-size:20vw">
      <li><strong>Hostname:</strong> <?php echo $hostname; ?></li>
      <li><strong>Instance ID:</strong> <?php echo $instance_id; ?></li>
      <li><strong>Availability Zone:</strong> <?php echo $availability_zone; ?></li>
    </ul>
  </div>
  
<div class="container-fluid text-center">
    <h3>Available Courses</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Number</th>
                <th>Title</th>
                <th>Schedule</th>
                <th>Credits</th>
                <th>Seats</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            
          </tr>
        </tbody>
    </table>
</div>

<br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
