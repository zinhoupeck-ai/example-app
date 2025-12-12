<div class="max-w-7x7 bg-neutral-primary-soft block max-w-sm mx-auto border border-default rounded-base shadow-xs">
    <a href="{{ route('post.show', [
            'username' => $post->user->name,
            'post' => $post->slug
        ]) }}">
        <img class="w-48 h-full max-h-64 rounded-t-base" src="{{ Storage::url($post->image) }}" alt="" />
    </a>
    <div class="p-6 text-center">
        <a href="#">    
            <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">
            {{ $post->title }}
        </h5>
        </a>
        <a href="#">
            <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">
                {{$post->content}}</h5>
        </a>
        <a href="#" class="inline-flex items-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
            Read more
            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
        </a>
    </div>
</div>