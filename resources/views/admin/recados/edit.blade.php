@extends('layouts.app')
@section('content')
<h1>Editar recado</h1>
<form action="{{route('admin.recados.update',['recado' => $recado->id])}}" method="post">
    @csrf
    <div class="form-group">
        <label>Recado</label>
        <input type="text" name="recado" class="form-control" value="{{$recado->recado}}">
    </div>

    <div class="form-group">
        <label>prioritário 1 ou 0</label>
        <input type="text" name="priori" class="form-control" value="{{$recado->priori}}">
    </div>

    <div class="form-group">
        <label>slug</label>
        <input type="text" name="slug" class="form-control" value="{{$recado->slug}}">
    </div>
    <div class="form-group">
        <label>atatus</label>
        <input type="text" name="slug" class="form-control" value="{{$recado->status}}">
    </div>
  {{--
    <div class="form-group">
        <label>Usuário</label>
        <select name="user" class="form-control">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach

        </select>

    </div>
    --}}
    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-success"> atalizar recado</button>
    </div>
</form>

@endsection
