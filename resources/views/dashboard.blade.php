@extends('layout')
@section('title')
    <title>IFP IMS DRONE</title>
@endsection
@section('main')
    <div class="center">
        <h5>Dashboard</h5>
    </div>
    <div class="row">
        <div class="col s12 m6 l6">
            <div class="center">
                <h6 style="font-weight:600;">Live Location</h6>
            </div>
            <div class="black" style="height: 300px;">

            </div>
        </div>

        <div class="col s12 m6 l6">
            <div class="center">
                <h6 style="font-weight: 600;">Warnings</h6>
            </div>
            <div>
                <table>
                    <thead>
                        <th>Type</th>
                        <th>Coordinates</th>
                        <th>Image</th>
                        <th>Analysis</th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection