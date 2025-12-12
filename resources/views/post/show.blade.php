<x-app-layout>
    <div class="py-4">
        <div class="max-w-3x1 mx-auto sm:px-6 lg:px-8">
            <div class=""bg-white overflow-hidden shadow-sm sm:rounded-lg
            p-8">
                <h1 class="text-5x1 mb-4">{{ $post->title }}</h1>
            </div>
            <div>
                <a href="{{ route('profile.show',$post->user) }}">{{ $post->user->name }}</a>
                <div class="flex gap-2 text-gray-500">
                    <span>
                        {{ $post->created_at->format('M d,Y') }}
                    </span>
                </div>
            </div>
            <div>
                <img class="w-48 h-full max-h-64 rounded-t-base" src="{{ Storage::url($post->image) }}"
            </div>

            <!-- Content Section -->
                <div class="mt-8">
                    

                    <div class="mt-4">
                        {{ $post->content }}
                    </div>
                </div>

                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-200 rounded-2xl">
                        {{ $post->category->name }}
                    </span>
                </div>
            @if ($post->user_id === Auth::id())
            <div class="mt-4">
                <x-primary-button href="{{ route('post.edit',$post->slug) }}">
                    Edit Post
                </x-primary-button>
                <form class="inline-block" action="{{ route('post.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')
                <x-danger-button>
                    Delete Post
                </x-danger-button>
                </form>
            </div>
            @endif
             <livewire:post-comments :key="$post->id" :$post/>
        </div>
    </div>
</x-app-layout>