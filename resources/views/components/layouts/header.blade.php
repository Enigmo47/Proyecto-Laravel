<header class="h-16v bg-green-500 p-5 flex justify-between items-center">
    <a href="/">
        <img class="h-16v" src="{{ asset('/images/logo.png') }}" alt="Logo de la empresa" />
    </a>
    <h1 class="text-5xl text-white">Eco Travel Client BBDD</h1>
    <div>
        @guest
            <a href="/login" class="btn py-2 px-2 bg-white rounded-lg">Log in</a>
            <a href="/register" class="btn py-2 px-2 bg-white rounded-lg">Register</a>
        @endguest
        @auth
            <h1 class="text-3xl text-white">{{ auth() -> user() -> name }}</h1>
            <form action="{{ route("logout") }}" method="POST">
                @csrf
                <input type="submit" class="btn py-2 px-2 bg-white rounded-lg" value="Logout">
            </form>   
        @endauth    
    </div>
</header>
    