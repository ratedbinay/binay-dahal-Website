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
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Title">
                                Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter Title" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="Date">
                                Date</label>
                            <div class="input-group">

                                <input type="date" class="form-control" id="date" placeholder="Enter date" required="required" /></div>
                        </div>

                        <div class="form-group">
                            <label for="BlogImage">Select Image</label>
                            <input type="file" class="form-control-file" accept="image/*" required="required" id="BlogImage" />


                        </div>

                        <div class="form-group" id="categories">
                            <label for="Category">
                                Category : </label> <br>

                            <!-- <input type="text" class="form-control" id="Category" placeholder="Enter Category " required="required" /> -->
                            <label for="Sports"> Sports <input type="checkbox" name="categories" id="Sports" class="badgebox"><span class="badge"></span></label>
                            <label for="Music"> Music <input type="checkbox" name="categories" id="Music" class="badgebox"><span class="badge"></span></label>
                            <label for="Movie"> Movie <input type="checkbox" name="categories" id="Movie" class="badgebox"><span class="badge"></span></label>
                            <label for="Programming"> Programming <input type="checkbox" name="categories" id="Programming" class="badgebox"><span class="badge"></span></label>
                            <label for="Desiging"> Desiging <input type="checkbox" name="categories" id="Desiging" class="badgebox"><span class="badge"></span></label>
                            <label for="Story"> Story <input type="checkbox" name="categories" id="Story" class="badgebox"><span class="badge"></span></label>
                            <label for="Poetry"> Poetry <input type="checkbox" name="categories" id="Poetry" class="badgebox"><span class="badge"></span></label>
                            <label for="Experience"> Experience <input type="checkbox" name="categories" id="Experience" class="badgebox"><span class="badge"></span></label>
                            <label for="Politics"> Politics <input type="checkbox" name="categories" id="Politics" class="badgebox"><span class="badge"></span></label>
                            <label for="Other"> Other <input type="checkbox" name="categories" id="Other" class="badgebox"><span class="badge"></span></label>

                        </div>

                        <div class="form-group">
                            <label for="Tags">
                                Tags</label>

                            <input type="text" class="form-control" id="Tags" placeholder="Enter Tags " required="required" />
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="BlogDetails">
                                Blog Details</label>
                            <textarea name="BlogDetails" id="BlogDetails" class="form-control" rows="19" cols="25" required="required" placeholder="Enter Blog Details Here"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>