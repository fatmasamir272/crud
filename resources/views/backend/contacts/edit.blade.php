@extends('layouts.app')

@section('main_container')



    {{--<div class="row">--}}
    {{--<div class="col-12">--}}
    {{--<div class="page-title-box">--}}
    {{--<h4 class="page-title float-right">{{ __('admins.admins') }}</h4>--}}

    {{--<ol class="breadcrumb float-left">--}}
    {{--<li class="breadcrumb-item"><a href="#">Abstack</a></li>--}}
    {{--<li class="breadcrumb-item"><a href="#">Forms</a></li>--}}
    {{--<li class="breadcrumb-item active">Form Validation</li>--}}
    {{--</ol>--}}

    {{--<div class="clearfix"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- end row -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card-box">

                <h4 class="header-title m-t-0">{{ __('site.edit') }} {{$site->name}}</h4>

                {!! Form::model($site, ['method' => 'PATCH','url'=>aurl('/contacts/'.$site->id),'files'=>true]) !!}

                @include('backend.contacts.form')

                {!! Form::close() !!}

            </div> <!-- end card-box -->
        </div>
        <!-- end col -->


    </div>
    <!-- end row -->


@endsection