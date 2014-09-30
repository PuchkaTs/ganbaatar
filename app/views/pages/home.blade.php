@extends('layouts/default_min')

@section('css')

<link rel="stylesheet" type="text/css" href="css/hover_css/component.css"/>
@stop

@section('content')

@include('layouts.partials.flexslider')
<div class="container">
    <article class="row chairman">
        <div class="col-md-7">
            <h1><i class="fa fa-angle-double-down"></i> For a Better Mongolia</h1>
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <img src="images/ganbaatar.png">
        </div>
    </article>

    <article class="row" style=" background-color: #F1F4F9">
        @for ($i = 0; $i < 3; $i++)
        <div class="col-sm-6 col-md-4 noPadding">
            <div class="thumbnail thumb{{$i}}">
                <h3>Text goes here</h3>
                <img src="images/16.jpg" alt="...">

                <div class="caption">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

                    <p><a href="#" class="btn btn-primary btn-block btnRed" role="button">Дэлгэрэнгүй</a></p>
                </div>
            </div>
        </div>
        @endfor

    </article>
</div>

<div class="container-fluid">
    <div class="grid">
        @for ($i = 0; $i < 10; $i++)
        <figure class="effect-zoe">
            <img src="images/17.jpg" alt="img11"/>
            <figcaption>
                <h2>Faithful <span>Milo</span></h2>
                <!--                <p>Milo went to the woods. He took a fun ride and never came back.</p>-->
                <a href="#">View more</a>
            </figcaption>
        </figure>
        @endfor


    </div>
</div>
<div class="container">
    <article class="row" style="height: 300px; background-color: #ffffff; padding-left: 30px; margin-bottom: 30px; margin-top: 45px">
        <h3><i class="fa fa-music"></i> MP3 lekc</h3>
        <div class="col-md-6">
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
                    <td>Лекц 1</td>
                    <td><i class="fa fa-cloud-download"></i> &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Лекц 2</td>
                    <td><i class="fa fa-cloud-download"></i></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Лекц 3</td>
                    <td><i class="fa fa-cloud-download"></i></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6" style="text-align: center">
            <iframe style="border:none" src="http://files.podsnack.com/iframe/embed.html?hash=a1u8vasf&t=1411921410"
                    width="525" height="244" allowfullscreen="true" mozallowfullscreen="true"
                    webkitallowfullscreen="true"></iframe>

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