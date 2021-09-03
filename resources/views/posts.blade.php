<x-layout>
     
        @foreach($posts as $post)

            <article class="{{ $loop->even ? 'dor' : '' }}">
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <div> {{ $post->excerpt }}</h1>
            </article>
            
        @endforeach
     
</x-layout>










