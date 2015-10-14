@extends('master')
@section('nav')
 @include('partials.nav')
@stop

@section('sub-title')
  <div class="col-md-12">

               <h2 class="m0-top">{{ config('blog.title') }}</h2>
  </div>
@stop
@section('content')
<div class="col-md-8 post-cards">
  <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
                <!-- post-card 1 -->
                @foreach ($posts as $post)
                <div class="post-card">
                    <div class="card radius shadowDepth1 row">
                     <!-- post-card image -->
                     <div class="col-md-4 p0 post-card-img">
                      <div class="card__image border-tlr-radius">
                        <!-- <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">-->
                        <p class="recruiter-name"><i class="fa fa-building"></i> Google</p>
                      </div>
                     </div>
                     <!-- post-card content -->
                     <div class="col-md-8">
                      <div class="card__content card__padding">
                                <div class="card__share">
                                    <div class="card__social">  
                                        <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                        <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                                        <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                                    </div>
                                    <a href="" class="like-icon"><i class="fa fa-heart-o"></i></a>
                                    <a id="share" class="share-toggle share-icon" href="#"></a>
                                </div>
                                <div class="card__meta"><span class="btn btn-xs"><a href="#">Program Management</a></span>
                                  <span class="btn btn-xs"><a href="#">Lagos</a></span><span class="btn btn-xs"><a href="#">Google</a></span></div>
                                <article class="card__article">
                                  <h3 class="m5-top"><a href="/blog/{{ $post->slug }}">{{ $post->title}}</a></h3>

                                  <p class="m0-bttm">{{ str_limit($post->content) }} </p>
                                </article>
                      </div>
                      <div class="card__action">                        
                        <div class="card__author pull-left">
                          <img src="http://lorempixel.com/40/40/sports/" alt="user">
                          <div class="card__author-content">
                            By <a href="#">Bolaji Alade</a> | <time class="">{{ $post->published_at->format('M jS Y') }}</time>
                          </div>
                        </div>
                        <div class="utils pull-right">
                            <ul class="list-inline">
                              <li><a href="" class="btn btn-danger btn-sm">Apply</a></li>
                              <li><a href="" class="btn btn-default btn-sm">Read more</a></li>
                            </ul>
                        </div>
                      </div>
                     </div>
                    </div>
                </div>
              @endforeach
              {!! $posts->render() !!}
                
              </div>
              @include('includes.sidebar')

  @endsection
@section('script')
<script type="text/javascript">
        // TOOLTIPS
        $(document).ready(function() {
          $('[data-toggle="tooltip"]').tooltip();
        });
        // POST-CARDS
        $(document).ready(function($) {
          $('.card__share > a.share-icon').on('click', function(e){ 
            e.preventDefault() // prevent default action - hash doesn't appear in url
              $(this).parent().find( 'div' ).toggleClass( 'card__social--active' );
            $(this).toggleClass('share-expanded');
            });          
        });
    </script>
  @stop