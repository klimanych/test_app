@extends('layouts.main')


@section('page-content')
    <form action="{{route('products.store')}}" method="POST">
        {{csrf_field()}}

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <i class="mdi mdi-block-helper mr-2"></i> Ошибка валидации.
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <label for="article"> Артикул <span class="text-danger">*</span></label>
                <input type="text" class="form-control @if($errors->has('article')) is-invalid @endif" id="article" name="article" value="{{ old('article') }}" required>

                @if($errors->has('article'))
                    <div class="invalid-feedback">
                        {{ $errors->get('article')[0] }}
                    </div>
                @endif

            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <label for="name"> Наименование <span class="text-danger">*</span></label>
                <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ old('name') }}" required>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <label for="status"> Статус <span class="text-danger">*</span></label>
                <select class="form-select" name="status" id="status">
                    @foreach(\Src\Products\Enums\ProductStatus::cases() as $case)
                        <option value="{{$case->value}}">{{$case->value}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row justify-content-center">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i>
                        Сохранить
                    </button>
                </div>

            </div>
        </div>

    </form>
@endsection
