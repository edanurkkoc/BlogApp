<?php

$kategori = array("Macera", "Dram", "Komedi", "Korku", "Bilim Kurgu");

$filmler = array(
    "1" => array(
        "baslik" => "Paper Lives",
        "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim" => "1.jpeg",
        "yorumSayisi" => 0,
        "begeniSayisi" => 85,
        "vizyon" => true,
        "url" => "Paper-Lives"
    ),
    "2" => array(
        "baslik" => "Walking Dead",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim" => "2.jpeg",
        "yorumSayisi" => 55,
        "begeniSayisi" => 0,
        "vizyon" => false,
        "url" => "Walking-Dead"
    )
);

function filmEkle(&$filmler, string $baslik, string $aciklama, string $resim, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $vizyon = false, string $url = "demo")
{
    $new_item = array(
        "baslik" => $baslik,
        "aciklama" => $aciklama,
        "resim" => $resim,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "vizyon" => $vizyon,
        "url" => $url
    );

    $filmler[] = $new_item;
}

filmEkle($filmler, "Yeni Film 1", "ilk açıklama", "1.jpeg");
filmEkle($filmler, "Yeni Film 2", "ikinci açıklama", "2.jpeg");
//opsiyonel olarak const sbt değişkeni büyük harf kullanırs
const LIMIT = 85;
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Film Listesi</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <?php
                    foreach ($kategori as $kategoriler) {
                        echo '<li class="list-group-item">' . $kategoriler . '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-9">
                <?php
                foreach ($filmler as $film) {
                    echo '<div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid" src="img/' . $film["resim"] . '" alt="' . $film["baslik"] . '">
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="' . $film["url"] . '">' . $film["baslik"] . '</a></h5>
                                    <p class="card-text">';
                    if (strlen($film["aciklama"]) > LIMIT) {
                        echo substr($film["aciklama"], 0, LIMIT) . "...";
                    } else {
                        echo $film["aciklama"];
                    }
                    echo '</p><div>
                                        <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>';
                    if ($film["yorumSayisi"] > 0) {
                        echo '<span class="badge bg-success"> ' . $film["yorumSayisi"] . ' yorum </span>';
                    }
                    echo '<span class="badge bg-success">' . $film["begeniSayisi"] . ' beğeni</span>';
                    echo '<span class="badge bg-success">';
                    if ($film["vizyon"]) {
                        echo "vizyonda";
                    } else {
                        echo "vizyonda değil";
                    }
                    echo '</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>