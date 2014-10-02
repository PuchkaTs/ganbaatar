<div class="quick-access">
    <div class="container">
            @if($shots = Shot::get())
            <ul id="slideshowShot" class="pull-left">
                @foreach($shots as $index => $shot)
                @if($index == 0)
                <li class="next">
                        <p >{{ $shot->message }}
                        </p>
                </li>
                @else
                <li>
                        <p>{{ $shot->message }}
                        </p>
                </li>
                @endif()

                @endforeach()
            </ul>

            @endif()
        <p class="pull-right"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-soundcloud"></i></a></p>
    </div>
</div>

<header class="mainheader">
    <nav class="navbar navbar-default role="navigation" >
    <div class="container">
        <div class="slidenav1" id="navslide">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand animated fadeInDown hidden-xs hidden-sm" href="/">{{ HTML::image("logo.png") }}</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ set_active('/') }}"><a href="/">Нүүр</a></li>
                    <li class="dropdown {{ Request::is('policy/*') ? 'active' : '' }}" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Бодлого <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach(Content::get() as $policy)
                                <li ><a href="/policy/{{$policy->id}}">{{ $policy->header }}</a></li>
                            @endforeach()
                        </ul>
                    </li>
                    <li class="{{ Request::is('news') ? 'active' : '' }}"><a href="/news">Мэдээлэл</a></li>
                    <li class="{{ Request::is('video') ? 'active' : '' }}"><a href="/video">Бичлэг</a></li>
                    <li class="{{ Request::is('career') ? 'active' : '' }}"><a href="/career">Танилцуулга</a></li>
                    <li class="dropdown {{ Request::is('contact/*') ? 'active' : '' }}" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Холбогдох <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li ><a href="/ask">Ганбаатараас асуух</a></li>
                            <li><a href="/contact_us">Холбогдох</a></li>
                        </ul>
                    </li>
            </div>
        </div>

    </div>

    </nav>

</header>
