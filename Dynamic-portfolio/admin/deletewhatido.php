<?php 
include('connection.php');
$id=$_REQUEST['id'];
$res=mysqli_query($con,"delete from whatido where `id`='".$id."'");
if($res>=1){
    echo "<script>
alert(' Content deleted Successfully !')
window.location.href='viewwhatido.php';
</script>";
}
else{
    echo "<script>
alert(' Unable to delete Selected row !')
window.location.href='viewwhatido.php';
</script>";
}

?>