<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.navbar')    
        <br>
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
                    <td>
                        {{ strtoupper($row->NAMA) }}
                        {{ Form::open (['route' => ['profile', 'id'=>$row->ID], 'method' => 'GET']) }}
                            {{ Form::submit('View Profile', ['class' => 'btn btn-primary']) }}
                        {{ Form::close() }}

                        
                    </td>
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
