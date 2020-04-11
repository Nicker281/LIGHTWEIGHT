    <nav class="navbar sticky-top navbar-expand-lg navbar-default">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/Logo-white.png') }}" alt="LightWeight logo" height="35px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-2x fa-ellipsis-h"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link nav-ani" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/shop/all" id="navbarDropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <p class="dropdown-item disabled">Women</p>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/shop/women">All</a>
                                    <!--<a class="dropdown-item" href="/shop/women">Tops</a>
                                    <a class="dropdown-item" href="/shop/women">Bottoms</a>-->
                                </div>
                                <div class="col">
                                    <p class="dropdown-item disabled">Men</p>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/shop/men">All</a>
                                    <!--<a class="dropdown-item" href="/shop/men">Tops</a>
                                    <a class="dropdown-item" href="/shop/men">Bottoms</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-ani" href="/challenges">Challenges</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-ani" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-ani" href="/contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="navbar-brand" href="https://www.instagram.com/lightweight.official"><i class="fab fa-2x
                     fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="https://vm.tiktok.com/GPUMKW/"><img src="{{ asset('/img/tiktok.png') }}" alt="TikTok" height="30px"></a>
                </li>
            </ul>
        </div>
    </nav>