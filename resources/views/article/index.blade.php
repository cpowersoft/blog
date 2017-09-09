@extends('layouts.app')

@section('content')

    @include('widgets.article')

    {{ $articles->links('pagination.default') }}

@endsection