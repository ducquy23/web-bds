@extends('layouts.app')

@section('title', 'Liên hệ - Nguyễn Văn A')

@section('content')
<main class="flex-grow w-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
    <!-- Page Heading -->
    <div class="mb-10">
        <h1 class="text-3xl md:text-4xl font-black leading-tight tracking-tight mb-3 dark:text-white">Liên hệ với tôi</h1>
        <p class="text-[#637588] dark:text-gray-400 text-lg font-normal max-w-2xl">
            Tôi luôn sẵn sàng hỗ trợ bạn tìm kiếm bất động sản phù hợp nhất. Hãy kết nối ngay hôm nay để nhận tư vấn chuyên sâu.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
        <!-- Left Column: Personal Info & Direct Contact -->
        <div class="lg:col-span-5 flex flex-col gap-6">
            <!-- Profile Card -->
            <div class="bg-white dark:bg-[#1a232e] rounded-xl p-6 border border-[#f0f2f4] dark:border-gray-800 shadow-sm">
                <div class="flex flex-col sm:flex-row gap-5 items-center sm:items-start text-center sm:text-left">
                    <div class="shrink-0 relative">
                        <div class="size-24 rounded-full bg-gray-200 overflow-hidden ring-4 ring-white dark:ring-gray-700 shadow-md">
                            <img alt="Nguyễn Văn A" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHYqqlXdvIRexjD-nHYNRgax1phKsFLaW1g5Lm3duFj8cUKT7mLK_eC9_0EGu7oAxmOf1ldqWr4CmrbftfIqJCPC_3qR-SWg6wuzlLsWBCLgS6AYNnSjeajQVl9IQjMbuTOiqHkRXMRWGXd3dQ-m7H0Y9BC9VMaWqnFeNA_FaBAZjIu1Ays6FBPJbW-2Lh1C1usqkTWbxWvBujvjGRiMffbmskGkZ84j73RsWWquY_XOPEqVbwrkvSV3mUJOii1xI0DBKlO0fMVw"/>
                        </div>
                        <div class="absolute bottom-1 right-1 bg-green-500 size-4 rounded-full border-2 border-white dark:border-gray-800" title="Online"></div>
                    </div>
                    <div class="flex flex-col pt-1">
                        <h3 class="text-xl font-bold text-[#111418] dark:text-white">Nguyễn Văn A</h3>
                        <p class="text-primary font-medium text-sm mb-1">Chuyên gia tư vấn & Đầu tư BĐS</p>
                        <p class="text-[#637588] dark:text-gray-400 text-sm">"Uy tín tạo nên thương hiệu. Tôi cam kết đồng hành cùng bạn trọn đời."</p>
                    </div>
                </div>
            </div>

            <!-- Contact List Items -->
            <div class="flex flex-col gap-3">
                <!-- Phone -->
                <div class="flex items-center gap-4 bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-gray-800 justify-between shadow-sm group hover:border-primary/50 transition-colors">
                    <div class="flex items-center gap-4 overflow-hidden">
                        <div class="text-[#111418] dark:text-white flex items-center justify-center rounded-lg bg-[#f0f2f4] dark:bg-gray-700 shrink-0 size-12 group-hover:bg-primary/10 group-hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Hotline</span>
                            <p class="text-[#111418] dark:text-white text-lg font-bold truncate">0909 123 456</p>
                        </div>
                    </div>
                    <div class="shrink-0">
                        <a class="flex items-center gap-2 text-sm font-bold text-primary bg-primary/10 hover:bg-primary hover:text-white px-4 py-2 rounded-lg transition-all" href="tel:0909123456">
                            <span>Gọi ngay</span>
                        </a>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-center gap-4 bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-gray-800 justify-between shadow-sm group hover:border-primary/50 transition-colors">
                    <div class="flex items-center gap-4 overflow-hidden">
                        <div class="text-[#111418] dark:text-white flex items-center justify-center rounded-lg bg-[#f0f2f4] dark:bg-gray-700 shrink-0 size-12 group-hover:bg-primary/10 group-hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Email</span>
                            <p class="text-[#111418] dark:text-white text-lg font-bold truncate">contact@nguyenvana.bds</p>
                        </div>
                    </div>
                    <div class="shrink-0">
                        <a class="flex items-center gap-2 text-sm font-bold text-primary bg-primary/10 hover:bg-primary hover:text-white px-4 py-2 rounded-lg transition-all" href="mailto:contact@nguyenvana.bds">
                            <span>Gửi mail</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Schedule Widget Card -->
            <div class="bg-gradient-to-br from-[#197fe6] to-[#0d4f91] rounded-xl p-6 text-white shadow-lg relative overflow-hidden">
                <div class="relative z-10">
                    <h4 class="text-xl font-bold mb-2">Đặt lịch hẹn tư vấn</h4>
                    <p class="text-blue-100 text-sm mb-4">Chọn thời gian phù hợp với bạn để trao đổi trực tiếp qua Google Meet hoặc xem nhà.</p>
                    <button class="bg-white text-primary hover:bg-blue-50 font-bold py-2.5 px-5 rounded-lg text-sm inline-flex items-center gap-2 transition-colors w-full justify-center">
                        <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                        Đặt lịch ngay
                    </button>
                </div>
                <span class="material-symbols-outlined absolute -bottom-4 -right-4 text-[120px] text-white opacity-10 pointer-events-none">schedule</span>
            </div>
        </div>

        <!-- Right Column: Contact Form -->
        <div class="lg:col-span-7">
            <div class="bg-white dark:bg-[#1a232e] rounded-xl p-6 md:p-8 border border-[#f0f2f4] dark:border-gray-800 shadow-sm h-full">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-[#111418] dark:text-white mb-2">Gửi tin nhắn trực tiếp</h3>
                    <p class="text-[#637588] dark:text-gray-400 text-sm">Điền thông tin vào biểu mẫu bên dưới, tôi sẽ phản hồi trong vòng 24h.</p>
                </div>

                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" class="space-y-5" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-sm font-bold text-[#111418] dark:text-gray-200" for="name">Họ và tên <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                    <span class="material-symbols-outlined text-[20px]">person</span>
                                </div>
                                <input class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow" id="name" name="name" placeholder="Ví dụ: Nguyễn Văn B" type="text" required/>
                            </div>
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-sm font-bold text-[#111418] dark:text-gray-200" for="phone">Số điện thoại <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                    <span class="material-symbols-outlined text-[20px]">phone_iphone</span>
                                </div>
                                <input class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow" id="phone" name="phone" placeholder="09xx xxx xxx" type="tel" required/>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-sm font-bold text-[#111418] dark:text-gray-200" for="email">Email của bạn</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">alternate_email</span>
                            </div>
                            <input class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow" id="email" name="email" placeholder="name@example.com" type="email"/>
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-sm font-bold text-[#111418] dark:text-gray-200" for="interest">Nhu cầu quan tâm</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">real_estate_agent</span>
                            </div>
                            <select class="w-full pl-10 pr-10 py-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent appearance-none transition-shadow" id="interest" name="interest">
                                <option disabled selected value="">Chọn nhu cầu của bạn</option>
                                <option value="buy">Mua nhà ở / Căn hộ</option>
                                <option value="invest">Đầu tư bất động sản</option>
                                <option value="rent">Thuê bất động sản</option>
                                <option value="sell">Ký gửi / Bán nhà</option>
                                <option value="other">Khác</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-sm font-bold text-[#111418] dark:text-gray-200" for="message">Nội dung tin nhắn</label>
                        <textarea class="w-full px-4 py-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow resize-none" id="message" name="message" placeholder="Hãy cho tôi biết chi tiết về nhu cầu hoặc câu hỏi của bạn..." rows="5"></textarea>
                    </div>
                    <div class="pt-2">
                        <button class="w-full bg-primary hover:bg-blue-600 text-white text-base font-bold py-3.5 px-6 rounded-lg shadow-md hover:shadow-lg transition-all transform active:scale-[0.99] flex items-center justify-center gap-2" type="submit">
                            <span class="material-symbols-outlined">send</span>
                            Gửi tin nhắn
                        </button>
                        <p class="text-xs text-gray-500 text-center mt-3">Thông tin của bạn được bảo mật tuyệt đối.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

