@extends('layouts.app')

@section('title', 'Danh sách Bất động sản - Nguyễn Văn A')

@section('content')
    <section class="bg-white dark:bg-[#111921] pt-12 pb-8 lg:pt-20 lg:pb-12 border-b border-[#f0f2f4] dark:border-[#2a3441]">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="flex w-full max-w-[1280px] flex-col gap-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl font-black leading-tight tracking-[-0.033em] text-[#111418] dark:text-white mb-3">Portfolio Bất Động Sản</h1>
                    <p class="text-[#637588] dark:text-gray-400 text-lg font-normal">
                        Tuyển chọn những bất động sản tiềm năng cao dành cho nhà đầu tư tinh tường. Mỗi tài sản đều được tôi thẩm định kỹ lưỡng.
                    </p>
                </div>
                <!-- Filters -->
                <div class="flex flex-wrap items-center gap-3 overflow-x-auto pb-2">
                    <button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full border border-[#e5e7eb] dark:border-gray-700 bg-white dark:bg-[#1a232e] px-4 hover:border-primary hover:text-primary transition-colors shadow-sm">
                        <span class="text-sm font-medium">Loại hình</span>
                        <span class="material-symbols-outlined text-lg">keyboard_arrow_down</span>
                    </button>
                    <button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full border border-[#e5e7eb] dark:border-gray-700 bg-white dark:bg-[#1a232e] px-4 hover:border-primary hover:text-primary transition-colors shadow-sm">
                        <span class="text-sm font-medium">Khoảng giá</span>
                        <span class="material-symbols-outlined text-lg">keyboard_arrow_down</span>
                    </button>
                    <button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full border border-[#e5e7eb] dark:border-gray-700 bg-white dark:bg-[#1a232e] px-4 hover:border-primary hover:text-primary transition-colors shadow-sm">
                        <span class="text-sm font-medium">Khu vực</span>
                        <span class="material-symbols-outlined text-lg">keyboard_arrow_down</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#f0f2f4] dark:bg-[#0d131a] py-12 lg:py-16">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="w-full max-w-[1280px]">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    <!-- Listing 1 -->
                    <a href="{{ route('properties.show', 1) }}" class="group flex flex-col overflow-hidden rounded-xl bg-white dark:bg-[#1a232e] shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center rounded-md bg-green-500/90 px-2.5 py-1 text-xs font-bold text-white shadow-sm backdrop-blur-sm">Đang bán</span>
                            </div>
                            <div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtM0bkm5WRTZs1rw1z2jxiWzz4RjriSHADCHbAWU_6jCsaQbBPkNyW0g5jjCiMiL7g_13KnP-FaiKVnKGwLDZlvG3bZvkcRj4rWexHPfWeI-0TXLn-4mBLpEY60H2qsgILbecz9yegDWm6-JZTpy_OjD0TJ3sVD8b4zehoeKQs51U5RL5gMpkEySSWdvYLWhBry7-UPeFMOSxdNQ2ZCOb1c9HDpAfLogL9YYnaamUM9JravW3WURePj_CIBjJCPLZmZz1cdqxIMg');"></div>
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="flex justify-between items-start mb-2">
                                <p class="text-primary text-xl font-bold">25 Tỷ VND</p>
                                <span class="text-xs font-medium text-[#637588] dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">Thảo Điền, Q.2</span>
                            </div>
                            <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-1 line-clamp-1 group-hover:text-primary transition-colors">Penthouse View Sông Sài Gòn</h3>
                            <p class="text-sm text-[#637588] dark:text-gray-400 mb-4 line-clamp-2">Căn hộ cao cấp view sông, nội thất hiện đại</p>
                            <div class="flex items-center gap-4 mb-4 pb-4 border-b border-gray-100 dark:border-gray-800">
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">bed</span>
                                    <span class="text-sm font-medium">4</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">bathtub</span>
                                    <span class="text-sm font-medium">3</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">square_foot</span>
                                    <span class="text-sm font-medium">250m²</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Listing 2 -->
                    <a href="{{ route('properties.show', 2) }}" class="group flex flex-col overflow-hidden rounded-xl bg-white dark:bg-[#1a232e] shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center rounded-md bg-blue-500/90 px-2.5 py-1 text-xs font-bold text-white shadow-sm backdrop-blur-sm">Cho thuê</span>
                            </div>
                            <div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC-iM29FgAzfIXnwxn7ZODs18tVVfGQ1cR-E1Y77-N9T7uKViZPNu5x1qB2uzAK2HGaGBrJeDhVsI7upo25AHqpl5JNkSaur8r6lxam_XsUXD3qzTWwPp5OkKxFpwVdcUmwBhIq83HxoNGl1YRoY_m11o77batNlULk4QnNJt0rGrCi7ilO_QZ3ta7VVg-B213Zsvnz1eL8gAkGLFQ0E0pAW-r7zYeqes5vcTBlWfBAeVWq7nmfTy9P1iOwrLso4B-5BkE7BFaiNw');"></div>
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="flex justify-between items-start mb-2">
                                <p class="text-primary text-xl font-bold">5,000$</p>
                                <span class="text-xs font-medium text-[#637588] dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">KĐT Sala, Q.2</span>
                            </div>
                            <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-1 line-clamp-1 group-hover:text-primary transition-colors">Biệt thự Vườn Sala</h3>
                            <p class="text-sm text-[#637588] dark:text-gray-400 mb-4 line-clamp-2">Biệt thự sân vườn rộng rãi với nội thất hiện đại</p>
                            <div class="flex items-center gap-4 mb-4 pb-4 border-b border-gray-100 dark:border-gray-800">
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">bed</span>
                                    <span class="text-sm font-medium">5</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">bathtub</span>
                                    <span class="text-sm font-medium">6</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">square_foot</span>
                                    <span class="text-sm font-medium">450m²</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Listing 3 -->
                    <a href="{{ route('properties.show', 3) }}" class="group flex flex-col overflow-hidden rounded-xl bg-white dark:bg-[#1a232e] shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <div class="absolute top-3 left-3 z-10">
                                <span class="inline-flex items-center rounded-md bg-green-500/90 px-2.5 py-1 text-xs font-bold text-white shadow-sm backdrop-blur-sm">Đang bán</span>
                            </div>
                            <div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB9Ex7TxfHnOPx2dyctTfu6cJqc7GkD8NgzLn6bm6Rid_VODlEDPkK74eSkhlaX3niZNqP9uW3DDb7hS2H_m2p4j3l7TDobsjwFN-OX7gc-EERbwhh0Pu6Ppi4OF2TCAuuLHIan27E2AlcWMlgbAL1x-Yge3RaQSHCnCVFFiZQfgBWwjtveRVVtHhp06RyeMZJ3SGba8TkPNw-TsQe62ZwivNUi3N802q1bCcsSH9_Ssl3n3vOoJq9eBIUukiS4U_OuvVi9BmVaIA');"></div>
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="flex justify-between items-start mb-2">
                                <p class="text-primary text-xl font-bold">8.5 Tỷ VND</p>
                                <span class="text-xs font-medium text-[#637588] dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">Bình Thạnh</span>
                            </div>
                            <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-1 line-clamp-1 group-hover:text-primary transition-colors">Căn hộ Vinhomes Central Park</h3>
                            <p class="text-sm text-[#637588] dark:text-gray-400 mb-4 line-clamp-2">Căn hộ tầng cao, view sông Sài Gòn trực diện</p>
                            <div class="flex items-center gap-4 mb-4 pb-4 border-b border-gray-100 dark:border-gray-800">
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">bed</span>
                                    <span class="text-sm font-medium">2</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">bathtub</span>
                                    <span class="text-sm font-medium">2</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-[#637588] dark:text-gray-400">
                                    <span class="material-symbols-outlined text-lg">square_foot</span>
                                    <span class="text-sm font-medium">85m²</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Load More -->
                <div class="flex justify-center mt-12">
                    <button class="flex min-w-[120px] cursor-pointer items-center justify-center rounded-full h-12 px-8 bg-white dark:bg-[#1a232e] border border-gray-200 dark:border-gray-700 text-[#111418] dark:text-white text-sm font-bold hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors shadow-sm">
                        Xem thêm 12 BĐS
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-white dark:bg-[#111921] py-16">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="w-full max-w-[1280px]">
                <div class="rounded-2xl bg-gradient-to-r from-primary to-blue-600 p-8 md:p-12 relative overflow-hidden">
                    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="text-center md:text-left">
                            <h2 class="text-3xl font-bold text-white mb-2">Không tìm thấy BĐS ưng ý?</h2>
                            <p class="text-blue-100 text-lg">Để lại yêu cầu, tôi sẽ tìm kiếm BĐS phù hợp nhất cho bạn.</p>
                        </div>
                        <a href="{{ route('contact.index') }}" class="shrink-0 rounded-lg bg-white px-8 py-3 text-primary font-bold hover:bg-gray-100 transition-colors shadow-lg">
                            Gửi yêu cầu ngay
                        </a>
                    </div>
                    <div class="absolute -top-24 -right-24 size-64 rounded-full bg-white/10 blur-3xl"></div>
                    <div class="absolute -bottom-24 -left-24 size-64 rounded-full bg-white/10 blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

