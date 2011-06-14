<?php

function tanggal_strip($date) {
    $tahun = substr($date, 0, 4);

    $bln = substr($date, 5, 2);
    $bulan = "";
    switch ($bln) {
        case '01':
            $bulan = "Januari";
            break;
        case '02':
            $bulan = "Febuari";
            break;
        case '03':
            $bulan = "Maret";
            break;
        case '04':
            $bulan = "April";
            break;
        case '05':
            $bulan = "Mei";
            break;
        case '06':
            $bulan = "Juni";
            break;
        case '07':
            $bulan = "Juli";
            break;
        case '08':
            $bulan = "Agustus";
            break;
        case '09':
            $bulan = "September";
            break;
        case '10':
            $bulan = "Oktober";
            break;
        case '11':
            $bulan = "November";
            break;
        case '12':
            $bulan = "Desember";
            break;
    }
    $hari = substr($date, 8, 2);
    return $hari . " " . $bulan . "  " . $tahun;
}
?>
