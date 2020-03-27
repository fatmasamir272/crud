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

                <h4 class="header-title m-t-0">{{ __('roles.show') }} {{ $role->name }}</h4>

                <table class="table table-striped">
                    <thead>
                    <tr style="font-weight: bold">
                        <td>{{ __('roles.Feild') }}</td>
                        <td>{{ __('roles.Value') }}</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ __('roles.Name') }}</td>
                        <td>{{ $role->name }}</td>
                    </tr>

                    <!--tr>
                        <td>{{ __('roles.DisplayName') }}</td>
                        <td>{{ $role->display_name }}</td>
                    </tr-->

                    <tr>
                        <td>{{ __('roles.Description') }}</td>
                        <td>{{ $role->description }}</td>
                    </tr>

                    <tr>
                        <td>{{ __('roles.Permissions') }}</td>
                        <td style="float: right">
                            @if(! $rolePermissions->isEmpty())

                                @foreach($rolePermissions as $v)

                                    <span class="badge badge-success">{{ $v->display_name }}</span>

                                @endforeach

                            @else
                                <label class="badge badge-danger">{{ __('roles.NoPermissionYet') }}</label>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>{{ __('roles.Active') }}</td>
                        <td style="float: right">
                        @if($role->active == 1)
                            <span class="badge badge-success">{{ __('app.StatusActive') }}</span>
                        @else
                            <span class="badge badge-default">{{ __('app.StatusNotActive') }}</span>
                            @endif
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div> <!-- end card-box -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

@endsection