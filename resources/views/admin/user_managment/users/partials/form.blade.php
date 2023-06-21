<!--перебрать массив с ошибками если ошибки существуют-->
@if ($errors->any())
  <div class="alert">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div> 
@endif
<div class="table_create_form">
<div class="table_create">

<div><label for="">Имя</label></div>
<div><input type="text" class="form-control" name="name" placeholder="Имя" value="@if(old('name')){{old('name')}}@else{{$user->name ??""}} @endif " required></div>


<div><label for="">Роль</label></div>
<div><input type="text" class="form-control" name="is_admin" placeholder="1/0" value="@if(old('is_admin')){{old('is_admin')}}@else{{$user->is_admin??""}} @endif " required></div>

<div><label for="">Емейл</label></div>
<div><input type="email" class="form-control" name="email" placeholder="Емейл" value="@if(old('email')){{old('email')}}@else{{$user->email ??""}} @endif " required></div>

<div><label for="">Пароль</label></div>
<div><input type="password" class="form-control" name="password" ></div>

<div><label for="">Подтверждение пароля</label></div>
<div><input type="password" class="form-control" name="password_confirmation" ></div>
</div>


<div class="b_start">
    <button class="a_c"  type="submit" value="Сохранить">Сохранить</button>
  </div>
  </div>
  <div class="none"></div>
