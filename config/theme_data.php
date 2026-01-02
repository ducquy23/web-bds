<?php

return [
    // Thông tin cá nhân
    'agent' => [
        'name' => 'Nguyễn Văn A',
        'title' => 'Chuyên gia Bất động sản',
        'phone' => '0909 123 456',
        'email' => 'contact@nguyenvana.bds',
        'address' => 'Toà nhà Landmark 81, Vinhomes Central Park, TP.HCM',
        'avatar' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC-7elvPxmG18iqt4ZWqFidcku3Vpxetm6RSYtXJH5yAqf19lutWoFiP14NiAJOgbzTw1geaQ9VWde-zzB7YQ7SRrM1DIchpqdoqpbubS-EnuPjO8TYNjpwecHUumM4UBNVsn3d35RU5FHSE_uBQKL6gy-MVg5oHA5-NZB5dNRxFBCpw7GqltFlwt4RAQo4m4yrHP-siP2Endsxj8Eb339LxtCxYgsjeupE_IP3BF2ZnkRv_dYKJ4xj32ZIV1Eha_IWoExSHjSgCQ',
        'bio' => 'Tôi là Nguyễn Văn A, chuyên gia tư vấn đầu tư và môi giới BĐS cao cấp tại TP.HCM. Với hơn 10 năm kinh nghiệm, tôi cam kết mang lại giá trị thực và trải nghiệm dịch vụ đẳng cấp cho khách hàng.',
        'description' => 'Đối tác tin cậy trong hành trình tìm kiếm tổ ấm và cơ hội đầu tư bất động sản tại TP.HCM.',
    ],

    // Thống kê
    'stats' => [
        'experience_years' => '10+',
        'experience_label' => 'Năm kinh nghiệm',
        'transactions' => '500+',
        'transactions_label' => 'Giao dịch thành công',
        'ranking' => 'Top 1%',
        'ranking_label' => 'Nhà môi giới xuất sắc',
    ],

    // Navigation menu
    'navigation' => [
        ['label' => 'Trang chủ', 'url' => '/', 'active' => false],
        ['label' => 'Bất động sản', 'url' => '/bat-dong-san', 'active' => false],
        ['label' => 'Về tôi', 'url' => '/ve-toi', 'active' => false],
        ['label' => 'Khách hàng', 'url' => '#testimonials', 'active' => false],
        ['label' => 'Blog', 'url' => '/blog', 'active' => false],
    ],

    // Bất động sản nổi bật
    'featured_listings' => [
        [
            'id' => 1,
            'title' => 'Penthouse View Sông Sài Gòn',
            'price' => '25 Tỷ',
            'type' => 'Bán',
            'location' => 'Thảo Điền, Quận 2, TP.HCM',
            'bedrooms' => 4,
            'bathrooms' => 3,
            'area' => '250m²',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDtM0bkm5WRTZs1rw1z2jxiWzz4RjriSHADCHbAWU_6jCsaQbBPkNyW0g5jjCiMiL7g_13KnP-FaiKVnKGwLDZlvG3bZvkcRj4rWexHPfWeI-0TXLn-4mBLpEY60H2qsgILbecz9yegDWm6-JZTpy_OjD0TJ3sVD8b4zehoeKQs51U5RL5gMpkEySSWdvYLWhBry7-UPeFMOSxdNQ2ZCOb1c9HDpAfLogL9YYnaamUM9JravW3WURePj_CIBjJCPLZmZz1cdqxIMg',
        ],
        [
            'id' => 2,
            'title' => 'Biệt thự Vườn Sala',
            'price' => '5,000$',
            'type' => 'Cho thuê',
            'location' => 'KĐT Sala, Quận 2, TP.HCM',
            'bedrooms' => 5,
            'bathrooms' => 6,
            'area' => '450m²',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC-iM29FgAzfIXnwxn7ZODs18tVVfGQ1cR-E1Y77-N9T7uKViZPNu5x1qB2uzAK2HGaGBrJeDhVsI7upo25AHqpl5JNkSaur8r6lxam_XsUXD3qzTWwPp5OkKxFpwVdcUmwBhIq83HxoNGl1YRoY_m11o77batNlULk4QnNJt0rGrCi7ilO_QZ3ta7VVg-B213Zsvnz1eL8gAkGLFQ0E0pAW-r7zYeqes5vcTBlWfBAeVWq7nmfTy9P1iOwrLso4B-5BkE7BFaiNw',
        ],
        [
            'id' => 3,
            'title' => 'Căn hộ Vinhomes Central Park',
            'price' => '8.5 Tỷ',
            'type' => 'Bán',
            'location' => 'Bình Thạnh, TP.HCM',
            'bedrooms' => 2,
            'bathrooms' => 2,
            'area' => '85m²',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB9Ex7TxfHnOPx2dyctTfu6cJqc7GkD8NgzLn6bm6Rid_VODlEDPkK74eSkhlaX3niZNqP9uW3DDb7hS2H_m2p4j3l7TDobsjwFN-OX7gc-EERbwhh0Pu6Ppi4OF2TCAuuLHIan27E2AlcWMlgbAL1x-Yge3RaQSHCnCVFFiZQfgBWwjtveRVVtHhp06RyeMZJ3SGba8TkPNw-TsQe62ZwivNUi3N802q1bCcsSH9_Ssl3n3vOoJq9eBIUukiS4U_OuvVi9BmVaIA',
        ],
    ],

    // Testimonials
    'testimonials' => [
        [
            'name' => 'Chị Mai Lan',
            'role' => 'Nhà đầu tư',
            'rating' => 5,
            'comment' => 'Nguyễn Văn A đã giúp gia đình tôi tìm được căn nhà ưng ý tại Thảo Điền chỉ trong 2 tuần. Rất chuyên nghiệp và tận tâm!',
            'avatar' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDkU2ZZoP6sEQ3-MQzTagfboWv9dwX1EJghyNbFUD6Ku5OmZ-sa3TukcqB4gyRzbkBCdfe0BSBMRxjO9A5MHnHhX1kHTz9iDD7k_nHkuMqMeexX8w3uwa6B7icKZpxUqtQVPukTpLiliNB-1e_UkDkC9TSxbr_jW71egcoWqu9WrUrqk_CJLDXoR5qhVSzdSpgOY4pEVQGk5MAtD19UYfZ77Oete0MWOIJXB7dnbR98SolEDBUpHvRgLeRkw83FmgVCslVRhW4Ybg',
        ],
        [
            'name' => 'Anh Tuấn Hưng',
            'role' => 'CEO Tech Corp',
            'rating' => 5,
            'comment' => 'Quy trình làm việc rõ ràng, hỗ trợ pháp lý cực kỳ tốt. Tôi hoàn toàn yên tâm khi giao dịch qua anh A.',
            'avatar' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC89VrdKv8OYODxVN5DIR4xYIkzEn_sx8_ZN0VgX-RWLeGVHuVtjNVD6IUpqcApNZ70pVDaCNTcv7E67yeTgazPUJ2lIuLA6qca2t_p6RfmdJ8LoA-yejJJrvDX5cwTUvbw96AGqUxkYnLfkx9-z_1P4JmTCHk1bKEd8JtH9ak7WA7qnARSGIyueIKxxtGvZ2wQodR8fJYMYjZ9XLpapNyCmb3lUPXReujkaroSiaKDq8cPm_FDlWIre4A0Wi-G4eW8Ceyc1qcTyQ',
        ],
        [
            'name' => 'Anh Quốc Bảo',
            'role' => 'Kinh doanh tự do',
            'rating' => 5,
            'comment' => 'Một người môi giới có tâm và có tầm. Cảm ơn anh đã tư vấn cho tôi cơ hội đầu tư sinh lời 30% năm ngoái.',
            'avatar' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDuRvbEqL7gvNHrwg_OBa80FMd4oOODR2oJfyzRF-d9qsst3uKxSH8gPfV3VqTWNJ1-dcIhm2fXPW_7B5DxLgkR5fKYK5cfigZcdHzIAmaWTGywhMaGHSP2MJGGZdIcTmwIqLPtVCPIkiiXT10ZN-0zoueFaiRcxkUrsvlxwGm-njIjlNZaYfaNMalz8ydqHRVv7uXMlnqXLvfSjuII7vGgi_NYR2YU-AJhknIv3Qd0dp6VnbM3SO4G0hP0ZwPvTwZNlwfh-ucDLg',
        ],
    ],

    // Blog posts
    'blog_posts' => [
        [
            'id' => 1,
            'title' => 'Dự báo thị trường BĐS TP.HCM Quý 4/2023',
            'category' => 'Phân tích thị trường',
            'excerpt' => 'Những tín hiệu tích cực từ chính sách vĩ mô và dòng vốn FDI đang tác động mạnh mẽ đến phân khúc căn hộ cao cấp...',
            'date' => '15/10/2023',
            'read_time' => '5 phút đọc',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBMUXfXMARyV2FYO8xi_Rl4yzZFE3yrfvlgUw8mMBk_U-TTQraBD5W-zWdA08h-wgGSYv_ae3JUEhSOA9sF1JtsSKKGh_1xPOHvBj7U46tGzNBVPwLgYomPzybU8FGoVFFeMO8JpBKosVm8uCZVYSqQcz4m-B3Q168zDq11bZkFwjNe0_WzionYt3zuOZlzcIBWFnKWZpCCqaAjW-Nv086X4egf6vFKi0vjiQVRTPvTwfnpAEU_zEL8hZ5v6UPyavzaS8fPW_55pQ',
        ],
        [
            'id' => 2,
            'title' => '5 Lưu ý "vàng" khi mua nhà lần đầu',
            'category' => 'Kinh nghiệm mua nhà',
            'excerpt' => 'Tránh những sai lầm phổ biến về tài chính và pháp lý giúp bạn sở hữu tổ ấm mơ ước một cách an toàn nhất.',
            'date' => '10/10/2023',
            'read_time' => '7 phút đọc',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB-zr-p9SsG2fXZGfrEswgfrf6e21evngm2hxqB5q_lu5aJFrGOaQP8b2sbOuDO_52FOG3DdWN8CnTNxgPynYaT_7m7I0rcLx7SQxfqCf0oqyfyCkGLBl9Pr1KAEOUnInQeg9iPKnuKOPHuVMSXJPZOqmxpZDp7BlBsU5zN-oU1gfjNGvTThB9oJorj4vI49Dg5acJQk0T_5rWlSOhcZo1N4zB99bIb8K6UxIfp7nd4GqoikwJp1UHJyUiNuEFlskLLbM8WOvU9dQ',
        ],
        [
            'id' => 3,
            'title' => 'Quy trình sang tên sổ hồng mới nhất 2024',
            'category' => 'Pháp lý',
            'excerpt' => 'Cập nhật các thay đổi trong luật đất đai và các bước thực hiện thủ tục sang tên đổi chủ nhanh gọn.',
            'date' => '05/10/2023',
            'read_time' => '6 phút đọc',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAc4AviXWWAkX24S_OmvtBZtr2ddTOZ2r55XKOpHqjcY6HtUGHcI-B4qFMbk8-A2Mew0HfCRgOJFLvTjRTF1a0VGVqaCFHmI8R34XnsyoCyL-BXdIfIOL9DBgWzEbSx5AwQp9L9Io_tw96e3DjvUN_pnJ8uXdW_nZZTRI-giQ2KB2eZvKIrquo_waRblxqZa3co78OUGdx5a9yNqQNt4CktaG56xbn3l37EBFOLYvHfr-GBtA3_HCYoY99CBsG8R7OFUWlrq5ihtA',
        ],
    ],

    // Footer links
    'footer' => [
        'quick_links' => [
            ['label' => 'Về tôi', 'url' => '/ve-toi'],
            ['label' => 'Danh sách BĐS', 'url' => '/bat-dong-san'],
            ['label' => 'Blog tin tức', 'url' => '/blog'],
            ['label' => 'Tuyển dụng', 'url' => '/tuyen-dung'],
        ],
        'areas' => [
            ['label' => 'Quận 1 - Trung tâm', 'url' => '/bat-dong-san?area=quan-1'],
            ['label' => 'Quận 2 - Thảo Điền', 'url' => '/bat-dong-san?area=quan-2'],
            ['label' => 'Quận 7 - Phú Mỹ Hưng', 'url' => '/bat-dong-san?area=quan-7'],
            ['label' => 'Quận Bình Thạnh', 'url' => '/bat-dong-san?area=binh-thanh'],
        ],
    ],
];

