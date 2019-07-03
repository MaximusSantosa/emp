<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <style>
            table, th, td {
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid black;
            }

            #invi {
                border: 0
            }
        </style>
    </head>
    <body>
        @include('partials.navbar')
        <br>
        <div class="content">
        <?php
            $titles=array("OP - NS", "OP - A", "OP - B", "OP - C", "OP - I", "OP - II", "STAFF - NS", "STAFF - A", "STAFF - B", "STAFF - C", "STAFF - I", "STAFF - II");
        ?>
        <br><h1>SDM REPORTS</h1><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <table> 
                    <!-- f0f0f5 -->
                        <thead bgcolor="#b3b3cc">
                            <tr>
                                <td>{{ strtoupper($data[26]) }} SDM REPORT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <table>
                                        <thead>
                                            <tr bgcolor="#b3d1ff">
                                                <td>OPERATOR</td>
                                                <td>L</td>
                                                <td>P</td>
                                                <td>TOTAL</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for($i = 0; $i < 6; $i++)
                                                @if($i % 2 == 0)
                                                <tr><td>{{ $titles[$i] }}</td><td>{{ $data[$i] }}</td><td>{{ $data[$i + 6] }}<td bgcolor="#80b3ff" style="font-weight: bold;">{{ $data[$i] + $data[$i + 6]}}</td></tr>
                                                @else
                                                <tr bgcolor="#e6f0ff"><td>{{ $titles[$i] }}</td><td>{{ $data[$i] }}</td><td>{{ $data[$i + 6] }}<td bgcolor="#80b3ff" style="font-weight: bold;">{{ $data[$i] + $data[$i + 6]}}</td></tr>
                                                @endif
                                            @endfor
                                            <tr><td>TOTAL OPERATOR</td><td>{{ $data[0] + $data[2] + $data[4] + $data[6] + $data[8] + $data[10] }}</td><td>{{ $data[1] + $data[3] + $data[5] + $data[7] + $data[9] + $data[11] }}</td><td bgcolor="#80b3ff" style="font-weight: bold;">{{ $data[0] + $data[1] + $data[2] + $data[3] + $data[4] + $data[5] + $data[6] + $data[7] + $data[8] + $data[9] + $data[10] + $data[11] }}</td></tr>
                                            <tr bgcolor="#e6f0ff"><td>SOPIR</td><td>{{ $data[12] }}</td><td>{{ $data[13] }}</td><td bgcolor="#80b3ff" style="font-weight: bold;">{{ $data[12] + $data[13] }}</td></tr>
                                            @for($i = 14; $i < 20; $i++)
                                                @if($i % 2 == 0)
                                                <tr><td>{{ $titles[$i - 8] }}</td><td>{{ $data[$i] }}</td><td>{{ $data[$i + 6] }}</td><td bgcolor="#80b3ff" style="font-weight: bold;">{{ $data[$i] + $data[$i + 6]}}</td></tr>
                                                @else
                                                <tr bgcolor="#e6f0ff"><td>{{ $titles[$i - 8] }}</td><td>{{ $data[$i] }}</td><td>{{ $data[$i + 6] }}<td bgcolor="#80b3ff" style="font-weight: bold;">{{ $data[$i] + $data[$i + 6]}}</td></tr>
                                                @endif
                                            @endfor
                                            <tr><td>TOTAL STAFF</td><td>{{ $data[14] + $data[16] + $data[18] + $data[20] + $data[22] + $data[24] }}</td><td>{{ $data[15] + $data[17] + $data[19] + $data[21] + $data[23] + $data[25] }}</td><td bgcolor="#80b3ff" style="font-weight: bold;">{{ $data[14] + $data[15] + $data[16] + $data[17] + $data[18] + $data[19] + $data[20] + $data[21] + $data[22] + $data[23] + $data[24] + $data[25] }}</td></tr>
                                            <tr bgcolor="#4d94ff" style="font-weight: bold;"><td>GRAND TOTAL</td><td>{{ $data[0] + $data[2] + $data[4] + $data[6] + $data[8] + $data[10] + $data[12] + $data[14] + $data[16] + $data[18] + $data[20] + $data[22] + $data[24] }}</td><td>{{ $data[1] + $data[3] + $data[5] + $data[7] + $data[9] + $data[11] + $data[13] + $data[15] + $data[17] + $data[19] + $data[21] + $data[23] + $data[25] }}</td><td>{{ array_sum($data) }}</td></tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </body>
</html>
