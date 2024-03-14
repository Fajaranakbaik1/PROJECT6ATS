<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.FAJAR R | PPLG X-1</title>
    <link rel="stylesheet" href="style.css">


    <style>
        body {
            -webkit-animation: colorchange 60s infinite;
            animation: colorchange 60s infinite;
        }

        @-webkit-keyframes colorchange {
            0% {
                background: #33FFF3;
            }

            15% {
                background: #00FFFF
            }

            25% {
                background: #78281F;
            }

            50% {
                background: #117A65;
            }

            75% {
                background: #DC7633;
            }

            100% {
                background: #9B59B6;
            }
        }

        @keyframes colorchange {
            0% {
                background: #33FFF3;
            }

            25% {
                background: #78281F;
            }

            50% {
                background: #117A65;
            }

            75% {
                background: #DC7633;
            }

            100% {
                background: #9B59B6;
            }
        }

        @media screen and (max-width: 500px) {
            .respon input {
                width: 100px;
                height: 25px;
                gap: 1px;
            }

        }
    </style>
</head>

<body style="background-color : rgb(30, 30, 80)">
    <div class="item-center" style="height: auto;
                                  width: auto;">

        <div class="pembungkus" style="background-color: aqua;
                                  display: flex;
                                  flex-direction: column;
                                  align-items: center;">

            <h1 style="display: flex; justify-content: center;">KALKULATOR IMT</h1> <br>

            <img src="asset/smile-photo.png" alt=""> <br>
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $bb = $_POST['bb'];
                $tb = $_POST['tb'];
                $tbHasil = $_POST['tb'] / 100;
                $imt = $bb / ($tbHasil ** 2);
                $imt = round($imt, 1); // <-- tambahkan ini agar angka di belakang koma hanya 1 angka
            
                if ($imt <= 18.5) {
                    $kategori = "Berat badan kurang";
                } elseif ($imt <= 25) {
                    $kategori = "Berat badan normal";
                } elseif ($imt <= 29.9) {
                    $kategori = "Berat badan berlebih (kecenderungan obesitas)";
                } elseif ($imt > 30) {
                    $kategori = "Obesitas";
                }
                //ini untuk menampilkan hasil nya (ouput)
                echo "
                     <table border='1' style='margin: 0 auto; width: 250px;'>
                        <tr>
                            <th>Kategori</th>
                            <th>Nilai IMT</th>
                         </tr>
                         <tr>
                            <td>$kategori</td>
                             <td>$imt</td>
                        </tr>
                        </table>
                 ";
                echo "<br>";
                echo "<br>";
            }
            ?>

            <!-- ini adalah panamaan untuk di ambil di atas -->
            <form class="respon" action="" method="post" style="display: flex; justify-content: center; gap: 20px;
                width: 200px ; height: 35px;">
                <input type="number" name="bb" placeholder="berat badan (kg)" required><br>
                <input type="number" name="tb" placeholder="tinggi badan (cm)" required><br>
                <input type="submit" style="background-color: blue;">
            </form>
            <br>
        </div>
    </div>



</body>

</html>