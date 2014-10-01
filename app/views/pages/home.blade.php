@extends('layouts/default_min')

@section('css')

<link rel="stylesheet" type="text/css" href="css/hover_css/component.css"/>
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
                    <video id="{{ $video->video }}" class="sublime" width="360" height="200" title="Оюу Толгойн луйвар" data-uid="{{ $video->video }}" data-youtube-id="{{ $video->video }}" data-autoresize="fit" preload="none">
                    </video>

                    <div class="caption">

                        <p>{{ $video->shorten(100) }}</p>

                        <p><a href="video/{{$video->id}}" class="btn btn-primary btn-block btnRed" role="button">Дэлгэрэнгүй</a></p>
                    </div>
                </div>
            </div>
        @endforeach()

    </article>
</div>

<div class="container">
    <div class="grid">


    </div>
</div>
<div class="container">
    <article class="row" style="height: 300px; background-color: #ffffff; padding-left: 30px; margin-bottom: 30px; margin-top: 45px">
        <h3><i class="fa fa-music"></i> Аудио лекц сонсох</h3>
        <div class="col-md-12" style="height: 220px; overflow: auto;">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Нэр</th>
                    <th>Татах</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Амьдралын туйлын зорилго </td>
                    <td><a href="uploads/lekc/1.mp3" download><i class="fa fa-cloud-download"></i></a>
                        &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;
                        <a href="uploads/lekc/1.mp3" target="_blank"><i class="fa fa-play-circle-o"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Хүсэл мөрөөдөл</td>
                    <td><a href="uploads/lekc/2.mp3" download><i class="fa fa-cloud-download"></i></a>

                        &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;
                        <a href="uploads/lekc/1.mp3" target="_blank"><i class="fa fa-play-circle-o"></i></a></td></td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Амьдрал гэж юу вэ?</td>
                    <td><a href="uploads/lekc/3.mp3" download><i class="fa fa-cloud-download"></i></a>

                        &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;
                        <a href="uploads/lekc/1.mp3" target="_blank"><i class="fa fa-play-circle-o"></i></a></td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Зуршил гэж юу вэ?</td>
                    <td><a href="uploads/lekc/4.mp3" download><i class="fa fa-cloud-download"></i></a>

                        &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;
                        <a href="uploads/lekc/1.mp3" target="_blank"><i class="fa fa-play-circle-o"></i></a></td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Мэргэжлээ хэрхэн зөв сонгох вэ?</td>
                    <td><a href="uploads/lekc/5.mp3" download><i class="fa fa-cloud-download"></i></a>

                        &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;
                        <a href="uploads/lekc/1.mp3" target="_blank"><i class="fa fa-play-circle-o"></i></a></td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Аз жаргалыг босго</td>
                    <td><a href="uploads/lekc/6.mp3" download><i class="fa fa-cloud-download"></i></a>

                        &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;
                        <a href="uploads/lekc/1.mp3" target="_blank"><i class="fa fa-play-circle-o"></i></a></td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </article>
</div>


<!--<div id="disqus_thread"></div>-->
<!--<script type="text/javascript">-->
<!--    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */-->
<!--    var disqus_shortname = 'ganbaatar'; // required: replace example with your forum shortname-->
<!---->
<!--    /* * * DON'T EDIT BELOW THIS LINE * * */-->
<!--    (function() {-->
<!--        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;-->
<!--        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';-->
<!--        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);-->
<!--    })();-->
<!--</script>-->
<!--<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>-->
<!--<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>-->

@stop