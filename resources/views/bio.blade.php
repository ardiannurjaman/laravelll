@extends('layout.main')
@section('content')
<h1 align="center">BIODATA DIRI</h1>
<table border="1" cellspacing="0" cellpadding="5" align="center" width="800">
<tr align="center" bgcolor="# 809758">
<td width="200">DATA DIRI</td>
<td width="400">KETERANGAN</td>
<td width="300">FOTO DIRI</td>
</tr>
<tr>
<td>Nama</td>
<td>Ardian Nurjaman</td>
<td rowspan = "10" align="center"><img src="{{ asset('assets/img/arya.jpg') }}" alt="nama gambar" width="300"></td>
</tr>
<tr>
<td>Tempat/Tanggal Lahir</td>
<td>Bekasi, 22 April 2006</td> 
</tr>
<tr>
<td>Alamat</td>
<td>Jatiwarna pondok melati</td>
</tr>
<tr>
<td>Agama</td>
<td>Islam</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>Laki-Laki</td>
</tr>
<tr>
<td>Pekerjaan</td>
<td>Mahasiswa</td>
</tr>
<tr>
<td>Hobi</td>
<td>Olahraga</td>
</tr>
</table>
@endsection