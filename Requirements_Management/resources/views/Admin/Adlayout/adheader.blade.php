      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search by Category" name = "search" value = "" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
        
             <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto"><br/>
                            <li class="nav-item dropdown">
                               
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}&ensp;
                                 
                                    <img alt="image" src="/template/template/assets/img/avatar/avatar-1.png" width="30" height="30" class="rounded-circle">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end col-md-6" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                   
                                </div>
                            </li>
              
                    </ul>
      </nav>