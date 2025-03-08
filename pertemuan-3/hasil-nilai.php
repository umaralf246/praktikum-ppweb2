<?php
if (!isset($_POST['nama'])){
    echo '<script>alert("anda harus mengisi from terlebih dahulu")</script>
          <meta http-equiv="refresh" content="0; url=form-nilai.php">';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasigma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td> <?= $_POST['nama'] ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td> <?= $_POST['nim'] ?></td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td> <?= $_POST['rombel'] ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td> <?= $_POST['matkul'] ?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td> <?= $_POST['tugas'] ?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td> <?= $_POST['uts'] ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td> <?= $_POST['uas'] ?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td>
                <?php
                $tugas = $_POST['tugas'] * (35/100);
                $uts = $_POST['uts'] * (30/100);
                $uas = $_POST['uas'] * (35/100);
                $total = $tugas + $uts + $uas;

                if ($total <= 35){
                    $pred = 'E';
                } elseif ($total <= 55){
                    $pred = 'D';
                } elseif ($total <= 69){
                    $pred = 'C';
                } elseif ($total <= 84){
                    $pred = 'B';
                } elseif ($total <= 100){
                    $pred = 'A';
                } else {
                    $pred = 'Tidak Diketahui';
                }
                echo $pred
                ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td> 
                <?php
                switch ($pred) {
                    case 'A':
                        echo "APCB";
                        break;
                    case 'B':
                        echo "b aja";
                        break;
                    case 'C':
                        echo "Cocote";
                        break;
                    case 'D':
                        echo "Delicious";
                        break;
                    case 'E':
                        echo "Excellent";
                        break;
                    default:
                        echo "Tidak Diketahui";
                        break;
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>