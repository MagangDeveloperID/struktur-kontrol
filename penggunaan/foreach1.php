<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<select>
<?php
    $tumbuhan = array('anggrek','tulip','sepatu', 'melati');

    foreach ($tumbuhan as $key => $bunga) {
        echo " <option> ini bunga  $bunga </option>";
    }
?>
</select>

</body>
</html>
