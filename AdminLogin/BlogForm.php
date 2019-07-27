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


<!DOCTYPE html>
<html>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="../assets/img/favicon-binay.png" />
    <!------ Include the above in your HEAD tag ---------->
    <title>Enter Blog Details</title>

</head>

<body>
    <div class="jumbotron jumbotron-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h1">
                        Blog Form <small>Enter details for new Blog</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="well well-sm">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Title">
                                    Title</label>
                                <input type="text" class="form-control" name="Title" id="Title" placeholder="Enter Title" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="Date">
                                    Date</label>
                                <div class="input-group">

                                    <input type="date" class="form-control" Name="Date" id="Date" placeholder="Enter date" required="required" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="BlogImage">Select Image</label>
                                <input type="file" class="form-control-file" name="BlogImage" accept="image/*" required="required" id="BlogImage" />


                            </div>

                            <div class="form-group" id="categories">
                                <label for="Category">
                                    Category : </label> <br>

                                <!-- <input type="text" class="form-control" id="Category" placeholder="Enter Category " required="required" /> -->
                                <label for="Sports"> Sports <input type="checkbox" value="Sports" name="categories[]" id="Sports" class="badgebox"><span class="badge"></span></label>
                                <label for="Music"> Music <input type="checkbox" value="Music" name="categories[]" id="Music" class="badgebox"><span class="badge"></span></label>
                                <label for="Movie"> Movie <input type="checkbox" value="Movie" name="categories[]" id="Movie" class="badgebox"><span class="badge"></span></label>
                                <label for="Programming"> Programming <input type="checkbox" value="Programming" name="categories[]" id="Programming" class="badgebox"><span class="badge"></span></label>
                                <label for="Desiging"> Desiging <input type="checkbox" name="categories[]" value="Designing" id="Desiging" class="badgebox"><span class="badge"></span></label>
                                <label for="Story"> Story <input type="checkbox" name="categories[]" id="Story" value="Story" class="badgebox"><span class="badge"></span></label>
                                <label for="Poetry"> Poetry <input type="checkbox" name="categories[]" id="Poetry" value="Poetry" class="badgebox"><span class="badge"></span></label>
                                <label for="Experience"> Experience <input type="checkbox" name="categories[]" id="Experience" value="Experience" class="badgebox"><span class="badge"></span></label>
                                <label for="Politics"> Politics <input type="checkbox" name="categories[]" id="Politics" value="Politics" class="badgebox"><span class="badge"></span></label>
                                <label for="Other"> Other <input type="checkbox" name="categories[]" id="Other" value="Other" class="badgebox"><span class="badge"></span></label>

                            </div>

                            <div class="form-group">
                                <label for="Tags">
                                    Tags</label>

                                <input type="text" class="form-control" name="Tags" id="Tags" placeholder="Enter Tags " required="required" />
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="BlogDetails">
                                    <div style="float: left; padding: 10px;">Blog Details :</div>
                                </label>
                                <div style="float: right; padding: 10px;"> Characters left
                                    <input onblur="textCounter(this.form.recipients,this,2000);" disabled onfocus="this.blur();" tabindex="2000" maxlength="3" size="3" value="2000" name="counter">
                                </div>
                                <textarea name="BlogDetails" onblur="textCounter(this,this.form.counter,2000);" onkeyup="textCounter(this,this.form.counter,2000);" id="BlogDetails" class="form-control" rows="19" cols="25" required="required" placeholder="Enter Blog Details Here"></textarea>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="saveblog" class="btn btn-primary pull-right" id="btnContactUs">
                                Save Blog</button>
                        </div>
                    </div>
                </form>
            </div>

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
    //foreach($_POST['categories'] as $selected)
    //echo $selected;
    $Title = $_POST['Title'];
    $blogDate = $_POST['Date'];
    $blogImage = $_POST['BlogImage'];

    $Category = implode(", ", $_POST['categories']);
    // echo $Category;
    $Tags = $_POST['Tags'];
    $Details = $_POST['BlogDetails'];

    $Serial = " SELECT SN FROM tblblog  
    ORDER BY SN DESC  
    LIMIT 1";
    $Serial=$Serial+1;
    echo $Serial;

    $query = "INSERT INTO tblblog SET 
                 SN='$Serial',
                 Title='$Title',
                 Date='$blogDate',
                 Image='$blogImage',
                 Category='$Category',
                 Tags='$Tags',
                 Details='$Details'
                 ";

    if (mysqli_query($con, $query)) {

        echo "<script type='text/javascript'>
                    alert('submitted successfully!');
                    window.location.replace('blogform.php');
                    </script>";
    } else {
        echo "<script type='text/javascript'>alert('failed!')</script>";
    }
    mysqli_close($con);
}
?>