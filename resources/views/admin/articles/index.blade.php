@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Список новостей @endslot
    @slot('parent') Главная @endslot
    @slot('active') Новости @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right">Создать новость</a>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse ($articles as $article)
        <tr>
          <td>{{$article->title}}</td>
          <td>{{$article->published}}</td>
          <td>
            <form onsubmit="if(confirm('Удалить?')){return true}else{return false }" action="{{route('admin.article.destroy', $article)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}<!--Хелпер генерации токена безопасности-->
              <a href="{{route('admin.article.edit', $article->id)}}">Редактировать</a>
              <button type="submit">Удалить</button>
            </form>
            
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection