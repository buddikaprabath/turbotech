<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        TURBO<span>tech</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li> 


        <!-- Employee -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Employee</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('admin.Employeedetail.employee')}}" class="nav-link">Detail</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.Employeedetail.empregister')}}" class="nav-link">Register</a>
              </li>
              
            </ul>
          </div>
        </li>


         <!-- Stock -->

       
<!-- bill -->
       


        
  </nav>
  
      <!-- partial -->