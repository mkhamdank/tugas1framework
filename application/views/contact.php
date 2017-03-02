<!DOCTYPE html>
<html lang="">
       <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Contact</title>

         <!-- Bootstrap CSS -->
         <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
       </head>
       <body>
        <div class="container">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <nav class="navbar navbar-default" role="navigation">
                          <!-- Brand and toggle get grouped for better mobile display -->
                           <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                   <span class="sr-only">Toggle Navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                  </button>
                                  <a class="navbar-brand" href="<?php echo site_url(); ?>/home">Blog Mahasiswa</a>
                           </div>

                          <!-- Collect the nav links, forms, and other content for toggling -->
                           <div class="collapse navbar-collapse navbar-ex1-collapse">
                                  <ul class="nav navbar-nav">
                                   <li><a href="<?php echo site_url(); ?>/home">Home</a></li>
                                   <li><a href="<?php echo site_url(); ?>/about">About</a></li>
                                   <li class="active"><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
                                  </ul>
                                  <ul class="nav navbar-nav navbar-right">

                                   <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                     <li><a href="#">Action</a></li>
                                     <li><a href="#">Another action</a></li>
                                     <li><a href="#">Something else here</a></li>
                                     <li><a href="#">Separated link</a></li>
                                    </ul>
                                   </li>
                                  </ul>
                           </div><!-- /.navbar-collapse -->
                                </nav>


              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <h1>Halaman Contact</h1>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive">
                      <form action="<?php echo site_url(); ?>/home" method="POST" role="form">
                             <legend>Form Contact</legend>

                             <div class="form-group">

                              <table class="table table-hover">

                                 <tr>
                                   <td><label for="">Nama</label></td>
                                 </tr>
                                 <tr>
                                   <td><input type="text" class="form-control" id="" placeholder="Nama" name="nama"></td>
                                 </tr>
                                 <tr>
                                   <td><label for="">Email</label></td>
                                 </tr>
                                 <tr>
                                   <td><input type="text" class="form-control" id="" placeholder="Email" name="email"></td>
                                 </tr>
                                 <tr>
                                   <td><label for="">Pesan</label></td>
                                 </tr>
                                 <tr>
                                   <td><textarea name="pesan" rows="3" cols="80" class="form-control" placeholder="Pesan"></textarea></td>
                                 </tr>

                              </table>

                             </div>



                             <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                    </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
          </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <!-- Your own javascript -->
  <script src="js/main.js"></script>
       </body>
</html>
