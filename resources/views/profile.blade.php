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
            $TGL_LAHIR=date_create((string)($data->tgl_lahir));
            $TGL_MASUK=date_create((string)($data->tgl_masuk));
            //$TODAY=date_create((string)($data->today));
            $TODAY=date_create((string)(date('m/d/Y')));
            $USIA=date_diff($TGL_LAHIR, $TODAY);
            $LAMA_KERJA=date_diff($TGL_MASUK, $TODAY);
            $picStart="/profilepics/";
            $picMale="MaleNoPic";
            $jpg=".jpg";
        ?>
        <br><h2>EMPLOYEE INFO</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <table align="center" cellpadding="0" cellspacing="0" style="width: 100%">
                        <thead>
                            <tr><td><h3><br></h3></td></tr>
                            <tr><td colspan="2">
                                <img src="{{ $data->img }}" style="width:100%;">
                            </td></tr>
                            <tr><td><h3><br></h3></td></tr>
                        </thead>
                        <tbody align="left">
                            <tr><td>ID</td><td>{{ strtoupper($data->id) }}</td></tr>
                            <tr><td>NO</td><td>{{ strtoupper($data->no) }}</td></tr>
                            <tr><td>NIK</td><td>{{ strtoupper($data->nik) }}</td></tr>
                            <tr><td>GENDER</td><td>{{ strtoupper($data->gender) }}</td></tr>
                            <tr><td>TGL LAHIR</td><td>{{ strtoupper($data->tgl_lahir) }}</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table align="center" cellpadding="0" cellspacing="0" style="width: 100%">
                        <thead>
                            <tr><td><h3><br></h3></td></tr>
                            <tr>
                                <td colspan="2"><h2>{{ strtoupper($data->nama) }}</h2></td>
                            </tr>
                            <tr><td><h3><br></h3></td></tr>
                        </thead>
                        <tbody align="left">
                            <tr><td>TGL MASUK</td><td>{{ strtoupper($data->tgl_masuk) }}</td></tr>
                            <tr><td>CATEGORY</td><td>{{ strtoupper($data->category) }}</td></tr>
                            <tr><td>JAB</td><td>{{ strtoupper($data->jab) }}</td></tr>
                            <tr><td>PERUSAHAAN</td><td>{{ strtoupper($data->perusahaan) }}</td></tr>
                            <tr><td>DEPT</td><td>{{ strtoupper($data->dept) }}</td></tr>
                            <tr><td>SHIFT</td><td>{{ strtoupper($data->shift) }}</td></tr>
                            <tr><td>TGL KELUAR</td><td>{{ strtoupper($data->tgl_keluar) }}</td></tr>
                            <tr><td>MANAGER NIK</td><td>{{ strtoupper($data->manager_nik) }}</td></tr>
                            <tr><td>STATUS KARYAWAN</td><td></td></tr>
                            <tr><td>USIA</td><td>{{ $USIA->format("%y") }}</td></tr>
                            <tr><td>LAMA KERJA</td><td>{{ $LAMA_KERJA->format("%y") }}</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </body>
</html>
