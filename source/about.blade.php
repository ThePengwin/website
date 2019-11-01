@extends('_layouts.master')

@section('body')

<div class="content-page container">
    <h1>About</h1>
    <figure class="about-me-image">
            <img class="circular" src="{{$site->baseUrl}}/assets/images/me.jpg" width="250" height="250" alt="A slightly doctored, photogenic picture of me.">
        <figcaption>A slightly doctored, photogenic picture of me.</figcaption>
    </figure>
    <p>Hello there. I am ThePengwin.</p>
    <p>I go by other names, but for as long as i've been on the internet i've liked to use the psudeonym ThePengwin, or
        Articus Pengwin as a long winded name.<p>
            <h2>About me</h2>
            <p>I am:</p>
            <ul>
                <li>A (former? freelance?, casual?) Web developer, usually making things with:
                    <ul>
                        <li>LAMP / LEMP stacks.</li>
                        <li>Javascript, both frontend and backend.</li>
                        <li>MySQL / MariaDB, NoSQL Databases.</li>
                        <li>BASH and other shell languages.</li>
                    </ul>
                </li>
                <li>A technology enthusiast
                    <ul>
                        <li>I love to explore and use the amazing amount of Free/Gratis/Libre and Open Source software
                            there is to make things, automate things, or generally just look at to see how it works..
                        </li>
                        <li>I read about hardware abd gadgets most of the time the time.</li>
                        <li>I love opening things up, breaking them, and making them work again.</li>
                    </ul>
                </li>
                <li>A gamer, usually playing games on:
                    <ul>
                        <li>PC</li>
                        <li>Nintendo Switch</li>
                    </ul>
                </li>
                <li>A bit of a <a href="https://www.dictionary.com/e/slang/weeaboo/">weeaboo</a>. Sometimes reading
                    Manga and watching Anime.</li>
                <li>Living with cancer
                    <ul>
                        <li>I Was diagnoised with <a href="https://en.wikipedia.org/wiki/Angiosarcoma">angiosarcoma</a>
                            in
                            Mid-2018. A rare, agressive cancer.</li>
                        <li>My cancer has been classed as incurable, and the amount of time I actully have left is
                            unknown, and very confusing to explain.</li>
                    </ul>
                </li>
            </ul>
            <p>With all the things that have happened in my life, I think I might have enough to write about.</p>
            <h2>Elsewhere on the internet</h2>
            <p>Some of my online accounts:</p>
            @include('_fragments.online-accounts', ['labels' => 'on'])
            <p>I'm also on many other places that need an account... Usually as &ldquo;Pengwin&rdquo;,
                &ldquo;ThePengwin&rdquo;,
                or&ldquo;Articus Pengwin&rdquo;</p>
</div>

@endsection