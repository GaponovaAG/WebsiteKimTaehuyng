

@extends('layouts.app')

@section('content')
<div class="div2_lk">
    <div class="head2">
                Вы в личном кабинете
    </div>
    

<div class="head2">       

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="a_b" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Выйти') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
  
    </div>    
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">

                <div class="card-body">
                    <!--ФАСАД АУС ПРОВЕРЯЕТ РОЛЬ ПОЛЬЗОВАТЕЛЯ-->
                    @if ( Auth::user()->is_admin == 1 )
                    <div class="header2">
                        <div ><a class="a_b" href="{{ route('admin.index') }}">Перейти в админ панель</a></div>
                    </div>
                    @else 
                    <p>Вы зашли под учеткой </p>{{Auth::user()->name}}<br>{{Auth::user()->email}}
                    @endif
                     
                </div>
                
        </div>
    </div>
</div>
<div class="none"></div>


@endsection
