@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if($houses->count() > 0)
        <div class="col-md-12">
            <h2>Terbaru</h2>
        </div>
        @endif
        @foreach ($houses as $house)
            <div class="col-md-4 my-3">
                <div class="card ipr-card">
                    <div class="card-header text-right">
                        <a href="{{$house->getShareUrl('whatsapp', $house->getUrlAttribute())}}" class="btn btn-rounded white"><span class="fa fa-share-alt mt-2"></span></a>
                    </div>
                    <a href="{{route('property.show', $house->id)}}">
                        <div class="card-body">
                            <div class="img-container">
                                <img src="{{asset('storage/'.json_decode($house->images)[0])}}" alt="Sample">
                                <div class="overlay-hover">
                                    <h1>Lihat Rincian</h1>
                                </div>
                            </div>
                            <div class="detail">
                                <h6 class="price">{!! formatRupiah($house->price) !!}</h6>
                                <h2 class="title">{!! Str::limit($house->nama, 27, '...') !!}</h2>
                                <div class="list">
                                    <div class="text-wrapper">
                                        <h5>Kamar Tidur:</h5>
                                        <p>{!! $house->bedrooms !!}</p>
                                    </div>
                                    <div class="text-wrapper">
                                        <h5>Kamar Mandi:</h5>
                                        <p>{!! $house->bathrooms !!}</p>
                                    </div>
                                    <div class="text-wrapper">
                                        <h5>Garasi:</h5>
                                        <p>{!! $house->garage !!}</p>
                                    </div>
                                    <div class="text-wrapper">
                                        <h5>Luas:</h5>
                                        <p>{!! $house->luas !!} m<sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        @if($houses->count() == 0)
        <div class="mt-5 col-md-12 text-center">
            <h5>Maaf data yang Anda cari tidak dapat ditemukan, coba kata kunci yang berbeda <span class="ml-1 fa fa-smile"></span></h5>
        </div>
        @endif
    </div>
    @if($houses->count() > 0)
    <div class="row py-3 justify-content-center">
        <div class="col-12 text-center">
            <a href="javascript:;" class="btn btn-primary">Tampilkan Lebih Banyak <span class="ml-2 fa fa-angle-double-right"></span></a>
        </div>
    </div>
    @endif
</div>
@endsection
