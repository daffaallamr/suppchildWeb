    //   Chart 2

    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Jumlah Anak Binaan'],
          ['2018',  10],
          ['2019',  22],
          ['2020',  40],
          ['2021',  40]
        ]);

        var options = {
            colors: ['#fe8f57'],
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }