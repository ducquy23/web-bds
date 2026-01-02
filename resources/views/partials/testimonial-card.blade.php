<div class="flex flex-col gap-4 rounded-xl bg-white dark:bg-[#111921] p-6 shadow-sm border border-[#e5e7eb] dark:border-[#2a3441]">
    <div class="flex gap-1 text-yellow-500">
        @for($i = 0; $i < $testimonial['rating']; $i++)
            <span class="material-symbols-outlined text-sm fill-current">star</span>
        @endfor
    </div>
    <p class="text-[#637588] dark:text-gray-300 italic">"{{ $testimonial['comment'] }}"</p>
    <div class="flex items-center gap-3 pt-2">
        <div class="size-10 rounded-full bg-gray-200 bg-cover bg-center" style="background-image: url('{{ $testimonial['avatar'] }}');"></div>
        <div>
            <p class="text-sm font-bold text-[#111418] dark:text-white">{{ $testimonial['name'] }}</p>
            <p class="text-xs text-[#637588] dark:text-gray-400">{{ $testimonial['role'] }}</p>
        </div>
    </div>
</div>

