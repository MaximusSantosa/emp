<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CanvasJS -->
        <script type="text/javascript" src="canvasjs.min.js"></script>
        
        @include('partials.head')
        <?php
            $bptDataPoints = array( 
                array("label"=>"LELAKI", "y"=>($data[2]/$data[0] * 100)),
                array("label"=>"PEREMPUAN", "y"=>($data[3]/$data[0] * 100))
            )
        ?>
        <?php
            $sklDataPoints = array( 
                array("label"=>"LELAKI", "y"=>($data[4]/$data[1] * 100)),
                array("label"=>"PEREMPUAN", "y"=>($data[5]/$data[1] * 100))
            )
        ?>
        <script>
            window.onload = function() {
            
            
            var bptChart = new CanvasJS.Chart("bptChart", {
                animationEnabled: true,
                title: {
                    text: "BPT Gender Distribution"
                },
                data: [{
                    type: "pie",
                    yValueFormatString: "#,##0.00\"%\"",
                    indexLabel: "{label} ({y})",
                    dataPoints: <?php echo json_encode($bptDataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            bptChart.render();
            
            var sklChart = new CanvasJS.Chart("sklChart", {
                animationEnabled: true,
                title: {
                    text: "SKL Gender Distribution"
                },
                data: [{
                    type: "pie",
                    yValueFormatString: "#,##0.00\"%\"",
                    indexLabel: "{label} ({y})",
                    dataPoints: <?php echo json_encode($sklDataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            sklChart.render();

            }
        </script>
    </head>
    <body>
        @include('partials.navbar')
        <br>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    HR SYSTEM
                </div>

                <div class="links">
                    <a href="/list">EMPLOYEE LIST</a>
                </div>
                <br><br><br>
                <table align="center" cellpadding="10">
                    <thead>
                        <tr>
                            <td>BAPINTRI</td>
                            <td>SOKOLANCAR</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total BPT Employees: {{ $data[0] }}</td>
                            <td>Total SKL Employees: {{ $data[1] }}</td>
                        </tr>
                        <tr>
                            <td><div id="bptChart" style="height: 370px; width: 100%;"></div></td>
                            <td><div id="sklChart" style="height: 370px; width: 100%;"></div></td>
                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                        </tr>
                </table>
            </div>
        </div>
    </body>
</html>
