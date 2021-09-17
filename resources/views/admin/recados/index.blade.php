@extends('layouts.app')
@section('content')
    <div class="container bg-light rounded m-0 p-4">
        <div class="jumbotron mb-5 p-5">

            <h1 class="display-4 mb-4">Olá, {{ auth()->user()->name }}!</h1>
            <p class="lead">Aqui estão listados seus recados</p>
            <hr class="my-4">
            <a href="{{ route('admin.recados.create') }}"
                class="btn btn-success btn-lg btn-block   rounded-5 shadow p-3 mb-5 ">Criar recado</a>
        </div>
        <div class="d-flex">
            
               <h5>Recados: {{ auth()->user()->recado()->count() }} <svg xmlns="
                http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                <path d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg></h5>

            
        </div>



        @foreach ($recado as $note)
            {{-- @if ($user == $note->user_id) --}}
            {{-- style="background-color: rgb(241, 212, 199) --}}
            <div class="container d-flex align-items-center  ">
                <div class="card mb-4 text-center rounded-5 shadow p-3 mb-5 rounded border  @if ($note->priori == 1)border-warning @else border border-success @endif @if ($note->priori == 1) p-3 mb-2 bg-gradient-warning text-dark" @endif style="
                    width: 80rem;">
                    @if ($note->priori == 1) <h5 class="text-warning"> Prioritário</h5> @endif
                    <div class="border">
                        <h5 class="card-header "> Recado </h5>

                        <div class="card-body">
                            <h5 class="card-title">{{ $note->slug }}</h5>
                            <p class="card-text">{{ $note->recado }}</p>

                        </div>
                        <div class="card-body left">
                            <a href="{{ route('admin.recados.destroy', ['recado' => $note->id]) }}"
                                class="btn btn-danger">Remover</a>
                        </div>
                    
                    <div class="card-footer text-muted">
                        {{ $note->updated_at }}
                    </div>
                </div>
                </div>
            </div>
            {{-- @endif --}}
        @endforeach



        {{-- {{ $recado->links() }} --}}


    </div>
@endsection
