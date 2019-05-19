@extends('partials.master')

@yield('body')
@section('content')
    
        <div id="app"></div>
@endsection

@section('js')
    <script src="{{ asset('js/game.js') }}"></script>
@endsection
</html>