@extends('app')
@section('content')
<table>
    <tr>
        <th>id</th>
        <th>Timestamp</th>
        <th>NIM</th>
        <th>Water Usage</th>
        <th>pH</th>
        <th>TDS</th>
    </tr>
    @foreach ($status as $stat)
    <tr>
        <td>{{ $stat->id }}</td>
        <td>{{ $stat->created_at }}</td>
        <td>{{ $stat->NIM }}</td>
        <td>{{ $stat->water_usage }}</td>
        <td>{{ $stat->pH }}</td>
        <td>{{ $stat->TDS }}</td>
    </tr>
    @endforeach
</table>
@endsection