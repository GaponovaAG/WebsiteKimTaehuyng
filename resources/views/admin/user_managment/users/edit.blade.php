@extends('admin.layouts.app_admin')

@section('content')

<div class="intro">
<div class="textAll">

<p class="head">Редактирование пользователя </p>

  <form class="form-horizontal" action="{{route('admin.user_managment.user.update', $user)}}" method="post">
    {{ method_field('PUT')}}
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.user_managment.users.partials.form')
    
  </form>
</div>
</div>

@endsection