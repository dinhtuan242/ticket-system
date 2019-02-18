@extends('master')
@section('title', 'Contact')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
                {!! Form::open(['class' => 'form-horizontal', 'method' => 'post']) !!}
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <fieldset>
                    <legend>Submit a new ticket</legend>
                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('title', $ticket->title, ['class' => 'form-control', 'id' => 'title', 'placeholder'=>'Title']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Content', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('content', $ticket->content, ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Input Content']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                            {{-- <input type="checkbox" name="status" {!! $ticket->status?"":"checked"!!} > Close this ticket? --}}
                            {!! Form::checkbox('status', $ticket->status, $ticket->status ? '' : 'checked') !!} Close this ticket
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::button('Cancel', ['class' => 'btn btn-default']) !!}
                            {!! Form::button('Submit', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
                        </div>
                    </div>
                </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection