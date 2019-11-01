@extends('_layouts.master', ['header' => 'off', 'footer' => 'on'])

@section('body')

<div class="content-center content-span-height">
    <div class="text-center">
    <h1><i class="icon icon-snowflake"></i>{{ $page->siteName }}</h1>
        <h2>{{ $page->siteDescription }}</h2>
        <ul class="home-navigation">
            <li><a href="{{ $page->baseUrl }}/blog">Blog</a></li>
            <li><a href="{{ $page->baseUrl }}/about">About</a></li>
        </ul>
        @include('_fragments.online-accounts', ['labels' => 'off'])
    </div>
</div>

@endsection