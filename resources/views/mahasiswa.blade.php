@extends('app')
@section('content')
<table>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Water Usage</th>
    </tr>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs->id }}</td>
        <td>{{ $mhs->NIM }}</td>
        <td>{{ $mhs->name }}</td>
        <td>{{ $mhs->water_usage }}</td>
    </tr>
    @endforeach
</table>
@endsection