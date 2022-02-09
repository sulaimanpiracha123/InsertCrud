Copy
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
<form action = "" method = "POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">Name</label>
      <input type="text" class="form-control" id="name" name = "User_name" placeholder="name">
    </div>
    <div class="form-group col-md-6">
      <label for="Qualification">Qualification</label>
      <input type="text" class="form-control" id="inputPassword4" name = "Qualifi" placeholder="Qualification">
    </div>
  </div>
  <div class="form-group">
    <label for="Mobile number">Mobile Number</label>
    <input type="number" class="form-control" id="number" name="Phone_Number" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="Emailid">Email_id </label>
    <input type="email" class="form-control" name = "User_Email" id="Email" placeholder="Email">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Referance">Referance</label>
      <input type="text" class="form-control" name = "User_Referance"id="AnyReferance" placeholder="Any Referance">
    </div>
    <div class="form-group col-md-6">
      <label for="Webdeveloper">Webdeveloper</label>
      <input type="text" class="form-control" name = "Job_post" id="Web" placeholder="WebDeveloper">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
 

<?php

include 'connection.php';
if (isset($_POST['submit']))
{
    $name = $_POST['User_name'];
    $degree = $_POST['Qualifi'];
    $mobile = $_POST['Phone_Number'];
    $email = $_POST['User_Email'];
    $refer = $_POST['User_Referance'];
    $jobprofile = $_POST['Job_post'];
    

     $insertquery = "INSERT INTO `Job_registration`(`name`, `degree`, `mobile`, `email`, `refer`, `jobpost`) VALUES ('$name','$degree','$mobile','$email','$refer','$jobprofile'";
    
     $res = mysqli_query($con,$insertquery);
    if($res)
    {
        ?>
        <script>
            alert("data Inserted Properly");
        </script>
        <?php
    }
        else
        {
         ?>
            <script>
                alert("Data Not Inserted Successfully");
            </script>
            <?php
        
        }
    }

?>