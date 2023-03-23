{{-- @if (count($listings) == 0)
<p>No listings found</p>
@endif --}}

{{-- <?php echo '<h1>' . $headings . '</h1>'; ?>
<?php foreach ($listings as $listing) {
    // echo "<h2>". $listing["id"] . "</h2>";
    echo '<h2>' . $listing['title'] . '</h2>';
    echo '<p>' . $listing['description'] . '</p>';
} ?> --}}

{{-- <h1><?php echo $headings; ?></h1>
<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?> --}}


@extends('layout')

@section('content') {{-- ဒီကောင်က layout က yield ထဲကကောင်နဲ့တူသင့်တယ် --}}
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <p>No listings found</p>
        @endunless

    </div>
@endsection
