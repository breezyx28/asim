@extends('layouts.dashboard')

@section('title')
    تقارير المستخدمين
@endsection

@section('content')
    {{-- <livewire:users.index /> --}}
    <x-tables.user.index :results="$results"/>
@endsection
