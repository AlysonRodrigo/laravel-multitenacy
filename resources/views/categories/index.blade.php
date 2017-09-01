@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>AÇÕES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td><a href="#" class="btn btn-default">Editar</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                {!! $categories->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
