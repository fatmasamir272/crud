@extends('layouts.app')

@section('main_container')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title float-right">{{ __('roles.roles') }}</h4>

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

                <h4 class="header-title m-t-0">{{ __('roles.show') }} {{$role->name}}</h4>

                {!! Form::model($role, ['method' => 'PATCH','action'=>['Backend\RolesController@update',$role->id]]) !!}

                @include('backend.roles.form')

                {!! Form::close() !!}

            </div> <!-- end card-box -->
        </div>
        <!-- end col -->


    </div>
    <!-- end row -->



@endsection