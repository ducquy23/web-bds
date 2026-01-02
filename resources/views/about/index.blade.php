@extends('layouts.app')

@section('title', 'Về tôi - Nguyễn Văn A')

@section('content')
<!-- Hero Section -->
<section class="bg-white">
    <div class="px-4 md:px-10 lg:px-40 flex justify-center py-10 md:py-16">
        <div class="flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-col-reverse md:flex-row gap-10 md:gap-16 items-center">
                <div class="flex flex-col gap-6 flex-1 text-center md:text-left">
                    <h1 class="text-[#111418] text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                        Hơn cả một môi giới – <span class="text-primary">Đối tác tin cậy</span> của bạn
                    </h1>
                    <p class="text-[#637588] text-lg leading-relaxed">
                        Chào mừng bạn. Tôi là Minh Long. Tôi ở đây để giúp bạn tìm thấy không gian sống hoàn hảo và cơ hội đầu tư bền vững với sự tận tâm và chuyên nghiệp nhất.
                    </p>
                    <div class="flex gap-4 justify-center md:justify-start pt-2">
                        <a href="{{ route('contact.index') }}" class="h-12 px-6 bg-primary text-white text-base font-bold rounded-lg hover:bg-blue-600 transition-colors">
                            Liên hệ ngay
                        </a>
                        <a href="{{ route('properties.index') }}" class="h-12 px-6 bg-[#f0f2f4] text-[#111418] text-base font-bold rounded-lg hover:bg-[#e1e4e8] transition-colors">
                            Xem hồ sơ
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-[400px] flex justify-center md:justify-end">
                    <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96">
                        <div class="absolute inset-0 bg-primary/10 rounded-full translate-x-4 translate-y-4"></div>
                        <div class="absolute inset-0 rounded-full overflow-hidden border-4 border-white shadow-xl bg-gray-100" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCbkxxf2NNgr_i1l_NNY4Ztj6cMvp7cvLxjqQjglQ8t77hLNJefV6809Vq783ZYQ60mZSyOEhr4rPd1EDc2hvm2jNoB7DOF9V0jO9gcds2ex-7-VNyMDzEw5IXA1uz-W5p2MBKUuahnzJnEDEXDppE_ofHjcfFPDmL7mGcqpZ_rC8T2X2raNcwhMoLhSly8d03vYm2h00sycUIJKOntPzpQ76UQZRPZ_fUtKkVG1lAHRscBDZbze1R6hKb4IdlJldr9-rgFMMPQzw'); background-size: cover; background-position: center top;"></div>
                        <div class="absolute bottom-4 right-4 bg-white p-3 rounded-xl shadow-lg flex items-center gap-3">
                            <div class="bg-green-100 p-2 rounded-full text-green-600">
                                <span class="material-symbols-outlined">verified</span>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Đã xác thực</p>
                                <p class="text-sm font-bold text-[#111418]">Top Agent 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-[#f8f9fa] border-y border-[#e5e7eb]">
    <div class="px-4 md:px-10 lg:px-40 flex justify-center py-10">
        <div class="flex flex-col max-w-[960px] flex-1">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="flex flex-col items-center justify-center p-4 bg-white rounded-xl shadow-sm border border-[#e5e7eb]">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">calendar_month</span>
                    <p class="text-[#111418] text-3xl font-bold">8+</p>
                    <p class="text-[#637588] text-sm font-medium">Năm kinh nghiệm</p>
                </div>
                <div class="flex flex-col items-center justify-center p-4 bg-white rounded-xl shadow-sm border border-[#e5e7eb]">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">home_work</span>
                    <p class="text-[#111418] text-3xl font-bold">200+</p>
                    <p class="text-[#637588] text-sm font-medium">BĐS đã bán</p>
                </div>
                <div class="flex flex-col items-center justify-center p-4 bg-white rounded-xl shadow-sm border border-[#e5e7eb]">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">sentiment_satisfied</span>
                    <p class="text-[#111418] text-3xl font-bold">98%</p>
                    <p class="text-[#637588] text-sm font-medium">Khách hàng hài lòng</p>
                </div>
                <div class="flex flex-col items-center justify-center p-4 bg-white rounded-xl shadow-sm border border-[#e5e7eb]">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">award_star</span>
                    <p class="text-[#111418] text-3xl font-bold">15+</p>
                    <p class="text-[#637588] text-sm font-medium">Giải thưởng uy tín</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="bg-[#f8f9fa] py-16">
    <div class="px-4 md:px-10 lg:px-40 flex justify-center">
        <div class="flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-col items-center text-center mb-10">
                <h2 class="text-[#111418] text-3xl font-bold">Khách hàng nói gì?</h2>
                <p class="text-[#637588] mt-2">Sự hài lòng của khách hàng là thước đo thành công lớn nhất</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Review 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-[#e5e7eb] relative">
                    <span class="material-symbols-outlined text-primary/20 text-6xl absolute top-4 right-4">format_quote</span>
                    <p class="text-[#111418] text-lg italic mb-6 z-10 relative">"Long là một môi giới rất có tâm. Cậu ấy không chỉ giúp tôi tìm được căn hộ ưng ý tại Quận 2 mà còn hỗ trợ nhiệt tình các thủ tục pháp lý phức tạp. Rất đáng tin cậy!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-full bg-cover" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBC5waYo6GeR7VB8C_1hil3Z1njqrh8GX5K3p6pYtPheB8FOvj4lfvu4C4O0El61ahsy7pSY-D6q0B33Pf7rn06jxAKFi76RTVhHbljt0ywCPUNJ6x9gsk1J1wL_FEPaPo7ttK5XFgrs55wuKFhDxek4DPdMC3QcB6RbSWxJn8vdL6TEceEYihJ5mVSo2Nt6S8qhfZBgwGnDetu8ye2oIMdqFxT5xDZEf3Fde6Z7CH2K-knTUsF7rs2pE2xiFp6yRCOADXrR3tKKQ');"></div>
                        <div>
                            <p class="font-bold text-[#111418]">Anh Nguyễn Thanh Tùng</p>
                            <p class="text-sm text-[#637588]">Nhà đầu tư cá nhân</p>
                        </div>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-[#e5e7eb] relative">
                    <span class="material-symbols-outlined text-primary/20 text-6xl absolute top-4 right-4">format_quote</span>
                    <p class="text-[#111418] text-lg italic mb-6 z-10 relative">"Làm việc với Long rất chuyên nghiệp và nhanh gọn. Các phân tích về dòng tiền cho thuê của Long giúp tôi tự tin xuống tiền dự án mới. Cảm ơn Long rất nhiều."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-full bg-cover" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDqWzj5AjK7lkuFrfmL_LRHW3jDrWC9cEn--G6UYCmBYfnvank-QPRPJY82uRu-yAn6frWyBMX3us0He17-VYsP0ljqkTocYne3trvJwNH1JtVUgRXm5SETx_b27lutz61Wo15JLmcEMRliE49tigCl7JVaB2wIoaPnQtvsdysobA_ObEoWJjqQRg48UIqiswX9VDoHtgnW1yn_h-frYzP5qU_aeo3Ijx0wnfdpPUqdceywj1m9ld33rJYwO3LLlNZdM4cNLQJvsg');"></div>
                        <div>
                            <p class="font-bold text-[#111418]">Chị Mai Lan</p>
                            <p class="text-sm text-[#637588]">Giám đốc Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-white py-20">
    <div class="px-4 md:px-10 lg:px-40 flex justify-center">
        <div class="flex flex-col max-w-[960px] flex-1">
            <div class="bg-primary rounded-2xl p-8 md:p-12 text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -translate-x-1/2 translate-y-1/2"></div>
                <div class="z-10 max-w-lg">
                    <h2 class="text-white text-3xl font-bold mb-4">Sẵn sàng cho ngôi nhà mơ ước?</h2>
                    <p class="text-blue-100 text-lg">Đặt lịch hẹn tư vấn miễn phí ngay hôm nay để nhận được những phân tích thị trường mới nhất.</p>
                </div>
                <div class="z-10 flex gap-4">
                    <a href="{{ route('contact.index') }}" class="bg-white text-primary px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors shadow-lg whitespace-nowrap">
                        Đặt lịch hẹn
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

