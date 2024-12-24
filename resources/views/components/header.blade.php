<header class="bg-orange-500 text-white p-1">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl py-2 font-semibold flex">
            <img src="{{ asset('images/deep-work-logo.png') }}" class="w-10 h-10" alt="">
            <a href="{{ url('/') }}"
                class=" pl-2 text-sm  {{ request()->is('/') ? 'text-blue-600 font-bold' : '' }}">Deep<br />
                Work</a>
        </h1>
        <nav class="hidden md:flex  items-center space-x-4">
            <x-nav-link url="/" title="Home" :active="request()->is('/')">ホーム</x-nav-link>
            <x-nav-link url="/jobs" title="All Jobs" :active="request()->is('jobs')">すべての求人</x-nav-link>
            <x-nav-link url="/jobs/saved" title="Jobs Saved" :active="request()->is('jobs/saved')">保存した求人</x-nav-link>
            <x-nav-link url="/login" title="Login" :active="request()->is('login')" icon="user">ログイン</x-nav-link>
            <x-nav-link url="/register" title="Register" :active="request()->is('register')">登録登録</x-nav-link>
            <x-nav-link url="/register" title="Dashboard" :active="request()->is('register')" icon="gauge">Dashboard</x-nav-link>
            <x-button-link bgClass="bg-blue-500" url="/jobs/create" icon="edit">求人掲載</x-button-link>
        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-orange-500 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/jobs" title="All Jobs" :active="request()->is('jobs')" :mobile='true'>
            すべての求人
        </x-nav-link>
        <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')" :mobile='true'>保存した求人</x-nav-link>
        <x-nav-link url="/login" :active="request()->is('login')" :mobile='true'>ログイン</x-nav-link>
        <x-nav-link url="/register" :active="request()->is('register')" :mobile='true'>登録</x-nav-link>
        <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile='true'>
            <i class="fa fa-gauge mr-1"></i>Dashboard
        </x-nav-link>
        <x-button-link bgClass="bg-blue-500" url="/jobs/create" icon="edit" :block='true'>
            求人掲載
        </x-button-link>
    </nav>
</header>
