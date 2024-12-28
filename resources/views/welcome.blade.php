   
   @extends('layouts.app')
   @section('title','Home')
   @section('content')
   
   <!-- ======================= Blog Start  ============================ -->
    <div class="blog_section bg-white overflow-hidden pt-4 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 order-xl-2">
                    <div class="blog_sidebar">
                        <div class="p-3 p-xl-4 border rounded">
                            <div class="card_header mb-4">
                                <h3>Categories</h3>
                            </div>
                            <div class="categories_list">
                                <ul>
                                    <li><a href="#">Technology (1)</a></li>
                                    <li><a href="#">Health & Wellness (1)</a></li>
                                    <li><a href="#">Travel (1)</a></li>
                                    <li><a href="#">Food & Recipes (1)</a></li>
                                    <li><a href="#">Lifestyle (1)</a></li>
                                    <li><a href="#">Finance (1)</a></li>
                                    <li><a href="#">Education (1)</a></li>
                                    <li><a href="#">Entertainment (1)</a></li>
                                    <li><a href="#">Sports (1)</a></li>
                                    <li><a href="#">Fashion (1)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-3 p-xl-4 border rounded mt-2">
                            <div class="card_header mb-4">
                                <h3>Latest Posts</h3>
                            </div>
                            <div class="latestpost_list">
                                <ul>
                                    <li><a href="#">BMW car price updated 2024</a></li>
                                    <li><a href="#">BMW ECU Cloning</a></li>
                                    <li><a href="#">ECU Remaping of Toyota</a></li>
                                    <li><a href="#">BMW car price updated 2024</a></li>
                                    <li><a href="#">BMW ECU Cloning</a></li>
                                    <li><a href="#">ECU Remaping of Toyota</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 order-xl-1">
                    <div class="blog_wrapper">
                        <div class="row gy-4">
                        @foreach($blogs as $post)
                            <div class="col-md-6">
                                <div class="blog_post p-3 p-lg-4 card h-100 bg-transparent shadow-sm border-opacity-10">
                                    <div class="blog_img mb-4 position-relative">
                                        <a href="details.html">
                                            <img class="img-fluid rounded z-3" src="{{'assets/images/blog/'.($post->img)}}" alt="{{ $post->title }}">
                                        </a>
                                    </div>
                                    <div class="blog_content card-body p-0">
                                        <div class="short_info d-sm-flex align-items-center mb-3">
                                            <!-- Category -->
                                            <div class="mb-2 mb-sm-0 me-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon me-1">
                                                        <img src="assets/images/tag.svg" alt="Tag">
                                                    </div>
                                                    <div class="date">
                                                        <span>{{ optional($post->category)->title ?? 'Uncategorized' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Created At -->
                                            <div class="mb-2 mb-sm-0 me-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon me-1">
                                                        <img src="assets/images/calendar.svg" alt="Date">
                                                    </div>
                                                    <div class="date">
                                                        <span>{{ $post->created_at->format('Y-m-d') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Views -->
                                            <div class="">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon me-1">
                                                        <img src="assets/images/eye.svg" alt="Views">
                                                    </div>
                                                    <div class="date">
                                                        <span>{{ $post->views ?? 0 }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">
                                            <a href="">{{ $post->title }}</a>
                                        </h3>
                                        <div class="blog_desc mb-2">
                                            {{ Str::limit($post->description, 100, '...') }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footer mt-2 bg-transparent border-0 blog_content p-0">
                                        <a class="learn_more" href="{{ route('blog.show', $post->slug) }}">Read More</a>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="btn-readmore mt-5 text-center">
                            <a class="readmoreanhr btn btn-primary" href="{{route('blogs.index')}}">See More Post</a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <!-- ======================= Blog End  ============================ -->

    @endsection()