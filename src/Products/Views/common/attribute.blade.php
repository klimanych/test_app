<div class="row @if($index == '?')attribute_row @endif" id="attribute_row_{{$index}}" @if($index == '?') style="display: none" @endif>
    <div class="col-md-5">
        <label for="attributes[{{$index}}][name]"> Название </label>
        <input type="text" class="form-control" name="attributes[{{$index}}][name]" required value="{{$name}}">
    </div>
    <div class="col-md-5 offset-md-1">
        <label for="attributes[{{$index}}][value]"> Значение </label>
        <input type="text" class="form-control" name="attributes[{{$index}}][value]" required value="{{$value}}">
    </div>
    <div class="col-md-1 text-center justify-content-center">
        <a href="#" class="delete_attribute" onclick="$(this).parent().parent().remove()"><span><i class="fs-4 bi-trash"></i></span></a>
    </div>
</div>

