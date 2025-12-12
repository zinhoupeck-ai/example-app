<div class="mt-10 comments-box border-t border-gray-100 pt-10">
                
                <div class="user-comments px-3 py-2 mt-5">
                    @forelse($this->comments as $comment)
                    <div class="comment [&:not(:last-child)]:border-b border-gray-100 py-5">
                        <div class="user-meta flex mb-4 text-sm items-center">
                            <img class="w-7 h-7 rounded-full mr-3" src="/download.png" alt="mn">
                             <a href="#">{{ $post->user->name }}</a>
                             <a href="#">{{ $post->title }}</a>
                            <span class="text-gray-500">. {{$comment->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="text-justify text-gray-700  text-sm">
                            {{$comment->comment}}
                        </div>
                    </div>
                    @empty
                     <div class="text-gray-500 text-center">
                        <span> No Comments Posted</span>
                    </div>
                    @endforelse
                    <div class="my-2">
                    {{ $this->comments->links() }}
                    </div>

                </div>
            </div>
