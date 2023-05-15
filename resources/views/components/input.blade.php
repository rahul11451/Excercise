<div class="form-outline mb-4">
    <label class="form-label" for="form4Example1">{{$label}}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="form4Example1" class="form-control" value="{{old('name')}}" />
    <span class="text-danger">
      @error($name)
        {{$message}}
      @enderror
    </span>
  </div>