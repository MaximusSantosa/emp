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
                    <td>NIK</td>
                    <td>NAMA</td>
                    <td>JAB</td>
                    <td>DEPT</td>
                    <td>SHIFT</td>
                    <td>STATUS</td>
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
                    <td>{{ strtoupper($row->NIK) }}</td>
                    <td>
                        {{ Form::open (['route' => ['profile', 'id'=>$row->ID], 'method' => 'GET']) }}
                            {{ Form::submit(strtoupper($row->NAMA), ['class' => 'link']) }}
                        {{ Form::close() }}
                    </td>
                    <td>{{ strtoupper($row->JAB) }}</td>
                    <td>{{ strtoupper($row->DEPT) }}</td>
                    <td>{{ strtoupper($row->SHIFT) }}</td>
                    <td>{{ strtoupper($row->STATUS_KARYAWAN) }}</td>
                </tr>
            @endforeach 
            </tbody>
        </table>
        </div>
        <script>
            feather.replace();
            $(document).ready( function () {
                $('#table').DataTable({
                    "deferRender": true
                });

                $('#refresh').on('click',function(){
                    $('#status').text(' Refreshing ...');
                    var url="/api";
                    $.ajax({
                      url: url
                  }).done(function(res) {
                        $('#status').text(res.msg);
                        location.reload();
                  });
                })
            } );
            
        </script>
    </body>
</html>
