<?php
include_once('connection.php');
$query = "select * from course";
$courses = mysql_query($query);
?>

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
          <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> <?php echo $hostname; ?></a></li>
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
$url = "http://169.254.169.254/latest/meta-data/hostname";
$hostname = file_get_contents($url);

$url = "http://169.254.169.254/latest/meta-data/instance-id";
$instance_id = file_get_contents($url);

$url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
$availability_zone = file_get_contents($url);

$url = "http://169.254.169.254/latest/meta-data/ami-id";
$ami_id = file_get_contents($url);

$url = "http://169.254.169.254/latest/meta-data/local-ipv4";
$ip_address = file_get_contents($url);

$url = "http://169.254.169.254/latest/user-data";
$userdata = file_get_contents($url);
?>

  <div class="container-fluid">
    
    <ul style="font-size:3vw">
      <li><strong>Instance ID:</strong> <?php echo $instance_id; ?></li>
      <li><strong>IP address:</strong> <?php echo $ip_address; ?></li>
      <li><strong>Hostname:</strong> <?php echo $hostname; ?></li>
      <li><strong>Availability Zone:</strong> <?php echo $availability_zone; ?></li>
    </ul>
  </div>

  <br><br>

  <div>
  <table class="table table-striped">
    <tr>
      <th>Catalog Number</th>
      <th>Title</th>
      <th>Schedule</th>
      <th>Credits</th>
    </tr>
    <?php
      while($rows=mysql_fetch_assoc($courses))
      {
    ?>
      <tr>
        <td><?php echo $rows['catalogNumber']; ?></td>
        <td><?php echo $rows['courseTitle']; ?></td>
        <td><?php echo $rows['schedule']; ?></td>
        <td><?php echo $rows['credits']; ?></td>
      </tr>
    <?php
      }
    ?>
  </table>
  </div>

  <footer class="container-fluid text-center">
    <p>Octank University &copy; 2022</p>
  </footer>

</body>

</html>
