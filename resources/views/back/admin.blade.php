@extends('layout.app')
    @section('content')
<div class="container">
    <table class="table">
    <thead>
    @foreach($email->all() as $row)
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">{{$row->id}}</th>
        <td>{{$row->email}}</td>
    </tr>
    </tbody>
    </table>


</div>
@endsection
<!-- FOOTER-->
