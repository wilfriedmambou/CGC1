<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">@if(Auth::user()){{{Auth::user()->name}}}@endif</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Posts</p>
                </a>
            </li>
            @if(Auth::user()->isAdministrator())
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Users</p>
                </a>

            </li>
            @endif
            <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Questions</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reponses</p>
                </a>
            </li>





            {{-- <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Forms
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/forms/general.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>General Elements</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/advanced.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Advanced Elements</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/editors.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Editors</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/validation.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Validation</p>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <li class="nav-header">LABELS</li>
            <li class="nav-item">

                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->