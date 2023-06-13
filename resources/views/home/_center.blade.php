<section id="center" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 center clearfix">
                <div class="center_inner">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/home">HOME</a></li>
                                            <li><a href="/blog">BLOG</a></li>
                                            <li><a href="/anno">ANNOUNCEMENTS</a></li>
                                            <li><a href="/msg">CONTACT</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="/home">HOME</a></li>
                                    <li><a href="/blog">BLOG</a></li>
                                    <li><a href="/msg">CONTACT</a></li>
                                    <li class="dropdown navbar-right">
                                        @if(Auth::check())
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route("user_profile")}}">MY ACCOUNT</a></li>
                                                <form action="{{ route('user_logout') }}" method="post" id="logout-form">
                                                    @csrf
                                                    <li class="text-center">
                                                        <button type="submit" style="font-size: large" class="btn btn-link">Logout</button>
                                                    </li>
                                                </form>
                                            </ul>
                                        @else
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">GUEST<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="admin/login">Login</a></li>
                                                <li><a href="/register">Register</a></li>
                                            </ul>
                                        @endif
                                    </li>

                                </ul>
                            </div><!-- /.navbar-collapse -->

                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

