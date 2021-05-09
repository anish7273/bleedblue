<?php 
 include 'credentials.php';
 
function bin($fname) {
  if(isset($fname)){return 1;}
  else{ return 0;}
}

$check1=empty($_POST['c1'])&&empty($_POST['c2'])&&empty($_POST['c3']);
if($check1)
{echo "You haven't choosen any course.<br> Kindly! Return to previous Page and recheck the form";}
else{ 
$check=!empty($_POST['fld1'])&&!empty($_POST['fld2'])&&!empty($_POST['fld3']);

if($check)
{ $fld1=mysqli_real_escape_string($con,$_POST['fld1']);
 $fld2=mysqli_real_escape_string($con,$_POST['fld2']);
 $fld3=mysqli_real_escape_string($con,$_POST['fld3']);
 $fld4=mysqli_real_escape_string($con,$_POST['fld4']);
 $cr1=$_POST['c1'];
 $cr2=$_POST['c2'];
 $cr3=$_POST['c3'];

 $query="INSERT INTO `interface` (`field1`,`field2`,`field3`,`field4`,`cr1`,`cr2`,`cr3`) VALUES ('$fld1','$fld2','$fld3','$fld4','$cr1','$cr2','$cr3')";
 if(mysqli_query($con,$query))
 {echo " Job done\nForm Submitted Successfully<br>";

 $direct=bin($_POST['c1'])+bin($_POST['c2'])+bin($_POST['c3']);
 switch($direct){
 case 1:
       header("Location: http://bleedblue.eu5.org");
       break;
 case 2:
       header("Location: http://nitc.ac.in");
       break;
 case 3:
       header("Location: http://www.instagram.com");
       break;
 default:
        echo "An error has ocurred.<br>Try Again after some time.";}}
else{echo "form submition failed. Retry";}

}
 

else
{echo "Error in Submition<br>";
 echo "Kindly! Return to previous page and Recheck  the Data";
}}
?>	