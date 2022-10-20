@if ($errors->any())
    <div class="remove-margin-left">
        <ul style="list-style-type: none; margin-left: -2rem;">
            @foreach ($errors->all() as $error)
                <div class="remove-list">
                    <li style="margin-bottom: 5px;">
                        <div class="application-alert-danger alert-timeout">{{ $error }}<div>
                    </li>
                </div>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success_report'))
    <div class="application-alert-success alert-timeout">
        {{ session()->get('success_report') }}
    </div>
    <br />
@endif


@if (session()->has('failure_report'))
    <div class="application-alert-danger alert-timeout">
        {{ session()->get('failure_report') }}
    </div>
    <br />
@endif