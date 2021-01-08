<!DOCTYPE html>
<!--home-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppChild</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/index.css">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">
</head>


<div class="container-content">
    <div class="foto-kegiatan">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="<?= base_url('assets'); ?>/assets/img/kegiatan_1.jpeg" style="width:100%">
                <div class="text">
                    <h1>Peringatan Hari Raya Idul Fitri</h1>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="<?= base_url('assets'); ?>/assets/img/kegiatan_2.jpeg" style="width:100%">
                <div class="text">
                    <h1>Hari Anak Nasional</h1>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="<?= base_url('assets'); ?>/assets/img/kegiatan_3.jpeg" style="width:100%">
                <div class="text">
                    <h1>Bersih Desa Bersama Pak RT</h1>
                </div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <div class="data">

        <div class="data_1">
            <h1 class="title">Cabang LSM</h1>
            <h1 class="dataTitle">6 Cabang</h1>
        </div>

        <div class="data_2">
            <h1 class="title">Laporan</h1>
            <h1 class="dataTitle">
                <?php echo $totalKasus; ?> Kasus</h1>
        </div>

        <div class="data_3">
            <h1 class="title">Anak Binaan</h1>
            <h1 class="dataTitle">
                <?php echo $totalAnak; ?> Anak</h1>
        </div>

        <div class="data_4">
            <h1 class="title">Kegiatan</h1>
            <h1 class="dataTitle"><?php echo $totalKegiatan; ?> Kegiatan</h1>
        </div>
    </div>

    <div class="grafik_1">
        <h1>Grafik Data Anak Binaan</h1>
        <div class="line_1"></div>
        <div id="columnchart_material" style="width: 1000px; height: 400px; margin: 0 auto;"></div>
    </div>
    <div class="grafik_2">
        <h1>Grafik Jumlah Data Anak Binaan</h1>
        <div class="line_2"></div>
        <div id="curve_chart" style="width: 1200px; height: 400px; margin: 0 auto;"></div>
    </div>
</div>

<!-- <div class="footer">
        <img src="../assets/img/logo.png" alt="">
        <h1><h1>Created by AARAV Code @2020</h1></h1>
    </div> -->

<script src="<?= base_url('assets'); ?>/js/slideShow.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    // Chart 1

    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Laki-Laki', 'Perempuan'],
            ['Gresik', <?php echo $gresikL; ?>, <?php echo $gresikP; ?>],
            ['Bangkalan', <?php echo $bangL; ?>, <?php echo $bangP; ?>],
            ['Mojokerto', <?php echo $mjkL; ?>, <?php echo $mjkP; ?>],
            ['Surabaya', <?php echo $sbyL; ?>, <?php echo $sbyP; ?>],
            ['Sidoarjo', <?php echo $sdaL; ?>, <?php echo $sdaP; ?>],
            ['Lamongan', <?php echo $lmgL; ?>, <?php echo $lmgP; ?>]
        ]);

        var options = {
            colors: ['#8366B3', '#fe8f57'],
            chart: {}
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Jumlah Anak Binaan'],
            ['2018', <?php echo $tot2018; ?>],
            ['2019', <?php echo $tot2019; ?>],
            ['2020', <?php echo $tot2020; ?>],
            ['2021', <?php echo $tot2021; ?>]
        ]);

        var options = {
            colors: ['#fe8f57'],
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>

</body>

</html>