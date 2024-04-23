<div class="container">
    <header>
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}">
        </div>
        <nav>
            <a href="#">CHARACTERS</a>
            <a href="{{route('home')}}" class="{{ Route::currentRouteName() === 'home' ? 'active' :'' }}">COMICS</a>
            <a href="#">MOVIES</a>
            <a href="#">TV</a>
            <a href="#">GAMES</a>
            <a href="#">COLLECTIBLES</a>
            <a href="#">VIDEOS</a>
            <a href="#s">FANS</a>
            <a href="#">NEWS</a>
            <a href="#">SHOP</a>
        </nav>
    </header>
</div>