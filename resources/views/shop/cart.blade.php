@extends('layout.shop')

@section('content')
    <livewire:carts :data="$carts" />
@endsection
