@extends('layouts.main')


@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$model['name']}}
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
                </div>
            </div>
        </div>
    </div>

@endsection
