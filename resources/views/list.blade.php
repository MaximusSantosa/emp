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
        <button class="btn btn-primary">Test</button>
        
        <div class="content">
        
        <table id="table" class="display nowrap">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NO</td>
                    <td>NIK</td>
                    <td>NAMA</td>
                    <td>GENDER</td>
                    <td>TGL LAHIR</td>
                    <td>TGL MASUK</td>
                    <td>CATEGORY</td>
                    <td>JAB</td>
                    <td>PERUSAHAAN</td>
                    <td>DEPT</td>
                    <td>SHIFT</td>
                    <td>TGL KELUAR</td>
                    <td>MANAGER NIK</td>
                    <td>STATUS KARYAWAN</td>
                    <td>TODAY</td>
                    <td>USIA</td>
                    <td>LAMA KERJA</td>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <?php
                    $TGL_LAHIR=date_create((string)($row->TGL_LAHIR));
                    $TGL_MASUK=date_create((string)($row->TGL_MASUK));
                    $TODAY=date_create((string)($row->TODAY));
                    $USIA=date_diff($TGL_LAHIR, $TODAY);
                    $LAMA_KERJA=date_diff($TGL_MASUK, $TODAY);
                ?>
                <tr>
                    <td>{{ strtoupper($row->ID) }}</td>
                    <td>{{ strtoupper($row->NO) }}</td>
                    <td>{{ strtoupper($row->NIK) }}</td>
                    <td>{{ strtoupper($row->NAMA) }}</td>
                    <td>{{ strtoupper($row->GENDER) }}</td>
                    <td>{{ strtoupper($row->TGL_LAHIR) }}</td>
                    <td>{{ strtoupper($row->TGL_MASUK) }}</td>
                    <td>{{ strtoupper($row->CATEGORY) }}</td>
                    <td>{{ strtoupper($row->JAB) }}</td>
                    <td>{{ strtoupper($row->PERUSAHAAN) }}</td>
                    <td>{{ strtoupper($row->DEPT) }}</td>
                    <td>{{ strtoupper($row->SHIFT) }}</td>
                    <td>{{ strtoupper($row->TGL_KELUAR) }}</td>
                    <td>{{ strtoupper($row->MANAGER_NIK) }}</td>
                    <td>{{ strtoupper($row->STATUS_KARYAWAN) }}</td>
                    <td>{{ strtoupper($row->TODAY) }}</td>
                    <td>{{ $USIA->format("%y") }}</td>
                    <td>{{ $LAMA_KERJA->format("%y") }}</td>
                </tr>
            @endforeach 
            </tbody>
        </table>
        </div>
        <script>
            $(document).ready( function () {
                $('#table').DataTable({
                });
            } );
        </script>
    </body>
</html>
