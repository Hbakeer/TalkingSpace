<?php include('includes/header.php'); ?>
<form role="form" method="post" action="create.php">
    <div class="form-group">
        <label>Topic Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
            <?php foreach (getCategories() as $category) : ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Topic Body</label>
        <textarea name="body" id="body" cols="80" rows="10" class="form-control"></textarea>
        <script>CKEDITOR.replace('body');</script>
    </div>
    <button name="do_create" type="submit" class="btn btn-default">Submit</button>
</form>

<?php include('includes/footer.php'); ?>