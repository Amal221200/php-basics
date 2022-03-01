<?php
    include 'config/config.php';

    $server = DB_HOST;
    $username = DB_USERNAME;
    $password = DB_PASS;
    $dbname = 'trip';

    $dsn = "mysql: host=" .$server. " dbname=" .$dbname;
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $insert = false;
    $same_id = false;
    

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $gender =  $_POST['gender'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];
        $desc =  $_POST['desc'];

        $sql_same = "SELECT * FROM stdata WHERE id LIKE :id";
        $stmt_same = $pdo->prepare($sql_same);
        $stmt_same->execute(['id'=>$id]);
        $student = $stmt_same->fetch();

        if($student->id == $id){
            $same_id = true;

        }else{
            $same_id = false;
            $sql_in = "INSERT INTO stdata(name, id, gender, email, phone, other) VALUES(:name, :id, :gender, :email, :phone, :desc)";
            $stmt_in = $pdo->prepare($sql_in);

            if($stmt_in->execute(['name'=>$name, 'id'=>$id, 'gender'=>$gender, 'email'=>$email, 'phone'=>$phone, 'desc'=>$desc])){
                $insert = true;
                header('Location: submit.php');
            }
        }

    }



    // $pdo->clos

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome To Travel Form</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <!--  -->
        <?php if($same_id):?>
            <div class="error"><p>You have already submitted your data before</p></div>
        <?php endif;?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="input-control">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="input-control">
                <label for="id">ID</label>
                <input type="number" name="id" id="id" placeholder="Enter your id">
            </div>
            <div class="input-control">
                <label for="gender">Gender</label>
                <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="input-control">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            </div>
            <div class="input-control">
                <label for="desc">More</label>
                <textarea name="desc" id="desc" rows="10" cols="30" placeholder="Enter any other description"></textarea>
            </div>
            <button name="submit" type="submit" class="btn">submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>
