<header class="flex header" id="header">
    <nav class="header-nav">
        <div class="flex button-menu" id="button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <div class="flex menu" id="menu">
            <a class="header-navlink" href="{{ route('home') }}">
                {{ __('home') }}
            </a>
            <a class="header-navlink" href="{{ route('about') }}">
                {{ __('about') }}
            </a>
            <a class="header-navlink" href="{{ route('works') }}">
                {{ __('works') }}
            </a>
            <a class="header-navlink" href="https://blog.jodaz.xyz/" target="_blank">
                {{ __('blog') }}
            </a>
            <div class="flex aic lang--container">
                @foreach (language()->allowed() as $code => $name)
                    <a href="{{ language()->back($code) }}" class="header-navlink" title="{{ $name }}">{{ $code }}</a>
                @endforeach
            </div>
        </div>
    </nav>
</header>
