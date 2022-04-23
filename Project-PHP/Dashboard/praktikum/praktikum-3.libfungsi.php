<?php
function Persentase($_uts, $_uas, $_tugas)
{
    $_total_nilai = ($_uts * 30 / 100) + ($_uas * 35 / 100) + ($_tugas * 35 / 100);
    return $_total_nilai;
}

function Kelulusan($_nilai)
{
    if ($_nilai > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function Grade($_nilai)
{
    if ($_nilai >= 85) {
        return 'GRADE A';
    } elseif ($_nilai >= 70) {
        return 'GRADE B';
    } elseif ($_nilai >= 56) {
        return 'GRADE C';
    } elseif ($_nilai >= 36) {
        return 'GRADE D';
    } elseif ($_nilai >= 0) {
        return 'GRADE E';
    } else {
        return 'GRADE I';
    }
}

function Predikat($_grade)
{
    switch ($_grade) {
        case "GRADE A":
            return 'SANGAT MEMUASKAN';
            break;
        case "GRADE B":
            return 'MEMUASKAN';
            break;
        case "GRADE C":
            return 'CUKUP';
            break;
        case "GRADE D":
            return 'KURANG';
            break;
        case "GRADE E":
            return 'SANGAT KURANG';
            break;
        default:
            return 'PREDIKAT TIDAK VALID';
    }
}
