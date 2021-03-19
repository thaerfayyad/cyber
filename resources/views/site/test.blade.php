<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Chart Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <!-- Fontawesome CSS -->
    <div class="container">


        {{-- <canvas id="userChart" style="display: block; width: 300px; height: 400px;" width="1215" height="607" class="chartjs-render-monitor"></canvas> --}}
    </div>
</head>
<body>



<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

{{-- {{-- {!! $page->data !!} --}}
{{-- <div class="container" style="width: 600px; height:400px"> --}}
{{-- {!! $page->data !!} --}}
{{-- </div> --}}





<div id="container" style="width: 75%;">
    <canvas id="canvas"></canvas>
</div>




{{--<script>--}}
{{--    var barChartData = {--}}
{{--        labels: [--}}
{{--            "2016",--}}
{{--            "2017",--}}
{{--            "2018",--}}
{{--            "2019",--}}
{{--        ],--}}
{{--        datasets: [--}}
{{--            {--}}
{{--                label: "American Express",--}}
{{--                backgroundColor: "pink",--}}
{{--                borderColor: "red",--}}
{{--                borderWidth: 1,--}}
{{--                data: [3, 5, 6, 7,3, 5, 6, 7]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Mastercard",--}}
{{--                backgroundColor: "lightblue",--}}
{{--                borderColor: "blue",--}}
{{--                borderWidth: 1,--}}
{{--                data: [4, 7, 3, 6, 10,7,4,6]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Paypal",--}}
{{--                backgroundColor: "lightgreen",--}}
{{--                borderColor: "green",--}}
{{--                borderWidth: 1,--}}
{{--                data: [10,7,4,6,9,7,3,10]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Visa",--}}
{{--                backgroundColor: "yellow",--}}
{{--                borderColor: "orange",--}}
{{--                borderWidth: 1,--}}
{{--                data: [6,9,7,3,10,7,4,6]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "American Express",--}}
{{--                backgroundColor: "pink",--}}
{{--                borderColor: "red",--}}
{{--                borderWidth: 1,--}}
{{--                data: [3, 5, 6, 7,3, 5, 6, 7]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Mastercard",--}}
{{--                backgroundColor: "lightblue",--}}
{{--                borderColor: "blue",--}}
{{--                borderWidth: 1,--}}
{{--                data: [4, 7, 3, 6, 10,7,4,6]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Paypal",--}}
{{--                backgroundColor: "lightgreen",--}}
{{--                borderColor: "green",--}}
{{--                borderWidth: 1,--}}
{{--                data: [10,7,4,6,9,7,3,10]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Visa",--}}
{{--                backgroundColor: "yellow",--}}
{{--                borderColor: "orange",--}}
{{--                borderWidth: 1,--}}
{{--                data: [6,9,7,3,10,7,4,6]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "American Express",--}}
{{--                backgroundColor: "pink",--}}
{{--                borderColor: "red",--}}
{{--                borderWidth: 1,--}}
{{--                data: [3, 5, 6, 7,3, 5, 6, 7]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Mastercard",--}}
{{--                backgroundColor: "lightblue",--}}
{{--                borderColor: "blue",--}}
{{--                borderWidth: 1,--}}
{{--                data: [4, 7, 3, 6, 10,7,4,6]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Paypal",--}}
{{--                backgroundColor: "lightgreen",--}}
{{--                borderColor: "green",--}}
{{--                borderWidth: 1,--}}
{{--                data: [10,7,4,6,9,7,3,10]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Visa",--}}
{{--                backgroundColor: "yellow",--}}
{{--                borderColor: "orange",--}}
{{--                borderWidth: 1,--}}
{{--                data: [6,9,7,3,10,7,4,6]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "American Express",--}}
{{--                backgroundColor: "pink",--}}
{{--                borderColor: "red",--}}
{{--                borderWidth: 1,--}}
{{--                data: [3, 5, 6, 7,3, 5, 6, 7]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Mastercard",--}}
{{--                backgroundColor: "lightblue",--}}
{{--                borderColor: "blue",--}}
{{--                borderWidth: 1,--}}
{{--                data: [4, 7, 3, 6, 10,7,4,6]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Paypal",--}}
{{--                backgroundColor: "lightgreen",--}}
{{--                borderColor: "green",--}}
{{--                borderWidth: 1,--}}
{{--                data: [10,7,4,6,9,7,3,10]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Visa",--}}
{{--                backgroundColor: "yellow",--}}
{{--                borderColor: "orange",--}}
{{--                borderWidth: 1,--}}
{{--                data: [6,9,7,3,10,7,4,6]--}}
{{--            }, {--}}
{{--                label: "American Express",--}}
{{--                backgroundColor: "pink",--}}
{{--                borderColor: "red",--}}
{{--                borderWidth: 1,--}}
{{--                data: [3, 5, 6, 7,3, 5, 6, 7]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Mastercard",--}}
{{--                backgroundColor: "lightblue",--}}
{{--                borderColor: "blue",--}}
{{--                borderWidth: 1,--}}
{{--                data: [4, 7, 3, 6, 10,7,4,6]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Paypal",--}}
{{--                backgroundColor: "lightgreen",--}}
{{--                borderColor: "green",--}}
{{--                borderWidth: 1,--}}
{{--                data: [10,7,4,6,9,7,3,10]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "Visa",--}}
{{--                backgroundColor: "yellow",--}}
{{--                borderColor: "orange",--}}
{{--                borderWidth: 1,--}}
{{--                data: [6,9,7,3,10,7,4,6]--}}
{{--            }--}}
{{--            ,--}}
{{--            {--}}
{{--                label: "Visa",--}}
{{--                backgroundColor: "yellow",--}}
{{--                borderColor: "orange",--}}
{{--                borderWidth: 1,--}}
{{--                data: [6,9,7,3,10,7,4,6]--}}
{{--            }--}}
{{--        ]--}}
{{--    };--}}

{{--    var chartOptions = {--}}
{{--        responsive: true,--}}
{{--        legend: {--}}
{{--            position: "top"--}}
{{--        },--}}
{{--        title: {--}}
{{--            display: true,--}}
{{--            text: "Chart.js Bar Chart"--}}
{{--        },--}}
{{--        scales: {--}}
{{--            yAxes: [{--}}
{{--                ticks: {--}}
{{--                    beginAtZero: true--}}
{{--                }--}}
{{--            }]--}}
{{--        }--}}
{{--    }--}}

{{--    window.onload = function() {--}}
{{--        var ctx = document.getElementById("canvas").getContext("2d");--}}
{{--        window.myBar = new Chart(ctx, {--}}
{{--            type: "bar",--}}
{{--            data: barChartData,--}}
{{--            options: chartOptions--}}
{{--        });--}}
{{--    };--}}

{{--</script>--}}


{{--

        <div class="container" style="width: 600px; height:400px">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
        <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script> --}}



























{{-- <canvas id="userChart" style="display: block; width: 300px; height: 400px;" width="1215" height="607" class="chartjs-render-monitor"></canvas>
<script>
    var ctx = document.getElementById('userChart');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'polarArea',
        // The data for our dataset
        data: {
            labels:  ["Hardy Bogan","Mike Auer","Vito Stracke","Sven Grady","Fritz Kling","Carolyne Swift","Dr. Brennon Fahey","Prof. Marcellus Thompson V","Elta Boyer","Garret Durgan","Jevon Schmitt","Prof. Remington Stanton PhD","Hilda Langosh","Rahsaan Feeney Jr.","Tina Abbott","Clarabelle Dietrich","Mrs. Jany Schoen Sr.","Briana Klein","Pietro Herzog","Prof. Judy Larkin DVM","Jamal Littel","Veronica Ebert DVM","Orlando Collins","Trevion Ledner","Bryon Satterfield","Anissa Herman","Prof. Leland Hauck IV","Cassie VonRueden","Janie Mills","Kacie Bernier","Dr. Kareem Lehner IV","Giovanny Balistreri PhD","Mr. Monte Brown","Mrs. Sincere Legros","Mr. Harley Waelchi","Eric Leannon","Prof. Gino Trantow III","Kamille Boyer","Mrs. Carli Lemke V","Duncan Lubowitz","Dr. Cale Ruecker I","Maci Wisoky","Brannon Osinski","Cristobal Gleichner","Janae Kozey","Laury Rolfson","Dr. Cristobal Hessel Jr.","Letha Botsford","Sallie Heaney MD","Ms. Savannah Murray MD"]  ,
            datasets: [
                {
                    label: 'Count of ages',
                    backgroundColor: ["#52F7EB","#3AF925","#CE2356","#384A91","#D2B167","#9C6A78","#41E5B2","#E07415","#B4ED93","#FE0A45","#EDC196","#9C4E06","#7A3E26","#E1A809","#3AB027","#7F1923","#57C8E6","#094685","#480EDC","#EFA87C","#A910D7","#A1B9FD","#C648D2","#3C67BA","#6CD2B8","#8C726E","#7684AD","#2BA103","#45C2A8","#42095B","#3BD246","#C170F5","#374BA5","#FAD89C","#0D2B98","#B91E36","#F3670E","#853762","#A1860F","#5DA073","#D54972","#D3690E","#2539A4","#C62EDA","#E5F617","#E02413","#E790F5","#07216F","#D4637B","#7E904A","#918260"] ,

                    data:   [34,39,50,71,75,44,70,48,64,20,63,21,39,31,23,33,20,62,56,61,55,61,61,78,20,25,25,42,58,64,38,36,30,67,43,23,52,68,50,76,61,21,77,39,46,62,71,26,21,21] ,

                },
            ]
        },
        // Configuration options go here



    });

</script> --}}

 <script>
      var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
    }

    var mode      = 'index';
    var intersect = true;
    var $visitorsChart = $('#canvas');
    var visitorsChart  = new Chart($visitorsChart, {
        data   : {
        labels  : ['A','B','C','D','E','F','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AAA'],
        datasets: [{
            label: 'A',
            type                : 'line',
            data                : [5,41,19,1757,1,27,10,22,10,8,14,103,61,8,48,13,32,0,2,172,0,21,109,4,364,53],
            backgroundColor     : 'transparent',
            borderColor         : '#007bff',
            pointBorderColor    : '#007bff',
            pointBackgroundColor: '#007bff',
            fill                : true

        },
            {
            type                : 'line',
            data                : [5,37,29,1687,0,11,14,12,5,9,25,126,51,9,44,19,18,1,10,157,1,7,36,12,278,75],
            backgroundColor     : 'tansparent',
            borderColor         : '#ff9933',
            pointBorderColor    : '#ff9933',
            pointBackgroundColor: '#ff9933',
            fill                : false
            }
            ,
            {
            type                : 'line',
            data                : [5,23,35,1579,3,7,20,23,6,13,11,4,1,0,9,14,9,3,8,144,2,111,73,9,543,31] ,
            backgroundColor     : 'tansparent',
            borderColor         : '#66ffcc',
            pointBorderColor    : '#66ffcc',
            pointBackgroundColor: '#66ffcc',
            fill                : false
            }
            ,
            {
            type                : 'line',
            data                : [10,12,19,1591,3,13,16,14,7,7,21,9,12,3,11,9,6,3,15,150,1,16,162,2,431,2],
            backgroundColor     : 'tansparent',
            borderColor         : '#990000',
            pointBorderColor    : '#990000',
            pointBackgroundColor: '#990000',
            fill                : false
            }


        ]
        },
        options: {
        maintainAspectRatio: false,
        tooltips           : {
            mode     : mode,
            intersect: intersect
        },
        hover              : {
            mode     : mode,
            intersect: intersect
        },
        legend             : {
            display: false
        },
        scales             : {
            yAxes: [{
            // display: false,
            gridLines: {
                display      : true,
                lineWidth    : '4px',
                color        : 'rgba(0, 0, 0, .2)',
                zeroLineColor: 'transparent'
            },
            ticks    : $.extend({
                beginAtZero : true,
                suggestedMax: 500
            }, ticksStyle)
            }],
            xAxes: [{
            display  : true,
            gridLines: {
                display: false
            },
            ticks    : ticksStyle
            }]
        }
        }
    });
</script>



{{--
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
        </tr>

    </tbody>

</table> --}}
{{-- <table id="example" class="display" style="width:100%"> <thead>  <tr><th>Name</th><th>Position</th><th>Office</th><th>Age</th><th>Start date</th><th>Salary</th>  </tr> </thead> <tbody>  <tr><td>Tiger Nixon</td><td>System Architect</td><td>Edinburgh</td><td>61</td><td>2011/04/25</td><td>$320,800</td>  </tr>  <tr><td>Garrett Winters</td><td>Accountant</td><td>Tokyo</td><td>63</td><td>2011/07/25</td><td>$170,750</td>  </tr> </tbody></table> --}}

{{-- <script>
    $(document).ready(function() {
    $('#example').DataTable( {
    } );
} );
</script> --}}



</body>
</html>
