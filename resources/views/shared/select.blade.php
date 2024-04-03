@php
    $label ??= ucfirst($name);
    $class ??= null;
    $name ??='';
    $value ??='';
@endphp

<div @class(['form-group', $class])>
    @if ($name == 'unite_id')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" class="form-select">
            @foreach ($unite as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @elseif ($name == 'categorie_id')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" class="form-select">
            @foreach ($categorie as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @elseif ($name == 'clients')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}">
            @foreach ($client as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @elseif ($name == 'produits')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" multiple>
            @foreach ($produit as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @endif


    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
