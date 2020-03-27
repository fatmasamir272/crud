@extends('layouts.app')

@section('main_container')

    <div class="row">
    <div class="col-12">
    <div class="page-title-box">
    <h4 class="page-title float-right">{{ __('site.name') }}</h4>

    <ol class="breadcrumb float-left" style="">
    <li class="breadcrumb-item"><a href="#">Tables</a></li>
    <li class="breadcrumb-item active">Contacts</li>
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

                <p class="text-muted font-13 m-b-30">
                    <a class="btn btn-success" href="{{ url('admin/contacts/create') }}"> {{ __('site.new') }}</a>
                </p>
                <table id="datatable" class="table table-striped">
                    <thead>
                    <tr>
                        <th>{{ __('site.id') }}</th>
                        <th>{{ __('site.site_name') }}</th>
                        <th>{{ __('site.phone') }}</th>
                        <th>{{ __('site.email') }}</th>
                        <th>{{ __('site.message') }}</th>
                        <th>{{ __('site.created_at') }}</th>
                        <th>{{ __('site.updated_at') }}</th>
                        <th>Edit</th>
                         <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($sites))
                        @foreach($sites as $site)
                            <tr>

                                <td>{{$site->id}}</td>
                                <td>{{$site->name}}</td>
                                <td>{{$site->phone}}</td>
                                <td>{{$site->email}}</td>
                                <td>{{$site->message}}</td>
                                <td>{{$site->created_at}}</td>
                                <td>{{$site->updated_at}}</td>

                                <td>
                                    <a href="{{ aurl('/contacts/'.$site->id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>

                                </td>
                             <td>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del_admin{{ $site->id }}"><i class="fa fa-trash"></i></button>
                             </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end row -->

<!-- Trigger the modal with a button -->

@if(!empty($site))
<!-- Modal -->
<div id="del_admin{{ $site->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{ trans('site.delete') }}</h4>
      </div>
      {!! Form::open(['route'=>['contacts.destroy',$site->id],'method'=>'delete']) !!}
      <div class="modal-body">
        <h4>{{ trans('site.delete_this',['name'=> $site->name ]) }}</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('site.close') }}</button>
        {!! Form::submit(trans('site.yes'),['class'=>'btn btn-danger']) !!}
      </div>
      {!! Form::close() !!}
    </div>

  </div>
</div>
@endif
<!-- Trigger the modal with a button -->
        <!-- Modal -->
<div class="modal fade" id="multipaleDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete All</h5>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">
          <div class="not_empty_record hidden"> <h1>Are You Sure You want to delte</h1> 
            <span class="record_count"></span>  </div>
          <div class="empty_record hidden"> <h1>Empty Checked</h1> </div>
      </div>
      </div>
      <div class="modal-footer">
                <div class="empty_record hidden">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                <div class="not_empty_record hidden">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="del_all" class="btn btn-primary del_all" value="Delete" > 
                </div>
      </div>
    </div>
  </div>
</div>
@endsection