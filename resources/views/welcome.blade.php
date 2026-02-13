@extends('layouts.app')

@section('title', 'welcome')

@section('content')
<h1>Bienvenue</h1>
    <p>Welcome {{auth->user()}}</p>
@endsection
