@extends('layouts.app')

@section('content')
<div class="container detail-page">
   <div class="row">
       <div class="col-md-8">
           <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('property.list', $house->location->slug)}}">{!! $house->location->nama !!}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{!! $house->nama !!}</li>
            </ol>
          </nav>
           <div class="title my-4">
               <h2>{!! $house->nama !!}</h2>
           </div>
           <div class="slide-images-container">
                <div class="slides">
                    <div class="owl-carousel owl-theme">
                        @foreach (json_decode($house->images) as $image)
                        <div class="img-container">
                            <img src="{{asset('storage/'.$image)}}" alt="Image">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="slide-thumbnails">
                    @foreach (json_decode($house->images) as $image)
                        <div class="img-container">
                            <img src="{{asset('storage/'.$image)}}" alt="Image Thumbnail">
                        </div>
                    @endforeach
                </div>
           </div>
           <div class="description my-4">
               <h2>Deskripsi</h2>
               <p>
                   {!! $house->description !!}
               </p>
           </div>
           <div class="detail my-3">
               <h2>Rincian Fasilitas & Alamat</h2>
               <div class="list-rincian">
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
                       <h5>Ruang Tamu:</h5>
                       <p>{!! $house->living_room !!}</p>
                   </div>
                   <div class="text-wrapper">
                       <h5>Listrik:</h5>
                       <p>{!! $house->electricity !!}</p>
                   </div>
                   <div class="text-wrapper">  
                       <h5>Luas:</h5>
                       <p>{!! $house->luas !!} m<sup>2</sup></p>
                   </div>
                   <div class="text-wrapper">  
                        <h5>Harga:</h5>
                        <p>{!! formatRupiah($house->price) !!}</p>
                    </div>
                    <div class="text-wrapper">  
                        <h5>Alamat:</h5>
                        <p>{!! $house->address !!}</p>
                    </div>
               </div>
           </div>
       </div>
       <div class="col-md-4">   
           <div class="fixed-card">
                <div class="row">
                    <div class="col-md-12 mt-4 text-right">
                        <a href="{{$house->getShareUrl('whatsapp', $house->getUrlAttribute())}}" class="btn btn-outline-primary">Share <span class="fa fa-share-alt"></span></a>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="list-group-item">
                            <div class="row w-100">
                                <div class="col-12 col-sm-6 col-md-3 px-1">
                                    <img src="{{asset('storage/'.$contact->image)}}" alt="Mike Anamendolla" class="rounded-circle mx-auto d-block img-fluid">
                                </div>
                                <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                                    <label class="name lead">{!! $contact->nama !!}</label>
                                    <br> 
                                    <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(870) 288-4149"></span>
                                    <span class="text-muted small">{!! $contact->phone !!}</span>
                                    <br>
                                    <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                                    <span class="text-muted small text-truncate">{!! $contact->email !!}</span>
                                    <br>
                                    <a href="https://api.whatsapp.com/send?phone={{$contact->phone}}&text=Assalamu'alaikum Wr Wb. Saya mau minta informasi untuk properti *{{$house->nama}}* di {{$house->location->nama}}." class="btn btn-success btn-sm mt-2"><span class="fa fa-phone mr-1"></span> Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4 text-center">
                        <h6 class="price">{!! formatRupiah($house->price) !!}</h6>
                    </div>
                    @if($houses->count() > 0)
                    <div class="col-md-12 text-center mt-4">
                        <hr>
                        <h4>Properti Terkait</h4>
                        <hr>
                    </div>
                    @endif
                    @foreach ($houses as $item)
                        <div class="col-md-12 py-2">
                            <div class="card ipr-card">
                                <a href="{{route('property.show', $item->id)}}">
                                    <div class="card-body">
                                        <div class="img-container">
                                            <img src="{{asset('images/sample/1.jpg')}}" alt="Sample">
                                            <div class="overlay-hover">
                                                <h1>Lihat Rincian</h1>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h6 class="price">{!! formatRupiah($item->price)  !!}</h6>
                                            <h2 class="title">{!! Str::limit($item->nama, 27, '...') !!}</h2>
                                            <div class="list">
                                                <div class="text-wrapper">
                                                    <h5>Kamar Tidur:</h5>
                                                    <p>{!! $item->bedrooms !!}</p>
                                                </div>
                                                <div class="text-wrapper">
                                                    <h5>Kamar Mandi:</h5>
                                                    <p>{!! $item->bathrooms !!}</p>
                                                </div>
                                                <div class="text-wrapper">
                                                    <h5>Garasi:</h5>
                                                    <p>{!! $item->garage !!}</p>
                                                </div>
                                                <div class="text-wrapper">
                                                    <h5>Luas:</h5>
                                                    <p>{!! $item->luas !!} m<sup>2</sup></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
           </div>
       </div>
   </div>
</div>
@endsection
