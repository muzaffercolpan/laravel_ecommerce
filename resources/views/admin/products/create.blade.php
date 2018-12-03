@extends('layouts.admin')

@section('page_title', 'Create Product')
@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminProductsController@store']) !!}

    <div class="form-group">
        {!! Form::label('categories','Categories') !!}
        {!! Form::select('categories[]', $categories ,null,['class'=>'categories form-control',  'multiple'=>'multiple']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('sku','SKU') !!}
        {!! Form::text('sku',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price','Price') !!}
        {!! Form::text('price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body_short','Summary') !!}
        {!! Form::textarea('body_short',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Body') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], 1 , ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sort','Sort') !!}
        {!! Form::text('sort',null,['class'=>'form-control']) !!}
    </div>

    <hr>
    <div class="form-group">
        {!! Form::label('meta_title','Meta Title') !!}
        {!! Form::text('meta_title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('meta_description','Meta Description') !!}
        {!! Form::text('meta_description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('meta_keyword','Meta Keyword') !!}
        {!! Form::text('meta_keyword',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Create Product', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection

@section('header_css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('footer_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('.categories').select2({
            placeholder: 'Select a Category'
        });
    </script>
@endsection