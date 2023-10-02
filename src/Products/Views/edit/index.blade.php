@extends('layouts.main')

@section('page-content')
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('products.update', ['id' => $product['id']])}}" method="POST">
                {{csrf_field()}}
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <i class="mdi mdi-block-helper mr-2"></i> Ошибка валидации.
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <label for="article"> Артикул <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @if($errors->has('article')) is-invalid @endif"
                               id="article" name="article" value="{{ $product['article'] }}" required>

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
                        <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name"
                               name="name" value="{{ $product['name'] }}" required>

                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->get('name')[0] }}
                            </div>
                        @endif
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <label for="status"> Статус <span class="text-danger">*</span></label>
                        <select class="form-select" name="status" id="status">
                            @foreach(\Src\Products\Enums\ProductStatus::cases() as $case)
                                <option value="{{$case->value}}"
                                        @if($case->value == $product['status']) selected @endif>{{trans('Products::'.$case->value)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" id="attributes">
                        @if($product['data'])
                            @foreach($product['data'] as $key => $attribute)
                                @include('Products::common.attribute',['index' => $key,'name' => $attribute['name'],'value' => $attribute['value']])
                            @endforeach
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" id="createAttribute">+ Добавить атрибут</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-row justify-content-center">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i>
                                Обновить
                            </button>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>

    @include('Products::common.attribute',['index' => '?','name' => '','value' => ''])

@endsection


@push('page-scripts')
    <script type="module">
        var attributes = 0

        $('#createAttribute').on('click', function () {
            var block = $('.attribute_row').prop('outerHTML')
            block = block.replaceAll("?", attributes)
            block = block.replaceAll('style="display: none"', '')
            block = block.replaceAll('row attribute_row', 'row')
            $('#attributes').append(block)
            attributes++
        })

    </script>
@endpush
