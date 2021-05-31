@extends('layouts.base')
@extends('benchmarks.nomination.CPU.index')
@extends('benchmarks.nomination.GPU.index')
@extends('benchmarks.nomination.RAM.index')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
