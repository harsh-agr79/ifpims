@extends('layout')
@section('title')
    <title>Pollution</title>
@endsection
@section('main')
<style>
    .imgtb{
        height: 100px;
    }
</style>
<div class="center">
    <h4>Pollutions Database</h4>
</div>
<div class="mp-card" style="margin-top: 10px;">
    <table>
        <thead>
            <th>sn</th>
            <th>Area</th>
            <th>Lattitude</th>
            <th>Longitude</th>
            <th>Image</th>
            <th>Environmental Readings</th>
            <th>Analysis</th>
        </thead>
        <tbody>
            @php
                $a = 0;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <td>{{$a = $a + 1}}</td>
                    <td>{{$item->area}}</td>
                    <td>{{$item->lattitude}}</td>
                    <td>{{$item->longitude}}</td>
                    <td><img src="{{asset($item->image)}}" class="materialboxed imgtb" alt=""></td>
                    <td>{{$item->env_reading}}</td>
                    <td>{{$item->analysis}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection