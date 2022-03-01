<?php
    $host = 'localhost';
    $user = 'amal';
    $password = '9607697245';
    $dbname = 'pdoposts';

    // Set DSN
    $dsn = 'mysql: host='.$host.'; dbname='.$dbname;

    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // PDO QUERY METHOD
    $stmt = $pdo->query('SELECT * FROM posts');

    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     echo $row['author'].'<br>';
    // }

    // while($row = $stmt->fetch()){
    //     echo $row->author .'<br>';
    // }

    #PREPARE STATEMENTS - (prepare & execute)

    #UNSAFE
    // $sql = 'SELECT * FROM posts WHERE author=' .$author;

    // FETCH MULTIPLE POSTS
    
    // User Input
    $title = 'Post Five';
    $body = 'This is post five';
    $author = 'John Doe';
    $limit = 1;
    $is_published = true;

    #Positional Parameters
    // $sql = 'SELECT * FROM posts WHERE author=? LIMIT ?';

    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author, $limit]);

    // $posts = $stmt->fetchAll(); // By Default Object

    #Named Parameters
    // $sql = 'SELECT * FROM posts WHERE author=:author AND is_published=:is_published';

    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author'=>$author, 'is_published'=>$is_published]);

    // $posts = $stmt->fetchAll();

    // foreach($posts as $post){
    //     echo $post->title .'<br>';
    // }

    // $stmt = $pdo->prepare('SELECT * FROM posts WHERE author=?');
    // $stmt->execute([$author]);

    // $postCount = $stmt->rowCount();

    // echo $postCount;

    // INSERT VALUE
    // $sql = 'INSERT INTO posts(title, body, author, is_published) VALUES (:title, :body, :author, :is_published)';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['title'=>$title, 'body'=>$body, 'author'=>$author, 'is_published'=>$is_published]);

    // UPDATE VALUE
    // $id = 5;
    // $author ='Kevin Malone';

    // $sql = 'UPDATE posts SET author=:author WHERE id=:id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id'=>$id, 'author'=>$author]);

    // DELETE VALUE
    // $is_published = false;

    // $sql = 'DELETE FROM posts WHERE is_published=:is_published';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['is_published'=>$is_published]);

    // SEARCH
    // $search = '%t%';

    // $sql = 'SELECT * FROM posts WHERE title LIKE ?';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$search]);
    // $posts = $stmt->fetchAll();

    // foreach($posts as $post){
    //     echo $post->title .'<br>';
    // }
    


