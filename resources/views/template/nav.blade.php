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
                @php
                $carts = App\Cart::where('user_id',Auth::id())->get();
                $carts_num = count($carts);
                @endphp
                <li class="nav-item">
                    <a href="{{route('cart.index')}}" class="nav-link">
                        購物車
                        <span>{{$carts_num}}</span>
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

