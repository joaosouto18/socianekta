@extends('layouts.app')

@section('body')

    <div class="content">
        <div class="card border mt-3 table-style">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h5 class="card-title"><i class="fas fa-user-circle"></i> Lista de Usuário </h5>
                    </div>
                </div>
                <div class="row">

                    <div class="col-3">
                        <div class="card">
                            <div class="card-header"> Novo Cliente
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12" style="text-align: center">
                                            <a class="btn btn-create" href="{{route('novo_usuario')}}"><i class="fas fa-plus"></i><strong> Cliente </strong></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-ordered table-hover table-striped" id="table_cliente">
                <thead>
                <tr>
                    <!-- <th>Id <i class="fas fa-sort-alpha-down ml-2"></i></th> -->
                    <th>nome <i class="fas fa-sort-alpha-down ml-2"></i></th>
                    <th>cpf<i class="fas fa-sort-alpha-down ml-2"></i></th>
                    <th>email<i class="fas fa-sort-alpha-down ml-2"></i></th>
                    <th>celular<i class="fas fa-sort-alpha-down ml-2"></i></th>
                    <th>categoria<i class="fas fa-sort-alpha-down ml-2"></i></th>
                    <th>Alterar<i class="fas fa-sort-alpha-down ml-2"></i></th>
                    <th>Deletar<i class="fas fa-sort-alpha-down ml-2"></i></th>
                </tr>
                </thead>
                <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->nome}}</td>
                        <td>{{$user->cpf}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->celular}}</td>
                        <td>{{$user->categoria}}</td>
                        <td> <a href="/edit/{{ $user->id }}" class="btn btn-sm btn-primary">Alterar</a> </td>
                        <td> <a href="/deletar/{{ $user->id }}" class="btn btn-sm btn-danger">Deletar</a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

@endsection
