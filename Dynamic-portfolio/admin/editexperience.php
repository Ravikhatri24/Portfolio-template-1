<?php include 'connection.php';
session_start();
if (isset($_SESSION['user'])) 
{
    ?>
<?php include("header.php");
?>

<body style="background-color:whitesmoke;">

    <div class="container">
        <div class="row">
            <div class="addform">
                <h1>Edit your content below</h1>
                <br>
                <p>
                    <form method="post">
                        <?php
                            $id = $_REQUEST['id'];
                            $sql = "select * from experience where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div class="form-group">
                            <label class="ntitle">Add Skills</label>
                            <input class="form-control" type="text" name="addexperience" id=""
                            value="<?php echo $row['exptitle']; ?>" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                            <label class="ntitle">Add year</label>
                            <input class="form-control" type="text" name="year" id=""
                            value="<?php echo $row['year']; ?>" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                            <label class="ntitle">Add location</label>
                            <input class="form-control" type="text" name="location" id=""
                            value="<?php echo $row['location']; ?>" placeholder="Enter new content">
                        </div>
                        <button class="btn pad10" name="update" type="submit">Add</button>
                        <?php
                            }
                        ?>
		                <?php
                            if (isset($_POST['update'])) 
                            {
                                include 'connection.php';
                                $id = $_REQUEST['id'];
                                $experience = $_REQUEST['addexperience'];
                                $year = $_REQUEST['year'];
                                $location = $_REQUEST['location'];
                                
                                $sql = "update experience set exptitle='" . $experience . "', year='" . $year . "', location='" . $location . "' where `id`='" . $id . "'";
                                $res = mysqli_query($con, $sql);
                                
                                if ($res >= 1) {
                                        echo "<script>
			                	        alert('Contents updated succesfully...');
			                	        window.location.href='viewexperience.php';
			                	        </script>";
                                } else {
                                        echo "<script>
				                        alert('Error Occured in Updation, Retry!');
				                        window.location.href='editexperience.php';
				                        </script>";
                                }
                            }
                        ?>
                    </form>
                </p>
            </div>
        </div>
    </div>


    <?php include("footer.php");
?>
<?php
} else {
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";

}
?>