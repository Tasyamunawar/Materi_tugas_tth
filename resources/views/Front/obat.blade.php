@extends('Front.baseFront')

@section('title','Semua Obat')

@section('content')
<!-- Dashboard -->
<section class="container dashboard">
    <span>DASHBOARD</span>
    <h2>Data Materi</h2>
    <div class="container py-2">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($obat as $row)

            <div class="col">
                <div class="card" style="width: 18rem;">

                    <img src="{{ asset('storage/obats/'.$row->image) }}" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $row->name }}</h5>
                        <br>
                        <p class="card-text ">{!! $row->deskripsi !!}</p>
                    </div>

                </div>
            </div>

            @endforeach

        </div>
    </div>

</section>
<!-- End Dashboard -->
@endsection