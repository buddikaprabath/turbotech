<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        <form class="search-form">
            <div class="input-group">
  <div class="input-group-text">
    
  </div>
                
            </div>
        </form>
        <ul class="navbar-nav">
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