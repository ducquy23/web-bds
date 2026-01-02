<footer class="bg-background-dark text-white pt-16 pb-8 border-t border-[#2a3441]">
    <div class="layout-container flex justify-center px-6 lg:px-10">
        <div class="w-full max-w-[1280px]">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-4 md:grid-cols-2 mb-12">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-primary text-white">
                            <span class="material-symbols-outlined text-xl">real_estate_agent</span>
                        </div>
                        <h2 class="text-lg font-bold">Nguyễn Văn A</h2>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Đối tác tin cậy trong hành trình tìm kiếm tổ ấm và cơ hội đầu tư bất động sản tại TP.HCM.
                    </p>
                    <div class="flex gap-4">
                        <a class="flex size-10 items-center justify-center rounded-full bg-white/10 hover:bg-primary transition-colors text-white" href="#">
                            <span class="material-symbols-outlined text-sm">public</span>
                        </a>
                        <a class="flex size-10 items-center justify-center rounded-full bg-white/10 hover:bg-primary transition-colors text-white" href="mailto:contact@nguyenvana.bds">
                            <span class="material-symbols-outlined text-sm">mail</span>
                        </a>
                        <a class="flex size-10 items-center justify-center rounded-full bg-white/10 hover:bg-primary transition-colors text-white" href="tel:0909123456">
                            <span class="material-symbols-outlined text-sm">call</span>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Liên kết nhanh</h3>
                    <ul class="flex flex-col gap-3 text-sm text-gray-400">
                        <li><a class="hover:text-primary transition-colors" href="{{ route('about.index') }}">Về tôi</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{ route('properties.index') }}">Danh sách BĐS</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{ route('blog.index') }}">Blog tin tức</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Tuyển dụng</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Khu vực nổi bật</h3>
                    <ul class="flex flex-col gap-3 text-sm text-gray-400">
                        <li><a class="hover:text-primary transition-colors" href="{{ route('properties.index') }}?area=quan-1">Quận 1 - Trung tâm</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{ route('properties.index') }}?area=quan-2">Quận 2 - Thảo Điền</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{ route('properties.index') }}?area=quan-7">Quận 7 - Phú Mỹ Hưng</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{ route('properties.index') }}?area=binh-thanh">Quận Bình Thạnh</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Liên hệ</h3>
                    <ul class="flex flex-col gap-3 text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary text-lg mt-0.5">location_on</span>
                            <span>Toà nhà Landmark 81, Vinhomes Central Park, TP.HCM</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary text-lg">phone_iphone</span>
                            <span>0909 123 456</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary text-lg">mail</span>
                            <span>contact@nguyenvana.bds</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-[#2a3441] pt-8 text-center text-sm text-gray-500">
                <p>© {{ date('Y') }} Nguyễn Văn A. All rights reserved. Designed for Real Estate Professionals.</p>
            </div>
        </div>
    </div>
</footer>

