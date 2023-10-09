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
        <table align="center" border="5"> 
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Salary</th>
                <th colspan="2">Action</th>
            </tr>

            <?php
                $query = "SELECT * FROM crud12";
                $data = mysqli_query($conn,$query);
                $result = mysqli_num_rows($data);

                if($result)
                {
                    while($row=mysqli_fetch_array($data))
                    {
                        ?>
                            <tr>
                            <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Age']; ?></td>
                                <td><?php echo $row['Salary']; ?></td>
                                <td><a href="update.php?id=<?php echo $row['Id']; ?>">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                            </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <tr>
                        <td>No record found</td>
                    </tr>
                    <?php
                }
            ?>
        </table>
                <center>
        <button><a href="indexcrud.php">Want to add more data?</a></button>
            </center>
    </body>
</html>