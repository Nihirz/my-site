{{-- @extends('_layouts.main')
@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif
            <p class="text-gray-700 font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>
            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>
            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>
            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>
        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach
    @include('_components.newsletter-signup')
    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>
                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>
        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@stop
 --}}
{{-- ---
title: About
description: A little bit about the site
--- --}}
@extends('_layouts.main')

@section('body')
    <img src="/assets/img/nihir-zala.jpg"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">Hi there, I'm Nihir Zala <code>Laravel Developer</code> from India.</p>

    <p class="mb-6"> I am expertise in <code>laravel framework</code> as well as <code>core PHP</code>. I have 1.5+ years of experience in it. My expertise in <code>Laravel Framework</code>, <code>HTML</code>, <code>CSS</code>, <code>JS</code>, <code>Jquery</code>, and <code>Ajax</code> for the basic structure of websites and I generally use <code>Vue js</code> & <code>Livewire</code> for fronted with Laravel.</p>

    <p class="mb-6">I completed many projects in core PHP and Laravel framework as well.</p>
    <p class="mb-6"><code><b>Why portfolio is so simple</b>?</code><br>
        Well the honest answer is that <code>simplicity is the best</code>.
    </p>

    <hr>
    {{-- <h1>Contact</h1> --}}

{{-- <p class="mb-8">
    Static sites are unable to handle form submissions. However, there are third-party services, like Tighten’s <a href="https://fieldgoal.io" title="FieldGoal">FieldGoal</a>, which can accept the form submission, email you the result, and redirect back to a thank you page.
</p>
 --}}

<form action="/contact" class="mb-12">
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                Name
            </label>

            <input
                type="text"
                id="contact-name"
                placeholder="Jane Doe"
                name="name"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>

        <div class="w-full px-3 md:w-1/2">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                Email Address
            </label>

            <input
                type="email"
                id="contact-email"
                placeholder="email@domain.com"
                name="email"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
    </div>

    <div class="w-full mb-12">
        <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-message">
            Message
        </label>

        <textarea
            id="contact-message"
            rows="4"
            name="message"
            class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
            placeholder="A lovely message or Drop your idea here."
            required
        ></textarea>
    </div>

    <div class="flex justify-end w-full">
        <input
            type="submit"
            value="Submit"
            class="block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
        >
    </div>
</form>

@endsection
