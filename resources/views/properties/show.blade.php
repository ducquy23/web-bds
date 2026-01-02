@extends('layouts.app')

@section('title', 'Sunny Villa District 2 - Modern Oasis - Nguyễn Văn A')

@section('content')
<main class="flex-grow w-full max-w-[1440px] mx-auto px-4 md:px-10 py-6">
    <!-- Breadcrumbs -->
    <div class="flex flex-wrap items-center gap-2 mb-6 text-sm">
        <a class="text-[#637588] dark:text-gray-400 hover:text-primary flex items-center gap-1" href="{{ route('home') }}">
            <span class="material-symbols-outlined text-[18px]">home</span>
            Trang chủ
        </a>
        <span class="text-[#637588] dark:text-gray-500">/</span>
        <a class="text-[#637588] dark:text-gray-400 hover:text-primary" href="{{ route('properties.index') }}">Danh sách BĐS</a>
        <span class="text-[#637588] dark:text-gray-500">/</span>
        <span class="text-[#111418] dark:text-white font-medium truncate">Sunny Villa District 2 - Modern Oasis</span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
        <!-- Left Column: Main Content -->
        <div class="lg:col-span-8 flex flex-col gap-8">
            <!-- Header Info -->
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded">FOR SALE</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-[#111418] dark:text-white tracking-tight leading-tight mb-2">Sunny Villa District 2 - Modern Oasis</h1>
                <p class="text-[#637588] dark:text-gray-400 flex items-center gap-1 text-base">
                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                    123 Thao Dien, District 2, Ho Chi Minh City
                </p>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-3 h-[400px] md:h-[500px] rounded-xl overflow-hidden">
                <div class="col-span-1 md:col-span-3 row-span-2 relative group cursor-pointer">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBAja-3ICmU9mSUGG2Q1HzYc_89XGA3VrCRqtwL_3GOouMEBh39M1e6xOVFxKEFwZEYBlkMeNlCrzWJcnvilGFX9ERRZweHmRksXK9PyN416xH6aEtB_Euw67IJgRrXTcWLB7wAur0dMyvQXiBc-qu0djDRu87BFsT49IdjXh63WfLsBYXB8cusBG3jASqCG8BbNXMkOpw2ADr5fyJa_wbYEVdMo0HMPlFzkHlMYE_vOj9XwJpgNhZ3BJIYzTWV1SIznnmJUTUIRg');"></div>
                </div>
                <div class="col-span-1 row-span-1 relative group cursor-pointer">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBZndgEmrBWNGzhGVPdLP44EiD2hEtiIJF9unFIhdgsSnaQj6dQV6IS7ebTeHrqY4-zh9tpMCNVQvbh8mIelE-Ifd1yAX9pxYb3KvxEWcY4rH8anBUmVF5tZUO4t9MSqGJ863NQ6nN0Vs0zBbhNPduFwExdbvubcEUwiyS96yNhjnuhNybrbNKprGPYafTNZ7UOMEUjFbvSGH-UrC7hG5wspK7fxXeaMZQYSch6-ZhTie8O61iIEBsSg4nv7rkJzVzJd6tC9hlWTw');"></div>
                </div>
                <div class="col-span-1 row-span-1 relative group cursor-pointer">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD6JFIpRY4z2ynME41EUkVGV1Tj5Q3Vv6gSK2yfKhwuip09vIAvJJcDG084wBZq7Z44f2xo13LiaXFSDGxRSUm6N01E0-KCacoHKmnWGC2QWzBLqMI6-wuWjT6mj_V16_2SVti3Db7lPWRw61G-vaK48eUhW3GcliLmEAYONZfEoDcAsPP01Rq8BrGziNSL0u5Q7PEgNWWdHd_JaddhDIOS2k7bev0gIp45Dj9xZMljttQYJhCxfJkYlzXkPddxAIrZqKvq30xErQ');"></div>
                </div>
            </div>

            <!-- Quick Stats Strip -->
            <div class="flex flex-wrap gap-4 md:gap-8 border-y border-[#f0f2f4] dark:border-gray-800 py-6">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-2xl">bed</span>
                    <div>
                        <p class="text-sm text-[#637588] dark:text-gray-400 font-medium">Phòng ngủ</p>
                        <p class="text-lg font-bold text-[#111418] dark:text-white">5 Phòng</p>
                    </div>
                </div>
                <div class="w-px h-10 bg-[#f0f2f4] dark:bg-gray-800 hidden md:block"></div>
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-2xl">bathtub</span>
                    <div>
                        <p class="text-sm text-[#637588] dark:text-gray-400 font-medium">Phòng tắm</p>
                        <p class="text-lg font-bold text-[#111418] dark:text-white">6 Phòng</p>
                    </div>
                </div>
                <div class="w-px h-10 bg-[#f0f2f4] dark:bg-gray-800 hidden md:block"></div>
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-2xl">square_foot</span>
                    <div>
                        <p class="text-sm text-[#637588] dark:text-gray-400 font-medium">Diện tích</p>
                        <p class="text-lg font-bold text-[#111418] dark:text-white">450 m²</p>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <section class="bg-white dark:bg-[#1a232e] rounded-xl p-6 md:p-8 shadow-sm">
                <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-4">Mô tả</h2>
                <p class="text-[#637588] dark:text-gray-300 leading-relaxed">
                    Sunny Villa District 2 là một bất động sản cao cấp tại 123 Thao Dien, District 2, Ho Chi Minh City. 
                    Với 5 phòng ngủ và 6 phòng tắm, diện tích 450 m², đây là cơ hội đầu tư tuyệt vời cho những ai đang tìm kiếm không gian sống đẳng cấp.
                </p>
            </section>
        </div>

        <!-- Right Column: Sticky Sidebar -->
        <div class="lg:col-span-4 relative">
            <div class="sticky top-24 flex flex-col gap-6">
                <!-- Price Card -->
                <div class="bg-white dark:bg-[#1a232e] rounded-xl p-6 shadow-lg border border-[#f0f2f4] dark:border-gray-800">
                    <p class="text-sm text-[#637588] dark:text-gray-400 font-medium mb-1">Asking Price</p>
                    <h2 class="text-4xl font-extrabold text-[#111418] dark:text-white tracking-tight text-primary mb-4">25 Billion VND</h2>
                    <div class="flex flex-col gap-3">
                        <a href="{{ route('contact.index') }}" class="w-full h-12 bg-primary hover:bg-blue-600 text-white font-bold rounded-lg transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined">calendar_month</span>
                            Đặt lịch xem nhà
                        </a>
                        <button class="w-full h-12 bg-white dark:bg-transparent border border-[#dce0e5] dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 text-[#111418] dark:text-white font-bold rounded-lg transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined">download</span>
                            Tải brochure
                        </button>
                    </div>
                </div>

                <!-- Meet The Expert Card -->
                <div class="bg-white dark:bg-[#1a232e] rounded-xl p-6 shadow-lg border border-[#f0f2f4] dark:border-gray-800">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="relative">
                            <div class="size-16 rounded-full bg-cover bg-center border-2 border-white shadow-md" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAnIcQaZoNPvZDeuNQAn4H2IRjQ4RkeELnb6uY-7MZCpUpKOYjisMf61q5nwFt3xdlDkhsHm8T5brtFsyDTom2IeA_oMBV8PcWeCFgta5r18UbjrTbNNbaC14_PPbiDag3VnfvUnMLXUJD0bgsQQmhE3c1J0SbT7nTjm-wHUvqwS37PZ7M1nvRNL5FQvP9tXEKfNQCYytIVU7Tel0VSY3ToAt0XNKJJEtle_9r3yxX7Jqf6adZLvDAUq3--b2eSCqFCTh2p0omXyQ');"></div>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-[#111418] dark:text-white">Mr. Nguyen</h3>
                            <p class="text-xs text-[#637588] dark:text-gray-400">Senior Investment Consultant</p>
                        </div>
                    </div>
                    <p class="text-sm text-[#637588] dark:text-gray-400 mb-6 italic">
                        "I specialize in D2 properties and negotiate directly with owners to get you the best deal."
                    </p>
                    <a href="{{ route('contact.index') }}" class="w-full h-10 bg-[#111418] dark:bg-gray-700 text-white font-bold rounded-lg hover:opacity-90 transition-opacity flex items-center justify-center">
                        Liên hệ ngay
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- More Properties -->
    <section class="mt-20 mb-10">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-[#111418] dark:text-white">More from my portfolio</h2>
            <a class="text-primary font-bold text-sm flex items-center gap-1 hover:underline" href="{{ route('properties.index') }}">
                View All Listings <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Related Property 1 -->
            <div class="group bg-white dark:bg-[#1a232e] rounded-xl overflow-hidden border border-[#f0f2f4] dark:border-gray-800 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="relative h-48 bg-gray-200 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCrq1Kd6hlgW9Al8hMVgg-RJgMKFiG9AG1RJjCcHeVYhJZaO1k8VCGVUxNkd8NYgbJP3-P2RPZx_DDYjrorMSgVV36QvUgoEmCu5YKae026fv4cEED0ZNiGUeE3NIaO97UPLq4y7HqNkvOw3ERMEJ7TnYXYwNf6gmythE-zLYHesCnLqthOvghMDJcKAzwr0I2FZ39qEc_d0MzzONlyu6mYuoQue8E7nnaWjlM0qQrmRBwbkQEDPrWyJfp7fCTRpGOuU8cIsYpYQw');"></div>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-[#111418]">FOR SALE</div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-lg text-[#111418] dark:text-white group-hover:text-primary transition-colors">Riverside Penthouse</h3>
                        <span class="text-primary font-bold">18B VND</span>
                    </div>
                    <p class="text-sm text-[#637588] dark:text-gray-400 mb-4 truncate">Thao Dien, District 2 • River View</p>
                    <div class="flex items-center gap-4 text-xs text-[#637588] dark:text-gray-400">
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">bed</span> 3</span>
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">bathtub</span> 2</span>
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">square_foot</span> 180m²</span>
                    </div>
                </div>
            </div>
            <!-- Related Property 2 -->
            <div class="group bg-white dark:bg-[#1a232e] rounded-xl overflow-hidden border border-[#f0f2f4] dark:border-gray-800 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="relative h-48 bg-gray-200 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBn3dorPcoMfLr8YpToOYYi8n00ryJNOCa2sO7NB1Gh8b6XZ9W1H6FffpZ_K19wg0IWIQmX5mBXbzc20Rs0huzLP9KGPL654P4FOZGc9MScdt3f8VZv3KIkInIuvTTfXlUl-3XQyZ2fWRPYI9TW34ZoQoJC3WBI9ldIDxwqkC6ReDjzjBD6zj8fiXTDkBsmGslYc7micVnzuELOSd4Ltg3EIC3izwshuhpe5mwYQ8--gFGCby5oAVzqwKg5rCzZtZ6sL2jW-7V6_Q');"></div>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-[#111418]">FOR RENT</div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-lg text-[#111418] dark:text-white group-hover:text-primary transition-colors">Estella Heights Duplex</h3>
                        <span class="text-primary font-bold">$2,500/mo</span>
                    </div>
                    <p class="text-sm text-[#637588] dark:text-gray-400 mb-4 truncate">An Phu, District 2 • Fully Furnished</p>
                    <div class="flex items-center gap-4 text-xs text-[#637588] dark:text-gray-400">
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">bed</span> 2</span>
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">bathtub</span> 2</span>
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">square_foot</span> 120m²</span>
                    </div>
                </div>
            </div>
            <!-- Related Property 3 -->
            <div class="group bg-white dark:bg-[#1a232e] rounded-xl overflow-hidden border border-[#f0f2f4] dark:border-gray-800 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="relative h-48 bg-gray-200 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC690jzsl4Q9Oj-ZEGgt2AXT85gw7_tcqBdFmAQsx4_b_fgoUp6fm9sByQ9Rq01mXBH5snceGf6HTKgA8IKwvohIpgg_12oq98XmTZAelE8d9s7CkrlykLhEv5xOd1Qu6ss9Ul-GfaPbDKu1nv_3FmOTA5MmzDIGC6vMPGHJU9fEyTdizI8He8PWIWcfSDpAhqV2Z_6AhXpf7me3GIcv9VV6B-j84ZPXjfcltYXNN_w9QQr-Kt7GiL5_2t2jBYMUpDQ3pjDYjcWhA');"></div>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-[#111418]">FOR SALE</div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-lg text-[#111418] dark:text-white group-hover:text-primary transition-colors">Garden Townhouse</h3>
                        <span class="text-primary font-bold">12B VND</span>
                    </div>
                    <p class="text-sm text-[#637588] dark:text-gray-400 mb-4 truncate">Thao Dien, District 2 • Private Garden</p>
                    <div class="flex items-center gap-4 text-xs text-[#637588] dark:text-gray-400">
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">bed</span> 3</span>
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">bathtub</span> 3</span>
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">square_foot</span> 200m²</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

