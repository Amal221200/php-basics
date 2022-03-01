<?php
    include('config/config.php');
    include('config/db.php');

    if(isset($_POST['submit'])){
        $update_id = mysqli_escape_string($conn, $_POST['update_id']);
        $title = mysqli_escape_string($conn, $_POST['title']);
        $author = mysqli_escape_string($conn, $_POST['author']);
        $body = mysqli_escape_string($conn, $_POST['body']);
        
        $query = "UPDATE blogs SET title='$title', author='$author', body='$body' WHERE id={$update_id}";
        
        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        }else{
            echo mysqli_error($conn);
        }
    }

    $id = mysqli_escape_string($conn, $_GET['id']);

    $query = 'SELECT * FROM blogs WHERE id='.$id;

    // Results
    $result = mysqli_query($conn, $query);

    // Fetch data
    $blog = mysqli_fetch_assoc($result);

    // Free Result
    mysqli_free_result($result);

    mysqli_close($conn);

?>

<?php include('inc/header.php') ?>
<div class="container">
    <h1>EDIT POST</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="<?php echo $blog['title']; ?>"></input>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="form-control" value="<?php echo $blog['author']; ?>"></input>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control"><?php echo $blog['body']; ?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $blog['id'] ;?>">
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
</div>
<?php include('inc/footer.php') ?>