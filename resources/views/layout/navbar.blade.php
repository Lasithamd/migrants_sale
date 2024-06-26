<header id="header" class="clearfix">

        <nav class="navbar navbar-default navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tr-mainmenu" aria-controls="tr-mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>
                <a class="navbar-brand" href="{{ url('/')}}"><span>Migration Sale</span></a>
                <div class="collapse navbar-collapse" id="tr-mainmenu">
                    <ul class="lang-btn">
                        <li class="active"><a href="index.html">සිංහල</a></li>
                        <li><a href="index-one.html">தமிழ்</a></li>
                        <li><a href="index-two.html">English</a></li>
                    </ul>
                    {{-- <ul class="nav navbar-nav">
                        <li class="active dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">  English <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index.html">සිංහල</a></li>
                                <li><a href="index-one.html">தமிழ்</a></li>
                                <li><a href="index-two.html">English</a></li>
                            </ul>
                        </li>
                       
                    </ul> --}}
                </div>
                <div class="nav-right">
                    

                    <ul class="sign-in">
                        <li><i class="fa fa-user"></i> Sign In </li>
                       
                        {{-- <li><a href="signup.html">Register</a></li> --}}
                    </ul>
                    <a href="{{ route('ads.register')}}" class="btn">Post Your Ad</a>
                </div>
            </div>
        </nav>
    </header>