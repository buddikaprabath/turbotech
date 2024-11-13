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
          <a href="{{route('employee.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li> 



         <!-- Stock -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Stock</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('employee.stocks.mainstock')}}" class="nav-link">Main Stock</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Service</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('employee.service.servicedetail')}}" class="nav-link">Service detail</a>
              </li>

            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Appoinment</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('employee.appoinments.appoinmentdetail')}}" class="nav-link">Appoinment Detail</a>
              </li>      
            </ul>
          </div>
        </li>


        
      </ul>
    </div>
  </nav>
  
      <!-- partial -->