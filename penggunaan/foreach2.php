<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<select>
<?php
    $hari = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'Minggu'];

    foreach ($hari as $key => $value) {
        echo " <option> hari $value </option>";
    }
?>

</select>
</body>
</html>
