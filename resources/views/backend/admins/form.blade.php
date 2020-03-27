@include('backend.app.messages')

{!! csrf_field() !!}

<div class="form-group">
    <label for="userName">{{ __('admins.Name') }}<span class="text-danger">*</span></label>
    {!! Form::text('name', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('admins.Name'), 'id' => 'userName', 'class' => 'form-control')) !!}
</div>

<div class="form-group">
    <label for="emailAddress">{{ __('admins.Email') }}<span class="text-danger">*</span></label>
    @if($editFlag == 0)
        {!! Form::email('email', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('admins.Email'), 'id' => 'emailAddress', 'class' => 'form-control')) !!}
    @else
        {!! Form::email('email', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('admins.Email'), 'id' => 'emailAddress', 'class' => 'form-control', 'disabled')) !!}
    @endif
</div>


@if($editFlag == 0)
    <div class="form-group">
        <label for="pass1">{{ __('admins.Password') }}<span class="text-danger">*</span></label>
        {!! Form::password('password',['required', 'class' => 'form-control', 'placeholder' => trans('admins.Password'), 'type' => 'password', 'id' => 'pass1']) !!}
    </div>

    <div class="form-group">
        <label for="passWord2">{{ __('admins.ConfirmPassword') }} <span class="text-danger">*</span></label>
        {!! Form::password('confirm_password',['data-parsley-equalto' => "#pass1", 'required', 'class' => 'form-control', 'placeholder' => trans('admins.ConfirmPassword'), 'type' => 'password', 'id' => 'passWord2']) !!}
    </div>
@endif

<div class="form-group">
    <label for="roles">{{ __('admins.Group') }} <span class="text-danger">*</span></label>
    {!! Form::select('group_id', ['' => trans('groups.select') ]  + $groups, isset($userGroup) ? $userGroup : null , array('parsley-trigger' => "change", 'required', 'class' => 'form-control', 'id' => 'group_id')) !!}
</div>

<div class="form-group">
    <label for="roles">{{ __('admins.Role') }} <span class="text-danger">*</span></label>
    @if($editFlag == 0)
        {!! Form::select('roles[]', ['' => trans('admins.selectRole')], null, array('parsley-trigger' => "change", 'required', 'class' => 'form-control', 'id' => 'roles')) !!}
    @else
        {!! Form::select('roles[]', $roles,$userRole, array('parsley-trigger' => "change", 'required', 'class' => 'form-control')) !!}
    @endif
</div>

<div class="form-group text-right m-b-0">
    <button class="btn btn-gradient waves-effect waves-light" type="submit">
        {{ __('app.Submit') }}
    </button>
    <button type="reset" class="btn btn-light waves-effect m-l-5">
        {{ __('app.Cancel') }}
    </button>
</div>


