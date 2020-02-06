<?php include('includes/header.php'); ?>
<form role="form" enctype="multipart/form-data" method="post" action="register.php">
    <div class="form-group">
        <label for=>Name*</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
    </div>
    <div class="form-group">
        <label>Email Address*</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
    </div>
    <div class="form-group">
        <label>Choose Username*</label>
        <input type="text" class="form-control" name="username" placeholder="Create A Username">
    </div>
    <div class="form-group">
        <label>Password*</label>
        <input type="password" class="form-control" name="password" placeholder="Enter A Password">
    </div>
    <div class="form-group">
        <label>Confirm Password*</label>
        <input type="password" class="form-control" name="password2" placeholder="Enter Password Again">
    </div>
    <div class="form-group">
        <label>Upload Avatar</label>
        <input type="file" name="avatar">
        <p class="help-block"></p>
    </div>
    <div class="form-group">
        <label>About Me</label>
        <div>
            <textarea name="about" id="about" cols="80" rows="6" placeholder="Tell us about yourself (Optional)"></textarea>
        </div>

    </div>
    <input type="submit" name="register" class="btn btn-default" value="register">
</form>
<?php include('includes/footer.php'); ?>