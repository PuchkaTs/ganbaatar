@extends('layouts/default_min')

@section('css')

<link rel="stylesheet" type="text/css" href="css/hover_css/component.css"/>
<link rel="stylesheet" type="text/css" href="css/flexslider/flexslider2.css"/>
<script type="text/javascript" src="//cdn.sublimevideo.net/js/l38se7cr.js"></script>
@stop

@section('content')

@include('layouts.partials.flexslider')
<div class="container">
    <article class="row chairman">
        <div class="col-md-7">
            <h1><i class="fa fa-angle-double-down"></i> Монгол хүний төлөө</h1>
            @if($tweets)
            <ul id="slideshow">
                @foreach($tweets as $index => $tweet)
                @if($index == 0)
                <li class="next">
                    <blockquote>
                        <p>{{ $tweet->status }}
                        </p>
                        <footer>{{ $tweet->title }}</footer>
                    </blockquote>
                </li>
                @else
                <li>
                    <blockquote>
                        <p>{{ $tweet->status }}
                        </p>
                        <footer>{{ $tweet->title }}</footer>
                    </blockquote>
                </li>
                @endif()

                @endforeach()
            </ul>

            @endif()

        </div>
        <div class="col-md-4 col-md-offset-1">
            <img src="images/ganbaatar.png">
        </div>
    </article>

    <article class="row" style=" background-color: #F1F4F9">
        @foreach($videos as $index => $video)
        <div class="col-sm-6 col-md-4 noPadding">
            <div class="thumbnail thumb{{ $index }}">
                <h3>{{ $video->title }}</h3>
                <video id="{{ $video->video }}" class="sublime" width="360" height="200" title="Оюу Толгойн луйвар"
                       data-uid="{{ $video->video }}" data-youtube-id="{{ $video->video }}" data-autoresize="fit"
                       preload="none">
                </video>

                <div class="caption">

                    <p>{{ $video->shorten(100) }}</p>

                    <p><a href="video/{{$video->id}}" class="btn btn-primary btn-block btnRed"
                          role="button">Дэлгэрэнгүй</a></p>
                </div>
            </div>
        </div>
        @endforeach()

    </article>
</div>

<div class="container noPadding">
    <article style="margin-top: 45px; margin-left: 20px; margin-right: 20px;">
        <h3><i class="fa fa-globe"></i> Мэдээлэл</h3>
        <div class="flexslider flexslider2">
            <ul class="slides">
                @foreach($projects as $project)
                <li>
                    <img src="uploads/projects/300x200/{{ $project->image->first() ? $project->image->first()->image : '1.jpg' }}" />
                    <figcaption>
                        <h4>{{ $project->title }}</h4>
                        <div><p>{{ $project->shorten(100)}} {{ link_to_route('news_path', 'Дэлгэрэнгүй', $project->id, ['class' => 'more'])}}</p></div>
                    </figcaption>
                </li>
                @endforeach()

            </ul>
        </div>

    </article>
</div>
<div class="container">
    <article class="row"
             style=" background-color: #ffffff; padding-left: 30px; margin-bottom: 30px; margin-top: 45px">
        <h3><i class="fa fa-music"></i> Аудио лекц сонсох</h3>

        <div class="col-md-12" style="margin-bottom: 30px; padding-left: 0px;">
            <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="active"><a href="#home" role="tab" data-toggle="tab">Лекцүүд</a></li>
                <li><a href="#download" role="tab" data-toggle="tab">Татах</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <iframe width="100%" height="450" scrolling="no" frameborder="no"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/53338125&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                </div>
                <div class="tab-pane" id="download">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Нэр</th>
                            <th>Татах</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($songs as $index => $song)
                                <tr>
                                    <td>{{$index}}</td>
                                    <td>{{$song->title}}</td>
                                    <td><a href="{{$song->download_link}}" download><i class="fa fa-cloud-download"></i></a>
                                        &nbsp;&nbsp;
                                        <a href="{{$song->play_link}}" target="_blank"><i class="fa fa-play-circle-o"></i></a></td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </article>
</div>


@stop
