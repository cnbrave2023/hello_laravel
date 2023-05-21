@extends('layouts.default')

@section('content')
  <div class="bg-light p-3 p-sm-5 rounded" style="background-color:#f1f1f1 !important;">
    <h1>Hello Laravelqqq</h1>
    <p class="lead">
      你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入门教程</a> 的示例项目主页。
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop
