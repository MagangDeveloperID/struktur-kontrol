<?php
$city = array ('surabaya', 'ponorogo', 'malang', 'jogja');

$opsi_city = '<select name="city">';
foreach ($city as $key => $kota) {
    $opsi_city .= '<option value="' . $key . '">' . $kota . '</option>';
}
$opsi_city = '</select>';

echo $opsi_city;
