<div>
    @foreach($attributes as $attribute)
        <span>{{$attribute['name']}}</span>: <span>{{$attribute['value']}}</span><br>
    @endforeach
</div>
