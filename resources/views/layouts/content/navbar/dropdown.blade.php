<li class="nav-item active">
    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="{{ route('client') }}">Cliente <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="{{ route('product') }}">Produto <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="{{ route('rent') }}">Locação <span class="sr-only">(current)</span></a>
</li>



<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById ('logout-form').submit();">logout</a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>