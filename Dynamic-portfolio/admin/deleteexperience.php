<?php 
include('connection.php');
$id=$_REQUEST['id'];
$res=mysqli_query($con,"delete from experience where `id`='".$id."'");
if($res>=1){
    echo "<script>
alert(' Content deleted Successfully !')
window.location.href='viewexperience.php';
</script>";
}
else{
    echo "<script>
alert(' Unable to delete Selected row !')
window.location.href='viewexperience.php';
</script>";
}

?>