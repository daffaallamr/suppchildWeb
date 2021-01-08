// Chart 1

google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Laki-Laki', 'Perempuan'],
          ['Gresik', 10, 4],
          ['Bangkalan', 11, 15],
          ['Mojokerto', 16, 20],
          ['Surabaya', 6, 11],
          ['Sidoarjo', 15, 22],
          ['Lamongan', 13, 14]
        ]);

        var options = {
        colors: ['#8366B3', '#fe8f57'],
          chart: {
            // title: 'Company Performance',
            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
