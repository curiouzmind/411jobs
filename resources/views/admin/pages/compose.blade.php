@extends('master')
@section('styles')
<link href="{{asset('plugins/select2/select2.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker.min.css">
@stop
@section('nav')
 @include('admin.partials.nav')
@stop

@section('sub-title')
 <div class="col-md-12 post-title-bar">
               
                <div class="panel panel-default">
                  <div class="panel-body">
                    
                    
                  </div>
                </div>
            
   </div>
@stop

@section('content')
<div class="col-md-9">
                <div class="new-post-content">
                 <form class="form-horizontal" role="form" method="POST" action="/admin/">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <fieldset>
                  <!-- company name -->
                  <div class="panel panel-default">
                     @include('admin.partials.errors')
                     @include('admin.partials.success')

                    <div class="panel-body">
                        <label for="Title" class="col-lg-2 control-label p0-left">Title</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="title" id="postTitle" placeholder="Job Title" value="{{old('title')}}">
                        </div>
                    </div>

                    <div class="panel-body">
                        <label for="company" class="col-lg-2 control-label p0-left"><i class="fa fa-building"></i> Company Name</label>
                        <div class="col-lg-10">
                          {!!Form::select('company', $comp,null,['class'=>'form-control', 'id'=>'comp',
                                 'placeholder'=>'Select/Create Company Name']) !!}
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
                            <label for="category" class="col-lg-2 control-label">Sector</label>
                            <div class="col-lg-10">
                              {!!Form::select('category', $cat,null,['class'=>'form-control', 'id'=>'category',
                                 'placeholder'=>'Select Category']) !!}
                            </div>
                          </div>    
                              
                          <div class="form-group">
                            <label for="posted" class="col-lg-2 control-label">Posted</label>
                            <div class="col-lg-10">
                              <input class="datepicker" data-date-format="dd-mm-yyyy" placeholder="12-10-2015">
                            </div>
                          </div>  
                           <div class="form-group">
                            <label for="location" class="col-lg-2 control-label">Location</label>
                            <div class="col-lg-10">
                              {!!Form::select('location', $stateList, null, ['class'=>'form-control',
                                'id'=>'stateList','placeholder'=>'select state']) !!}
                            </div>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="role" class="col-lg-2 control-label">Role</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="role" id="role" value="{{old('role')}}" placeholder="e.g. Banker">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Closing</label>
                            <div class="col-lg-10">
                              <input class="datepicker2" data-date-format="dd-mm-yyyy" name="closing"  placeholder="12-10-2015">
                            </div>
                          </div>    
                          <div class="form-group">
                            <label for="companyName" class="col-lg-2 control-label">Salary</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="salary" name="salary" value="{{old('salary')}}" placeholder="e.g. #200,000">
                            </div>
                          </div>  
                         
                        </div>
                      </div>
                      <!-- section 1 -->
                      <div class="sub1 row">
                        <legend>Section 1 (Job Description)</legend>
                        <div class="form-group">
                          <label for="sub1TextArea" class="col-lg-2 control-label">Content</label>
                          <div class="col-lg-10">
                            <textarea class="form-control textArea" name="job_description" value="{{old('job_description')}}" rows="3" id="sub1TextArea"></textarea>
                          </div>
                        </div>
                      </div>
                      <!-- section 2 -->
                      <div class="sub2 row">
                        <legend>Section 2 (Desired Experience & Skills)</legend>
                      
                        <div class="form-group">
                          <label for="sub2TextArea" class="col-lg-2 control-label">Content</label>
                          <div class="col-lg-10">
                            <textarea class="form-control textArea" name="job_experience" value="{{old('job_experience')}}" rows="3" id="sub2TextArea"></textarea>
                          </div>
                        </div>
                      </div>
                      <!-- section 3 -->
                      <div class="sub3 row">
                        <legend>Section 3 (Company Description)</legend>
                        <div class="form-group">
                          <label for="sub3TextArea" class="col-lg-2 control-label">Content</label>
                          <div class="col-lg-10">
                            <textarea class="form-control textArea" name="company_description" value="{{old('company_description')}}" rows="3" id="sub3TextArea"></textarea>

                          </div>
                        </div>

                         <div class="form-group">
                            <label for="location" class="col-lg-2 control-label">Add Tags</label>
                            <div class="col-lg-10">
                              {!!Form::select('tags[]', $tags, null, ['class'=>'form-control','multiple',
                                'id'=>'tags']) !!}
                            </div>
                          </div>

                        <div class="form-group">
                      <ul class="list-inline">
                        <input type="submit" name="publish" class="btn btn-danger"  value="Publish" />
                        <input type="submit" name="save" class="btn btn-default" value="Save" />
                      </ul>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.js"></script>
      <script type="text/javascript">
       $(document).ready(function() {

      $("#category").select2({
        tags: true,
        placeholder:'select/create Category',

      }); 
   
      $("#stateList").select2({
        placeholder:'Select State',
      });

       $("#comp").select2({
        tags:true,
        placeholder:'Select/create Company name',
      });

        $("#tags").select2({
        tags: true,
        placeholder:'select/create Tags',

      }); 
   
    });
        $(document).ready(function() {

      $('.datepicker').datepicker({

      });

      $('.datepicker2').datepicker({

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