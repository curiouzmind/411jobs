@extends('master')

@section('styles')
    <link href="https://cdn.datatables.net/r/bs/dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,r-1.0.7,sc-1.3.0/datatables.min.css" rel="stylesheet">
    <link href="{{asset('//cdn.datatables.net/1.10.9/css/dataTables.bootstrap.css')}}" rel="stylesheet">

@stop

@section('nav')
 @include('admin.partials.nav')
@stop

@section('sub-title')
 
@stop

@section('content')
<div class="col-md-2">
              <ul class="list-group nav nav-tabs nav-stacked">
                <li class="active"><a href="#overview" data-toggle="tab"><i class="fa fa-home"></i> Overview</a></li>
                <li><a href="#posts" data-toggle="tab"><i class="fa fa-files-o"></i> Posts</a></li>
                <li><a href="#users" data-toggle="tab"><i class="fa fa-users"></i> Users</a></li>
                <li><a href="#comments" data-toggle="tab"><i class="fa fa-comments"></i> Comments</a></li>
                <li><a href="#post-filters" data-toggle="tab"><i class="fa fa-filter"></i> Post Filters</a></li>
                <li><a href="#settings" data-toggle="tab"><i class="fa fa-cogs"></i> Settings</a></li>
                </ul>
              </div>
              
              <div class="col-md-10">
                <div class="tab-content" id="adminTab">
                  <div id="overview" class="tab-pane fade active in">
                    <div class="row">
                      <legend>Blog Stats</legend>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <h3 class="posts-count text-center"><span class="count">{{$posts->count()}}</span><span class="count-text"><i class="fa fa-files-o"></i> Posts</span></h3>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <h3 class="posts-count text-center"><span class="count">3</span><span class="count-text"><i class="fa fa-users"></i> Users</span></h3>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <h3 class="posts-count text-center"><span class="count">50</span><span class="count-text"><i class="fa fa-comments"></i> Comments</span></h3>
                      </div>
                    </div>
                    <ul class="list-inline">
                      <li class="filters-overview"><span>60</span>Job Categories</li>
                      <li class="filters-overview"><span>4</span>Job Types</li>
                      <li class="filters-overview"><span>10</span>Job Locations</li>
                      <li class="filters-overview"><span>50</span>Job Roles</li>
                    </ul>
                    <div class="row">
                      <legend>Pageview Stats</legend>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <h3 class="posts-count text-center"><span class="count">200</span><span class="count-text">Pageviews today</span></h3>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <h3 class="posts-count text-center"><span class="count">1,000</span><span class="count-text"> Total Pageviews</span></h3>
                      </div>
                    </div>
                    <div class="row">
                      <legend>Social Media Stats</legend>
                      <div class="col-md-12">
                      <ul class="list-inline">
                        <li class="filters-overview blue-dark-bg"><span><i class="fa fa-facebook"></i></span> 506,000 likes</li>
                        <li class="filters-overview red-dark-bg"><span><i class="fa fa-google-plus"></i></span> 48,000 likes</li>
                        <li class="filters-overview blue-light-bg"><span><i class="fa fa-twitter"></i></span> 3,000 followers</li>
                      </ul>
                      </div>
                    </div>
                  </div>
                  <div id="posts" class="tab-pane fade">
                    @include('admin.partials.errors')
                     @include('admin.partials.success')
                    <table id="table_posts" class="display table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Post Title</th>
                                <th>Tags</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Date Posted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($posts as $post)
                            <tr>
                                <td width="35%">{{$post->title}}</td>
                                <td> @foreach($post->tags as $tag)<span> {{$tag->name}}</span>,@endforeach</td>
                                <td>Bolaji Alade</td>
                                <td>{{ $post->active ? 'Published' : 'Draft' }}</td>
                                <td>{{$post->created_at}}</td>
                                <td width="15%"><span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-eye"></span><span class="btn btn-sm fa fa-trash"></span></td>
                            </tr>
                           @endforeach
                        </tbody>                       
                    </table>
                  </div>
                  <div id="users" class="tab-pane fade">
                    <table id="table_users" class="display table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Date created</th>
                                <th>Posts</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="35%">Bolaji Alade</td>
                                <td width="10%">active</td>
                                <td width="20%">2015-10-25</td>
                                <td width="10%">68</td>
                                <td width="25%">
                                  <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                </td>
                            </tr>
                        </tbody>                       
                    </table>
                  </div>
                  <div id="comments" class="tab-pane fade">
                    <table id="table_comments" class="display table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Author</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="25%">Lagbaja</td>
                                <td width="45%">Nice post again and again</td>
                                <td width="10%">2015-10-25</td>
                                <td width="5%">allowed</td>
                                <td width="15%">
                                  <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                </td>
                            </tr>
                        </tbody>                       
                    </table>
                  </div>
                  <div id="post-filters" class="tab-pane fade">
                    <div class="row">
                      <div class="col-md-6 table-responsive">
                        <div class="panel panel-plain">
                         <div class="panel-heading">
                           <h4 class="panel-title">Job Categories</h4>
                         </div>
                         <div class="panel-body">
                          <table id="table_filter_cats" class="display table-hover table-condensed">
                              <thead>
                                  <tr>
                                      <th>Category name</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td width="80%">Information Technology</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="80%">Human Resources</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="80%">Banking & Finance</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                              </tbody>                       
                          </table>
                         </div>
                        </div>
                      </div>
                      <div class="col-md-6 table-responsive">
                        <div class="panel panel-plain">
                         <div class="panel-heading">
                           <h4 class="panel-title">Job Types</h4>
                         </div>
                         <div class="panel-body">
                          <table id="table_filter_type" class="display table-hover table-condensed">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td width="80%">Experienced</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="80%">Graduate</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="80%">Internship</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                              </tbody>                       
                          </table>
                         </div>
                        </div>
                      </div>
                      <div class="col-md-6 table-responsive">
                        <div class="panel panel-plain">
                         <div class="panel-heading">
                           <h4 class="panel-title">Job Locations</h4>
                         </div>
                         <div class="panel-body">
                          <table id="table_filter_loc" class="display table-hover table-condensed">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td width="80%">Lagos</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="80%">Abuja</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="80%">P/Harcourt</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                              </tbody>                       
                          </table>
                         </div>
                        </div>
                      </div>
                      <div class="col-md-6 table-responsive">
                        <div class="panel panel-plain">
                         <div class="panel-heading">
                           <h4 class="panel-title">Job Roles</h4>
                         </div>
                         <div class="panel-body">
                          <table id="table_filter_roles" class="display table-hover table-condensed">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td width="80%">Banking & Finance</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="80%">Information Technology</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="80%">Human resources</td>
                                      <td width="20%">
                                        <span class="btn btn-sm fa fa-pencil"></span><span class="btn btn-sm fa fa-trash"></span>
                                      </td>
                                  </tr>
                              </tbody>                       
                          </table>
                         </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="settings" class="tab-pane fade"><p>hi</p></div>
                </div>
              </div>
            </div> <!-- row ends -->


  @endsection
@section('script')
 <script src="https://cdn.datatables.net/r/bs/dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,r-1.0.7,sc-1.3.0/datatables.min.js"></script>
  <script src="{{asset('plugins/bootstrap-editable/bootstrap-editable.min.js')}}"></script>
      <script type="text/javascript">
          // datatables
          $(document).ready( function () {
              $('#table_posts').DataTable();
              $('#table_users').DataTable();
              $('#table_comments').DataTable();
              $('#table_filter_cats').DataTable({
                'pagingType': 'simple'
              });
              $('#table_filter_type').DataTable({
                'pagingType': 'simple'
              });
              $('#table_filter_loc').DataTable({
                'pagingType': 'simple'
              });
              $('#table_filter_roles').DataTable({
                'pagingType': 'simple'
              });
          });
          // tooltip
          $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip(); 
          });
      </script>
  @stop