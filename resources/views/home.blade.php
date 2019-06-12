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
                <table align="center">
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
                </table>
            </div>
        </div>
    </body>
</html>
