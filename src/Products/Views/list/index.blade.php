@extends('layouts.main')

@section('page-content')
    <div class="row">
        <div class="col-md-7">
            <table class="table" id="table">
                <thead>
                <tr>
                    <th>
                        Артикул
                    </th>
                    <th>
                        Название
                    </th>
                    <th>
                        Статус
                    </th>
                    <th>
                        Атрибуты
                    </th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-2">
            <a href="{{route('products.create-page')}}" class="btn btn-info" style="width: 100%; margin-outside: 30px">Добавить</a>
        </div>
    </div>
@endsection

@push('page-scripts')
    <script type="module">
        $('#table').DataTable()
    </script>
@endpush()
