@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        Contatos<a href="{{ url('contatos/add') }}" class="btn btn-primary btn-sm direita">Novo</a>
        </div>
        <br>
        <div class="card-body p-0 card-inverse">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom:inherit">
                    <tbody>
                        @foreach ($contatos as $contato)
                        <tr>
                            <td>
                                <a href="{{ url('contatos/'.$contato->id) }}">
                                    <img src="{{ $contato->avatar_image }}" class="img-avatar-xs">
                                </a>
                            </td>
                            <td><a class='a-line' href="{{ url('contatos/'.$contato->id) }}">{{ $contato->nome }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contatos/'.$contato->id) }}">{{ $contato->telefone }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contatos/'.$contato->id) }}">{{ $contato->email }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
@endsection