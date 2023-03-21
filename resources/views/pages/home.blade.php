@extends('layouts.master')

@section('title', 'Pagina Inicial')

@section('content')

    @include('pages.secretaries.index')

    @include('pages.notices.index')

    @include('pages.gallery.index')

    @include('pages.transparency.index')

    @include('pages.usefull_links.index')

@endsection
