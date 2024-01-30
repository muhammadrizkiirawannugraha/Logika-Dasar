<?php
function formatIDN($date){
    $convert = array(
        'Mon' => 'Senin',
        'Tues' => 'Selasa',
        'Wen' => 'Rabu',
        'Thu' => 'Kamis',
        'Fri' => 'Jumat',
        'Satur' => 'Sabtu',
    );
     return strtr($date, $convert);
}
$date = date('D,d M Y');
echo $date;
echo " vs ";
echo
formatIDN($date);

?>