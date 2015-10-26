@extends('master')
@section('nav')
 @include('partials.nav')
@stop

@section('sub-title')
  <div class="col-md-12">

  </div>
@stop

@section('content')
<div id="single-post" class="col-md-8 post-cards single-page">
                <!-- post-card 1 -->
                <div class="post-card">
                    <div class="row">
                     <div class="col-md-12">
                      <h3 class="m5-top post-title">{{$post->title}}</h3>
                      <div class="card__action p0-left">                        
                        <div class="card__author pull-left">
                          <img src="http://lorempixel.com/40/40/sports/" alt="user">
                          <div class="card__author-content">
                            By <a href="#">Bolaji Alade</a> | <time class="">{{ $post->published_at->format('M jS') }}</time> | <span><i class="fa fa-comments"></i> 3 comments</span>
                           <!--for <a href="/show">on</a>-->
                          </div>                          
                        </div>
                        <div class="utils pull-right">
                            <P><span class="btn btn-xs"><a href="#">Google</a></span><span class="btn btn-xs"><a href="#">Program Management</a></span><span class="btn btn-xs"><a href="#">Lagos</a></span></P>
                        </div>
                      </div>
                     </div>
                    </div>
                    <div class="card radius shadowDepth1 row m0-left m0-right">
                     <!-- post-card image -->
                     <div class="p0 post-card-img">
                      <div class="card__image border-tlr-radius">
                        <!-- <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius"> -->
                        <p class="recruiter-name p15-left text-left"><i class="fa fa-building"></i> Google</p>
                      </div>
                     </div>
                     <!-- post-card content -->
                     <div class="">
                      <div class="card__content card__padding">
                                <div class="card__share">
                                    <div class="card__social">  
                                        <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                        <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                                        <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                                    </div>
                                    <a href="" class="apply-circle">Apply</a>
                                    <a href="" class="like-icon"><i class="fa fa-heart-o"></i></a>
                                    <a id="share" class="share-toggle share-icon" href="#"></a>
                                </div>
                                
                                <article class="card__article p20-top">
                                  <!-- Overview -->
                                  <div class="well row">
                                    <h5 class="m0-top">Overview</h5>
                                    <div class="col-md-6">
                                      <ul class="list-unstyled">
                                        <li><span class="bold m10-right"><strong>Location:</strong></span>Lagos</li>
                                        <li><span class="bold m10-right"><strong>Job Role :</strong></span>Programme Management</li>
                                        <li><span class="bold m10-right"><strong>Job Type :</strong></span>Experienced</li>
                                        <li><span class="bold m10-right"><strong>Job Sector :</strong></span>IT/Telecommunication</li>
                                      </ul>
                                    </div>
                                    <div class="col-md-6">
                                      <ul class="list-unstyled">                                        
                                        <li><span class="bold m10-right"><strong>Posted :</strong></span>10 Oct 2015</li>
                                        <li><span class="bold m10-right"><strong>Closing :</strong></span>20 Jan 2016</li>
                                        <li><span class="bold m10-right"><strong>Salary :</strong></span>N100,000 - N150,000</li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <!-- job description -->
                                    <div class="panel panel-default">
                                      <div class="panel-heading bg-white" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                          <a role="button" class="icon-collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fa fa-newspaper-o fa-2x"></i> Job Description
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                         {{$post->content}}
                                        </div>
                                      </div>
                                    </div>
                                    <!-- skills & experience -->
                                    <div class="panel panel-default">
                                      <div class="panel-heading bg-white" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                          <a role="button" class="icon-collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-black-tie fa-2x"></i> Desired Experience & Skills
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                          {{$post->content}}
                                        </div>
                                      </div>
                                    </div>
                                    <!-- company description -->
                                    <div class="panel panel-default">
                                      <div class="panel-heading bg-white" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                          <a role="button" class="icon-collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-building fa-2x"></i> Company Description
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                         {{$post->content}}
                                        </div>
                                      </div>
                                    </div>
                                  </div> <!-- panel group ends -->
                                </article>
                      </div>
                      <div class="card__action">                        
                        <div class="pull-left">
                          
                        </div>
                        <div class="utils pull-right">
                            <ul class="list-inline">
                              <li><a href="" class="btn btn-primary btn-sm">Apply for this Job</a></li>
                            </ul>
                        </div>
                      </div>
                     </div>
                    </div>
                </div>
                <!-- INLINE ad-bar 3 -->
                <div class="ad-bar3">
                  <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=AD-BANNER-350%C3%97150&w=550&h=150">
                </div> 
                <!-- jobs with same employer -->
                <div class="panel panel-default">
                  <div class="panel-heading bg-white m20-bttm">
                    <legend class="panel-title pull-left">More Jobs @ Google</legend>
                    <!-- <div class="customNavigation pull-right">
                      <a class="prev"><i class="fa fa-angle-double-left fa-2x"></i></a>
                      <a class="next"><i class="fa fa-angle-double-right fa-2x"></i></a>
                    </div> -->
                  </div>
                  <div class="panel-body more-jobs-employer">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                      <div class="item">
                        <a class="more-jobs-carousel" href="single-post.php" class="p0">
                          <!-- <img src=""> -->
                          <!-- <h5 class="sb-recruiter-name"><i class="fa fa-building"></i> Google</h5> -->
                          <h6 class="job-title">Developer Relations Ecosystem Program Manager, Sub-Saharan Africa</h6>
                          <p class="post-tags"><span class="btn btn-xs">Program Management</span><span class="btn btn-xs">Lagos</span></p>
                        </a>
                      </div>
                      <div class="item">
                        <a class="more-jobs-carousel" href="single-post.php" class="p0">
                          <!-- <img src=""> -->
                          <!-- <h5 class="sb-recruiter-name"><i class="fa fa-building"></i> Google</h5> -->
                          <h6 class="job-title">Business Intern 2016</h6>
                          <p class="post-tags"><span class="btn btn-xs">Program Management</span><span class="btn btn-xs">Lagos</span></p>
                        </a>
                      </div>
                      <div class="item">
                        <a class="more-jobs-carousel" href="single-post.php" class="p0">
                          <!-- <img src=""> -->
                          <!-- <h5 class="sb-recruiter-name"><i class="fa fa-building"></i> Google</h5> -->
                          <h6 class="job-title">Marketing Analyst</h6>
                          <p class="post-tags"><span class="btn btn-xs">Program Management</span><span class="btn btn-xs">Lagos</span></p>
                        </a>
                      </div>
                      <div class="item">
                        <a class="more-jobs-carousel" href="single-post.php" class="p0">
                          <!-- <img src=""> -->
                          <!-- <h5 class="sb-recruiter-name"><i class="fa fa-building"></i> Google</h5> -->
                          <h6 class="job-title">Strategic Partner Lead, Partner Business Solutions</h6>
                          <p class="post-tags"><span class="btn btn-xs">Program Management</span><span class="btn btn-xs">Lagos</span></p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- jobs with similar roles -->
                <div class="panel panel-default">
                  <div class="panel-heading bg-white m20-bttm">
                    <legend class="panel-title pull-left">Jobs With Similar Roles</legend>
                    <!-- <div class="customNavigation pull-right">
                      <a class="prev"><i class="fa fa-angle-double-left fa-2x"></i></a>
                      <a class="next"><i class="fa fa-angle-double-right fa-2x"></i></a>
                    </div> -->
                  </div>
                  <div class="panel-body more-jobs-employer">
                    <div id="owl-demo2" class="owl-carousel owl-theme">
                      <div class="item">
                        <a class="more-jobs-carousel" href="single-post.php" class="p0">
                          <!-- <img src=""> -->
                          <!-- <h5 class="sb-recruiter-name"><i class="fa fa-building"></i> Google</h5> -->
                          <h6 class="job-title">Strategic Partner Lead, Partner Business Solutions</h6>
                          <p class="post-tags"><span class="btn btn-xs">Saipem</span><span class="btn btn-xs">Program Management</span><span class="btn btn-xs">Lagos</span></p>
                        </a>
                      </div>
                      <div class="item">
                        <a class="more-jobs-carousel" href="single-post.php" class="p0">
                          <!-- <img src=""> -->
                          <!-- <h5 class="sb-recruiter-name"><i class="fa fa-building"></i> Google</h5> -->
                          <h6 class="job-title">Developer Relations Ecosystem Program Manager, Sub-Saharan Africa</h6>
                          <p class="post-tags"><span class="btn btn-xs">Saipem</span><span class="btn btn-xs">Program Management</span><span class="btn btn-xs">Lagos</span></p>
                        </a>
                      </div>
                      <div class="item">
                        <a class="more-jobs-carousel" href="single-post.php" class="p0">
                          <!-- <img src=""> -->
                          <!-- <h5 class="sb-recruiter-name"><i class="fa fa-building"></i> Google</h5> -->
                          <h6 class="job-title">Business Intern 2016</h6>
                          <p class="post-tags"><span class="btn btn-xs">Saipem</span><span class="btn btn-xs">Program Management</span><span class="btn btn-xs">Lagos</span></p>
                        </a>
                      </div>
                      <div class="item">
                        <a class="more-jobs-carousel" href="single-post.php" class="p0">
                          <!-- <img src=""> -->
                          <!-- <h5 class="sb-recruiter-name"><i class="fa fa-building"></i> Google</h5> -->
                          <h6 class="job-title">Marketing Analyst</h6>
                          <p class="post-tags"><span class="btn btn-xs">Saipem</span><span class="btn btn-xs">Program Management</span><span class="btn btn-xs">Lagos</span></p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- pager -->
                <div class="blog-pager clearfix" id="blog-pager">                  
                  <a class="btn btn-primary pull-right" href="" data-toggle="tooltip" title="Older Post">
                  <i class="fa fa-arrow-right"></i>
                  </a>
                  <a class="home-link btn btn-primary pull-left" href=""data-toggle="tooltip" title="Home">
                  <i class="fa fa-home"></i>
                  </a>
                </div>
                <!-- facebook comments box -->
                <div class="row m20-top clearfix">
                  <div class="col-md-12 fb-comment">
                    <div class="fb-comments" data-href="http://411jobs.curiouzmind.com/" data-width="100%" data-numposts="5"></div>
                  </div>
                </div>
              </div>
              <!-- sidebar panels >>  subscription, ads, top posts, fb plugin-->
              @include('includes.sidebar')
  @endsection
@section('script')
  <script type="text/javascript">
          // owl carousel for jobs from same employer
          $(document).ready(function() { 
            var owl = $("#owl-demo");         
            owl.owlCarousel({
                autoPlay: true,
                items : 3, //10 items above 1000px browser width
                itemsDesktop : [1000,5], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,3], // betweem 900px and 601px
                itemsTablet: [600,2], //2 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });         
            // // Custom Navigation Events
            // $(".next").click(function(){
            //   owl.trigger('owl.next');
            // });
            // $(".prev").click(function(){
            //   owl.trigger('owl.prev');
            // });
            // $(".play").click(function(){
            //   owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
            // });
            // $(".stop").click(function(){
            //   owl.trigger('owl.stop');
            // });         
          });
          // owl carousel for jobs @ same role
          $(document).ready(function() { 
            var owl = $("#owl-demo2");         
            owl.owlCarousel({
                autoPlay: true,
                items : 3, //10 items above 1000px browser width
                itemsDesktop : [1000,5], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,3], // betweem 900px and 601px
                itemsTablet: [600,2], //2 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });                 
          });
          // tooltip
          $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
          });
          // $(function() {
          //      var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
          //      $("#nav ul li").each(function(){
          //           if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          //           $(this).addClass("active");
          //      })
          // });
      </script>
@endsection