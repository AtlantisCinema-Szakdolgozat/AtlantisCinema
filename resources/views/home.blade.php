@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vezérlőpult') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Be vagy jelentkezve!') }}
                    @if (Auth::user()->munkakor=="Admin")
                    <a href="film">Admin kezdőoldal</a>
                    @endif
                    @if (Auth::user()->munkakor=="Pénztáros")
                    <a href="penztar">Pénztáros kezdőoldal</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
