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
            $TGL_LAHIR=date_create((string)($data[0]->TGL_LAHIR));
            $TGL_MASUK=date_create((string)($data[0]->TGL_MASUK));
            $TODAY=date_create((string)($data[0]->TODAY));
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
                                <?php if (file_exists(public_path().$picStart.$data[0]->NIK)) {
                                ?>
                                    <img src="{{ $picStart.$data[0]->NIK }}" style="width:250px;">
                                <?php } else { ?>
                                    <img src="{{ $picStart.$picMale }}" style="width:250px;">
                                <?php } ?>
                            </td></tr>
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
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </body>
</html>
