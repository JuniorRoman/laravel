@extends('layouts.app')

@section('content')
@livewire('header')
<livewire:info-blocks />
<livewire:features />
<livewire:masters-slider />
<livewire:last_minute-slider />
@endsection