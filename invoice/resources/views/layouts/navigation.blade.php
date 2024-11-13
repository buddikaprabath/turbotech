<nav class="navbar">
  <div class="container">
    <a class="navbar-brand" href="#">TurboTech Motors</a>
  </div>
 <div>
    <ul>
        <li><div>{{ Auth::user()->name }}</div></li>
        <li>
          <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
            </x-dropdown-link>
        </li>
        <li><a href="{{route('logout')}}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
       
       LOGOUT
       <i class="bi bi-box-arrow-right"></i> 
               <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none">
                 @csrf
               </form>
    </a></li>
    </ul>
 </div>

</nav>