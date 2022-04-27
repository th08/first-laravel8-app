@extends('layouts.app')
@section('content')
<div class="container">
  <form action="{{route('cliente.edit.update', $registro->id)}}" method="POST">
    @include('layouts._form-cliente')
  </form>
</div>
@endsection