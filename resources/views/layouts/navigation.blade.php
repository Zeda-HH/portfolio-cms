<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo / Name --}}
        <a href="/" class="text-2xl font-bold text-blue-600 tracking-tight">
            Zemen<span class="text-gray-800">.dev</span>
        </a>

        {{-- Desktop Links --}}
        <div class="hidden md:flex items-center gap-8">
            <a href="/"
               class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->is('/') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                Home
            </a>
            <a href="/posts"
               class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->is('posts') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                Blog
            </a>
            <a href="/projects"
               class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->is('projects*') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                Projects
            </a>
            <a href="/about"
               class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->is('about') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                About
            </a>
            <a href="/contact"
               class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->is('contact') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                Contact
            </a>

            @auth
                <a href="/messages"
                   class="text-gray-700 hover:text-blue-600 font-medium transition">
                    📬 Inbox
                </a>
                <a href="/posts/create"
                   class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition font-medium">
                    + Create
                </a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit"
                            class="text-gray-700 hover:text-red-600 font-medium transition">
                        Logout
                    </button>
                </form>
            @else
                <a href="/login"
                   class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition font-medium">
                    Login
                </a>
            @endauth
        </div>

        {{-- Mobile Menu Button --}}
        <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="md:hidden hidden px-6 pb-4 flex flex-col gap-4">
        <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
        <a href="/posts" class="text-gray-700 hover:text-blue-600 font-medium">Blog</a>
        <a href="/projects" class="text-gray-700 hover:text-blue-600 font-medium">Projects</a>
        <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
        <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
        @auth
            <a href="/messages" class="text-gray-700 hover:text-blue-600 font-medium">📬 Inbox</a>
            <a href="/posts/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center font-medium">+ Create</a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="text-red-600 font-medium">Logout</button>
            </form>
        @else
            <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center font-medium">Login</a>
        @endauth
    </div>
</nav>

{{-- Mobile Toggle Script --}}
<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>