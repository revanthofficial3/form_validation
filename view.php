<?php


require 'db_conn.php';

    $stmt = $pdo->query("select * from users");

    echo "<table border='1'>
    <tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>District</th><th>Gender</th><th>Language</th><th>About</th><th>option</th>
    </tr>";

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['address']}</td>
            <td>{$row['district']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['languages']}</td>
            <td>{$row['about']}</td>
            <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
        </tr>";
    }
    echo "
     <a href='form.php'>Register</a>  <br> <a href='delete_all.php'>Delete All</a>";
?>