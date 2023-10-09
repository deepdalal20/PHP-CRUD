<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            crud Operations
        </title>
    </head>

    <body>
        <div>
            <form action="" method="POST">
              Name:<input type="text" name="name" placeholder="name"><br><br>
                Age:<input type="number" name="age" placeholder="age"><br><br>
               Salary:<input type="number" name="salary" placeholder="salary"><br><br>

               <input type="submit" name="save_btn" value="submit"><br><br>
            </form>
        </div>

        <?php
            if(isset($_POST['save_btn']))
            {
                $name = $_POST['name'];
                $age = $_POST['age'];
                $salary = $_POST['salary'];      

                $query = "INSERT INTO crud12 (name,age,salary) VALUES ('$name','$age','$salary')";
                $data=mysqli_query($conn,$query);
                
                if($data)
                {
                    header('location: display.php');
                }
                else {
                    echo "Invalid Data";
                }
            } 
        ?>
    </body>
</html>