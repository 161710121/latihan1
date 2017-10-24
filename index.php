
<?php

require_once '1.php';

$kelas1 = new kelas('pa iik','aldhit','wenti','kiki','siti');
echo "Wali kelas XI RPL 1...".$kelas1->walikelas;
echo "<br>";
echo "Ketua kelas dari XI RPL 1...".$kelas1->ketua;
echo "<br>";
echo "wakil ketua XI RPL 1 adalah..".$kelas1->wakilketua;
echo "<br>";
echo "Sekretarisnya...".$kelas1->sekretaris;
echo "<br>";
echo "Bendaharanya...".$kelas1->bendahara;
echo "<br>";
  ?>