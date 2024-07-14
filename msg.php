<?php
 if(isset($_POST['sub']))
{
    $fnm = $_POST['fname'];
    $lnm = $_POST['lname'];
    $email = $_POST['email'];
    $subj=$_POST['subject'];
    $msg = $_POST['message'];
    $con= mysqli_connect("localhost","root","","portfolio");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "INSERT INTO message(`fname`, `lname`, `email`, `subject`, `message`) VALUES ('$fnm','$lnm','$email','$subj','$msg')";
    $result = mysqli_query($con,$sql);
    if ($result) {
        // Success
    echo "<script>
                window.location.href = 'msg.html'; // Redirect back to your form page
              </script>";
    }
     else {
        echo "Error: " . mysqli_error($con);
    }
}
    // Close the database connection (already done in your original code)
    mysqli_close($con);
?>