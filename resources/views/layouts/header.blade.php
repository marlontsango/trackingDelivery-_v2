<section class="menu menu1 cid-st2eExKwNs" once="menu" id="menu01-1">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="{{asset('files/images/logo.png')}}" alt="Mobirise" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="#">Finexs Transport</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black display-7" href="{{route('acceuil')}}"aria-expanded="true">
                            Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-7" href="{{route('services')}}">services</a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-black display-7" href="{{route('contacts')}}">Contacts</a>

                    </li>

                    @if(!Auth::user())
                        <li class="nav-item"><a class="nav-link link text-black display-7" href="{{route('login')}}">Log in</a>

                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link link text-black display-7" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>

                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @endif



                </ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>

                </div>

            </div>
        </div>
    </nav>
</section>
