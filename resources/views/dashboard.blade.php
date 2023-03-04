<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--custom styling-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Dinosaur', 'Length'],
            ['Acrocanthosaurus (top-spined lizard)', 12.2],
            ['Albertosaurus (Alberta lizard)', 9.1],
            ['Allosaurus (other lizard)', 12.2],
            ['Apatosaurus (deceptive lizard)', 22.9],
            ['Archaeopteryx (ancient wing)', 0.9],
            ['Argentinosaurus (Argentina lizard)', 36.6],
            ['Baryonyx (heavy claws)', 9.1],
            ['Brachiosaurus (arm lizard)', 30.5],
            ['Ceratosaurus (horned lizard)', 6.1],
            ['Coelophysis (hollow form)', 2.7],
            ['Compsognathus (elegant jaw)', 0.9],
            ['Deinonychus (terrible claw)', 2.7],
            ['Diplodocus (double beam)', 27.1],
            ['Dromicelomimus (emu mimic)', 3.4],
            ['Gallimimus (fowl mimic)', 5.5],
            ['Mamenchisaurus (Mamenchi lizard)', 21.0],
            ['Megalosaurus (big lizard)', 7.9],
            ['Microvenator (small hunter)', 1.2],
            ['Ornithomimus (bird mimic)', 4.6],
            ['Oviraptor (egg robber)', 1.5],
            ['Plateosaurus (flat lizard)', 7.9],
            ['Sauronithoides (narrow-clawed lizard)', 2.0],
            ['Seismosaurus (tremor lizard)', 45.7],
            ['Spinosaurus (spiny lizard)', 12.2],
            ['Supersaurus (super lizard)', 30.5],
            ['Tyrannosaurus (tyrant lizard)', 15.2],
            ['Ultrasaurus (ultra lizard)', 30.5],
            ['Velociraptor (swift robber)', 1.8]]);
  
          var options = {
            title: 'Lengths of dinosaurs, in meters',
            legend: { position: 'none' },
          };
  
          var chart = new google.visualization.Histogram(document.getElementById('chart_divs'));
          chart.draw(data, options);
        }
      </script>
    <!-- // revenue // -->
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
          var data = new google.visualization.DataTable();
          data.addColumn('number', 'x');
          data.addColumn('number', 'values');
          data.addColumn({id:'i0', type:'number', role:'interval'});
          data.addColumn({id:'i1', type:'number', role:'interval'});
          data.addColumn({id:'i2', type:'number', role:'interval'});
          data.addColumn({id:'i2', type:'number', role:'interval'});
          data.addColumn({id:'i2', type:'number', role:'interval'});
          data.addColumn({id:'i2', type:'number', role:'interval'});
    
          data.addRows([
              [1, 100, 90, 110, 85, 96, 104, 120],
              [2, 120, 95, 130, 90, 113, 124, 140],
              [3, 130, 105, 140, 100, 117, 133, 139],
              [4, 90, 85, 95, 85, 88, 92, 95],
              [5, 70, 74, 63, 67, 69, 70, 72],
              [6, 30, 39, 22, 21, 28, 34, 40],
              [7, 80, 77, 83, 70, 77, 85, 90],
              [8, 100, 90, 110, 85, 95, 102, 110]]);
    
          // The intervals data as narrow lines (useful for showing raw source data)
          var options_lines = {
            series: [{'color': '#ee06ee'}],
            intervals: { style: 'boxes' },
            legend: 'none'
          };
    
          var chart_lines = new google.visualization.LineChart(document.getElementById('chart_lines'));
          chart_lines.draw(data, options_lines);
        }
      </script>
    <!-- /// big graph // -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Farmers Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  
    <title>Dashboard</title>
</head>
<body>

    <!-- // header // -->
    @include('header')

 
   <div class="dashboard-wrapper">
    <!-- // Side bar // -->
    @include('sidebar')

    <div class="dashboard-content">
        <div class="header-box">
            <div class="icon">
                <img src="assets/materials/agenda.png" alt="">
            </div>
            <div class="heading">
                <p class="title">Farmers' Panel</p>
                <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="stats">
            <div class="stat-one">
                <div class="week">
                    <div class="amount">
                        <p class="cal">This week</p>
                        <p class="money">Ghc 2,072</p>
                        
                    </div>
                    <div class="chart">

                    </div>
                    
                </div>
                <div class="income">
                    <p class="in">Income</p>
                    <p class="money"> Ghc 13,000</p>
                    <!-- <p class="percent">+14%</p> -->
                </div>
            </div>
            <div class="stat-two">
                <p class="rev">Revenue</p><p class="revenue">Ghc 13,000</p>
                <div id="chart_lines" style="width: 100%; height: 150px"></div>
            </div>
            <div class="stat-three">
                <p>Total earnings</p>
                <div id="chart_divs" style="width: 100%; height: 180px;"></div>

            </div>
        </div>
        <div class="form-wrapper">
           
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
 

        </div>

    </div>

   </div> 
   <script language="Javascript">
    window.onload=function(){
    var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
    if (mobile) {
         var alerted = localStorage.getItem('alerted') || '';
        if (alerted != 'yes') {
         alert("Visit this on a Computer for Better View");
         localStorage.setItem('alerted','yes');

    } else {

    }}}
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>