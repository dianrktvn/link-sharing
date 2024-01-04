@extends('layouts.master')

@section('content')

<div class="pg-contact-form-map-wrapper bg-white section-padding-lg">
    <div class="container">
            <h1>{{ $link->title ?? 'No Title' }}</h1>
            <p>URL: <a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></p>
        </div>
    </div>
</div>
@endsection