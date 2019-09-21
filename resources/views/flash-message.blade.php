@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span class="text-center">
                <b style="font-size: larger;">{{ $message }}</b>
        </span>
    </div>

@endif

@if ($message = Session::get('error'))

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span class="text-center">
                <b style="font-size: larger;">{{ $message }}</b>
        </span>
    </div>

@endif


@if ($message = Session::get('warning'))

    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span class="text-center">
                <b style="font-size: larger;">{{ $message }}</b>
        </span>
    </div>

@endif


@if ($message = Session::get('info'))

    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span class="text-center">
                <b style="font-size: larger;">{{ $message }}</b>
        </span>
    </div>

@endif


@if ($errors->any())

    <div class="alert alert-danger">

        <button type="button" class="close" data-dismiss="alert">×</button>

        Please check the form below for errors

    </div>

@endif
