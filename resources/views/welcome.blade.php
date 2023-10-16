{{-- WRITTEN BY SCARRUS --}}

@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

    <div class="content">

    @foreach ($posts as $post) 
        <div class="content-1">
            <h1>A new class of Smartphone</h1>
            <br><br>
            <p>
            Following today's keynote event that saw Apple introducing the new iPhone 15, ‌iPhone 15‌ Plus, iPhone 15 Pro, and ‌iPhone 15 Pro‌ Max, Apple allowed members of the media in attendance to spend some hands-on time with the new devices. MacRumors videographer Dan Barbera was at Apple Park for the event, so he's able to give us an early look at the ‌iPhone 15‌ lineup, as well as his first thoughts.
            <br><br>The ‌iPhone 15 Pro‌ models are made from titanium, and they are noticeably lighter than the iPhone 14 Pro models. There are contoured edges that improve the feel of the iPhone in the hand, and the Pro models are overall much more comfortable to hold. Apple also cut down on bezel size for even more display than ever, and the Action Button that replaces the Mute Switch is super convenient.
            <br><br>Apple added a 5x zoom lens to the ‌iPhone 15 Pro‌ Max and at its 120mm focal length, you can get great portrait shots. There are options on both Pro models to change the focal length of the Main camera, which you can do just by tapping. It can be set to 24mm, 28mm, or 35mm, and the ability to change focal length is useful for pro photographers.
            <br><br>As for the standard ‌iPhone 15‌ models, they're more Pro-like than ever with the addition of the Dynamic Island and the new matte glass back. Apple say it is using back glass that has color infused throughout the material, and it's a nice look, especially with the pastel color options.
            </p>
        </div>
        


    @endforeach
@endsection

@section('footer')
@endsection