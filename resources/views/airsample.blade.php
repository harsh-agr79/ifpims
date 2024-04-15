@extends('layout')
@section('title')
    <title>Sample Data</title>
@endsection
@section('main')
    <div class="center">
        <h4>Air Quality Sample Database</h4>
    </div>
    <div class="mp-card" style="margin-top: 10px;">
        <table>
            <thead>
                <th>id</th>
                <th>mq1</th>
                <th>mq2</th>
                <th>mq3</th>
                <th>mq4</th>
                <th>mq5</th>
                <th>mq6</th>
                <th>co2</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->mq1}}</td>
                        <td>{{$item->mq2}}</td>
                        <td>{{$item->mq3}}</td>
                        <td>{{$item->mq4}}</td>
                        <td>{{$item->mq5}}</td>
                        <td>{{$item->mq6}}</td>
                        <td>{{$item->co2}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection