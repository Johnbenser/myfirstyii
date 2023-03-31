<php 

$servername ="localhost";
database ="test";
$username ="admin";
$password ="";

// creating connection

$conn = mysqli_connect($servername, $username, $password, $database);

// testing connection
if (!$conn) {
  echo "Connection failed";
} else {
  echo "Connected Successfully";
}

?>