@extends('layouts.app')
@section('title', 'Posts by Category')
@section('content')

<!-- ======================= breadcrumb Start ============================ -->
<div class="breadcrumb_sec py-3">
    <div class="container">
        <nav>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $category->title ?? 'Blog' }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- ======================= breadcrumb End ============================ -->

<!-- ======================= Blog Start ============================ -->
<div class="blog_section bg-white overflow-hidden pt-4 pb-4">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar -->
            <div class="col-xl-3 order-xl-2">
                <div class="blog_sidebar">
                    <!-- Categories -->
                    <div class="p-3 p-xl-4 border rounded">
                        <div class="card_header mb-4">
                            <h3>Categories</h3>
                        </div>
                        <div class="categories_list">
                            <ul>
                                @foreach($categories as $cat)
                                    <li>
                                        <a href="{{ route('category.show', $cat->slug) }}">{{ $cat->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Latest Posts -->
                    <div class="p-3 p-xl-4 border rounded mt-2">
                        <div class="card_header mb-4">
                            <h3>Latest Posts</h3>
                        </div>
                        <div class="latestpost_list">
                            <ul>
                                @foreach($latestPost as $post)
                                    <li>
                                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Blog Content -->
            <div class="col-xl-9 order-xl-1">
                <div class="blog_wrapper">
                    <div class="row gy-4">
                        @if($blogs->isEmpty())
                            <div class="col-12">
                                <p class="text-center">No blogs found for this category.</p>
                            </div>
                        @else
                            @foreach($blogs as $post)
                                <div class="col-md-6">
                                    <div class="blog_post p-3 p-lg-4 card h-100 bg-transparent shadow-sm border-opacity-10">
                                        <div class="blog_img mb-4 position-relative">
                                            <a href="{{ route('blog.show', $post->slug) }}">
                                                <img class="img-fluid rounded z-3" 
                                                    src="{{ asset('assets/images/blog/' . $post->img) }}" 
                                                    alt="{{ $post->title }}">
                                            </a>
                                        </div>
                                        <div class="blog_content card-body p-0">
                                            <div class="short_info d-sm-flex align-items-center mb-3">
                                                <!-- Category -->
                                                <div class="mb-2 mb-sm-0 me-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon me-1">
                                                            <img src="{{ asset('assets/images/tag.svg') }}" alt="Tag">
                                                        </div>
                                                        <div class="date">
                                                            <span>{{ $category->title ?? 'Uncategorized' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Created At -->
                                                <div class="mb-2 mb-sm-0 me-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon me-1">
                                                            <img src="{{ asset('assets/images/calendar.svg') }}" alt="Date">
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
                                                            <img src="{{ asset('assets/images/eye.svg') }}" alt="Views">
                                                        </div>
                                                        <div class="date">
                                                            <span>{{ $post->views ?? 0 }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="mb-3">
                                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Blog End ============================ -->

@endsection
