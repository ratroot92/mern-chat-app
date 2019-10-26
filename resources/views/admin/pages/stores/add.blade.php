@include('admin.includes.header')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Categories</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add new store</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
<div id="app">
        @include('flash-message')


        @yield('content')
</div>
           <form class="form-horizontal form-label-left" method="POST" action="{{url('/admin/addCategories')}}"  enctype="multipart/form-data" id="addcategory_form" name="addcategory_form" >

                  @csrf





                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        @if ($errors->has('name'))
                      <div style="color:red;">
                        @foreach ($errors->get('name') as $errormessage) 
                          {{ $errormessage }}
                           @endforeach
                      </div> 
                        @endif
                      </div>




                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Category Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea name="description" style="height: 93px;width: 464px;"></textarea>
                        </div>
                         @if ($errors->has('description'))
                      <div style="color:red;">
                        @foreach ($errors->get('description') as $errormessage) 
                          {{ $errormessage }}
                           @endforeach
                      </div> 
                        @endif
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Category Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file" name="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" /required>
                        </div>
                       @if ($errors->has('file'))
                      <div style="color:red;">
                        @foreach ($errors->get('file') as $errormessage) 
                          {{ $errormessage }}
                           @endforeach
                      </div> 
                        @endif
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Category Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="status" id="status" class="form-control" required>
                          <option value="">Select Status</option>
                          <option value="1">Active</option>
                          <option value="0">In Active</option>
                        </select>
                        </div>
                         @if ($errors->has('status'))
                      <div style="color:red;">
                        @foreach ($errors->get('status') as $errormessage) 
                          {{ $errormessage }}
                           @endforeach
                      </div> 
                        @endif
                      </div>
                     
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" id="addbtn">Add</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

   @include('admin.includes.footer')