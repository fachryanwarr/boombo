@extends('layouts.base')

@section('title')
<title>Boombo | Home</title>    
@endsection

@section('content')
<section class="bg-gray-900">
    <div class="py-8 px-8 md:px-16 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white">Book Your Show, Experience the Magic!</h1>
            <p class="mb-8 text-md font-normal lg:text-xl text-gray-400">
                Experience the ultimate convenience of movie ticket booking with Sea Cinema!
                Say goodbye to long queues and sold-out shows, as we bring the cinema right to your fingertips. 
                With just a few clicks, you can secure your seats for the latest blockbusters, hottest releases, and exclusive screenings. 
                Whether you're craving action, romance, or comedy, Sea Cinema has it all. 
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <a href="#movies_page" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-900">
                    Book Ticket
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        <div>
            <iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl" src="https://www.youtube.com/embed/bK6ldnjE3Y0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>
@endsection