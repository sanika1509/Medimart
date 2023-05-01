<?php
session_start();
include 'Connection.php';
// echo $_POST["username"];
// echo $_POST["pass"];
// print_r($_POST);
if (isset($_POST['username']) && isset($_POST['pass'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['pass']);

    if (empty($uname) || (empty($pass)))
     {
        echo '<script>alert("incorrect user name/password ,please try again."); window.history.back();</script>';
        exit();
    }else{

        $sql = "SELECT * FROM employees WHERE username='$uname' AND password='$pass'";
        echo "$sql";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) 
        {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['userid'] = $row['employee_id'];
                $_SESSION['admin']=$row['isadmin'];
                echo $_SESSION['admin'];
                // $_SESSION['id'] = $row['id'];

                header("Location: Options/Options.php");

                
                exit();
            }else{
                echo '<script>alert("User not found"); window.history.back();</script>';
                // header("Location: index.php?error=Incorect User name or password");

                // exit();

            }

        }else
        {
            echo '<script>alert("User not found"); window.history.back();</script>';
        }

    }

}else{
    echo '<script>alert("Username or Password empty"); window.history.back();</script>';

}
