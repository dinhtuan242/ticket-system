@extends('master')
@section('title', 'View a ticket')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h2 class="header">{!! $ticket->title !!}</h2>
                <p> <strong>Status</strong>: {!! $ticket->status ? 'Pending' : 'Answered' !!}</p>
                <p> {!! $ticket->content !!} </p>
            </div>
        <a href="{!! route('getEdit', $ticket->slug) !!}" class="btn btn-info">Edit</a>
            {!! Form::open(['method' => 'post', 'route' => ['postDelete', $ticket->slug]]) !!}
                {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection