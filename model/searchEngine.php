<?php
    include('../config/database.php');

    $value = $_POST ['search']; 

    $sql = "SELECT * FROM register Where (LName LIKE '%$value%' OR ID  LIKE '%$value%')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
           ?>
           <tr>
            <td style="text-align : center;"><?= $row['ID'] ?></td>
            <td><?= $row['LName'] ?></td>
           </tr>
           <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>