<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        @include('partials.head')
        
        
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
                            <td><h6><b>BPT Gender Distribution<b></h6><div id="chart1"></div></td>
                            <td><h6><b>SKL Gender Distribution<b></h6><div id="chart2"></div></td>
                        </tr>
                </table>
            </div>
        </div>

        <script> 
            var chart1 = c3.generate({
                bindto: '#chart1',
                data: {
                    columns: [
                        ['Lelaki', {{ $data[2] }}],
                        ['Perempuan', {{ $data[3] }}],
                    ],
                    type : 'pie',
                    onclick: function (d, i) { console.log("onclick", d, i); },
                    onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                    onmouseout: function (d, i) { console.log("onmouseout", d, i); }
                }
            });
            var chart2 = c3.generate({
                bindto: '#chart2',
                data: {
                    columns: [
                        ['Lelaki', {{ $data[4] }}],
                        ['Perempuan', {{ $data[5] }}],
                    ],
                    type : 'pie',
                    onclick: function (d, i) { console.log("onclick", d, i); },
                    onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                    onmouseout: function (d, i) { console.log("onmouseout", d, i); }
                }
            });
        </script>
    </body>
</html>
