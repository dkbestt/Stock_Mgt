@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if ($success !== null)
                    <div class="alert alert-success" role="alert">
                        {{ $success }}
                    </div>
                    @endif
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Total Merchant</th>
                                <th>Total Workers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$merchant}}</td>
                                <td>{{$worker}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $("div.alert").hide();
        }, 2000); // 2 secs
    });
</script>