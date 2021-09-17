@extends('layouts.app')
@section('content')
<div class="card mt-5 p-5">
    <h1 class="header">Criar recado</h1>
    <form action="{{ route('admin.recados.recado') }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Recado</label>
            <textarea type="text" id="exampleFormControlTextarea1" name="recado" rows="10"
                class="form-control @error('recado') is-invalid @enderror"></textarea>
            @error('recado')
                <h4 class="invalid-feedback">O campo recado é Obrigatório</h4>
            @enderror
        </div>

        {{-- <div class="form-group">
        <label>prioritário 1 ou 0</label>
        <input type="text" name="priori" class="form-control">
        </div> --}}
        <div class="form-goup">
            <div class="form-check @error('priori') is-invalid @enderror">
                <input class="form-check-input" type="checkbox" name="priori" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Prioritário!
                </label>

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="priori" value="0" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Normal
                </label>
            </div>
            @error('priori')
                <h4 class="invalid-feedback">O campo de prioridade é Obrigatório</h4>
            @enderror
        </div>
        
        <div class="form-grup"><label for=""></label><input type="text"></div>
        <div class="form-group">
            <label>slug</label>
            <input type="text" name="slug" class="form-control">
        </div>


        <div class="form-group mb-3">
            <label>Usuário</label>
            <select name="user" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach

            </select>

        </div>
        <div class="form-group ">
            <button type="submit" class="btn btn-lg btn-success "> Criar recado</button>
        </div>
    </form>
</div>
@endsection
