<?php
    try {
        require_once '../includes/pdo_connect.php';
        $count = $db->query('SELECT COUNT(*) FROM names');
        $numrows = $count->fetchColumn();
        $sql  = 'SELECT name, meaning, gender '; 
        $sql .= 'FROM names ';
        $sql .= 'ORDER BY name';        
    } catch (Exception $e) {
         $error = $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO: Counting Rows</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
<h1>PDO: Counting Rows in a Result Set</h1>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
echo "<p>Total results found: {$numrows}.</p>";
if($numrows) :
?>
<table>
    <tr>
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
    <?php foreach($db->query($sql) as $row) { // same as run the query directly?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['meaning']; ?></td>
            <td><?php echo $row['gender']; ?></td>
        </tr>
    <?php } ?>
</table>
<?php endif; ?>
</body>
</html>