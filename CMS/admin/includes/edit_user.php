<?php

if(isset($_GET['edit_user'])){

    $the_user_id =  $_GET['edit_user'];
    $query = "SELECT * FROM users WHERE user_id = $the_user_id";
    $select_users_query = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_users_query)) {
        $user_id        = $row['user_id'];
        $username       = $row['username'];
        $user_password  = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname  = $row['user_lastname'];
        $user_email     = $row['user_email'];
        $user_image     = $row['user_image'];
        $user_role      = $row['user_role'];
    }

?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="post-title">Post Title</label>
        <input id="post-title" value="<?php echo $post_title ?>" type="text" class="form-control" name="post_title">
    </div>

    <div class="form-group">
        <label for="post-categories">Categories</label>
        <select name="post_category" id="post-categories">
            <?php
                $query = "SELECT * FROM categories ";
                $select_categories = mysqli_query($connection,$query);

                confirmQuery($select_categories);

                while($row = mysqli_fetch_assoc($select_categories )) {
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];

                    if($cat_id == $post_category_id) {
                        echo "<option selected value='{$cat_id}'>{$cat_title}</option>";
                    } else {
                        echo "<option value='{$cat_id}'>{$cat_title}</option>";
                    }
                }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="post-author">Post Author</label>
        <input id="post-author" value="<?php echo $post_author; ?>" type="text" class="form-control" name="post_author">
    </div>

    <div class="form-group">
        <label for="post-status">Post Status</label>
        <input id="post-status" value="<?php echo $post_status ?>" type="text" class="form-control" name="post_status">
    </div>

    <div class="form-group">
        <img width="100" src="/admin/images/<?php echo $post_image; ?>" alt="image">
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="post-tags">Post Tags</label>
        <input id="post-tags" value="<?php echo $post_tags ?>" type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content ?></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Update Post">
    </div>

</form>