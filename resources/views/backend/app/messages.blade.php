@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>{{ __('app.woops') }}</strong> {{ __('app.errors') }}<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p>{{ $message }}</p>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <p>{{ (string) $message }}</p>
    </div>
@endif