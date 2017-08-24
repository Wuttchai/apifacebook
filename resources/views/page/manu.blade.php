

      <!-- /.top-header -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-8">
                        <div class="logo">
                            <h1><a href="#">API SHOP</a></h1>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-4">
                        <div class="main-menu">
                            <a href="#" class="toggle-menu">
                                <i class="fa fa-bars"></i>
                            </a>
                            <ul class="menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Catalogs</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Policies</a></li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-7">
                        <div class="list-menu">
                            <ul>
                                <li><a href="/">Page</a></li>

                                <li><a href="/Product">Products</a></li>

                            </ul>
                        </div> <!-- /.list-menu -->

                    </div>
<div class="col-md-6 col-sm-7">
  <div class="TEST">

  <div class="input-group" id="adv-search">
                 <input type="text" class="form-control" placeholder="Search for snippets" />
                 <div class="input-group-btn">
                     <div class="btn-group" role="group">
                         <div class="dropdown dropdown-lg">
                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                             <div class="dropdown-menu dropdown-menu-right" role="menu">
                                 <form class="form-horizontal" role="form">
                                   <div class="form-group">
                                     <label for="filter">Filter by</label>
                                     <select class="form-control">
                                         <option value="0" selected>All Snippets</option>
                                         <option value="1">Featured</option>
                                         <option value="2">Most popular</option>
                                         <option value="3">Top rated</option>
                                         <option value="4">Most commented</option>
                                     </select>
                                   </div>
                                   <div class="form-group">
                                     <label for="contain">Author</label>
                                     <input class="form-control" type="text" />
                                   </div>
                                   <div class="form-group">
                                     <label for="contain">Contains the words</label>
                                     <input class="form-control" type="text" />
                                   </div>
                                   <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                 </form>
                             </div>
                         </div>
                         <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                     </div>
                 </div>
             </div>
             </div>
           </div>
           <div class="col-md-3 col-sm-2.5">
           <div class="notification">
             <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> <?php if (Session::get('User_Name') == '') {
      echo "Login";
    }else {
    echo Session::get('User_Name');
    }
    ?>
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
        <li><a href="#">JavaScript</a></li>
      </ul>
    </div>
           </div>

       </div>
                    </div> <!-- /.col-md-6 -->

                   <!-- /.col-md-6 -->
                </div>


                          <script src= "{{ asset('js/jquery-1.10.1.min.js') }}"></script>
                        <script src="{{ asset('js/jquery.easing-1.3.js') }} "></script>
                        <script src="{{ asset('js/bootstrap.js') }}"></script>
                        <script src="{{ asset('js/manuplugin.js') }}"></script>
                        <script src="{{ asset('js/manu.js') }}"></script>
