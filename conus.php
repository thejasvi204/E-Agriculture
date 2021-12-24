<!DOCTYPE html>
<html>
<head>
    <title>EAMS</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <style>
     	.navbar-nav > li > a 
            {
                padding-top:25px; 
                padding-bottom:25px;
                border-radius:5px;
                margin: none;
                margin-top: none;
            }
        .navbar 
            {
                min-height:32px; 
                background-color:#212F3C;
                border-radius:0px;
                margin: none;
                margin-top: none;
                margin-bottom: 0;
                border-radius:5px;
                z-index : 9999;
                border: 0;
                padding:4px;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 1px;
                border-radius: 0;
            }#wrapper
            {
                 padding-left: 250px;
                 transition: all 0.4s ease 0s;
            }
.panel > .list-group .list-group-item:first-child {
    /*border-top: 1px solid rgb(204, 204, 204);*/
}
@media (max-width: 767px) {
    .visible-xs {
        display: inline-block !important;
    }
    .block {
        display: block !important;
        width: 100%;
        height: 1px !important;
    }
}
#back-to-bootsnipp {
    position: fixed;
    top: 10px; right: 10px;
}


.c-search > .form-control {
   border-radius: 0px;
   border-width: 0px;
   border-bottom-width: 1px;
   font-size: 1.3em;
   padding: 12px 12px;
   height: 44px;
   outline: none !important;
}
.c-search > .form-control:focus {
    outline:0px !important;
    -webkit-appearance:none;
    box-shadow: none;
}
.c-search > .input-group-btn .btn {
   border-radius: 0px;
   border-width: 0px;
   border-left-width: 1px;
   border-bottom-width: 1px;
   height: 44px;
}


.c-list {
    padding: 0px;
    min-height: 44px;
}
.title {
    display: inline-block;
    font-size: 1.7em;
    font-weight: bold;
    padding: 5px 15px;
}
ul.c-controls {
    list-style: none;
    margin: 0px;
    min-height: 44px;
}

ul.c-controls li {
    margin-top: 8px;
    float: left;
}

ul.c-controls li a {
    font-size: 1.7em;
    padding: 11px 10px 6px;   
}
ul.c-controls li a i {
    min-width: 24px;
    text-align: center;
}

ul.c-controls li a:hover {
    background-color: rgba(51, 51, 51, 0.2);
}

.c-toggle {
    font-size: 1.7em;
}

.name {
    font-size: 1.7em;
    font-weight: 700;
}

.c-info {
    padding: 5px 10px;
    font-size: 1.25em;
}
body{
  background-image: url('bw.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  padding-top:30px;
 /* width:auto;
  height:auto;*/
}
</style>
<script type="text/javascript">
    $(function () {
    /* BOOTSNIPP FULLSCREEN FIX */
    if (window.location == window.parent.location) {
        $('#back-to-bootsnipp').removeClass('hide');
    }
    
    
    $('[data-toggle="tooltip"]').tooltip();
    
    $('#fullscreen').on('click', function(event) {
        event.preventDefault();
        window.parent.location = "http://bootsnipp.com/iframe/4l0k2";
    });
    $('a[href="#cant-do-all-the-work-for-you"]').on('click', function(event) {
        event.preventDefault();
        $('#cant-do-all-the-work-for-you').modal('show');
    })    
    $('#contact-list').searchable({
        searchField: '#contact-list-search',
        selector: 'li',
        childSelector: '.col-xs-12',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});
</script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="padding:20px;" href="login20.php">E-ARICULTURE MANAGEMENT SYSTEM</a>
            </div>
        </div>
    </nav>
</div><br><br><br><br><br>
<div class="row">
        <div class="col-xs-12 col-sm-offset-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Contacts</span>
                    <ul class="pull-right c-controls">
                        <li><a href="#cant-do-all-the-work-for-you" data-toggle="tooltip" data-placement="top" title="comment us"><i class="glyphicon glyphicon-comment"></i></a></li>
                        <!-- <li><a href="#" class="hide-search" data-command="toggle-search" data-toggle="tooltip" data-placement="top" title="Toggle Search"><i class="fa fa-ellipsis-v"></i></a></li> -->
                    </ul>
                </div>
                
                <div class="row" style="display: none;">
                    <div class="col-xs-12">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>
                </div>
                
                <ul class="list-group" id="contact-list">
                    
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="conusimg/chinna.jpg" alt="K.Venkatesh" class="img-responsive img-circle"/>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">K.Venkatesh</span><br/><br>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-map-marker" style="font-size:25px;" data-toggle="tooltip" title="VIGNAN UNIVERSITY"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="visible-xs"> <span class="text-muted"></span><br/></span>
                            <span class="glyphicon glyphicon-earphone" style="font-size:25px;" data-toggle="tooltip" title="8500807568"></span>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:25px;" class="glyphicon glyphicon-envelope" data-toggle="tooltip" title="chinnakadiyala.1@gmail.com"></span>
                            <span class="visible-xs"> <span class="text-muted"></span><br/></span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="conusimg/cockonda.jpg" alt="G.Akhil" class="img-responsive img-circle"/>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">G.Akhil</span><br/><br>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-map-marker" style="font-size:25px;" data-toggle="tooltip" title="VIGNAN UNIVERSITY"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="visible-xs"> <span class="text-muted"></span><br/></span>
                            <span class="glyphicon glyphicon-earphone" style="font-size:25px;" data-toggle="tooltip" title="8919464834"></span>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:25px;" class="glyphicon glyphicon-envelope" data-toggle="tooltip" title="akhil134088099@gmail.com"></span>
                            <span class="visible-xs"> <span class="text-muted"></span><br/></span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="cant-do-all-the-work-for-you" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding-top: 100px;">
        <div class="modal-dialog modal-sm-12">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">COMMENT US</h4>
                </div>
                <div class="modal-body">
                    <form action="conus1.php" method="post" class="form-horizontal">
                        <label class="col-sm-3 control-label">Name:</label>
                        <div class="col-sm-7">
                            <input type="text" name="name" class="form-control" style="height:40px;" placeholder="name">
                        </div></br></br></br></br>
                        <label class="col-sm-3 control-label">Phone No:</label>
                        <div class="col-sm-7">
                            <input type="text" name="phno" class="form-control" style="height:40px;" placeholder="phone number">
                        </div></br></br></br></br>
                        <label class="col-sm-2 control-label">Comment:</label>
                        <div class="col-sm-9">
                            <textarea  rows="5" name="comment" class="form-control" required="required"></textarea>
                        </div></br></br></br><br></br></br></br><br>
                        <div class="col-sm-6 col-sm-offset-5">
                            <input type="submit" id="submit" name="submit" Value="submit" class="btn btn-primary">
                        </div></br></br></br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>