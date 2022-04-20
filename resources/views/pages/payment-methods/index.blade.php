@extends('layouts.dashboard')

@section('title')
    تقارير الأصناف
@endsection

@section('content')
    {{-- <livewire:categories.index /> --}}
    <x-tables.payment-method.index :results="$results"/>
@endsection
