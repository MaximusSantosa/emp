<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.navbar')
        <br>
        <div class="content">
        <?php
            $TGL_LAHIR=date_create((string)($data->TGL_LAHIR));
            $TGL_MASUK=date_create((string)($data->TGL_MASUK));
            $TODAY=date_create((string)($data->TODAY));
            $USIA=date_diff($TGL_LAHIR, $TODAY);
            $LAMA_KERJA=date_diff($TGL_MASUK, $TODAY);
            $picStart="/profilepics/";
            $picMale="MaleNoPic";
            $jpg=".jpg";
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <table align="center">
                        <thead>
                            <tr>
                                <td colspan="2"><h2>EMPLOYEE INFO</h2></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td colspan="2">
                                <img src="{{ $data->img }}" style="width:250px;">
                            </td></tr>
                            <tr><td>ID</td><td>{{ strtoupper($data->ID) }}</td></tr>
                            <tr><td>NO</td><td>{{ strtoupper($data->NO) }}</td></tr>
                            <tr><td>NIK</td><td>{{ strtoupper($data->NIK) }}</td></tr>
                            <tr><td>NAMA</td><td>{{ strtoupper($data->NAMA) }}</td></tr>
                            <tr><td>GENDER</td><td>{{ strtoupper($data->GENDER) }}</td></tr>
                            <tr><td>TGL LAHIR</td><td>{{ strtoupper($data->TGL_LAHIR) }}</td></tr>
                            <tr><td>TGL MASUK</td><td>{{ strtoupper($data->TGL_MASUK) }}</td></tr>
                            <tr><td>CATEGORY</td><td>{{ strtoupper($data->CATEGORY) }}</td></tr>
                            <tr><td>JAB</td><td>{{ strtoupper($data->JAB) }}</td></tr>
                            <tr><td>PERUSAHAAN</td><td>{{ strtoupper($data->PERUSAHAAN) }}</td></tr>
                            <tr><td>DEPT</td><td>{{ strtoupper($data->DEPT) }}</td></tr>
                            <tr><td>SHIFT</td><td>{{ strtoupper($data->SHIFT) }}</td></tr>
                            <tr><td>TGL_KELUAR</td><td>{{ strtoupper($data->TGL_KELUAR) }}</td></tr>
                            <tr><td>MANAGER_NIK</td><td>{{ strtoupper($data->MANAGER_NIK) }}</td></tr>
                            <tr><td>STATUS_KARYAWAN</td><td>{{ strtoupper($data->STATUS_KARYAWAN) }}</td></tr>
                            <tr><td>USIA</td><td>{{ $USIA->format("%y") }}</td></tr>
                            <tr><td>LAMA KERJA</td><td>{{ $LAMA_KERJA->format("%y") }}</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </body>
</html>
