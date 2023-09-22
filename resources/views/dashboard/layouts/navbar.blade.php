        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-user mr-2"></i>
                        {{ auth()->user()->username }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post" id="formLogout">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="fas fa-key mr-2"></i>Signout</button>
                        </form>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
