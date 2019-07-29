<?php
session_start();


if (isset($_SESSION['loginstatus'])) {
    if ($_SESSION['loginstatus'] == "loggedout") {
        ?>
        <script type="text/javascript">
            window.location.replace("index.php");
        </script>
    <?php
    } else { }
} else {
    ?>
    <script type="text/javascript">
        window.location.replace("index.php");
    </script>
<?php
}
include("../config.php");
?>

<!DOCTYPE HTML>
<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="editor.css" type="text/css" rel="stylesheet" />

    <link rel="shortcut icon" type="image/png" href="../assets/img/favicon-binay.png" />
    <title>Blog - Binay Dahal</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="editor.js"></script>

    <script>
        $(document).ready(function() {
            $("#txtEditor").Editor();
        });
    </script>

</head>
<?php
$Title = $_SESSION['BlogTitle'];
$SN = $_SESSION['SerialNum'];

?>

<body>

    <div class="container-fluid">
        <div class="row">
            <h2 class="demo-text">Blog Body</h2>
            <h2 class="demo-text">Title: <?php echo $Title; ?></h2>
            <form method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 nopadding">
                            <!-- <textarea id="txtEditor" name="Detailhere" placeholder="Enter Blog Details Here"></textarea> -->

                            <div class="form-group">
                                <label>
                                    <div style="float: left; padding: 10px;">Blog Details :</div>
                                </label>
                                <div style="float: right; padding: 10px;"> Characters left
                                    <input onblur="textCounter(this.form.recipients,this,6000);" disabled onfocus="this.blur();" tabindex="6000" maxlength="3" size="3" value="6000" name="counter">
                                </div>
                                <textarea name="BlogDetail" onblur="textCounter(this,this.form.counter,6000);" onkeyup="textCounter(this,this.form.counter,6000);" id="BlogDetails" class="form-control" rows="19" cols="25" required="required" placeholder="Enter Blog Details Here"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="saveblog" class="btn btn-primary pull-right">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    function textCounter(field, countfield, maxlimit) {
        if (field.value.length > maxlimit) {
            field.value = field.value.substring(0, maxlimit);
            field.blur();
            field.focus();
            return false;
        } else {
            countfield.value = maxlimit - field.value.length;
        }
    }
</script>

<?php

if (isset($_POST['saveblog'])) {
    $Details = $_POST['BlogDetail'];

    if (!empty($Details)) {
        // $Details = $_POST['BlogDetail'];

        
        $query = "INSERT INTO binay_blog.tblblog(Details)
        Select '$Details'
        From binay_blog.tblblog
        WHERE 'SN' = '$SN'
                 ";


        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>
                    alert('submitted successfully!');
                    window.location.replace('blogform.php');
                    </script>";
        } else {
            echo mysqli_error($con);
           // echo "<script type='text/javascript'>alert('failed!')      </script>";
        }   
    }
    mysqli_close($con);
} 

?>