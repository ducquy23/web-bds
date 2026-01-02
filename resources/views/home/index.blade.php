@extends('layouts.app')

@section('title', 'Nguyễn Văn A - Chuyên gia Bất động sản')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-white dark:bg-[#111921] py-12 lg:py-20">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="flex w-full max-w-[1280px] flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <!-- Text Content -->
                <div class="flex flex-1 flex-col gap-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 self-center lg:self-start rounded-full bg-primary/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-primary">
                        <span class="material-symbols-outlined text-sm">verified</span>
                        <span>Đối tác tin cậy</span>
                    </div>
                    <h1 class="text-4xl font-extrabold leading-tight tracking-tight text-[#111418] dark:text-white lg:text-6xl">
                        Tìm kiếm tổ ấm <br/>
                        <span class="text-primary">Đầu tư tương lai</span>
                    </h1>
                    <p class="text-lg leading-relaxed text-[#637588] dark:text-gray-300">
                        Tôi là Nguyễn Văn A, chuyên gia tư vấn đầu tư và môi giới BĐS cao cấp tại TP.HCM. Với hơn 10 năm kinh nghiệm, tôi cam kết mang lại giá trị thực và trải nghiệm dịch vụ đẳng cấp cho khách hàng.
                    </p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-4">
                        <a href="{{ route('properties.index') }}" class="h-12 min-w-[160px] rounded-lg bg-primary px-6 text-base font-bold text-white shadow-lg hover:bg-primary/90 transition-all flex items-center justify-center">
                            Xem danh sách nhà
                        </a>
                        <button class="flex h-12 min-w-[160px] items-center justify-center gap-2 rounded-lg bg-[#f0f2f4] dark:bg-[#2a3441] px-6 text-base font-bold text-[#111418] dark:text-white hover:bg-gray-200 dark:hover:bg-[#364152] transition-all">
                            <span class="material-symbols-outlined">play_circle</span>
                            Xem video giới thiệu
                        </button>
                    </div>
                    <!-- Stats Row -->
                    <div class="mt-8 flex justify-center lg:justify-start gap-8 border-t border-[#f0f2f4] dark:border-[#2a3441] pt-8">
                        <div class="flex flex-col gap-1">
                            <span class="text-2xl font-bold text-[#111418] dark:text-white">10+</span>
                            <span class="text-sm font-medium text-[#637588] dark:text-gray-400">Năm kinh nghiệm</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-2xl font-bold text-[#111418] dark:text-white">500+</span>
                            <span class="text-sm font-medium text-[#637588] dark:text-gray-400">Giao dịch thành công</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-2xl font-bold text-[#111418] dark:text-white">Top 1%</span>
                            <span class="text-sm font-medium text-[#637588] dark:text-gray-400">Nhà môi giới xuất sắc</span>
                        </div>
                    </div>
                </div>
                <!-- Image Content -->
                <div class="relative flex flex-1 justify-center lg:justify-end w-full">
                    <div class="absolute -right-4 -top-4 size-32 rounded-full bg-primary/20 blur-2xl"></div>
                    <div class="absolute -left-4 -bottom-4 size-40 rounded-full bg-blue-500/10 blur-3xl"></div>
                    <div class="relative aspect-[4/5] w-full max-w-[480px] overflow-hidden rounded-2xl shadow-2xl bg-gray-100 dark:bg-gray-800">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>
                        <div class="absolute bottom-6 left-6 z-20 text-white">
                            <p class="text-lg font-bold">Nguyễn Văn A</p>
                            <p class="text-sm opacity-90">Senior Realtor</p>
                        </div>
                        <div class="h-full w-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC-7elvPxmG18iqt4ZWqFidcku3Vpxetm6RSYtXJH5yAqf19lutWoFiP14NiAJOgbzTw1geaQ9VWde-zzB7YQ7SRrM1DIchpqdoqpbubS-EnuPjO8TYNjpwecHUumM4UBNVsn3d35RU5FHSE_uBQKL6gy-MVg5oHA5-NZB5dNRxFBCpw7GqltFlwt4RAQo4m4yrHP-siP2Endsxj8Eb339LxtCxYgsjeupE_IP3BF2ZnkRv_dYKJ4xj32ZIV1Eha_IWoExSHjSgCQ');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="bg-[#f0f2f4] dark:bg-[#1a232e] py-12">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="flex w-full max-w-[1280px] flex-col items-center gap-6">
                <h2 class="text-2xl font-bold text-[#111418] dark:text-white text-center">Tìm kiếm bất động sản phù hợp</h2>
                <div class="w-full max-w-[800px] rounded-2xl bg-white dark:bg-[#111921] p-3 shadow-lg">
                    <form action="{{ route('properties.index') }}" method="GET" class="flex flex-col gap-3 md:flex-row md:items-center">
                        <div class="relative flex-1">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#637588]">location_on</span>
                            <input name="search" class="w-full rounded-lg border-none bg-transparent py-3 pl-10 pr-4 text-[#111418] dark:text-white placeholder:text-[#637588] focus:ring-0" placeholder="Nhập địa điểm, dự án..." type="text"/>
                        </div>
                        <div class="h-px w-full bg-[#f0f2f4] dark:bg-[#2a3441] md:h-10 md:w-px"></div>
                        <div class="relative flex-1 md:max-w-[200px]">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#637588]">home_work</span>
                            <select name="type" class="w-full appearance-none rounded-lg border-none bg-transparent py-3 pl-10 pr-8 text-[#111418] dark:text-white focus:ring-0">
                                <option value="">Tất cả loại hình</option>
                                <option value="can-ho">Căn hộ chung cư</option>
                                <option value="nha-pho">Nhà phố</option>
                                <option value="biet-thu">Biệt thự</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-sm text-[#637588] pointer-events-none">expand_more</span>
                        </div>
                        <button type="submit" class="h-12 rounded-lg bg-primary px-8 text-sm font-bold text-white transition-colors hover:bg-primary/90 md:w-auto w-full">
                            Tìm kiếm
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Listings -->
    <section class="py-16 lg:py-24 bg-white dark:bg-[#111921]" id="listings">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="flex w-full max-w-[1280px] flex-col gap-10">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-[#111418] dark:text-white">Bất động sản nổi bật</h2>
                        <p class="mt-2 text-[#637588] dark:text-gray-400">Những dự án và căn hộ tốt nhất được tuyển chọn kỹ lưỡng</p>
                    </div>
                    <a class="group flex items-center gap-1 font-bold text-primary hover:text-primary/80" href="{{ route('properties.index') }}">
                        Xem tất cả
                        <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Listing Card 1 -->
                    <a href="{{ route('properties.show', 1) }}" class="group flex flex-col overflow-hidden rounded-2xl border border-[#e5e7eb] dark:border-[#2a3441] bg-white dark:bg-[#1a232e] shadow-sm transition-all hover:shadow-xl hover:-translate-y-1">
                        <div class="relative aspect-[4/3] w-full overflow-hidden bg-gray-200">
                            <div class="absolute right-4 top-4 z-10 rounded-lg bg-white/90 px-3 py-1 text-sm font-bold text-[#111418] backdrop-blur-sm">Bán</div>
                            <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtM0bkm5WRTZs1rw1z2jxiWzz4RjriSHADCHbAWU_6jCsaQbBPkNyW0g5jjCiMiL7g_13KnP-FaiKVnKGwLDZlvG3bZvkcRj4rWexHPfWeI-0TXLn-4mBLpEY60H2qsgILbecz9yegDWm6-JZTpy_OjD0TJ3sVD8b4zehoeKQs51U5RL5gMpkEySSWdvYLWhBry7-UPeFMOSxdNQ2ZCOb1c9HDpAfLogL9YYnaamUM9JravW3WURePj_CIBjJCPLZmZz1cdqxIMg');"></div>
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="mb-3 flex items-start justify-between">
                                <h3 class="text-lg font-bold text-[#111418] dark:text-white line-clamp-1 group-hover:text-primary transition-colors">Penthouse View Sông Sài Gòn</h3>
                                <p class="text-lg font-bold text-primary">25 Tỷ</p>
                            </div>
                            <div class="mb-4 flex items-center gap-2 text-sm text-[#637588] dark:text-gray-400">
                                <span class="material-symbols-outlined text-lg">location_on</span>
                                <span class="truncate">Thảo Điền, Quận 2, TP.HCM</span>
                            </div>
                            <div class="mt-auto flex items-center justify-between border-t border-[#f0f2f4] dark:border-[#2a3441] pt-4">
                                <div class="flex items-center gap-4 text-sm font-medium text-[#111418] dark:text-gray-300">
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">bed</span> 4</div>
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">shower</span> 3</div>
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">square_foot</span> 250m²</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Listing Card 2 -->
                    <a href="{{ route('properties.show', 2) }}" class="group flex flex-col overflow-hidden rounded-2xl border border-[#e5e7eb] dark:border-[#2a3441] bg-white dark:bg-[#1a232e] shadow-sm transition-all hover:shadow-xl hover:-translate-y-1">
                        <div class="relative aspect-[4/3] w-full overflow-hidden bg-gray-200">
                            <div class="absolute right-4 top-4 z-10 rounded-lg bg-white/90 px-3 py-1 text-sm font-bold text-[#111418] backdrop-blur-sm">Cho thuê</div>
                            <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC-iM29FgAzfIXnwxn7ZODs18tVVfGQ1cR-E1Y77-N9T7uKViZPNu5x1qB2uzAK2HGaGBrJeDhVsI7upo25AHqpl5JNkSaur8r6lxam_XsUXD3qzTWwPp5OkKxFpwVdcUmwBhIq83HxoNGl1YRoY_m11o77batNlULk4QnNJt0rGrCi7ilO_QZ3ta7VVg-B213Zsvnz1eL8gAkGLFQ0E0pAW-r7zYeqes5vcTBlWfBAeVWq7nmfTy9P1iOwrLso4B-5BkE7BFaiNw');"></div>
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="mb-3 flex items-start justify-between">
                                <h3 class="text-lg font-bold text-[#111418] dark:text-white line-clamp-1 group-hover:text-primary transition-colors">Biệt thự Vườn Sala</h3>
                                <p class="text-lg font-bold text-primary">5,000$</p>
                            </div>
                            <div class="mb-4 flex items-center gap-2 text-sm text-[#637588] dark:text-gray-400">
                                <span class="material-symbols-outlined text-lg">location_on</span>
                                <span class="truncate">KĐT Sala, Quận 2, TP.HCM</span>
                            </div>
                            <div class="mt-auto flex items-center justify-between border-t border-[#f0f2f4] dark:border-[#2a3441] pt-4">
                                <div class="flex items-center gap-4 text-sm font-medium text-[#111418] dark:text-gray-300">
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">bed</span> 5</div>
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">shower</span> 6</div>
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">square_foot</span> 450m²</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Listing Card 3 -->
                    <a href="{{ route('properties.show', 3) }}" class="group flex flex-col overflow-hidden rounded-2xl border border-[#e5e7eb] dark:border-[#2a3441] bg-white dark:bg-[#1a232e] shadow-sm transition-all hover:shadow-xl hover:-translate-y-1">
                        <div class="relative aspect-[4/3] w-full overflow-hidden bg-gray-200">
                            <div class="absolute right-4 top-4 z-10 rounded-lg bg-white/90 px-3 py-1 text-sm font-bold text-[#111418] backdrop-blur-sm">Bán</div>
                            <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB9Ex7TxfHnOPx2dyctTfu6cJqc7GkD8NgzLn6bm6Rid_VODlEDPkK74eSkhlaX3niZNqP9uW3DDb7hS2H_m2p4j3l7TDobsjwFN-OX7gc-EERbwhh0Pu6Ppi4OF2TCAuuLHIan27E2AlcWMlgbAL1x-Yge3RaQSHCnCVFFiZQfgBWwjtveRVVtHhp06RyeMZJ3SGba8TkPNw-TsQe62ZwivNUi3N802q1bCcsSH9_Ssl3n3vOoJq9eBIUukiS4U_OuvVi9BmVaIA');"></div>
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <div class="mb-3 flex items-start justify-between">
                                <h3 class="text-lg font-bold text-[#111418] dark:text-white line-clamp-1 group-hover:text-primary transition-colors">Căn hộ Vinhomes Central Park</h3>
                                <p class="text-lg font-bold text-primary">8.5 Tỷ</p>
                            </div>
                            <div class="mb-4 flex items-center gap-2 text-sm text-[#637588] dark:text-gray-400">
                                <span class="material-symbols-outlined text-lg">location_on</span>
                                <span class="truncate">Bình Thạnh, TP.HCM</span>
                            </div>
                            <div class="mt-auto flex items-center justify-between border-t border-[#f0f2f4] dark:border-[#2a3441] pt-4">
                                <div class="flex items-center gap-4 text-sm font-medium text-[#111418] dark:text-gray-300">
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">bed</span> 2</div>
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">shower</span> 2</div>
                                    <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">square_foot</span> 85m²</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About & Testimonials (Split Section) -->
    <section class="bg-[#f0f2f4] dark:bg-[#1a232e] py-16 lg:py-24">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="flex w-full max-w-[1280px] flex-col gap-16">
                <!-- About Snippet -->
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:items-center" id="about">
                    <div class="relative h-full min-h-[300px] w-full overflow-hidden rounded-2xl bg-gray-200">
                        <div class="h-full w-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBUK7_AeRzF_VlS-3rinrlx_Aw9mTqZI4TBRXJcEzwHlxoTVJKXyN5JbW4FM1KP8_T3As-217ucCmJiGgOc9RZrorHZrZmDN06AUBtRoQKyGFecQICzj-VqV7Z6OpsME5KDeCtkW20_wz_dm-lJ-Qn2zKFEyAx1KUVTGq1wTzpvNnnEsW2iTHBfMwMCfY3VOUo9w9rOkbEgNxNpB7vX1ACPsuLuEvb8a2-HAhR2-mGwHZ97z6NTOi2oqZETmUxPzbhSKrMXuQBX4g');"></div>
                    </div>
                    <div class="flex flex-col gap-6">
                        <h2 class="text-3xl font-bold text-[#111418] dark:text-white">Kiến tạo giá trị bền vững</h2>
                        <p class="text-[#637588] dark:text-gray-300 leading-relaxed">
                            Với triết lý "Khách hàng là trọng tâm", tôi không chỉ bán một ngôi nhà, mà mang đến giải pháp an cư và đầu tư tối ưu nhất. Sự am hiểu sâu sắc về thị trường khu Đông TP.HCM giúp tôi tư vấn chính xác, minh bạch và hiệu quả cho từng nhu cầu riêng biệt của khách hàng.
                        </p>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-3">
                                <div class="flex size-8 items-center justify-center rounded-full bg-primary/20 text-primary">
                                    <span class="material-symbols-outlined text-sm">check</span>
                                </div>
                                <span class="font-medium text-[#111418] dark:text-white">Pháp lý minh bạch 100%</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex size-8 items-center justify-center rounded-full bg-primary/20 text-primary">
                                    <span class="material-symbols-outlined text-sm">check</span>
                                </div>
                                <span class="font-medium text-[#111418] dark:text-white">Hỗ trợ thủ tục vay ngân hàng</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex size-8 items-center justify-center rounded-full bg-primary/20 text-primary">
                                    <span class="material-symbols-outlined text-sm">check</span>
                                </div>
                                <span class="font-medium text-[#111418] dark:text-white">Đồng hành trọn đời</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonials -->
                <div class="flex flex-col gap-8" id="testimonials">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold text-[#111418] dark:text-white">Khách hàng nói gì về tôi</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                        <!-- Review 1 -->
                        <div class="flex flex-col gap-4 rounded-xl bg-white dark:bg-[#111921] p-6 shadow-sm border border-[#e5e7eb] dark:border-[#2a3441]">
                            <div class="flex gap-1 text-yellow-500">
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                            </div>
                            <p class="text-[#637588] dark:text-gray-300 italic">"Nguyễn Văn A đã giúp gia đình tôi tìm được căn nhà ưng ý tại Thảo Điền chỉ trong 2 tuần. Rất chuyên nghiệp và tận tâm!"</p>
                            <div class="flex items-center gap-3 pt-2">
                                <div class="size-10 rounded-full bg-gray-200 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDkU2ZZoP6sEQ3-MQzTagfboWv9dwX1EJghyNbFUD6Ku5OmZ-sa3TukcqB4gyRzbkBCdfe0BSBMRxjO9A5MHnHhX1kHTz9iDD7k_nHkuMqMeexX8w3uwa6B7icKZpxUqtQVPukTpLiliNB-1e_UkDkC9TSxbr_jW71egcoWqu9WrUrqk_CJLDXoR5qhVSzdSpgOY4pEVQGk5MAtD19UYfZ77Oete0MWOIJXB7dnbR98SolEDBUpHvRgLeRkw83FmgVCslVRhW4Ybg');"></div>
                                <div>
                                    <p class="text-sm font-bold text-[#111418] dark:text-white">Chị Mai Lan</p>
                                    <p class="text-xs text-[#637588] dark:text-gray-400">Nhà đầu tư</p>
                                </div>
                            </div>
                        </div>
                        <!-- Review 2 -->
                        <div class="flex flex-col gap-4 rounded-xl bg-white dark:bg-[#111921] p-6 shadow-sm border border-[#e5e7eb] dark:border-[#2a3441]">
                            <div class="flex gap-1 text-yellow-500">
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                            </div>
                            <p class="text-[#637588] dark:text-gray-300 italic">"Quy trình làm việc rõ ràng, hỗ trợ pháp lý cực kỳ tốt. Tôi hoàn toàn yên tâm khi giao dịch qua anh A."</p>
                            <div class="flex items-center gap-3 pt-2">
                                <div class="size-10 rounded-full bg-gray-200 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC89VrdKv8OYODxVN5DIR4xYIkzEn_sx8_ZN0VgX-RWLeGVHuVtjNVD6IUpqcApNZ70pVDaCNTcv7E67yeTgazPUJ2lIuLA6qca2t_p6RfmdJ8LoA-yejJJrvDX5cwTUvbw96AGqUxkYnLfkx9-z_1P4JmTCHk1bKEd8JtH9ak7WA7qnARSGIyueIKxxtGvZ2wQodR8fJYMYjZ9XLpapNyCmb3lUPXReujkaroSiaKDq8cPm_FDlWIre4A0Wi-G4eW8Ceyc1qcTyQ');"></div>
                                <div>
                                    <p class="text-sm font-bold text-[#111418] dark:text-white">Anh Tuấn Hưng</p>
                                    <p class="text-xs text-[#637588] dark:text-gray-400">CEO Tech Corp</p>
                                </div>
                            </div>
                        </div>
                        <!-- Review 3 -->
                        <div class="flex flex-col gap-4 rounded-xl bg-white dark:bg-[#111921] p-6 shadow-sm border border-[#e5e7eb] dark:border-[#2a3441]">
                            <div class="flex gap-1 text-yellow-500">
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                            </div>
                            <p class="text-[#637588] dark:text-gray-300 italic">"Một người môi giới có tâm và có tầm. Cảm ơn anh đã tư vấn cho tôi cơ hội đầu tư sinh lời 30% năm ngoái."</p>
                            <div class="flex items-center gap-3 pt-2">
                                <div class="size-10 rounded-full bg-gray-200 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDuRvbEqL7gvNHrwg_OBa80FMd4oOODR2oJfyzRF-d9qsst3uKxSH8gPfV3VqTWNJ1-dcIhm2fXPW_7B5DxLgkR5fKYK5cfigZcdHzIAmaWTGywhMaGHSP2MJGGZdIcTmwIqLPtVCPIkiiXT10ZN-0zoueFaiRcxkUrsvlxwGm-njIjlNZaYfaNMalz8ydqHRVv7uXMlnqXLvfSjuII7vGgi_NYR2YU-AJhknIv3Qd0dp6VnbM3SO4G0hP0ZwPvTwZNlwfh-ucDLg');"></div>
                                <div>
                                    <p class="text-sm font-bold text-[#111418] dark:text-white">Anh Quốc Bảo</p>
                                    <p class="text-xs text-[#637588] dark:text-gray-400">Kinh doanh tự do</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-16 lg:py-24 bg-white dark:bg-[#111921]" id="blog">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="flex w-full max-w-[1280px] flex-col gap-10">
                <div class="flex items-center justify-between">
                    <h2 class="text-3xl font-bold text-[#111418] dark:text-white">Góc nhìn chuyên gia</h2>
                    <a class="hidden sm:block text-sm font-bold text-primary hover:underline" href="{{ route('blog.index') }}">Xem tất cả bài viết</a>
                </div>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
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

    <!-- CTA & Newsletter -->
    <section class="bg-primary py-16 text-white">
        <div class="layout-container flex justify-center px-6 lg:px-10">
            <div class="flex w-full max-w-[960px] flex-col items-center gap-8 text-center">
                <h2 class="text-3xl font-bold md:text-4xl">Đăng ký nhận thông tin dự án mới nhất</h2>
                <p class="max-w-2xl text-lg text-white/90">
                    Đừng bỏ lỡ những cơ hội đầu tư sinh lời. Nhận bảng giá và phân tích thị trường độc quyền từ tôi hàng tuần.
                </p>
                <form class="flex w-full max-w-md flex-col gap-3 sm:flex-row">
                    <input class="flex-1 rounded-lg border-none bg-white px-4 py-3 text-[#111418] placeholder:text-gray-400 focus:ring-2 focus:ring-white/50" placeholder="Email của bạn" type="email"/>
                    <button class="rounded-lg bg-[#111418] px-6 py-3 font-bold text-white transition-colors hover:bg-black/80">Đăng ký ngay</button>
                </form>
            </div>
        </div>
    </section>
@endsection

