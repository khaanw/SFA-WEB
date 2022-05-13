@extends('layouts.master')

@section('title','Test Form')

@section('content')
<section class="content">
    <div class="content-wrapper">
        <form action="{{ route('test.store') }}" method="post">
            @csrf
            <input type="text" name="nama" id="nama">
            <input type="text" name="attribute1" id="attribute1">
            <input type="submit" value="Submit">
        </form>
    </div>
</section>
@endsection
