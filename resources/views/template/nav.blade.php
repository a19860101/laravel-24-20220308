<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('post.index')}}">QQ BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">文章列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.create')}}">建立文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.index')}}">分類管理</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
