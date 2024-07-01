<!DOCTYPE html>
<html lang="id">
<head>
    <title>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP</title>
    <style>
        .table-header, .table-header > th, .table-header > td {
            width: 100%;
        }
        .table-title, .table-title > th, .table-title > td {
            width: auto;
        }
        .table-content {
            width: 100%;
            border-collapse: collapse;
        }
        .table-content tr td{
            border: 1px solid black;
        }
        .table-feedback {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        .table-feedback tr td{
            border: 1px solid black;
        }
        .table-signature {
            width: 70%;
            border-collapse: collapse;
            margin-left: 15%;
            margin-right: 15%;
            text-align: left;
        }
    </style>
</head>
<body>
<div>
    <table class="table-header">
        <tr>
            <td style="width: auto"><img src="{{public_path('assets/images/logo1.png')}}" alt="logo" height="70px"/> </td>
            <td style="text-align: center; width: 100%">
                <span style="font-size: 16px; font-weight: bold">YAYASAN DARUL HIKMAH</span>
                <br/>
                <span style="font-size: 20px; font-weight: bold">PONDOK PESANTREN DARUL HIKMAH MENGATI</span>
                <br/>
                <span style="font-style: italic">Ds. Menganti, Kec. Kedung, Kabupaten Jepara, Jawa Tengah 59463</span>
            </td>
            <td style="width: auto"><img src="{{public_path('assets/images/logo2.png')}}" alt="logo" height="70px"/> </td>
        </tr>
    </table>
    <hr/>
    <div style="text-align: center">
        <span style="font-size: 16px; font-weight: bold">KARTU UJIAN CALON SANTRI</span>
        <br/>
        <span style="font-size: 16px; font-weight: bold">PONPES DARUL HIKMAH MENGANTI</span>
        <br/>
    </div>
    <br/>
    <table class="table-title">
        <tr>
            <td style="width: auto">Nomor Pendaftaran</td>
            <td>:</td>
            <td style="width: auto">{{$student->register}}</td>
        </tr>
        <tr>
            <td style="width: auto">Nama Lengkap</td>
            <td style="width: auto">:</td>
            <td style="width: auto">{{$student->name}}</td>
        </tr>
        <tr>
            <td style="width: auto">Tempat & Tanggal Lahir</td>
            <td style="width: auto">:</td>
            <td style="width: auto">{{$student->birthplace. ', '. \Carbon\Carbon::create($student->birthdate)->translatedFormat('d F Y')}}</td>
        </tr>
        <tr>
            <td style="width: auto">Jenis Kelamin</td>
            <td style="width: auto">:</td>
            <td style="width: auto">{{$student->gender == 'L' ? "Laki-laki" : 'Perempuan'}}</td>
        </tr>
        <tr>
            <td style="width: auto">Nama Wali</td>
            <td style="width: auto">:</td>
            <td style="width: auto">{{$student->father}}</td>
        </tr>
        <tr>
            <td style="width: auto">Alamat</td>
            <td style="width: auto">:</td>
            <td style="width: auto">{{$student->address}}</td>
        </tr>
    </table>
    <br/>
    <table class="table-content">
        <tr>
            <td style="text-align: center; font-weight: bold; padding: 5px">JENJANG</td>
            <td style="text-align: center; font-weight: bold; padding: 5px">PROGRAM</td>
            <td style="text-align: center; font-weight: bold; padding: 5px">RUANG</td>
        </tr>
        <tr>
            <td style="text-align: center; padding: 5px">{{$student->ladder == '1' ? "Madrasah Tsanawiyah" : "Madrasah Aliyah"}}</td>
            <td style="text-align: center; padding: 5px">{{$student->program == "1" ? "Tahfidz" : "Kitab"}}</td>
            <td style="text-align: center; font-weight: bold; padding: 5px">{{$student->room}}</td>
        </tr>
    </table>
    <br/>
    <br/>
    <table class="table-signature">
        <tr>
            <td style="width: 450px">&nbsp;</td>
            <td style="width: 150px">Jepara, 28 Juni 2024</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Panitia PSB</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</div>
</body>
</html>
