<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
                            <label for="Category">
                            Category</label>
                            <input type="text" class="form-control" id="Category" placeholder="Enter Category " required="required" />
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
                            <textarea name="BlogDetails" id="BlogDetails" class="form-control" rows="19" cols="25" required="required"
                                placeholder="Enter Blog Details Here"></textarea>
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
