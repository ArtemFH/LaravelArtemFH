@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <form class="col-3" method="POST" action="{{ route('user.requestBenchmark') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="score" class="col-form-label-lg">Score</label>
            <input id="score" class="form-control" name="score" autocomplete="off" type="number" value=""
                   placeholder="Score">
            @error('score')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group" style="display: grid">
            <label for="c-file" class="col-form-label-lg">Result</label>
            <div id="c-file" class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Example result input</label>
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Nomination</label>
            <select class="form-control" id="exampleFormControlSelect1" name="nomination_id">
                <option value="10" selected>CPU</option>
                <option value="20">GPU</option>
                <option value="30">RAM</option>
            </select>
        </div>
        <div class="form-group center">
            <button class="buttonSuccess btn btn-lg btn-primary" type="submit" name="send" value="1">
                Send Result
            </button>
        </div>
    </form>
@endsection
