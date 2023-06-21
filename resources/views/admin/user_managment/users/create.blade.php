@extends('admin.layouts.app_admin')

@section('content')

<div class="intro">
<div class="textAll">

<p class="head">Создание пользователя </p>


  <form  action="{{route('admin.user_managment.user.store')}}" method="post">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.user_managment.users.partials.form')
    
  </form>
</div>
</div>
@endsection