@extends('layouts.app')

@section('main_container')


<div class="row">
<div class="col-12">
    <div class="page-title-box">
        <h4 class="page-title float-right">{{ __('roles.roles') }}</h4>

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

        @permission('roles-create')
            <p class="text-muted font-13 m-b-30">
                <a class="btn btn-success" href="{{ url('admin/roles/create') }}"> {{ __('roles.new') }}</a>
            </p>
        @endpermission

        <table id="datatable" class="table table-striped">
            <thead>
            <tr>
                <th>{{ __('roles.ID') }}</th>
                <th>{{ __('roles.Name') }}</th>
                <th>{{ __('roles.Description') }}</th>
                <th>{{ __('roles.Group') }}</th>
                <th>{{ __('roles.Active') }}</th>
                <th>{{ __('roles.Actions') }}</th>
            </tr>
            </thead>

            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$role->name}}</td>
                    <td>{{$role->description}}</td>

                    @if(!empty($role->groups))
                        <td><label class="badge badge-success">{{$role->groups->name}}</label></td>
                    @else
                        <td><label class="badge badge-danger">{{ __('roles.NoGroup') }}</label></td>
                    @endif

                    @if($role->active == 1)
                        <td><label class="badge badge-success">{{ __('app.StatusActive') }}</label></td>
                    @else
                        <td><label class="badge badge-danger">{{ __('app.StatusNotActive') }}</label></td>
                    @endif

                    <td>
                        @permission('roles-show')
                          <a class="btn btn-success" style="float: left" data-toggle="tooltip" title="{{ __('app.Show') }}" href="{{ url('admin/roles',$role->id) }}"><i class="fa fa-eye"></i></a>
                        @endpermission

                        @permission('roles-edit')
                            {!! Form::open( ['method' => 'GET', 'action' => ['Backend\RolesController@edit', $role->id],'style'=>'display:inline; float:left']) !!}
                            <button class="btn btn-primary" type="submit" data-toggle="tooltip" title="{{ __('app.Edit') }}"><i class="fa fa-edit"></i></button>
                            {!! Form::close() !!}
                        @endpermission

                        @if($role->active == 1)
                            @permission('roles-nonActivation')
                                <a data-toggle="tooltip" title="{{ __('app.DisActive') }}" class="btn btn-danger" style="float: left" href="{{ url('admin/roles/disactivate',$role->id) }}">
                                    <i class="fa fa-toggle-off"></i>
                                </a>
                            @endpermission
                        @else
                            @permission('roles-activation')
                                <a data-toggle="tooltip" title="{{ __('app.Active') }}" class="btn btn-success" style="float: left" href="{{ url('admin/roles/activate',$role->id) }}">
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