<header class="sticky top-0 z-50 bg-white/90 dark:bg-[#111921]/90 backdrop-blur-md border-b border-[#f0f2f4] dark:border-[#2a3441]">
    <div class="layout-container flex justify-center">
        <div class="flex w-full max-w-[1280px] items-center justify-between px-6 py-4 lg:px-10">
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="flex size-10 items-center justify-center rounded-lg bg-primary text-white group-hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined text-2xl">real_estate_agent</span>
                    </div>
                    <h2 class="text-xl font-bold tracking-tight text-[#111418] dark:text-white">Nguyễn Văn A</h2>
                </a>
            </div>
            <nav class="hidden lg:flex items-center gap-8">
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : 'text-[#637588] dark:text-gray-400' }}" href="{{ route('home') }}">Trang chủ</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('properties.*') ? 'text-primary' : 'text-[#637588] dark:text-gray-400' }}" href="{{ route('properties.index') }}">Bất động sản</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('about.*') ? 'text-primary' : 'text-[#637588] dark:text-gray-400' }}" href="{{ route('about.index') }}">Về tôi</a>
                <a class="text-sm font-medium hover:text-primary transition-colors text-[#637588] dark:text-gray-400" href="#testimonials">Khách hàng</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('blog.*') ? 'text-primary' : 'text-[#637588] dark:text-gray-400' }}" href="{{ route('blog.index') }}">Blog</a>
            </nav>
            <div class="flex items-center gap-4">
                <a href="{{ route('contact.index') }}" class="hidden sm:flex h-10 items-center justify-center rounded-lg bg-primary px-5 text-sm font-bold text-white shadow-sm hover:bg-primary/90 transition-all">
                    Liên hệ tư vấn
                </a>
                <button class="lg:hidden p-2 text-[#111418] dark:text-white">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </div>
</header>

