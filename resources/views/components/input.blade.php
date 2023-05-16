<div class="form-group">
    <label for="" class="form-label">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id="" aria-describedby="nameId" placeholder="Full names" >
    <span class="text-danger">
        {{$demo}}
      {{-- @error('name')
          {{$message}}
      @enderror --}}
    </span>
  </div>