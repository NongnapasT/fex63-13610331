@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-5">
                <h1>Your Short URL</h1>
                <h5 >Quota Remaining {{10-count($urls)}}/10</h5>
                @if($message = Session::get('success'))
                    <p style="color: #0E9A00">{{ $message }}</p>
                @elseif($message = Session::get('delete'))
                    <p style="color: red">{{ $message }}</p>
                @endif
                <table class="table table-striped">
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
                                <td>{{ $Url->LongUrl }}</td>
                                <td><a target='_blank' href="/gt/{{ $Url->ShortUrl }}">short.local/gt/{{ $Url->ShortUrl }}</a></td>
                                <td>{{ $Url->created_at }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
