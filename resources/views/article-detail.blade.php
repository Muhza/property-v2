@extends('layouts.app')

@section('content')
<div class="container article-page">
   <div class="row">
       <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('article.list')}}">Artikel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{!! $article->title !!}</li>
                </ol>
            </nav>
            <div class="img-container">
                <img src="{{asset('storage/'.$article->image)}}" alt="Article Image">
            </div>
            <div class="title my-4">
                <h2>{!! $article->title !!}</h2>
            </div>
            <div class="detail">
                <h4><span class="fa fa-calendar-alt mr-1"></span> {!! date('d M, Y', strtotime($article->created_at)) !!}</h4>
            </div>
           <div class="description my-4">
               <p>{!! $article->content !!}</p>
           </div>
       </div>
   </div>
</div>
@endsection
