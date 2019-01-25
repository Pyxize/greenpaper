@extends('layouts.app')

@section('content')


    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Emails</th>
                </tr>
            </thead>
            <tbody>
            @foreach($email->all() as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->email}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@endsection
