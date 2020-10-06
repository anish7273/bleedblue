<?php 
 include 'credentials.php';
 

$check=!empty($_POST['fld1'])&&!empty($_POST['fld2'])&&!empty($_POST['fld3']);

if($check)
{ $fld1=mysqli_real_escape_string($con,$_POST['fld1']);
 $fld2=mysqli_real_escape_string($con,$_POST['fld2']);
 $fld3=mysqli_real_escape_string($con,$_POST['fld3']);

 $query="INSERT INTO `interface` (`field1`,`field2`,`field3`) VALUES ('$fld1','$fld2','$fld3')";
 $result=mysqli_query($con,$query);
 echo " Job done\nForm Submitted Successfully";
 header("Location: http://bleedblue.eu5.org");
}
 

else
{echo "Error in Submition<br>";
 echo "Kindly! Return to previous page and Recheck  the Data";
}
?>