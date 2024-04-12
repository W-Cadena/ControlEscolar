@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/clinicas/'.$clinica->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}}

@include('clinicas.form',['modo' =>'Editar'])

</form>
</div>
@endsection