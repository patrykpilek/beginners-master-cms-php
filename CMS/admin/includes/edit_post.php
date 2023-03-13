<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input value="" type="text" class="form-control" name="post_title">
    </div>

    <div class="form-group">
        <label for="categories">Categories</label>
        <select name="post_category" id="">
            <option selected value='teg'>tag</option>
        </select>
    </div>

    <div class="form-group">
        <label for="users">Users</label>
        <select name="post_user" id="">
            <option value='patryk'>patryk</option>
        </select>
    </div>

    <div class="form-group">
        <label for="title">Post Author</label>
        <input value="" type="text" class="form-control" name="post_user">
    </div>

    <div class="form-group">
        <select name="post_status" id="">
            <option value='draft'>Draft</option>
        </select>
    </div>

    <div class="form-group">
        <img width="100" src="" alt="">
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input value="" type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
    </div>

</form>