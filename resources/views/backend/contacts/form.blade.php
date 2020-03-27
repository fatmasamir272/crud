@include('backend.app.messages')

{!! csrf_field() !!}
<script src="{{ asset("backend/assets/js/jquery.min.js") }}"></script>

 
<fieldset>
    <legend>Contacts Information</legend>
    <div class="form-group">
        <label for="type">{{__('site.name')}}<span class="text-danger">*</span></label>
       {!! Form::text('name', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('site.name'), 'id' => 'name', 'class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        <label for="name">{{ __('site.phone') }}<span class="text-danger">*</span></label>
        {!! Form::text('phone', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('site.phone'), 'id' => 'phone', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label for="name">{{ __('site.email') }}<span class="text-danger">*</span></label>
        {!! Form::email('email', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('site.email'), 'id' => 'email', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label for="message">{{ __('site.message') }}<span class="text-danger">*</span></label>
        {!! Form::text('message', null, array('parsley-trigger' => "change", 'required', 'placeholder' => trans('site.message'), 'id' => 'message', 'class' => 'form-control')) !!}
    </div>
   
</fieldset>
<div class="form-group text-right m-b-0">
    <button class="btn btn-gradient waves-effect waves-light" type="submit">
        {{ __('app.Submit') }}
    </button>
    <button type="reset" class="btn btn-light waves-effect m-l-5">
        <a href="{{aurl('/contacts/')}}">
        {{ __('app.Cancel') }}
    </a>
    </button>
</div>


