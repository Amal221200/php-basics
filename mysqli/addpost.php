<?php
    include('config/config.php');
    include('config/db.php');

    if(isset($_POST['submit'])){
        $title = mysqli_escape_string($conn, $_POST['title']);
        $author = mysqli_escape_string($conn, $_POST['author']);
        $body = mysqli_escape_string($conn, $_POST['body']);

        $query = "INSERT INTO blogs(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        }else{
            echo mysqli_error($conn);
        }
    }

    mysqli_close($conn);

?>

<?php include('inc/header.php') ?>
<div class="container">
    <h1>ADD POST</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control"></input>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="form-control"></input>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
</div>
<?php include('inc/footer.php') ?>