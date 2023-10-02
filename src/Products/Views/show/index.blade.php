@extends('layouts.main')


@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span style="float: left">
                        {{$model['name']}}
                    </span>
                    <div style="float: right">
                        <a href="{{route('products.edit-page',$model['id'])}}" style="margin-right: 5px"><span><i
                                    class="fs-4 bi-pencil"></i></span></a>
                        <a href="#" id="deleteButton"><span><i
                                    class="fs-4 bi-trash"></i></span></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                            <span>Артикул</span>
                        </div>
                        <div class="col-md-3">
                            {{$model['article']}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <span>Название</span>
                        </div>
                        <div class="col-md-3">
                            {{$model['name']}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <span>Статус</span>
                        </div>
                        <div class="col-md-3 ">
                            {{$model['status']}}
                        </div>
                    </div>
                    @if($model['data'])
                        <div class="row">
                            <div class="col-md-1">
                                <span>Атрибуты</span>
                            </div>
                            <div class="col-md-3">
                                @foreach($model['data'] as $attribute)
                                    {{$attribute['name']}}: {{$attribute['value']}}
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection


@push('page-scripts')
    <script type="module">
        $('#deleteButton').on('click', function(e) {
            $.ajax({
                url: '{{route('products.delete', $model['id'])}}',
                method: 'DELETE',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    console.log('success')
                    window.location.href = '{{route('products.list-page')}}'
                },
                error: function () {
                    console.log('error')
                }
            });

        })
    </script>
@endpush
