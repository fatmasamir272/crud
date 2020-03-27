@extends('layouts.app')

@section('main_container')

<div class="row">
<div class="col-12">
    <div class="page-title-box">
        <h4 class="page-title float-right">{{ __('admins.admins') }}</h4>

        <ol class="breadcrumb float-left" style="direction: rtl">
            <li class="breadcrumb-item"><a href="#">Abstack</a></li>
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active">Datatable</li>
        </ol>

        <div class="clearfix"></div>
    </div>
</div>
</div>
<!-- end row -->

@include('backend.app.messages')

<div class="row">
<div class="col-12">
    <div class="card-box table-responsive">

        @permission('admins-create')
        <p class="text-muted font-13 m-b-30">
            <a class="btn btn-success" href="{{ url('admin/admins/create') }}"> {{ __('admins.new') }}</a>
        </p>
        @endpermission

        <table id="datatable" class="table table-striped">
            <thead>
            <tr>
                <th>{{ __('admins.ID') }}</th>
                <th>{{ __('admins.Name') }}</th>
                <th>{{ __('admins.Email') }}</th>
                <th>{{ __('admins.Role') }}</th>
                <th>{{ __('admins.Group') }}</th>
                <th>{{ __('admins.Active') }}</th>
                <th>{{ __('admins.Actions') }}</th>

            </tr>
            </thead>

            <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>
                        @if(!empty($admin->roles))

                            @foreach($admin->roles as $v)

                                <label class="badge badge-success">{{ $v->name }}</label>

                            @endforeach

                        @endif
                    </td>

                    <td>
                        @if(!empty($admin->roles))
                            @foreach($admin->roles as $role)
                                @if (isset($role->groups->name))
                                  <label class="badge badge-success"> {{ $role->groups->name }}</label>
                                @else
                                    <label class="badge badge-danger"> {{ __('admins.NoGroup') }}</label>
                                @endif
                            @endforeach
                        @endif
                    </td>

                    @if($admin->active == 1)
                        <td><label class="badge badge-success">{{ __('app.StatusActive') }}</label></td>
                    @else
                        <td><label class="badge badge-danger">{{ __('app.StatusNotActive') }}</label></td>
                    @endif

                    <td>
                        @permission('admins-edit')
                            {!! Form::open( ['method' => 'GET', 'action' => ['Backend\AdminsController@edit', $admin->id],'style'=>'display:inline; float:left']) !!}
                            <button class="btn btn-primary" type="submit" data-toggle="tooltip" title="{{ __('app.Edit') }}"><i class="fa fa-edit"></i></button>
                            {!! Form::close() !!}
                        @endpermission

                        @if($admin->active == 1)
                            @permission('admins-nonActivation')
                                <a data-toggle="tooltip" title="{{ __('app.DisActive') }}" class="btn btn-danger" style="float: left" href="{{ url('admin/admins/disactivate',$admin->id) }}">
                                    <i class="fa fa-toggle-off"></i>
                                </a>
                            @endpermission
                        @else
                            @permission('admins-activation')
                                <a data-toggle="tooltip" title="{{ __('app.Active') }}" class="btn btn-success" style="float: left" href="{{ url('admin/admins/activate',$admin->id) }}">
                                    <i class="fa fa-toggle-on"></i>
                                </a>
                            @endpermission
                        @endif

                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
</div> <!-- end row -->



@endsection