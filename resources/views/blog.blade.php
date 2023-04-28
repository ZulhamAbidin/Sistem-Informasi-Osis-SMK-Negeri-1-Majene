@extends('home_layouts.main')

@section('home')


<main class="bg-white pb-16 pt-8 lg:pb-24 lg:pt-6">
    <div class="mx-auto flex max-w-screen-xl justify-between px-4">
        <article class="format format-sm sm:format-base lg:format-lg format-blue">
            <header class="not-format mb-4 lg:mb-6">
                <address class="mb-6 flex items-center not-italic">
                    <div class="mr-3 inline-flex items-center text-sm text-gray-900">
                        <img class="mr-4 h-16 w-16 rounded-full"
                            src="{{ asset('assets/image/osis.svg') }}" alt="osis" />
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900">{{ $blogs->author->name }}</a>
                            <p class="text-base font-light text-gray-500">{{ $blogs->category->slug }}</p>
                            <p class="text-base font-light text-gray-500"></p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">{{ $blogs->title }}</h1>
            </header>

            @if ($blogs->image)
            <img src="{{ asset('storage/' . $blogs->image) }}" alt="{{ $blogs->category->name }}" class="mb-8 rounded-xl">
            @else
            <img src="http://source.unsplash.com/1200x400?{{ $blogs->category->name }}" alt="{{ $blogs->category->name }}"
                class=" mb-8 rounded-xl">
            @endif

            <p class="text-justify">{!!
            $blogs->body !!}</p>
        </article>
    </div>
</main>
    
@endsection