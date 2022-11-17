@extends('app')
@section('content')
<table>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
    </tr>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs->id }}</td>
        <td>{{ $mhs->NIM }}</td>
        <td>{{ $mhs->name }}</td>
    </tr>
    @endforeach
</table>
@endsection