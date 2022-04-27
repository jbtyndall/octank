<html>
<body>
<h2>XSS Test</h2>
<?php
$name = $_GET['name'];
echo "Welcome $name<br>";
?>
</body>
</html>
