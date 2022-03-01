<?php

include('config/config.php');
include('config/db.php');

if(isset($_POST['delete'])){
    $delete_id = mysqli_escape_string($conn, $_POST['delete_id']);
    
    $query = "DELETE FROM blogs WHERE id={$delete_id}";
    
    if(mysqli_query($conn, $query)){
        header('Location: '.ROOT_URL.'');
    }else{
        echo mysqli_error($conn);
    }
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = 'SELECT * FROM blogs WHERE id='.$id;

// Results
$result = mysqli_query($conn, $query);

// Fetch data

$blog = mysqli_fetch_assoc($result);

// Free Result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

?>

<?php include('inc/header.php') ?>
    <div class="container">
        <a href="<?php echo ROOT_URL;?>" class="btn btn-secondary">Back</a>
        <h1><?php echo $blog['title']; ?></h1>
        <small>Created at <?php echo $blog['created_at']; ?> by <?php echo $blog['author']; ?></small>
        <p><?php echo $blog['body']; ?></p>
        <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="delete_id" value="<?php echo $blog['id'];?>">
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <a href="<?php echo ROOT_URL;?>editpost.php?id=<?php echo $blog['id']; ?>" class="btn btn-secondary">Edit</a>
    </div>
    <?php include('inc/footer.php') ?>