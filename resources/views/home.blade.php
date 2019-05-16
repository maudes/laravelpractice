@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome dear,<br>
                    <a href="/admin/article">Go to add some SMURFS!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
