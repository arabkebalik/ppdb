<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>PPDB SMKN 1 PML | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url()?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">PPDB SMK Negeri 1 Pemalang</div>
            <?php echo form_open('welcome/login','id="form-login"')?>
                <div class="body bg-gray">
                    <span id="form-pesan">
                        
                    </span>
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" id="btn-submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p>Lupa Sandi, silahkan hubungi admin</p>
                </div>
            <?php echo form_close(); ?>

            <div class="margin text-center">
                <span>arabkebalik@gmail.com</span>
            </div>
        </div>
        
        <div id="spinner" style="position: fixed; bottom: 0; right: 0; background: white; border-radius: 5px 0px 0px 5px; padding: 10px 15px; font-size: 16px; z-index: 999999; display: none">
            <img src="<?php echo base_url()?>public/img/ajax-loader.gif" />
        </div
        
        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url()?>public/js/jquery-2.0.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url()?>public/js/bootstrap.min.js" type="text/javascript"></script>        
        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url()?>public/js/upj.js"></script>
    </body>
    
    <script lang="javascript">
        $(document).ready(function(){
            $('#username').focus();
            
            //Form Login            
            $('#form-login').submit(function(){        
                $.ajax({
        			url:"<?php echo site_url()?>/welcome/login",
        			type:"POST",
        			data:$('#form-login').serialize(),
        			cache: false,
        		    success:function(respon){
        		    	var obj = $.parseJSON(respon);
        		        if(obj.status==1){
        		            window.open("<?php echo site_url()?>/dashboard","_self")
        		        }else{
                            $('#form-pesan').html(pesan_err(obj.error));
        		        }
        			}
        		});
        		return false;
        	});
            
            $('#btn-submit').click(function(){
                $('#form-login').submit();
            });
            
            $(document).bind("ajaxSend", function() {
		        $("#spinner").show();
		    }).bind("ajaxStop", function() {
		        $("#spinner").hide();
		    }).bind("ajaxError", function() {
		        $("#spinner").hide();
		    });            
        });
    </script>
</html>