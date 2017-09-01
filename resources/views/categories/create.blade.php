@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create categories</h1>

                {!! Form::open(['url' => '/categories/store','method' => 'post']) !!}

                <div class="form-group">
                    {!! Form::label('name','Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control','placeholder' => 'Informe o nome']) !!}
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::submit('Add category',['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('/categories') }}" class="btn btn-success form-control">Voltar</a>
                        </div>


                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
