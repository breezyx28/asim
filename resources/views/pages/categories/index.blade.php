@extends('layouts.dashboard')

@section('title')
    تقارير الأصناف
@endsection

@section('content')
    {{-- <livewire:categories.index /> --}}
    <x-tables.category.index :results="$results"/>
@endsection
