<?php include 'connect.php'; ?>

<?php 

    // print_r($_POST);
    $image = $_GE['images'];
    $problem = $_GET['problem'];
    $location = $_GET['location'];
    $name = $_GET['name'];

    mysqli_query($connect, "INSERT INTO communities (images, problem, location, name)
                            VALUE ('$image', '$problem', '$location', '$name')");

    if(mysqli_affected_rows($connect)>0){
        echo '<p>Success!</p>';
        echo '<a>ข้อมูลถูกเก็บลงฐานข้อมูลเรียบร้อยแล้ว<br><br></a>';
        echo '<a href="index.html">กลับไปยังหน้าหลัก</a>';

    }else{
        echo "Not Success";
        echo mysqli_error($connect);
    }
?>