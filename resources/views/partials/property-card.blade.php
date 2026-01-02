<div class="group flex flex-col overflow-hidden rounded-2xl border border-[#e5e7eb] dark:border-[#2a3441] bg-white dark:bg-[#1a232e] shadow-sm transition-all hover:shadow-xl hover:-translate-y-1">
    <a href="{{ route('properties.show', $listing['id']) }}" class="relative aspect-[4/3] w-full overflow-hidden bg-gray-200">
        <div class="absolute right-4 top-4 z-10 rounded-lg bg-white/90 px-3 py-1 text-sm font-bold text-[#111418] backdrop-blur-sm">
            {{ $listing['type'] }}
        </div>
        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('{{ $listing['image'] }}');"></div>
    </a>
    <div class="flex flex-1 flex-col p-5">
        <div class="mb-3 flex items-start justify-between">
            <h3 class="text-lg font-bold text-[#111418] dark:text-white line-clamp-1">
                <a href="{{ route('properties.show', $listing['id']) }}" class="hover:text-primary transition-colors">{{ $listing['title'] }}</a>
            </h3>
            <p class="text-lg font-bold text-primary">{{ $listing['price'] }}</p>
        </div>
        <div class="mb-4 flex items-center gap-2 text-sm text-[#637588] dark:text-gray-400">
            <span class="material-symbols-outlined text-lg">location_on</span>
            <span class="truncate">{{ $listing['location'] }}</span>
        </div>
        <div class="mt-auto flex items-center justify-between border-t border-[#f0f2f4] dark:border-[#2a3441] pt-4">
            <div class="flex items-center gap-4 text-sm font-medium text-[#111418] dark:text-gray-300">
                <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">bed</span> {{ $listing['bedrooms'] }}</div>
                <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">shower</span> {{ $listing['bathrooms'] }}</div>
                <div class="flex items-center gap-1"><span class="material-symbols-outlined text-[#637588]">square_foot</span> {{ $listing['area'] }}</div>
            </div>
        </div>
    </div>
</div>

