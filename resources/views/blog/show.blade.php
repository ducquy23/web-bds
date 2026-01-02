@extends('layouts.app')

@section('title', 'Dự báo thị trường BĐS TP.HCM Quý 4/2023 - Blog Nguyễn Văn A')

@section('content')
<section class="bg-white dark:bg-[#111921] pt-12 pb-8">
    <div class="layout-container flex justify-center px-6 lg:px-10">
        <div class="flex w-full max-w-[960px] flex-col gap-6">
            <nav class="flex items-center gap-2 text-sm text-[#637588] dark:text-gray-400">
                <a class="hover:text-primary" href="{{ route('home') }}">Trang chủ</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <a class="hover:text-primary" href="{{ route('blog.index') }}">Blog</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-[#111418] dark:text-white font-medium truncate">Phân tích thị trường</span>
            </nav>
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center rounded-full bg-primary/10 px-3 py-1 text-xs font-bold uppercase text-primary">
                        Phân tích thị trường
                    </span>
                    <span class="flex items-center gap-1 text-xs font-medium text-[#637588] dark:text-gray-400">
                        <span class="material-symbols-outlined text-sm">schedule</span>
                        5 phút đọc
                    </span>
                </div>
                <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-[#111418] dark:text-white sm:text-4xl lg:text-5xl">
                    Dự báo thị trường BĐS TP.HCM Quý 4/2023: Cơ hội nào cho nhà đầu tư?
                </h1>
            </div>
            <div class="flex items-center justify-between border-b border-[#f0f2f4] dark:border-[#2a3441] pb-8 pt-2">
                <div class="flex items-center gap-4">
                    <div class="size-12 rounded-full bg-gray-200 bg-cover bg-center ring-2 ring-primary/20" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC-7elvPxmG18iqt4ZWqFidcku3Vpxetm6RSYtXJH5yAqf19lutWoFiP14NiAJOgbzTw1geaQ9VWde-zzB7YQ7SRrM1DIchpqdoqpbubS-EnuPjO8TYNjpwecHUumM4UBNVsn3d35RU5FHSE_uBQKL6gy-MVg5oHA5-NZB5dNRxFBCpw7GqltFlwt4RAQo4m4yrHP-siP2Endsxj8Eb339LxtCxYgsjeupE_IP3BF2ZnkRv_dYKJ4xj32ZIV1Eha_IWoExSHjSgCQ');"></div>
                    <div class="flex flex-col">
                        <span class="font-bold text-[#111418] dark:text-white">Nguyễn Văn A</span>
                        <span class="text-sm text-[#637588] dark:text-gray-400">Đăng ngày 15/10/2023</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-[#111921] pb-16">
    <div class="layout-container flex justify-center px-6 lg:px-10">
        <div class="flex w-full max-w-[960px] flex-col">
            <div class="mb-10 w-full overflow-hidden rounded-2xl shadow-lg">
                <img alt="Biểu đồ phân tích thị trường bất động sản" class="w-full object-cover aspect-video hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMUXfXMARyV2FYO8xi_Rl4yzZFE3yrfvlgUw8mMBk_U-TTQraBD5W-zWdA08h-wgGSYv_ae3JUEhSOA9sF1JtsSKKGh_1xPOHvBj7U46tGzNBVPwLgYomPzybU8FGoVFFeMO8JpBKosVm8uCZVYSqQcz4m-B3Q168zDq11bZkFwjNe0_WzionYt3zuOZlzcIBWFnKWZpCCqaAjW-Nv086X4egf6vFKi0vjiQVRTPvTwfnpAEU_zEL8hZ5v6UPyavzaS8fPW_55pQ"/>
            </div>
            <div class="prose prose-lg prose-blue dark:prose-invert max-w-none text-[#111418] dark:text-gray-300">
                <p class="mb-6 text-lg leading-relaxed text-[#637588] dark:text-gray-300 font-medium">
                    Thị trường bất động sản TP.HCM đang trải qua những giai đoạn điều chỉnh quan trọng. Với những tín hiệu tích cực từ chính sách vĩ mô và dòng vốn FDI, Quý 4/2023 được kỳ vọng sẽ là bước đệm cho sự phục hồi mạnh mẽ trong năm 2024. Hãy cùng tôi phân tích các yếu tố then chốt.
                </p>
                <!-- Content sẽ được thêm vào đây khi có nội dung đầy đủ -->
            </div>
        </div>
    </div>
</section>

<section class="border-t border-[#f0f2f4] dark:border-[#2a3441] bg-[#f9fafb] dark:bg-[#1a232e] py-16">
    <div class="layout-container flex justify-center px-6 lg:px-10">
        <div class="flex w-full max-w-[1280px] flex-col gap-10">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold text-[#111418] dark:text-white">Bài viết liên quan</h2>
                <a class="flex items-center gap-1 text-sm font-bold text-primary hover:underline" href="{{ route('blog.index') }}">
                    Xem tất cả <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Related Post 1 -->
                <a class="group flex flex-col gap-4 rounded-xl transition-all hover:-translate-y-1" href="{{ route('blog.show', 2) }}">
                    <div class="aspect-video w-full overflow-hidden rounded-xl bg-gray-200">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB-zr-p9SsG2fXZGfrEswgfrf6e21evngm2hxqB5q_lu5aJFrGOaQP8b2sbOuDO_52FOG3DdWN8CnTNxgPynYaT_7m7I0rcLx7SQxfqCf0oqyfyCkGLBl9Pr1KAEOUnInQeg9iPKnuKOPHuVMSXJPZOqmxpZDp7BlBsU5zN-oU1gfjNGvTThB9oJorj4vI49Dg5acJQk0T_5rWlSOhcZo1N4zB99bIb8K6UxIfp7nd4GqoikwJp1UHJyUiNuEFlskLLbM8WOvU9dQ');"></div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="text-xs font-bold uppercase text-primary">Kinh nghiệm mua nhà</span>
                        <h3 class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors line-clamp-2">5 Lưu ý "vàng" khi mua nhà lần đầu để tránh rủi ro</h3>
                        <span class="text-xs text-[#637588]">10/10/2023 • 7 phút đọc</span>
                    </div>
                </a>
                <!-- Related Post 2 -->
                <a class="group flex flex-col gap-4 rounded-xl transition-all hover:-translate-y-1" href="{{ route('blog.show', 3) }}">
                    <div class="aspect-video w-full overflow-hidden rounded-xl bg-gray-200">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAc4AviXWWAkX24S_OmvtBZtr2ddTOZ2r55XKOpHqjcY6HtUGHcI-B4qFMbk8-A2Mew0HfCRgOJFLvTjRTF1a0VGVqaCFHmI8R34XnsyoCyL-BXdIfIOL9DBgWzEbSx5AwQp9L9Io_tw96e3DjvUN_pnJ8uXdW_nZZTRI-giQ2KB2eZvKIrquo_waRblxqZa3co78OUGdx5a9yNqQNt4CktaG56xbn3l37EBFOLYvHfr-GBtA3_HCYoY99CBsG8R7OFUWlrq5ihtA');"></div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="text-xs font-bold uppercase text-primary">Pháp lý</span>
                        <h3 class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors line-clamp-2">Quy trình sang tên sổ hồng mới nhất 2024 bạn cần biết</h3>
                        <span class="text-xs text-[#637588]">05/10/2023 • 6 phút đọc</span>
                    </div>
                </a>
                <!-- Related Post 3 -->
                <a class="group flex flex-col gap-4 rounded-xl transition-all hover:-translate-y-1" href="{{ route('blog.show', 1) }}">
                    <div class="aspect-video w-full overflow-hidden rounded-xl bg-gray-200">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB9Ex7TxfHnOPx2dyctTfu6cJqc7GkD8NgzLn6bm6Rid_VODlEDPkK74eSkhlaX3niZNqP9uW3DDb7hS2H_m2p4j3l7TDobsjwFN-OX7gc-EERbwhh0Pu6Ppi4OF2TCAuuLHIan27E2AlcWMlgbAL1x-Yge3RaQSHCnCVFFiZQfgBWwjtveRVVtHhp06RyeMZJ3SGba8TkPNw-TsQe62ZwivNUi3N802q1bCcsSH9_Ssl3n3vOoJq9eBIUukiS4U_OuvVi9BmVaIA');"></div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="text-xs font-bold uppercase text-primary">Đầu tư</span>
                        <h3 class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors line-clamp-2">Đầu tư căn hộ cho thuê: Lợi nhuận kép hay chôn vốn?</h3>
                        <span class="text-xs text-[#637588]">01/10/2023 • 8 phút đọc</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

