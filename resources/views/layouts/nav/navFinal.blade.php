<li class="nav-item ">
    <a class="nav-link dropdown-item" href="{{route('posts.crear')}}" >
        Nuevo Post <span class="caret"></span>
    </a>

    
</li> 
<li class="nav-item ">
<a id="dropdown-menu" class="nav-link dropdown-item" href="{{route('notifications.index')}}" aria-haspopup="true" aria-expanded="false" v-pre>
        Notificaciones 
        @if ($count = Auth::user()->unreadNotifications->count())
       
    <span class="badge">{{$count}}</span> 
        @endif
        <span class="caret"></span>
    </a>

    
</li>
<li class="nav-item ">
    <a class="nav-link dropdown-item" href="{{route('messages.create')}}" >
        Enviar mensaje <span class="caret"></span>
    </a>

    
</li>