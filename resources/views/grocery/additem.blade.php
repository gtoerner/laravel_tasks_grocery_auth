
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Grocery-Add Item</div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                    @include('common.errors')
                    <!-- add new grocery item -->
                        {!! Form::open(['url' => 'grocery']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'New Item:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Add Item!', ['class'=>'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection