<x-layout>
    @foreach($posts as $post)
        <article class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
