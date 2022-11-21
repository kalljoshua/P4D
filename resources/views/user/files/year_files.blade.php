<?php
//dd($files);
?>
@extends('...user.layouts.layout')
@section('title')
    P4D || {{$year}} Files
@endsection

@section('content')
    <!--
        =============================================
            Theme Inner Banner
        ==============================================
                                -->
    <div class="theme-inner-banner">
        <div class="container">
            <h2 class="intro-title text-center">{{$year}} Files</h2>
            <ul class="page-breadcrumb style-none d-flex justify-content-center">
                <li><a href="index.html">Home</a></li>
                <li class="current-page">{{$year}} Files</li>
            </ul>
        </div>
        <img src="images/shape/shape_38.svg" alt="" class="shapes shape-one">
        <img src="images/shape/shape_39.svg" alt="" class="shapes shape-two">
    </div> <!-- /.theme-inner-banner -->

    <!--
        =============================================
            Portfolio Gallery Three
        ==============================================
                               -->
    <div class="portfolio-gallery-three mt-40 mb-100 lg-mt-90 lg-mb-100">
        <div class="container">
            <div id="isotop-gallery-wrapper" class="grid-3column">
                <div class="grid-sizer"></div>
                @foreach ($files as $file)
                    <div class="isotop-item {{ $file['sector']['name'] }}">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta">
                                <embed src={{ $file['url'] }} alt="" height="350" class="w-100">
                            </div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">{{$file['title']}}</span>
                                <span style="font-size: 18">This will be the description for the file</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="/user_assets/images/gallery/img_01.jpg"
                                    tabindex="0"></a></div>
                        </div> <!-- /.portfolio-block-one -->
                    </div> <!-- /.item -->
                @endforeach
            </div>
        </div>
    </div> <!-- /.portfolio-gallery-three -->
@endsection
