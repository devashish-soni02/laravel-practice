@extends('layouts.master')
@section('content')
    <main class="mt-3 mb-3">
        <section id="banner-slider">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-vector/hand-drawn-web-developers_23-2148819604.jpg?size=626&ext=jpg"
                            class="w-100 d-block" alt="First slide" class="img-fuild"
                            style="height: 400px; object-fit: cover;" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/medium-shot-woman-working-laptop_23-2150323516.jpg?size=626&ext=jpg"
                            class="w-100 d-block" alt="second slide" style="height: 400px; object-fit: cover;" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="for-each-loops">

            {{-- ForEach And Start --}}

            <div class="row mt-5 ml-5">
                @foreach ($blogs as $blog)
                    @if ($blog['status'] == 1)
                        <div class="col-md-4">
                            <div class="card text-start">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $blog['title'] }}</h4>
                                    <p class="card-text">{{ $blog['body'] }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-4">
                            <div class="card text-start">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $blog['title'] }}</h4>
                                    <p class="card-text">{{ $blog['body'] }}</p>
                                    <button type="button" class="btn btn-warning">Pending Status</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- ForEach And end --}}


            {{-- for Start --}}

            {{-- @for ($i = 0; $i < count($blogs); $i++)
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card text-start">
                            <div class="card-body">
                                <h4 class="card-title">{{ $blogs[$i]['title'] }}</h4>
                                <p class="card-text">{{ $blogs[$i]['body'] }}</p>
                            </div>
                        </div>

                    </div>

                </div>
            @endfor --}}


        </section>
    </main>
@endsection
