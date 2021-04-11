@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="mt-5">
            <h1>Your Short URL</h1>
            <h5>Quota Remaining {{10-count($urls)}}/10</h5>
            <thead>
            <tr>
                <th>ID</th>
                <th>Long URL</th>
                <th>Short URL</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            @if(!$urls->isEmpty())
                @foreach($urls as $index=>$Url)
                    <tr>
                        <th scope="row">{{ $index+1 }}</th>
                        <td>{{ $urls->LongUrl }}</td>
                        <td><a href="{{ $urls->ShortUrl }}">short.local/gt/{{ $urls->shortUrl }}</a></td>
                        <td>{{ $urls->create_at }}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </div>
    </div>
@endsection
