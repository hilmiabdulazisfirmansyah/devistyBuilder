<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>MPD | Manajemen Penilaian Digital</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
  <meta content="" name="author" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
  <link href="{{ asset('dapodik/mpd/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('dapodik/mpd/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('dapodik/mpd/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('dapodik/mpd/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <link href="{{ asset('dapodik/mpd/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('dapodik/mpd/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL PLUGINS -->
  <!-- BEGIN THEME GLOBAL STYLES -->
  <link href="{{ asset('dapodik/mpd/assets/global/css/components-rounded.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
  <link href="{{ asset('dapodik/mpd/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- END THEME GLOBAL STYLES -->
  <!-- BEGIN PAGE LEVEL STYLES -->
  <link href="{{ asset('dapodik/mpd/assets/pages/css/login-5.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL STYLES -->
  <!-- BEGIN THEME LAYOUT STYLES -->
  <!-- END THEME LAYOUT STYLES -->
  <!-- END HEAD -->
  <script type="text/javascript" src="{{ asset('dapodik/mpd/js/jquery-2.2.3.min.js') }}"></script>
  <!--<script type="text/javascript" src="js/aclog.js"></script>-->
  <script type="text/JavaScript" src="{{ asset('dapodik/mpd/js/sha512.js') }}"></script>
  <script type="text/JavaScript" src="{{ asset('dapodik/mpd/js/forms.js') }}"></script>

  <body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
      <div class="row bs-reset">
        <div class="col-md-7 bs-reset mt-login-5-bsfix">
          <div class="login-bg" style="background-image:url({{ asset('dapodik/mpd/assets/pages/img/login/bg1.jpg') }})">
            <img class="login-logo" src="{{ asset('dapodik/mpd/images/logo.png') }}" />

          </div>

        </div>

        <div class="col-md-5 login-container bs-reset mt-login-5-bsfix ">

          <div style="padding:10px;">





            <div id="message"> </div>
            <div class="portlet mt-element-ribbon light portlet-fit bordered">
              <div class="ribbon ribbon-left ribbon-clip ribbon-shadow  ribbon-color-info">
                <div class="ribbon-sub ribbon-clip ribbon-left"></div> <h4><b>Login Pengguna MPD</b> | <small class="font-white">MPD SMK - 2019 </small></h4> </div>

                <div class="portlet-title bg-purple-sharp">

                </div>
                <div class="portlet-body">


                  <form action="http://smkaloerwargakusumah.sch.id:3799/lib/process_login.php" method="post" name="login_form">

                    <div class="form-group">
                     <div class="input-group">
                       <div class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                      </div>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna">
                    </div>
                  </div>





                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                      </div>
                      <input type="password" class="form-control form-password" id="password" name="password" placeholder="Kata Sandi">
                      <input type="hidden" class="form-control" id="beban" name="beban" placeholder="beban ..." value="PAKET">

                    </div>
                  </div>


                  <div class="form-group">
                   <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-book"></i>
                    </div>
                    <select class="form-control" id="juknis" name="juknis">
                     <option value="">-- Pilih Juknis Penilaian --</option>
                     <option value="J2017">Juknis Penilaian 2017</option>
                     <option value="J2018" selected>Juknis Penilaian 2018</option>


                   </select>
                   <br>
                 </div>
               </div>

               <div class="form-group">
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-education"></i>
                  </div>
                  <select class="form-control" id="level" name="level">
                    <option value="">-- Pilih Level Pengguna --</option>
                    <option value="Guru">Guru</option>
                    <option value="Admin"  selected>Admin</option>
                    <option value="Siswa" >Siswa</option>


                  </select>
                  <br>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <select class="form-control" id="semester_id" name="semester_id">

                    <option value ="20191">
                    2019/2020 Ganjil      </option>
                    <option value ="20182">
                    2018/2019 Genap      </option>
                    <option value ="20181">
                    2018/2019 Ganjil      </option>
                    <option value ="20172">
                    2017/2018 Genap      </option>
                    <option value ="20171">
                    2017/2018 Ganjil      </option>
                    <option value ="20162">
                    2016/2017 Genap      </option>
                    <option value ="20161">
                    2016/2017 Ganjil      </option>
                    <option value ="20152">
                    2015/2016 Genap      </option>
                    <option value ="20151">
                    2015/2016 Ganjil      </option>
                    <option value ="20142">
                    2014/2015 Genap      </option>
                    <option value ="20141">
                    2014/2015 Ganjil      </option>

                  </select>
                  <br>
                </div>
              </div>



              <div class="form-group">
               <div class="input-group">

                <input type="checkbox" class="form-checkbox"> <span class="font-dark"> Tampilkan Kata Sandi</span>

              </div>
            </div>




            <div class="row">
              <div class="col-xs-8">

                <div class="checkbox">
                  <label>

                    <span class="style1"> </span></label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                 <div class="form-group">
                   <div class="box-tools pull-right">
                     <input type="button" class="btn btn-success"
                     value="Masuk"
                     onclick="formhash(this.form, this.form.password);" />

                   </div>


                 </div>

               </div>

             </div>

           </form>
















         </div>

       </div>





     </div>



   </div>
 </div>
</div>
<!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<script src="assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('dapodik/mpd/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dapodik/mpd/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dapodik/mpd/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dapodik/mpd/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dapodik/mpd/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dapodik/mpd/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('dapodik/mpd/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dapodik/mpd/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dapodik/mpd/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dapodik/mpd/assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('dapodik/mpd/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('dapodik/mpd/assets/pages/scripts/login-5.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>
</body>

</html>
