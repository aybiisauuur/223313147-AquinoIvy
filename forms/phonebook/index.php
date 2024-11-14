<?php
    include "db.php";

    $sql= "Select * from subjects";
    $result=$conn -> query($sql);
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.8">
        <title>Courses</title>
    </head>
    <body>
        <h2>Courses</h2>

        <table border="1">
            <tr>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Action</th>
            </tr>
            <?php
                if($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['code'] . "</td>";
                        echo "<td>Delete</td>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No Contacts</td></tr>";
                }
                ?>
        </table>
    </body>
</html>