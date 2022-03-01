<?php
include('config/config.php');
include('config/db.php');

$query = 'SELECT * FROM ' . DB_TABLE.' ORDER BY created_at DESC';

// Results
$results = mysqli_query($conn, $query);

// Fetch data

$blogs = mysqli_fetch_all($results, MYSQLI_ASSOC);

// Free Result
mysqli_free_result($results);

// Close connection
mysqli_close($conn);

?>

<?php include('inc/header.php') ?>
<div class="container">
    <h1>POSTS</h1>
    <?php foreach ($blogs as $blog) : ?>
        <div class="well">
            <h3><?php echo $blog['title']; ?></h3>
            <small>Created at <?php echo $blog['created_at']; ?> by <?php echo $blog['author']; ?></small>
            <p><?php echo $blog['body']; ?></p>
            <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $blog['id']; ?>" class="btn btn-secondary">Read More</a>
        </div>
    <?php endforeach; ?>
</div>
<?php include('inc/footer.php') ?>