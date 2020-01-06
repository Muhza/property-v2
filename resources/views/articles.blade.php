@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Artikel</h2>
        </div>
        @foreach($articles as $article)
            <div class="col-md-12 my-3">
                <div class="card article-card">
                    <a href="{{route('article.show', $article->slug)}}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-container">
                                        <img src="{{asset('storage/'.$article->image)}}" alt="Article Image">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="detail">
                                        <h2 class="title">{!! $article->title !!}</h2>
                                        <hr>
                                        <p>{!! Str::limit($article->content, 427, '...') !!}</p>
                                        <span class="btn-readmore">Baca Lebih Lanjut <i class="ml-2 fa fa-chevron-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        @if($articles->count() == 0)
        <div class="col-md-12 text-center">
            <h5>Maaf artikel yang Anda cari tidak dapat ditemukan <span class="ml-2 fa fa-smile"></span></h5>
        </div>
        @endif
    </div>
</div>
@endsection
