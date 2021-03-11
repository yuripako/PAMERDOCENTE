
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pamer Virtual</title>
    <link href="/pamervirtual/favicon.png" type="image/x-icon" rel="icon"/><link href="/pamervirtual/favicon.png" type="image/x-icon" rel="shortcut icon"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" type="text/css" href="/pamervirtual/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome 4.7.0 -->
    <link rel="stylesheet" type="text/css" href="/pamervirtual/plugins/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="/pamervirtual/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" type="text/css" href="/pamervirtual/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" type="text/css" href="/pamervirtual/plugins/datatables/dataTables.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/pamervirtual/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="/pamervirtual/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="/pamervirtual/css/jquery.mCustomScrollbar.css" />
    <!-- jQuery 2.2.0 -->
    <script src="/pamervirtual/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!--<script src="/pamervirtual/js/jslibrerias/jquery.mask.js" type="text/javascript"></script>-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    
    <style>
        .date {
            padding-left: 8px !important;
            padding-right: 8px !important;
            font-size: 12px !important;
            text-align: left !important;
            height: 30px !important;
            width: 150px !important;
            display: inline-block !important;
            margin-bottom: 5px !important;
            color: black !important;
            /*max-width: 150px;*/
        }

        select {
            text-overflow: ellipsis;
            padding: 6px 12px;
            padding-left: 5px !important;
            padding-right: 5px !important;
            font-size: 12px !important;
            text-align: left !important;
            height: 30px !important;
            width: 150px !important;
            display: inline-block;
            /*!important*/
            /*margin-bottom: 5px !important; */
            color: black !important;
            white-space: nowrap;
            cursor: pointer;
            vertical-align: middle;
            margin-top: -4px;

            /*max-width: 150px;*/
        }

        /* CSS pantalla 768px o superior */
        @media (min-width: 768px) {
            .date {
                text-align: left !important;
                /*max-width: 150px;*/
                height: 30px !important;
                width: 78px !important;
                display: inline-block !important;
                margin-bottom: 5px !important;
                color: black !important;
            }

            select {
                text-align: left !important;
                /*max-width: 150px;*/
                height: 30px !important;
                width: auto !important;
                display: inline-block;
                /*margin-bottom: 5px !important; */
                color: black !important;
            }

            .col-md-3 {
                display: inline-block;
                width: auto;
                padding-left: 5px;
                padding-right: 5px;
            }
        }

        .mCSB_container_wrapper {
            position: absolute;
            height: auto;
            width: auto;
            overflow: hidden;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin-right: 20px;
            margin-bottom: 30px;
        }

        .mCSB_container_wrapper>.mCSB_container {
            padding-right: 0px;
            padding-bottom: 30px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .col-md-3 {
            display: inline-block;
            width: auto;
            padding-left: 5px;
            padding-right: 5px;
        }

        .scrollToTop {
            background-color: rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            box-shadow: 0 0 1px #FFF;
            color: #FFF;
            display: none;
            padding: 5px 12px;
            position: fixed;
            right: 15px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            top: 85%;
            transition: all 0.3s ease 0s;
            font-size: 1.1em;
        }

        .scrollToTop:hover {
            text-decoration: none;
            cursor: pointer;
        }

        .nav-tabs-custom>.tab-content {
            background: #fff;
            padding: 10px;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border: 1px solid #ddd;
        }

        .nav-tabs-custom>.nav-tabs>li.active {
            border-top-color: #3c8dbc;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
        }

        li:hover {
            cursor: pointer;
        }

        .header .navbar-inner {
            background-image: none !important;
            background-color: #1f1f1f !important;
        }

        .header .nav li.dropdown .dropdown-toggle i {
            color: #808080 !important;
        }

        /*table.dataTable {
                font-size: 10px;
                border-collapse: separate;
                border-spacing: 0;
            }*/
        table.dataTable thead th,
        table.dataTable thead td {
            padding: 5px 5px;
            border-bottom: 1px solid #111;
        }

        table.dataTable tbody td {
            padding: 5px 5px;
        }

        .tablePie {
            font-size: 13px;
            color: #222222;
            font-weight: bold;
            text-align: right;
            background: #E8C896;
        }

        .tableSum {
            font-size: 13px;
            color: #222222;
            text-align: center;
            background: #E8C896;
        }

        table,
        th,
        td {
            border: 1px solid #f2f2f2;
        }

        /*.ui-dialog-titlebar-close {
                visibility: hidden;
            }*/
        .imgJava:hover {
            text-decoration: none;
            cursor: pointer;
            -webkit-transition: all 0.1s ease-in-out;
            -moz-transition: all 0.1s ease-in-out;
            -o-transition: all 0.1s ease-in-out;
            -ms-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
            opacity: .6;
            filter: 'alpha(opacity=60)';
        }

        .frame100 {
            overflow: hidden;
            overflow-x: hidden;
            overflow-y: hidden;
            height: 100%;
            width: 100%;
            position: relative;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
        }

        .framecontent {
            width: 100% !important;
            margin: 0px auto !important;
        }

        /* CSS pantalla 320px o superior */
        @media (min-width: 320px) {
            .framecontent {
                width: 100% !important;
                margin: 0px auto !important;
            }
        }

        /* CSS pantalla 768px o superior */
        @media (min-width: 768px) {
            .framecontent {
                width: 70% !important;
                margin: 0px auto !important;
            }
        }

        .content-wrapper,
        .right-side {
            min-height: 100%;
            z-index: 800;
        }

        .divisionTitle {
            width: 50%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .nav>li>a:hover,
        .nav>li>a,
        .nav>li>a {
            color: #444;
            background: #f7f7f7;
        }

        .esptext {
            width: 100%;
            font-size: 12px;
        }

        .ui-tooltip,
        .arrow:after {
            background: rgb(0, 46, 77);
            /*#5ed0f2*/
        }

        .ui-tooltip {
            padding: 10px 15px;
            color: white;
            /*#222222*/
            ;
            border-radius: 10px;
            border: none;
            font: 11px "Helvetica Neue", Sans-Serif;
            /*text-transform: uppercase;*/
            box-shadow: 0 0 7px black;
        }

        .arrow {
            width: 70px;
            height: 16px;
            overflow: hidden;
            position: absolute;
            left: 50%;
            margin-left: -35px;
            bottom: -16px;
        }

        .arrow.top {
            top: -16px;
            bottom: auto;
        }

        .arrow.left {
            left: 20%;
        }

        .arrow:after {
            content: "";
            position: absolute;
            left: 20px;
            top: -20px;
            width: 25px;
            height: 25px;
            box-shadow: 6px 5px 9px -9px black;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .arrow.top:after {
            bottom: -20px;
            top: auto;
        }

        table,
        th,
        td {
            border: 1px solid rgb(42, 53, 82);
        }

        .table>thead>tr>th {
            padding: 4px 5px;
        }

        .table>thead>tr>td,
        .table>tbody>tr>td,
        .table>tfoot>tr>td {
            /*border-top: 0.1px solid rgb(42, 53, 82);*/
            border-bottom: 0.1px solid #ddd;
            border-right: 0.1px solid #ddd;
            border-left: 0.1px solid #ddd;
            padding: 3px 5px;
            background: white;
        }

        table.dataTable thead th {
            padding: 4px 5px;
            border: 1px solid #f4f4f4;
        }
        
        .loading--all-screen{
            background: rgba(255,255,255,.2);
            position: fixed;
            height: calc(100vh);
            width: 100%;
            z-index: 7;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="skin-blue sidebar" style="background: transparent; padding-bottom: 0px;">

    <div class="loading--all-screen" style="display: none;">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div> 
    </div>

    <!-- Site wrapper -->
    <div class="wrapper" style="background: transparent none repeat scroll 0% 0%;">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-left: 0px !important; padding-top: 0px; background: transparent none repeat scroll 0% 0%;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                            </section>

            <!-- Main content -->
            <section class="content" style="padding-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>mérito general</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<style>
	  
	  body {
  background: linear-gradient(to bottom, #8c7a7a 0%, #af877c 65%, #af877c 100%) fixed;
  background: url("../img/bgdatos.png") no-repeat center center fixed!important;
  background-size: cover!important;
  font: 14px/20px "Lato", Arial, sans-serif;
 
  margin-top: 0px;
  scrollbar-face-color:fuchsia;

}



#meritoalu tr td{
    text-transform: lowercase;
}

#meritoalu tr td:first-letter {
    text-transform: uppercase;
}
#data tr td {
    text-transform: lowercase;
}

#data tr td:first-letter {
    text-transform: uppercase;
} 

.table {
       border-bottom:0px !important;
}
.table th, .table td {
       border: 1px !important;
}
.fixed-table-container {
       border:0px !important;
}

table, th, td {
    border: 1px solid #ccc;
}

/* width */
::-webkit-scrollbar {
	width: 7px;
    height: 7px;
  
}
 
/* button */
::-webkit-scrollbar-button {
    background: #ccc;
    
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #005afe;
    border-radius: 1em;
}
 
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #005afe;
   
}
 
/* Track */
::-webkit-scrollbar-track {
    background: #ccc;
   
}
 
/* The track NOT covered by the handle.
::-webkit-scrollbar-track-piece {
    background: #000;
}
 
/* Corner */
::-webkit-scrollbar-corner {
    background: #ccc;  
}
 
/* Resizer */
::-webkit-resizer {
    background: #ccc;  
}
.resizeformc {
width: 450px;
height:200px;
}

#datoalu  #minu{
    text-transform: lowercase;
}

#datoalu  #minu:first-letter {
    text-transform: uppercase;
}



.form-group label {
            color: #10194E;
            font-size: 10px;
        }
        
        .form-group i {
            color: #5600FF;
            font-size: 24px;
        }
        
        .form-group select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            position: relative;
            color: #10194E !important;
            width:100% !important;
            height: 40px !important;

        }
        
        .form-group input {
            color: #10194E;
        }
        
        .form-control {
            height: 40px;
            border-radius: 10px;
        }
        
        .form-group {
            width: 100%;
            position: relative;
        }
        
        .form-group i {
            position: absolute;
            top: 32px;
            right: 7px;
            display: block;
        }
        
        .buscar-contenido i {
            font-size: 20px !important;
            position: absolute;
            top: 10px !important;
            right: 10px;
            display: block;
            cursor: pointer;
        }
    
		th, td {
	white-space: nowrap;
}

.first-col {
    position: absolute;
	width: 5em;
	margin-left: -5em;
}

.table-wrapper {
    overflow-x: scroll;
	width: 600px;
	margin: 0 auto;
}

.table-wrapper          { overflow-y: auto; height: 100px; }
.table-wrapper thead th { position: sticky; top: 0; }

/* Just common table stuff. Really. */
table  { border-collapse: collapse; width: 100%; }
th, td { padding: 8px 16px; }
th     { background:#fff; }     

/* INICIO BARRA */ 
 
.progress-bar {
    float: left;
    width: 0%;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: #444;
    text-align: center;
    background-color: #ffcd00;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    -webkit-transition: width .6s ease;
    -o-transition: width .6s ease;
    transition: width .6s ease;
}
.progress {
    height: 30px;
    margin-bottom: 20px;
    overflow: hidden;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
}
/* FIN DE BARRA*/ 
  </style>
  </head>
  <body>
  

<div class="container-fluid">


<div class="row"     style="padding: 10px; margin-bottom: 10px;">
<a href="/pamervirtual" style="color: #000;">INICIO /</a> 
                         <a href="#" style="color: #000;">RENDIMIENTO ACADÉMICO /</a> 
                        
                          <a href=#" style="color: #005afe;font-weight: bold;">CARACTERÍSTICAS DEL SALÓN</a>
      </div>


	  <div class="row" style="border-bottom: 7px solid #005afe ;border-radius: 1em; background-color: #ffffff;box-shadow: 0px 15px 20px; padding-top: 20px; padding-left: 20px; padding-right: 20px; padding-bottom: 5px; margin-bottom: 20px;">
			
			<div class="row" style="padding-bottom: 10px;">
		 <div class="col-md-2">

		 <div class="form-group">
					<label for="alumno" style="   color:#04043e;font-family: 'Source Sans Pro'; font-size: 11px;">SALÓN</label>
					<select name="" id='combosalon' onchange='loadinfo()' class="form-control"  >
						
					</select>
					<i class="glyphicon glyphicon-chevron-down" style="    background-color: #005afe;color: #fff;padding: 5px;
						border-radius: 1em;font-size: 15px; margin-top: 3px;"></i>
		</div>
			
		 </div>
		
		 <div class="col-md-1">
              <label for="exampleInputEmail1" style="  color:#04043e;font-family: 'Source Sans Pro'; font-size: 11px;PADDING-BOTTOM: 10PX;">CICLO</label><br>
			  <span id="cciclo"></span>
         </div>
         <div class="col-md-2">
              <label for="exampleInputEmail1" style="   color:#04043e;font-family: 'Source Sans Pro'; font-size: 11px;PADDING-BOTTOM: 10PX;">LÍNEA</label><br>
			  <span id="llinea"></span>
		 </div>
	
	</div>
		

</div>


  
<!-- INICIO LOS CUADROS-->
<div class="row" style="height: 500px;width: 103%;" >
	
 
 <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">

			<div class="row " style="width: 100%; border-bottom: 7px solid #17e6a7 ;border-radius: 1em; background-color: #ffffff;box-shadow: 0px 15px 30px; padding-bottom: 10px;">

				<div style=" border-bottom: 1px solid  #ddd; font-size: 20px;
					padding-left: 30px;color:#04043e;
					font-weight: bold;padding-top: 22px;font-family: -webkit-body;    padding-left: 20px;    padding-bottom: 20px;">
				    Distribución por área/carrera
				</div>
					
				<!-- INICIO TABLA-->
				<div class="table-wrapper" style="height:433px; overflow:auto; width: 100%;" >
				<table class="table table-striped" id="tableprod">
				<thead>
					<tr style="color:#04043e;font-family: 'Source Sans Pro';    border-top: 1px solid #fff;">               
							<th style="padding-left: 20px;" >AREAS/CARRERAS</th>
							<th >N°</th>
							<th >%</th>
					
					</tr>
				</thead>
				<tbody id="resareacarrera">

				</tbody>
				</table>
				</div>
				<!-- FIN DE CICLO-->

			</div>
 </div>
 
 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		 
		<div class="row " style="width: 100%; border-bottom: 7px solid #9435f4 ;border-radius: 1em; background-color: #ffffff;box-shadow: 0px 15px 30px; padding-bottom: 10px;">

		<div style=" border-bottom: 1px solid  #ddd; font-size: 20px;
					padding-left: 30px;color:#04043e;
					font-weight: bold;padding-top: 22px;font-family: -webkit-body;    padding-left: 20px;    padding-bottom: 20px;">
				    Tiempo de preparación
				</div>
			
            
		<!-- INICIO TABLA-->
		<div class="table-wrapper" style="height:433px; overflow:auto; width: 100%;" >
		  <div style="padding: 20px; padding-top: 40px;">
          
          <div id="barra1">
		
          </div>
          <div id="barra2">
		
        </div>
        <div id="barra3">
		
        </div>
        <div id="barra4">
		
        </div>

	


		  </div>					
		</div>
		
		<!-- FIN DE CICLO-->

		</div>

 </div>

 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			 
			 
			<div class="row " style="width: 100%; border-bottom: 7px solid #ffcd00 ;border-radius: 1em; background-color: #ffffff;box-shadow: 0px 15px 30px; padding-bottom: 10px;">

			<div style=" border-bottom: 1px solid  #ddd; font-size: 20px;
					padding-left: 30px;color:#04043e;
					font-weight: bold;padding-top: 22px;font-family: -webkit-body;    padding-left: 20px;    padding-bottom: 20px;">
				    Condición de alumno
				</div>
				
			<!-- INICIO TABLA-->
			<div class="table-wrapper" style="height:433px; overflow:auto; width: 100%;" >
			

		        	<div id="piechart" style="width: 95%; height: 95%;"></div>


			</div>
			<!-- FIN DE CICLO-->

			</div>

 </div>
  

 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top: 30px;" id="cuadrobajo">
		
 <div style="height: 120px;">
	<div class="row " style="width: 100%; border-bottom: 7px solid #04eaff ;border-radius: 1em; background-color: #ffffff;box-shadow: 0px 15px 30px; padding-bottom: 30px;">
	
	<div style="  font-size: 20px;
			padding-left: 30px;color:#04043e;
			font-weight: bold;padding-top: 22px;font-family: -webkit-body;    padding-left: 20px;    padding-bottom: 20px;">
			<div class="col-md-10 " >Alumnos seleccionados</div>
			<div class="col-md-2 " style="text-align: left;" ><div id="numerocantidad"></div></div>
		</div>
		
	<!-- INICIO TABLA-->

	<!-- FIN DE CICLO-->

	</div>

</div>
			 
		
 
  </div>


</div>
<!-- FIN DE LOS CUADROS-->





</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



</body>
</html>







            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    <a class="scrollToTop" style="display: none;"><i class="fa fa-angle-up "></i></a>
    <script src="/pamervirtual/js/jslibrerias/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/mask.min.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/jquery.dataTables.min.js"></script>
    <!--<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>-->
    <script src="/pamervirtual/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/dataTables.buttons.min.js"></script>
    <script src="/pamervirtual/js/jslibrerias/buttons.html5.min.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/buttons.print.min.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/jszip.min.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/pdfmake.min.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/jquery.base64.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/jquery.btechco.excelexport.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/highcharts.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/highchartsexport.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/jslibrerias/jquery.nicescroll.js" type="text/javascript"></script>

    <script type="text/javascript">
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-92981230-1', 'auto');
        ga('send', 'pageview');

        var usuario = 'juan.castillo@pamer.pe';
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
        $('.notaint').mask("00"); //.mask("00"/*, {placeholder: "20"}*/); , {reverse: true}
        $('.date').mask("00-00-0000" /*, {placeholder: "20"}*/ );
        $(document).ready(function() {
            $("html").niceScroll({
                /*cursoropacitymin:1, */
                styler: "fb",
                background: '#002e4d',
                cursorcolor: "#3c8dbc",
                cursorwidth: '12',
                cursorborderradius: '10px',
                spacebarenabled: false,
                cursorborder: '0',
                zindex: '1000'
            });

            //Click event to scroll to top
            $('.scrollToTop').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>
    <!--<script src="/pamervirtual/js/jslibrerias/components/core-min.js" type="text/javascript"></script>-->
    <!--<script src="/pamervirtual/js/jslibrerias/components/enc-base64-min.js" type="text/javascript"></script>-->
    <!--<script src="/pamervirtual/js/jslibrerias/components/enc-utf16-min.js" type="text/javascript"></script>-->
    <script src="/pamervirtual/js/jslibrerias/rollups/aes.js" type="text/javascript"></script>
    <script src="/pamervirtual/js/librerias/pages.min.js?0" type="text/javascript"></script>
    <!-- Css -->    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Bootstrap 3.3.6 -->
    <script src="/pamervirtual/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/pamervirtual/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick
        <script src="/pamervirtual/plugins/fastclick/fastclick.js"></script>-->
    <!-- AdminLTE App
        <script src="/pamervirtual/dist/js/app.min.js?1"></script> -->

        <script src="/pamervirtual/js/jquery-ui.js" type="text/javascript"></script>
        <!-- Java --><script src="../js/librerias/carateristicas.js?56"></script>        <script type="text/javascript" src="/pamervirtual/js/jslibrerias/fingerprint2.js"></script>
        <script>
            new Fingerprint2().get(function (result, components) {
                $("#hidFingerprintjs2").val(result);
                ga('send', {
                    hitType: 'event',
                    eventCategory: 'FingerPrint',
                    eventAction: usuario,
                    eventLabel: result
                });

                var strJSON = {};
                strJSON.usu = usuario;
                strJSON.fin = result;
                strJSON.url = location.pathname;
                strJSON.data = JSON.stringify(components);

                var strUrl = "/pamervirtual/globals/mantto/1";
                var aParam = segenNegocios(JSON.stringify(strJSON));
                $.post(strUrl, {"objJSON": aParam}, null, "html")
                        .done(function (data, textStatus, jqXHR) {
                            //alert(JSON.stringify(data));
                        })
                        .fail(function (jqXHR, textStatus, errorThrown) {
                            //alert(JSON.stringify(jqXHR));
                        })
                        .always(function () {
                        });
                //console.log(components); // an array of FP components
            });
        </script>
    </body>
</html>
