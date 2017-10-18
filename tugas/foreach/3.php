<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Belajar</title>
</head>
<body>

<select>
    <?php
    $nama = array(1 => "Rika", "Tri", "Ana", "Fatma");

    foreach ($nama as $key => $value) {
        echo "<option>$key . $value</option>";
    }
    ?>
</select>
</body>
</html>