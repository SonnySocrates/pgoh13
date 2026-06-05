<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=980" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        .typeface { font-family: Arial, sans-serif; }
    </style>
</head>
<body bgcolor="#cccccc">
<?php
// Ensure this is a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Sila isi borang terlebih dahulu.";
    exit;
}

// Helper function to safely get POST data and check if it's meaningful
function getPost($key, $default = '') {
    return isset($_POST[$key]) && trim($_POST[$key]) !== '' ? htmlspecialchars(trim($_POST[$key])) : $default;
}

// Only show introduction if there's at least a name
$name = getPost('name');
if ($name) {
    echo "<span class='typeface'>Biarlah saya kenalkan diri sendiri. (Let me introduce myself)<br><br>\n";
    echo "<span class='typeface'>Nama saya $name.<br><br>\n";
}

// Age
$age = getPost('age');
if ($age !== '' && is_numeric($age)) {
    $age = (int)$age;
    if ($age > 6 && $age < 25) {
        echo "Umur saya $age tahun. Saya masih muda.<br><br>\n";
    } elseif ($age >= 35 && $age <= 45) {
        echo "Umur saya $age tahun. Saya tidak muda lagi.<br><br>\n";
    } elseif ($age >= 65) {
        echo "Umur saya $age tahun. Saya sudah tua.<br><br>\n";
    } else {
        echo "Umur saya $age tahun.<br><br>\n";
    }
}

// Sex
$sex = getPost('sex');
if ($sex) {
    echo "Saya $sex.<br><br>\n";
}

// Race
$race = getPost('race');
if ($race) {
    echo "Saya orang $race.<br><br>\n";
}

// Parents
$parents = getPost('parents');
if ($parents) {
    switch ($parents) {
        case 'kedua':
            echo "Kedua ibu bapa saya masih hidup.<br><br>\n";
            break;
        case 'bapa':
            echo "Bapa saya masih hidup tetapi malangnya ibu saya sudah meninggal dunia.<br><br>\n";
            break;
        case 'ibu':
            echo "Ibu saya masih hidup tetapi malangnya bapa saya sudah meninggal dunia.<br><br>\n";
            break;
        case 'malang':
            echo "Malangnya kedua ibu bapa saya telah meninggal dunia.<br><br>\n";
            break;
    }
}

// Marital status and spouse details
$status = getPost('status');
$spouse_name = getPost('spouse_name');
$spouse_age = getPost('spouse_age');
if ($status) {
    if ($sex === 'lelaki' && $status === 'mati') {
        echo "Saya pernah berkahwin tetapi isteri saya sudah meninggal dunia.<br><br>\n";
    } elseif ($sex === 'perempuan' && $status === 'mati') {
        echo "Saya pernah berkahwin tetapi suami saya sudah meninggal dunia.<br><br>\n";
    } elseif ($status === 'cerai') {
        echo "Saya pernah berkahwin tetapi sudah bercerai.<br><br>\n";
    } else {
        echo "Saya $status berkahwin.<br><br>\n";
    }
    // Spouse details only if married and at least one field is filled
    if ($status === 'sudah' && ($spouse_name || $spouse_age !== '')) {
        $spouse_title = ($sex === 'lelaki') ? 'isteri' : 'suami';
        if ($spouse_name) {
            echo "Nama $spouse_title saya $spouse_name.<br><br>\n";
        }
        if ($spouse_age !== '' && is_numeric($spouse_age)) {
            $spouse_age = (int)$spouse_age;
            $age = is_numeric($age) ? (int)$age : 0; // Ensure age is set for comparison
            if ($spouse_age > $age && $age > 0) {
                echo "$spouse_title saya lebih tua daripada saya. Umurnya $spouse_age tahun.<br><br>\n";
            } elseif ($spouse_age < $age) {
                echo "Saya lebih tua daripada $spouse_title saya. Umurnya $spouse_age tahun.<br><br>\n";
            } elseif ($spouse_age === $age) {
                echo "Umur saya sama dengan umur $spouse_title saya.<br><br>\n";
            }
        }
    }
}

// Children
$kids = getPost('kids');
$kid1 = getPost('kid1');
$kid2 = getPost('kid2');
$kid3 = getPost('kid3');
$kid4 = getPost('kid4');
$kid5 = getPost('kid5');
$kid_age1 = getPost('kid_age1');
$kid_age2 = getPost('kid_age2');
$kid_age3 = getPost('kid_age3');
$kid_age4 = getPost('kid_age4');
$kid_age5 = getPost('kid_age5');
if ($kids !== '' && is_numeric($kids)) {
    $kids = (int)$kids;
    switch ($kids) {
        case 0:
            echo "Saya tidak ada anak.<br><br>\n";
            break;
        case 1:
            if ($kid1) {
                $kid_age1 = is_numeric($kid_age1) ? (int)$kid_age1 : 0;
                echo "Saya ada seorang anak sahaja. Namanya $kid1" . ($kid_age1 ? " dan dia berumur $kid_age1 tahun" : "") . ".<br><br>\n";
            }
            break;
        case 2:
            if ($kid1 && $kid2) {
                $kid_age1 = is_numeric($kid_age1) ? (int)$kid_age1 : 0;
                $kid_age2 = is_numeric($kid_age2) ? (int)$kid_age2 : 0;
                echo "Saya ada dua orang anak. Nama mereka $kid1 dan $kid2" . 
                     (($kid_age1 || $kid_age2) ? " dan mereka berumur $kid_age1 dan $kid_age2 tahun" : "") . ".<br><br>\n";
            }
            break;
        case 3:
            if ($kid1 && $kid2 && $kid3) {
                $kid_age1 = is_numeric($kid_age1) ? (int)$kid_age1 : 0;
                $kid_age2 = is_numeric($kid_age2) ? (int)$kid_age2 : 0;
                $kid_age3 = is_numeric($kid_age3) ? (int)$kid_age3 : 0;
                echo "Saya ada tiga orang anak. Nama mereka $kid1, $kid2 dan $kid3" . 
                     (($kid_age1 || $kid_age2 || $kid_age3) ? " dan mereka berumur $kid_age1, $kid_age2 dan $kid_age3 tahun" : "") . ".<br><br>\n";
            }
            break;
        case 4:
            if ($kid1 && $kid2 && $kid3 && $kid4) {
                $kid_age1 = is_numeric($kid_age1) ? (int)$kid_age1 : 0;
                $kid_age2 = is_numeric($kid_age2) ? (int)$kid_age2 : 0;
                $kid_age3 = is_numeric($kid_age3) ? (int)$kid_age3 : 0;
                $kid_age4 = is_numeric($kid_age4) ? (int)$kid_age4 : 0;
                echo "Saya ada empat orang anak. Nama mereka $kid1, $kid2, $kid3 dan $kid4" . 
                     (($kid_age1 || $kid_age2 || $kid_age3 || $kid_age4) ? " dan mereka berumur $kid_age1, $kid_age2, $kid_age3 dan $kid_age4 tahun" : "") . ".<br><br>\n";
            }
            break;
        case 5:
            if ($kid1 && $kid2 && $kid3 && $kid4 && $kid5) {
                $kid_age1 = is_numeric($kid_age1) ? (int)$kid_age1 : 0;
                $kid_age2 = is_numeric($kid_age2) ? (int)$kid_age2 : 0;
                $kid_age3 = is_numeric($kid_age3) ? (int)$kid_age3 : 0;
                $kid_age4 = is_numeric($kid_age4) ? (int)$kid_age4 : 0;
                $kid_age5 = is_numeric($kid_age5) ? (int)$kid_age5 : 0;
                echo "Saya ada lima orang anak. Nama mereka $kid1, $kid2, $kid3, $kid4 dan $kid5" . 
                     (($kid_age1 || $kid_age2 || $kid_age3 || $kid_age4 || $kid_age5) ? " dan mereka berumur $kid_age1, $kid_age2, $kid_age3, $kid_age4 dan $kid_age5 tahun" : "") . ".<br><br>\n";
            }
            break;
        default:
            if ($kids > 0) echo "Saya ada $kids orang anak.<br><br>\n";
    }
}

// Job
$job = getPost('job');
$company = getPost('company');
$school = getPost('school');
if ($job) {
    switch ($job) {
        case 'housewife':
            echo "Saya suri rumah tangga.<br><br>\n";
            break;
        case 'pensioner':
            echo "Saya tidak bekerja lagi. Saya pesara.<br><br>\n";
            break;
        case 'student':
            echo "Saya penuntut" . ($school ? " di $school" : "") . ".<br><br>\n";
            break;
        case 'jobless':
            echo "Saya tidak ada pekerjaan. Saya menganggur.<br><br>\n";
            break;
        default:
            echo "Saya bekerja sebagai $job" . ($company ? " di $company" : "") . ".<br><br>\n";
    }
}

// Siblings
$number = getPost('number');
$position = getPost('position');
$nombor = getPost('nombor');
if ($position || ($number !== '' && is_numeric($number))) {
    $number = is_numeric($number) ? (int)$number : 0;
    if ($position === 'youngest' && $number > 0) {
        echo "Saya anak bongsu daripada $number adik beradik.<br><br>\n";
    } elseif ($position === 'eldest' && $number > 0) {
        echo "Saya anak sulong daripada $number adik beradik.<br><br>\n";
    } elseif ($position === 'only child') {
        echo "Saya tiada adik beradik. Saya anak tunggal.<br><br>\n";
    } elseif ($nombor && $number > 0) {
        echo "Saya nombor $nombor daripada $number adik beradik.<br><br>\n";
    }
}

// Address
$city = getPost('city');
$address = getPost('address');
$since = getPost('since');
if ($city || $address) {
    echo "Saya tinggal" . ($city ? " di $city" : "") . ($address ? ". Ini alamat rumah saya: $address" : "") . ".<br><br>\n";
}
if ($since !== '' && is_numeric($since)) {
    echo "Saya tinggal di tempat ini sejak tahun $since.<br><br>\n";
}

// Phones
$hsephone = getPost('hsephone');
$offphone = getPost('offphone');
$handphone = getPost('handphone');
if ($hsephone && $hsephone !== 'tiada') {
    echo "Ini nombor telefon rumah saya: $hsephone<br><br>\n";
} elseif ($hsephone === 'tiada') {
    echo "Saya tidak ada telefon di rumah.<br><br>\n";
}
if ($offphone && $offphone !== 'tiada') {
    echo "Ini nombor telefon pejabat saya: $offphone<br><br>\n";
} elseif ($offphone === 'tiada') {
    echo "Saya tidak ada telefon di pejabat.<br><br>\n";
}
if ($handphone && $handphone !== 'tiada') {
    echo "Ini nombor telefon bimbit saya: $handphone<br><br>\n";
} elseif ($handphone === 'tiada') {
    echo "Saya tidak ada telefon bimbit.<br><br>\n";
}

// Car
$kereta = getPost('kereta');
$warna = getPost('warna');
if ($kereta === 'ada' && $warna) {
    echo "Saya ada kereta. Warna kereta saya $warna.<br><br>\n";
} elseif ($kereta === 'tiada') {
    echo "Saya tidak ada kereta.<br><br>\n";
}

// Lifestyle
$dinner = getPost('dinner');
$smoke = getPost('smoke');
$eat = getPost('eat');
$drink = getPost('drink');
$adj1 = getPost('adj1');
$adj2 = getPost('adj2');
$bedtime = getPost('bedtime');
if ($dinner) {
    echo "Saya makan malam pada pukul $dinner malam, biasanya.<br><br>\n";
}
if ($smoke === 'hisap') {
    echo "Saya hisap rokok.<br><br>\n";
} elseif ($smoke === 'tidak') {
    echo "Saya tidak hisap rokok.<br><br>\n";
}
if ($eat || $drink) {
    echo "Saya suka" . ($eat ? " makan $eat" : "") . ($eat && $drink ? " dan" : "") . ($drink ? " minum $drink" : "") . ".<br><br>\n";
}
if ($adj1 && $adj2) {
    echo "Saya $adj1 dan $adj2.<br><br>\n";
}
if ($bedtime) {
    echo "Saya masuk tidur pada pukul $bedtime malam, biasanya.<br><br>\n";
}

// Remarks
$remarks = getPost('remarks');
if ($remarks) {
    echo "$remarks<br><br>\n";
}
?>
</body>
</html>