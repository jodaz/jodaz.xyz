<footer class="flex container">
    <div class="flex row jc social">
        <a title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/jodaz">
            <img src="{{ asset('assets/icons/linkedin.svg') }}" class="social-icon" alt="linkedin" />
        </a>
        <a title="Github" target="_blank" href="https://github.com/jodaz">
            <img src="{{ asset('assets/icons/github.svg') }}" class="social-icon" alt="github" />
        </a>
        <a title="Twitter" target="_blank" href="https://twitter.com/jodaz_">
            <img src="{{ asset('assets/icons/twitter.svg') }}" class="social-icon" alt="twitter" />
        </a>
        <a title="Telegram" target="_blank" href="https://t.me/j0daz">
            <img src="{{ asset('assets/icons/telegram.svg') }}" class="social-icon" alt="telegram" />
        </a>
        <a title="Instagram" target="_blank" href="https://instagram.com/j0daz">
            <img src="{{ asset('assets/icons/instagram.svg') }}" class="social-icon" alt="instagram" />
        </a>
        <a title="Hasnode" target="_blank" href="https://hasnode.com/@jodaz">
            <img src="{{ asset('assets/icons/hashnode.svg') }}" class="social-icon" alt="hashnode" />
        </a>
    </div>
    <div class="row credits tc">
        <small>{{ __('Made at 127.0.0.1 with a lot of coffee') }}</small>
        </br>
        <small>© {{ now()->year }} <a href="{{ url('/') }}" class="l ac">jodaz</a></small>
    </div>
</footer>
