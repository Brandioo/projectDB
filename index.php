<?php
include "header.php";
echo "<br>Hello World";

//Query Variable

$sql = "Select * FROM users";

//statement
$stmt = $pdo->prepare($sql);
$stmt->execute();

////Krijimi i nje array me results
//$result = $stmt->fetch(PDO::FETCH_ASSOC);
////echo "<pre>";
////print_r($result);
////echo "</pre>";
//
//foreach ($result as $row) {
//    echo "<pre>";
//    print_r($row);
//    echo "</pre>";
//}


//Krijimi i nje array me results
$resultAll = $stmt->fetchAll(PDO::FETCH_ASSOC);

//foreach ($resultAll as $row) {
//    echo "<pre>";
//    print_r($row);
//    echo "</pre>";
//}
?>


<table style="width:100%" border="1px">
    <tr>
        <th> ID</th>
        <th> NAME</th>
        <th> Email</th>
        <th> Phone Number</th>
    </tr>
    <tr>
        <?php
        foreach ($resultAll

        as $row) {
        ?>
        <td><?php echo $row ['id'] ?></td>
        <td><?php echo $row ['name'] ?></td>
        <td><?php echo $row ['email'] ?></td>
        <td><?php echo $row ['phoneNumber'] ?></td>
    </tr>
    <?php } ?>
</table>