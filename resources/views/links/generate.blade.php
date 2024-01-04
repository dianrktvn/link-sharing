@extends('layouts.master')

@section('content')

{{-- <h1>Shared Links</h1>
<ul>
    @foreach($links as $link)
        <li>
            <strong>{{ $link->title }}</strong>: 
            <a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a>
            (Short URL: <a href="{{ $link->short_url }}" target="_blank">{{ $link->short_url }}</a>)
        </li>
    @endforeach
</ul> --}}

<!-- Contact Page Form -->
<div class="pg-contact-form-map-wrapper bg-white section-padding-lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="pg-contact-form mr-0 mr-lg-3">
                    <div class="small-title">
                        <h2>Generate a New Link</h2>
                        <p>Create and publish!</p>
                    </div>
                    <form id="submit-form" action="{{ url('/generate') }}" method="post">
                        @csrf
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <input type="text" id="title" name="title" placeholder="Place a title here. (Optional)">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <textarea type="text" id="url" name="url" required cols="10" rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <button class="cr-btn" type="submit">
                                        <span>Send Now</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <form method="post" action="{{ url('/generate') }}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <label for="url">URL:</label>
    <input type="text" id="url" name="url" required>
    <button type="submit">Submit</button>
</form> --}}

@endsection