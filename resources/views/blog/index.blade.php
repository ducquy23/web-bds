@extends('layouts.app')

@section('title', 'Blog - Nguyễn Văn A')

@section('content')
<section class="bg-white dark:bg-[#111921] pt-12 pb-8 lg:pt-20 lg:pb-12 border-b border-[#f0f2f4] dark:border-[#2a3441]">
    <div class="layout-container flex justify-center px-6 lg:px-10">
        <div class="flex w-full max-w-[1280px] flex-col gap-8">
            <div class="text-center max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-primary mb-4">
                    <span class="material-symbols-outlined text-sm">edit_note</span>
                    <span>Góc nhìn chuyên gia</span>
                </div>
                <h1 class="text-4xl font-extrabold tracking-tight text-[#111418] dark:text-white lg:text-5xl mb-6 leading-tight">
                    Kiến thức & Kinh nghiệm <br/><span class="text-primary">Đầu tư Bất động sản</span>
                </h1>
                <p class="text-lg text-[#637588] dark:text-gray-400 leading-relaxed">
                    Nơi tôi chia sẻ những phân tích thị trường trung thực, kinh nghiệm thực chiến và cập nhật pháp lý mới nhất để giúp bạn ra quyết định đầu tư sáng suốt.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#f0f2f4] dark:bg-[#0d131a] py-12 lg:py-16">
    <div class="layout-container flex justify-center px-6 lg:px-10">
        <div class="w-full max-w-[1280px]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="group flex flex-col gap-4">
                    <a href="{{ route('blog.show', 1) }}" class="aspect-video w-full overflow-hidden rounded-xl bg-gray-200">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBMUXfXMARyV2FYO8xi_Rl4yzZFE3yrfvlgUw8mMBk_U-TTQraBD5W-zWdA08h-wgGSYv_ae3JUEhSOA9sF1JtsSKKGh_1xPOHvBj7U46tGzNBVPwLgYomPzybU8FGoVFFeMO8JpBKosVm8uCZVYSqQcz4m-B3Q168zDq11bZkFwjNe0_WzionYt3zuOZlzcIBWFnKWZpCCqaAjW-Nv086X4egf6vFKi0vjiQVRTPvTwfnpAEU_zEL8hZ5v6UPyavzaS8fPW_55pQ');"></div>
                    </a>
                    <div class="flex flex-col gap-2">
                        <span class="text-xs font-bold uppercase text-primary">Phân tích thị trường</span>
                        <h3 class="text-xl font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">
                            <a href="{{ route('blog.show', 1) }}">Dự báo thị trường BĐS TP.HCM Quý 4/2023</a>
                        </h3>
                        <p class="line-clamp-2 text-sm text-[#637588] dark:text-gray-400">Những tín hiệu tích cực từ chính sách vĩ mô và dòng vốn FDI đang tác động mạnh mẽ đến phân khúc căn hộ cao cấp...</p>
                        <span class="text-xs text-[#637588] mt-1">15/10/2023 • 5 phút đọc</span>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="group flex flex-col gap-4">
                    <a href="{{ route('blog.show', 2) }}" class="aspect-video w-full overflow-hidden rounded-xl bg-gray-200">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB-zr-p9SsG2fXZGfrEswgfrf6e21evngm2hxqB5q_lu5aJFrGOaQP8b2sbOuDO_52FOG3DdWN8CnTNxgPynYaT_7m7I0rcLx7SQxfqCf0oqyfyCkGLBl9Pr1KAEOUnInQeg9iPKnuKOPHuVMSXJPZOqmxpZDp7BlBsU5zN-oU1gfjNGvTThB9oJorj4vI49Dg5acJQk0T_5rWlSOhcZo1N4zB99bIb8K6UxIfp7nd4GqoikwJp1UHJyUiNuEFlskLLbM8WOvU9dQ');"></div>
                    </a>
                    <div class="flex flex-col gap-2">
                        <span class="text-xs font-bold uppercase text-primary">Kinh nghiệm mua nhà</span>
                        <h3 class="text-xl font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">
                            <a href="{{ route('blog.show', 2) }}">5 Lưu ý "vàng" khi mua nhà lần đầu</a>
                        </h3>
                        <p class="line-clamp-2 text-sm text-[#637588] dark:text-gray-400">Tránh những sai lầm phổ biến về tài chính và pháp lý giúp bạn sở hữu tổ ấm mơ ước một cách an toàn nhất.</p>
                        <span class="text-xs text-[#637588] mt-1">10/10/2023 • 7 phút đọc</span>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="group flex flex-col gap-4">
                    <a href="{{ route('blog.show', 3) }}" class="aspect-video w-full overflow-hidden rounded-xl bg-gray-200">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAc4AviXWWAkX24S_OmvtBZtr2ddTOZ2r55XKOpHqjcY6HtUGHcI-B4qFMbk8-A2Mew0HfCRgOJFLvTjRTF1a0VGVqaCFHmI8R34XnsyoCyL-BXdIfIOL9DBgWzEbSx5AwQp9L9Io_tw96e3DjvUN_pnJ8uXdW_nZZTRI-giQ2KB2eZvKIrquo_waRblxqZa3co78OUGdx5a9yNqQNt4CktaG56xbn3l37EBFOLYvHfr-GBtA3_HCYoY99CBsG8R7OFUWlrq5ihtA');"></div>
                    </a>
                    <div class="flex flex-col gap-2">
                        <span class="text-xs font-bold uppercase text-primary">Pháp lý</span>
                        <h3 class="text-xl font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">
                            <a href="{{ route('blog.show', 3) }}">Quy trình sang tên sổ hồng mới nhất 2024</a>
                        </h3>
                        <p class="line-clamp-2 text-sm text-[#637588] dark:text-gray-400">Cập nhật các thay đổi trong luật đất đai và các bước thực hiện thủ tục sang tên đổi chủ nhanh gọn.</p>
                        <span class="text-xs text-[#637588] mt-1">05/10/2023 • 6 phút đọc</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

