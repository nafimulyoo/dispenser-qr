@extends('app')
@section('content')
<table>
    <tr>
        <th>id</th>
        <th>Timestamp</th>
        <th>NIM</th>
        <th>Water Usage</th>
    </tr>
    @foreach ($status as $stat)
    <tr>
        <td>{{ $stat->id }}</td>
        <td>{{ $stat->created_at }}</td>
        <td>{{ $stat->NIM }}</td>
        <td>{{ $stat->water_usage }}</td>
    </tr>
    @endforeach
</table>
@endsection