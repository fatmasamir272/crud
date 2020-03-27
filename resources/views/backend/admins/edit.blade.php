@extends('layouts.app')

@section('main_container')



    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title float-right">{{ __('admins.admins') }}</h4>

                <ol class="breadcrumb float-left">
                    <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
                </ol>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card-box">

                <h4 class="header-title m-t-0">{{ __('admins.edit') }} {{$user->name}}</h4>

                {!! Form::model($user, ['method' => 'PATCH','action'=>['Backend\AdminsController@update',$user->id]]) !!}

                @include('backend.admins.form')

                {!! Form::close() !!}

            </div> <!-- end card-box -->
        </div>
        <!-- end col -->


    </div>
    <!-- end row -->


@endsection