<?php include("connection.php");
session_start();
if(isset($_SESSION['user']))
{
    $sql1="select * from whatido";
    $res=mysqli_query($con,$sql1);
 ?>
<?php include("header.php");
?>
<body  style="background-color:whitesmoke;">

    <div class="container">
        <div class="row">
            <div>
                <h1>Below is a table representing your data</h1>
                <br>
                <div class="table">
                    <table>
                        <tr>
                            <th>Box Title</th>
                            <th>Description line 1 </th>
                            <th> Description line 2 </th>
                            <th> Description line 3 </th>
                            <th> Edit</th>
                        </tr>
                        <?php
    		            while($row=mysqli_fetch_array($res))
	  		            {
  		                    ?>

                        <tr>
                            <td> <?php echo $row['boxtitle'];?></td>
                            <td> <?php echo $row['desc1'];?></td>
                            <td> <?php echo $row['desc2'];?> </td>
                            <td><?php echo $row['desc3'];?></td>

                            <td>
                                <a class="btn btn-primary" href="editwhatido.php?id=<?php echo $row['id']?>">
                                    <span class="glyphicon glyphicon-pencil"></span></a>
                                <a class="btn btn-danger" href="deletewhatido.php?id=<?php echo $row['id']?>"
                                    onClick="return confirm('Are you sure want to delete?')">
                                    <span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php");
?>
<?php
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>