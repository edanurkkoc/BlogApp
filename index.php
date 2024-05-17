<!DOCTYPE html>
<html lang="en">

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
                    <li class="list-group-item">Macera</li>
                    <li class="list-group-item">Dram</li>
                    <li class="list-group-item">Komedi</li>
                    <li class="list-group-item">Korku</li>
                </ul>
            </div>
            <div class="col-9">
                <script>
                    const baslik = "Film Listesi";
                </script>
                <h1 id="baslik"></h1>
                <script>
                    document.getElementById('baslik').innerText = baslik;
                </script>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/1.jpeg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="https://www.beyazperde.com/filmler/film-285681/">Paper Lives</a>
                                </h5>
                                <p class="card-text">
                                    <script>
                                        let aciklama1 = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
                                        //Açıklama1 meninin 0.indeksli ilk karakterini büyük harfe (toUpperCase())1.1. indeks sonraki karakterleri alarak küçük harf yapar (toLowerCase())
                                        aciklama1 = aciklama1.charAt(0).toUpperCase() + aciklama1.slice(1).toLowerCase();
                                        aciklama1 = aciklama1.substr(0, 50) + "...";
                                        document.write(aciklama1);
                                    </script>
                                </p>

                                <div>
                                    <span class="badge bg-success" style="background-color: #333;">yapım tarihi: 03.12.2021</span>
                                    <span class="badge bg-success" style="background-color: #333;">yorum sayısı: 23</span>
                                    <span class="badge bg-success" style="background-color: #333;">beğeni sayısı: 106</span>
                                    <span class="badge bg-success" style="background-color: #333;">vizyonda olma durumu: evet</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/2.jpeg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="https://www.imdb.com/title/tt1520211/">The Walking Dead</a>
                                </h5>
                                <p class="card-text">
                                    <script>
                                        let aciklama2 = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
                                        aciklama2 = aciklama2.charAt(0).toUpperCase() + aciklama2.slice(1).toLowerCase();
                                        aciklama2 = aciklama2.substr(0, 50) + "...";
                                        document.write(aciklama2);
                                    </script>
                                </p>

                                <div>
                                    <span class="badge bg-success" style="background-color: #333;">yapım tarihi: 31.10.2010</span>
                                    <span class="badge bg-success" style="background-color: #333;">yorum sayısı: 236</span>
                                    <span class="badge bg-success" style="background-color: #333;">beğeni sayısı: 1023</span>
                                    <span class="badge bg-success" style="background-color: #333;">vizyonda olma durumu: hayır</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>