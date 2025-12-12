<x-app-layout>
    <div class="py-4">
        <div class="max-w-3x1 mx-auto sm:px-6 lg:px-8">
            <div class=""bg-white overflow-hidden shadow-sm sm:rounded-lg
            p-8">
                <h1 class="text-5x1 mb-4">{{ $post->title }}</h1>
            </div>
            <div>
                <h3>{{ $post->user->name }}</h3>
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
            
        </div>
    </div>
</x-app-layout>