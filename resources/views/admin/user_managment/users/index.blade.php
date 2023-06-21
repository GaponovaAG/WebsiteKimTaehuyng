@extends('admin.layouts.app_admin')

@section('content')

<div class="intro">
<div class="textAll">
<div><p class="head">Список пользователей </p></div>

  
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Имя</th>
      <th>Роль</th>
      <th>Емейл</th>
      
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse ($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          @if($user->is_admin==1)<td>Админ </td>
            @else <td>Пользователь </td>
            @endif
         
          <td>{{$user->email}}</td>
          
          <td>
            <form onsubmit="if(confirm('Удалить?')){return true}else{return false }" action="{{route('admin.user_managment.user.destroy', $user)}}" method="post">
              {{ method_field('DELETE') }}<!--это хелпер. Отрисовка скрытого поля который отсылает о методе-->
              {{ csrf_field() }}<!--Хелпер генерации токена безопасности-->
              <a class="a_edit" href="{{route('admin.user_managment.user.edit', $user)}}">Редактировать</a>
              <button class="a_c" type="submit">Удалить</button>
            </form>
            
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3" class="text-center">
            <ul>{{$users->links()}}</ul>
            </td><!--вот тут вот я не уверена это пагинация-->
        </tr>
    </tfoot>
  </table>
  <div class="b_start">
    <a class="a_admin" href="{{route('admin.user_managment.user.create')}}" >Создать</a>
  </div>
  
</div>
</div>
<div class="none"></div>

@endsection