<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <!-- JQuery Tables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #99c2ff">
            <div class="container-fluid">
                <ul class="navbar-nav navbar-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="/" style="color:#cc5200">EMP</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/list" style="color:#0052cc">EMPLOYEE LIST</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <div class="content">
        <?php
            $TGL_LAHIR=date_create((string)($data[0]->TGL_LAHIR));
            $TGL_MASUK=date_create((string)($data[0]->TGL_MASUK));
            $TODAY=date_create((string)($data[0]->TODAY));
            $USIA=date_diff($TGL_LAHIR, $TODAY);
            $LAMA_KERJA=date_diff($TGL_MASUK, $TODAY);
        ?>
        <table align="center">
            <thead>
                <tr>
                    <td colspan="2"><h2>EMPLOYEE INFO</h2></td>
                </tr>
            </thead>
            <tbody>
                <tr><td>ID</td><td>{{ strtoupper($data[0]->ID) }}</td></tr>
                <tr><td>NO</td><td>{{ strtoupper($data[0]->NO) }}</td></tr>
                <tr><td>NIK</td><td>{{ strtoupper($data[0]->NIK) }}</td></tr>
                <tr><td>NAMA</td><td>{{ strtoupper($data[0]->NAMA) }}</td></tr>
                <tr><td>GENDER</td><td>{{ strtoupper($data[0]->GENDER) }}</td></tr>
                <tr><td>TGL LAHIR</td><td>{{ strtoupper($data[0]->TGL_LAHIR) }}</td></tr>
                <tr><td>TGL MASUK</td><td>{{ strtoupper($data[0]->TGL_MASUK) }}</td></tr>
                <tr><td>CATEGORY</td><td>{{ strtoupper($data[0]->CATEGORY) }}</td></tr>
                <tr><td>JAB</td><td>{{ strtoupper($data[0]->JAB) }}</td></tr>
                <tr><td>PERUSAHAAN</td><td>{{ strtoupper($data[0]->PERUSAHAAN) }}</td></tr>
                <tr><td>DEPT</td><td>{{ strtoupper($data[0]->DEPT) }}</td></tr>
                <tr><td>SHIFT</td><td>{{ strtoupper($data[0]->SHIFT) }}</td></tr>
                <tr><td>TGL_KELUAR</td><td>{{ strtoupper($data[0]->TGL_KELUAR) }}</td></tr>
                <tr><td>MANAGER_NIK</td><td>{{ strtoupper($data[0]->MANAGER_NIK) }}</td></tr>
                <tr><td>STATUS_KARYAWAN</td><td>{{ strtoupper($data[0]->STATUS_KARYAWAN) }}</td></tr>
                <tr><td>USIA</td><td>{{ $USIA->format("%y") }}</td></tr>
                <tr><td>LAMA KERJA</td><td>{{ $LAMA_KERJA->format("%y") }}</td></tr>
        </table>
        
    </body>
</html>
