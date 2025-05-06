
<?php
$Name = $_POST['Name'] ?? '';
$age = $_POST['age'] ?? '';
$gender = $_POST['gender'] ?? '';

echo "Name: " . $Name . "&nbsp;&nbsp; Mobile: " . $age . "<br>";
echo "Gender: " . $gender;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Your Full Name</label>
        <input type="text" name="Name" value="<?php echo isset($_POST['Name']) ? $_POST['Name'] : ''; ?>">
                    
        <label for="phone">Your Contact phone</label>
        <input type="text" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>">
                    
        <label for="gender">Your Contact gender</label>
        <input type="text" name="gender" value="<?php echo isset($_POST['gender']) ? $_POST['gender'] : ''; ?>">
                    

    </form>
</body>
</html>
