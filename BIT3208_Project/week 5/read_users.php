<?php
include 'db_connect.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h2>Users List</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['email']."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No users found";
}
?>