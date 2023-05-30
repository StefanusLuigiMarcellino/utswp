@extends('layout.master')

@section('title', 'Home Page')

@section('content')
    <section id="highlight">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $highlight->image }}" alt="" style="width: 25vw">
                </div>
                <div class="col-md-8 my-auto">
                    <div class="fs-4 border-bottom border-dark border-3 d-inline">
                        HIGHLIGHT BOOK
                    </div>
                    <h1>{{ $highlight->title }}</h1>
                    <p>{{ $highlight->description }}</p>
                    <a href="/detail/{{ $highlight->id }}" class="btn btn-primary">Read Post</a>
                </div>
            </div>
            <div class="border-bottom border-3 mt-5"></div>
        </div>
    </section>

    <section id="latest">
        <div class="container mt-5">
            <div class="fs-4 border-bottom border-dark border-3 d-inline">
                Latest Book Reviews
            </div>
            <div class="row mt-3">
                @foreach ($latests as $latest)
                <div class="col-3">
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="{{ $latest->image }}" class="card-img-top" style="" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 5vw">{{ $latest->title }}</h5>
                            <p class="card-text" style="height: 10vw">{{ $latest->description }}</p>
                            <a href="/detail/{{ $latest->id }}" class="btn btn-primary">Read Post</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="border-bottom border-3 mt-5"></div>
        </div>
    </section>

    <section id="posts">
        <div class="container p-5">
            <div class="fs-4 border-bottom border-dark border-3 d-inline">
                Book Series Reviews
            </div>
            <div class="row mt-3">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                            @foreach($posts->chunk(3) as $key => $chunk)
                              <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="row">
                                  @foreach($chunk as $post)
                                    <div class="col-md-4">
                                      <div class="card">
                                        <img src="{{ $post->image }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title" style="height: 5vw">{{ $post->title }}</h5>
                                          <p class="card-text" style="height: 10vw">{{ $post->description }}</p>
                                          <a href="/detail/{{ $post->id }}" class="btn btn-primary">Read Post</a>
                                        </div>
                                      </div>
                                    </div>
                                  @endforeach
                                </div>
                              </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" style="margin-left: -10vw" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon btn btn-primary" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" style="margin-right: -10vw" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon btn btn-primary" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                    </div>
                </div>
                <div class="col-md-1">

                </div>

            </div>
        </div>

    </section>
@endsection
