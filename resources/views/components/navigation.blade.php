<header class="flex justify-center bg-slate-100 px-8">
    <nav class="flex justify-between items-center py-4 w-full max-w-7xl">
        <a href="/">
            <img src="/images/logo.png" alt="Leftovers Icon" class="h-8 md:h-12"/>
        </a>

        <div class="flex gap-4 items-center">
            @auth
            <span class="hidden md:block">{{auth()->user()->name}}</span>
                <a href="/recipe/create" class="p-2 bg-[#F8A45D] text-white rounded-full">
                    <img src="/svg/add.svg" alt="Add New Recipe Icon" class="h-4 w-4" />
                </a>
                <a href="/admin" class="p-2 bg-[#F8A45D] text-white rounded-full">
                    <img src="/svg/file.svg" alt="Manage Recipes Icon" class="h-4 w-4" />
                </a>
                <form method="POST" action="/logout " >
                    @csrf
                    <button type="submit" class="p-2 bg-[#F8A45D] text-white rounded-full">
                        <img src="/svg/power.svg" alt="Logout Icon" class="h-4 w-4" />
                    </a>
                </form>
            
            @else
                <a href="/register" class="p-2 bg-[#F8A45D] text-white rounded-full">
                    <img src="/svg/register.svg" alt="Register Icon" class="h-4 w-4" />
                </a>
                <a href="/login" class="p-2 bg-[#F8A45D] text-white rounded-full">
                    <img src="/svg/login.svg" alt="Login Icon" class="h-4 w-4" />
                </a>
            @endauth
            
        </div>
    </nav>
</header>