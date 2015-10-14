@extends('master')
@section('styles')
<link href="{{asset('plugins/select2/select2.min.css')}}" rel="stylesheet">
@stop
@section('nav')
 @include('admin.partials.nav')
@stop

@section('sub-title')
 <div class="col-md-12 post-title-bar">
               <form>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <label for="postTitle" class="col-lg-1 col-md-1 control-label">Title</label>
                    <div class="col-lg-11 col-md-11">
                      <input type="text" class="form-control pull-left m10-bttm" id="postTitle" placeholder="Job Title">
                      <ul class="list-inline pull-right">
                        <li><a href="" class="btn btn-danger">Publish</a></li>
                        <li><a href="" class="btn btn-default">Save</a></li>
                        <li><a href="" class="btn btn-default">Preview</a></li>
                        <li><a href="" class="btn btn-default">Delete</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
               </form>
   </div>
@stop

@section('content')
<div class="col-md-9">
                <div class="new-post-content">
                 <form class="form-horizontal">
                  <fieldset>
                  <!-- company name -->
                  <div class="panel panel-default">
                    <div class="panel-body">
                        <label for="companyName" class="col-lg-2 control-label p0-left"><i class="fa fa-building"></i> Company Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="companyName" placeholder="Enter company's name">
                        </div>
                    </div>
                  </div>
                  <!-- wysiwyg text area -->
                  <div class="post-subsections">
                   <div class="panel panel-default">
                    <div class="panel-body p20">
                      <!-- overview variables -->
                      <div class="row">
                        <legend>Overview 
                        </legend>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Sector</label>
                            <div class="col-lg-10">
                              {!!Form::select('cat_name', $cats,null,['class'=>'form-control', 'id'=>'cat_name',
                                 'placeholder'=>'Create Category']) !!}
                            </div>
                          </div>    
                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Role</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="companyName" placeholder="e.g. Lagos">
                            </div>
                          </div>  
                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Type</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="companyName" placeholder="e.g. Lagos">
                            </div>
                          </div>  
                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Posted</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="companyName" placeholder="e.g. Lagos">
                            </div>
                          </div>  
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Closing</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="companyName" placeholder="e.g. Lagos">
                            </div>
                          </div>    
                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Salary</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="companyName" placeholder="e.g. Lagos">
                            </div>
                          </div>  
                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Location</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="companyName" placeholder="e.g. Lagos">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- section 1 -->
                      <div class="sub1 row">
                        <legend>Section 1</legend>
                        <div class="form-group">
                          <label for="sub1Title" class="col-lg-2 control-label">Title</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="sub1Title" placeholder="e.g. Job Description">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="sub1TextArea" class="col-lg-2 control-label">Content</label>
                          <div class="col-lg-10">
                            <textarea class="form-control textArea" rows="3" id="sub1TextArea"></textarea>
                            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                          </div>
                        </div>
                      </div>
                      <!-- section 2 -->
                      <div class="sub2 row">
                        <legend>Section 2</legend>
                        <div class="form-group">
                          <label for="sub2Title" class="col-lg-2 control-label">Title</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="sub2Title" placeholder="e.g. Desired Experience & Skills ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="sub2TextArea" class="col-lg-2 control-label">Content</label>
                          <div class="col-lg-10">
                            <textarea class="form-control textArea" rows="3" id="sub2TextArea"></textarea>
                            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                          </div>
                        </div>
                      </div>
                      <!-- section 3 -->
                      <div class="sub3 row">
                        <legend>Section 3</legend>
                        <div class="form-group">
                          <label for="sub3Title" class="col-lg-2 control-label">Title</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="sub3Title" placeholder="e.g. Company Description">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="sub3TextArea" class="col-lg-2 control-label">Content</label>
                          <div class="col-lg-10">
                            <textarea class="form-control textArea" rows="3" id="sub3TextArea"></textarea>
                            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                          </div>
                        </div>
                      </div>
                    </div>
                   </div> <!-- panel ends -->
                  </div>
                  </fieldset>
                 </form> <!-- form ends -->
                </div>
              </div>
              <!-- sidebar -->
              <div class="col-md-3">
               <div class="panel panel-default">
                <div class="panel-body">
                <legend>Settings</legend>
                <ul class="list-group">
                  <li class="list-group-item">
                    <a class="" role="button" data-toggle="collapse" href="#tags" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fa fa-tags"></i> Tags<span class="caret"></span>
                    </a>
                    <div class="collapse" id="tags">
                      <textarea rows="3"></textarea>
                    </div>
                  </li>
                </ul>
                </div>
               </div>
              </div>


  @endsection
@section('script')
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script src="{{asset('plugins/select2/select2.min.js')}}"></script> 
      <script type="text/javascript">
       $(document).ready(function() {
    /*  $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        }); */

      $("#cat_name").select2({
        tags: true,

      });

      });
          // tooltip
          $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip(); 
          });
          // tinymce
          tinymce.init({selector:'textarea.textArea'});
      </script>
  @stop