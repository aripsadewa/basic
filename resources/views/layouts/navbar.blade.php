<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Basic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            @foreach ($navbar as $name => $url)
                <li class="nav-item{{ request()->is($name) ? ' active' : '' }}">
                    <a class="nav-link" href="{{ $url }}">{{ $name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
