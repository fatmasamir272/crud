<option> {{ __('admins.selectRole') }} </option>
@if(!empty($group->roles))
    @foreach($group->roles as $role)
        <option value="{{ $role->id }}">{{ $role->name }}</option>
    @endforeach
@endif