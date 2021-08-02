<body>
<nav>
    <div class="container">
        <div class="logo">
            <div class="logo-design"></div>
            <div class="text">
                <h2>lunar</h2>
                <h5>robotics</h5>
            </div>
        </div>
        <!--
            section For Login and Logout Link
        -->
        <div class="logout">
            <a class="" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
</nav>
