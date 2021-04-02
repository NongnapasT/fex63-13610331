@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <form action="/new" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Paste Long URL</label>
                                <input type="text" class="form-control" id="longUrl" name="longUrl" placeholder="verylongurl.com">
                            </div>
                            <button class="btn btn-primary mb-3">Create Short URL</button>
                            <div class="mb-3">
                                <label for="" class="form-label">Your Short URL:</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--@push('scripts')--}}
{{--    <script>--}}
{{--        var app = new Vue({--}}
{{--            el: '#app',--}}
{{--            data: {},--}}
{{--            methods: {--}}
{{--                creatOrder(id){--}}
{{--                    axios.post('/new')--}}
{{--                        .then(function(response){--}}
{{--                            console.log(response);--}}
{{--                            if (response.data.status==200){--}}
{{--                                swal({--}}
{{--                                    icon:"success",--}}
{{--                                    text:response.data.message,--}}
{{--                                    button:false--}}
{{--                                })--}}
{{--                                setTimeout(function (){--}}
{{--                                    window.location = '/';--}}
{{--                                },2000)--}}
{{--                            }else {--}}
{{--                                swal("ผิดพลาด",response.data.message,"error");--}}
{{--                            }--}}
{{--                        })--}}
{{--                        .catch(function(){--}}
{{--                            console.log('errors');--}}
{{--                        });--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
