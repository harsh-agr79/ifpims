@extends('layout')
@section('title')
    <title>Disasters</title>
@endsection
@section('main')
    <div class="center">
        <h4>Water Quality Sample Database</h4>
    </div>
    <div class="mp-card" style="margin-top: 10px;">
        <table>
            <thead>
                <th>id</th>
                <th>date</th>
                <th>ph</th>
                <th>tds</th>
                <th>water temp</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->created_date}}</td>
                        <td>{{$item->water_ph}}</td>
                        <td>{{$item->TDS}}</td>
                        <td>{{$item->water_temp}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection