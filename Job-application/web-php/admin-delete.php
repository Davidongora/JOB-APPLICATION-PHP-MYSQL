<?php
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "job");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the ID of the data to be deleted
  $AdmNo = $_GET['id'];

  // Delete the data from the database
  $sql = "DELETE FROM admin WHERE AdmNo='$AdmNo'";
  if(mysqli_query($conn, $sql)){
      echo "Record deleted successfully.";
  } else{
      echo "Error deleting record: " . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);

  // Redirect to the index page
  header("Location: admin.php");
?>
