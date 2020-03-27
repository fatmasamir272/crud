@include('backend.app.messages')

{!! csrf_field() !!}

<div class="form-group">
    <label for="roles">{{ __('roles.Group') }} <span class="text-danger">*</span></label>
      {!! Form::select('group_id', ['' => trans('groups.select') ]  + $groups, isset($group) ? $group->id : null, array('parsley-trigger' => "change", 'required', 'class' => 'form-control', 'id' => 'group_id')) !!}
</div>

<div class="form-group">
    <label for="userName">{{ __('roles.Name') }}<span class="text-danger">*</span></label>
    {!! Form::text('name', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('roles.Name'), 'id' => 'userName', 'class' => 'form-control')) !!}
</div>

<!--div class="form-group">
    <label for="userName">{{ __('roles.DisplayName') }}<span class="text-danger">*</span></label>
    {!! Form::text('display_name', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('roles.DisplayName'), 'id' => 'display_name', 'class' => 'form-control')) !!}
</div-->

<div class="form-group">
    <label for="userName">{{ __('roles.Description') }}<span class="text-danger">*</span></label>
    {!! Form::textarea('description', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('roles.Description'), 'id' => 'description', 'class' => 'form-control')) !!}
</div>



<div class="form-group">
    <label for="roles">{{ __('roles.Permissions') }} <span class="text-danger">*</span></label>
      {!! Form::select('permission[]', $permissions, isset($role)?$role->permissions->pluck('id')->toArray():null,
       array('parsley-trigger' => "change", 'multiple' => true,'size'=>10, 'required', 'class' => 'chosen-select form-control', 'id' => 'permission')) !!}
</div>

<div class="form-group text-right m-b-0">
    <button class="btn btn-gradient waves-effect waves-light" type="submit">
        {{ __('app.Submit') }}
    </button>
    <button type="reset" class="btn btn-light waves-effect m-l-5">
        {{ __('app.Cancel') }}
    </button>
</div>

