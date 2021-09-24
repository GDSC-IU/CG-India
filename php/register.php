<?php
  $first = $_POST['f_name'];
  $last = $_POST['l_name'];
  $name = $first." ".$last;
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $phn = $_POST['phn'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pin = $_POST['pin'];
  $pwd = $_POST['pwd'];
  $pwd2 = $_POST['pwd2'];
  $type = $_POST['category'];

  if ($pwd !== $pwd2) {
    echo '
      <script type="text/javascript">
        alert("Password Mis-Matched");
        window.open("../index.html", "_self");
      </script>
    ';
  }

  $fnm = $_FILES['dp']['name'];
  $ds = '../uploaded/'.$fnm;
  $ds_db = '../uploaded/'.$fnm;

  move_uploaded_file($_FILES["dp"]["tmp_name"], $ds);
  
  // Create connection
  $conn = new mysqli("localhost", "root", "", "cgindia");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO users (name, email, dob, phn, address, city, pin, pwd, type, profile)
            VALUES ('$name', '$email', '$dob', '$phn', '$address', '$city', '$pin', '$pwd', '$type', '$ds_db')";

  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript"> alert("User Registered!"); </script>';
  }
  else {
  echo '
    <script type="text/javascript"> alert(" An Error Occured!");
    </script>';
  }

  $conn->close();

?>