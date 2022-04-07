<style>
    .carts_num {
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        background-color: #f00;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        line-height: 20px;
        top:0;
        right: -5px;
        font-size: 14px;
    }
</style>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('post.index')}}">QQ BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.list')}}">商品列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('post.index')}}">文章列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('contact')}}">聯絡我</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.create')}}">建立文章</a>
                </li>
                @if(Auth::user()->role_id == 2)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.index')}}">分類管理</a>
                </li>
                @endif
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a href="{{route('search')}}" class="nav-link">搜尋文章</a>
                </li>
                @php
                $carts = App\Cart::where('user_id',Auth::id())->get();
                $carts_num = count($carts);
                @endphp
                <li class="nav-item">
                    <a href="{{route('cart.index')}}" class="nav-link position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                        <span class="carts_num">{{$carts_num}}</span>
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                @endguest
            </ul>
        </div>
    </div>
</nav>

