<div class='header'>
    <div class='container'></div>
</div>
<!-- //header -->
<!-- header-bot -->

<div class='header-bot'>

    <div class='container'>
        <div class='col-md-3 header-left'>
            <h1><a href="{{route('home')}}"><img src="{{asset ('images/logo3.jpg')}}"/></a></h1>
        </div>

        <div class='col-md-6 header-middle'>
            <form>
                <div class='search'>
                    <input type='search' value='Buscar' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = 'Search';}' required>
                </div>
                <div class='section_room'>

                </div>
                <div class='sear-sub'>
                    <input type='submit' value=' '>
                </div>
                <div class='clearfix'></div>
            </form>
        </div>
        <div class='col-md-3 header-right footer-bottom'>
            <ul>

                    <li><a href="{{ route('login') }}" class='use1' ><span>{{ __('Login') }}</span></a>
                </li>
                <li><a class='fb' href='https://www.facebook.com/pages/category/Shopping-Mall/Centro-Comercial-Chiriyacu-758169454533172/'></a></li>
                <li><a class='you' href='https://www.youtube.com/watch?v=QswzZfGfb3s'></a></li>
                <li><a class='insta' href='https://www.instagram.com/chiriyacucc/?hl=es-la'></a></li>
            </ul>
        </div>
        <div class='clearfix'></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class='ban-top'>
    <div class='container'>
        <div class='top_nav_left'>
            <nav class='navbar navbar-default'>
                <div class='container-fluid'>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class='navbar-header'>
                        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class='collapse navbar-collapse menu--shylock align-content-center' id='bs-example-navbar-collapse-1'>
                        <ul class='nav navbar-nav menu__list'>
                            <li class='active menu__item menu__item--current'><a class='menu__link' href="{{route('home')}}">INICIO </a></li>
                            <li class='menu__item'>
                                <a href="" class=' menu__link'  role='button' aria-haspopup='true' aria-expanded='false'>Eventos</a>
                            </li>
                            <li class='menu__item'>
                                <a href="" class=' menu__link'  role='button' aria-haspopup='true' aria-expanded='false'>Productos</a>
                            </li>
                            <li class='menu__item'>
                                <a class='menu__link'  href="{{route('blog_index')}}">Blog </a>
                            </li>
                            <li class=' menu__item'><a class='menu__link' href="">Contactanos</a></li>
                            <li class=' menu__item'><a class='menu__link' href="">Eventos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class='top_nav_right'>

        </div>
        <div class='clearfix'></div>
    </div>
</div>
