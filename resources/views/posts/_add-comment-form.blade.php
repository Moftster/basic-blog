@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex items-center">
                <img
                    src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                    alt=""
                    width="40"
                    height="40"
                    class="rounded-full"
                >

                <h2 class="ml-3">Add a comment</h2>
            </header>

            <div class="mt-4">
                <textarea
                    name="body"
                    class="w-full focus:outline-none focus:ring"
                    id=""
                    rows="5"
                    placeholder="Add your comment here..."
                    required
                ></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-4 border-t border-gray-200 pt-6">
                <x-form.button>
                    Post
                </x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a class="hover:underline text-blue-500" href="/register">Register</a> or <a class="hover:underline text-blue-500" href="/login">Log in</a> to leave a comment.
    </p>
@endauth
