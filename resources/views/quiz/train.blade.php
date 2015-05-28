@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Train</h1>

                <div class="list-group">
                    @foreach($topics as $topic)
                        <a href="{{ url('train/' . $topic->name . '/1') }}" class="list-group-item">
                            <span class="badge">{{ count($topic->questions) }}</span>
                            <h3 class="list-group-item-heading">{{ $topic->title }}</h3>
                            <p class="list-group-item-text">{{ $topic->description }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
