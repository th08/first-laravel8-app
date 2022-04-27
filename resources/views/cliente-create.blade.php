@extends('layouts.app')
@section('content')
<div class="container">
  <form action="{{route('cliente.create.save')}}" method="POST">
    @include('layouts._form-cliente')
  </form>
</div>
@endsection