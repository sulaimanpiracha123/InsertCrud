<?php
$username = "root";
$password = "";
$server = "localhost";
$db = 'crud';

$con = mysqli_connect($server,$username,$password,$db);
if($con){
 ?>
<script>
    alert("Connection Successfully");
</script>
<?php
}
else
{
    die("Not CONNECTION".mysqli_connect_error());
}

?>
