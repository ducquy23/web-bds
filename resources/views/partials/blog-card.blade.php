<div class="group flex flex-col gap-4">
    <a href="{{ route('blog.show', $post['id']) }}" class="aspect-video w-full overflow-hidden rounded-xl bg-gray-200">
        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('{{ $post['image'] }}');"></div>
    </a>
    <div class="flex flex-col gap-2">
        <span class="text-xs font-bold uppercase text-primary">{{ $post['category'] }}</span>
        <h3 class="text-xl font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">
            <a href="{{ route('blog.show', $post['id']) }}">{{ $post['title'] }}</a>
        </h3>
        <p class="line-clamp-2 text-sm text-[#637588] dark:text-gray-400">{{ $post['excerpt'] }}</p>
        <span class="text-xs text-[#637588] mt-1">{{ $post['date'] }} • {{ $post['read_time'] }}</span>
    </div>
</div>

