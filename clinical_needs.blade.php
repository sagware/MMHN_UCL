<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Challeng/Need |Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/animate.min.css" rel="stylesheet" />
	<link href="/assets/css/style.min.css" rel="stylesheet" />
	<link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/assets/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
	<link href="/assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	
	
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @include("admin.analytics")
    <!-- SummerNote Javascript Library -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	
    <script>
        $(document).ready(function () {
            /** Initialize SummerNote Javscript For Textarea */
            $('#message').summernote({
               placeholder: 'Enter the post body',
                height: '300px',
				styleTags: [
    'p',
        { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
        'pre', 'h1', 'H2', 'H3', 'H4', 'Heading5', 'Heading6'
	],
  
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
				  ['insert', ['link', 'picture']],
				  ['view', ['codeview', 'help']],
				  ['somegroup', ['style.H2', 'style.H3','style.Heading4','style.Heading5','style.Heading6' ]]
                ]
           
            });
        });
    </script>
	
	
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
      selector: 'textarea',  // change this value according to your HTML
	 plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
	paste_data_images: true,
	  a_plugin_option: true,
	  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
	  a_configuration_option: 400,
  
  menu: {
    file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
    edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
    view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
    insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
    format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
    tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
    table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
    help: { title: 'Help', items: 'help' }
  }
      });
	  
	  
    </script>
	
	
<!--  
 TINYMCE_DEFAULT_CONFIG = {
"plugins": "advlist,autolink,lists,link,image,imagetools,charmap,print,preview,anchor,"
"searchreplace,visualblocks,code,fullscreen,insertdatetime,media,table,paste,"
"code,help,wordcount,spellchecker",
"toolbar": "undo redo | formatselect | "
"bold italic backcolor | alignleft aligncenter "
"alignright alignjustify | bullist numlist outdent indent | "
"removeformat | help",
"paste_data_images": "true"
}
-->	
<!--Auto complete-->
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		
		<script src="/assets/jquery.tagsinput-revisited.js"></script>
		<link rel="stylesheet" href="/assets/jquery.tagsinput-revisited.css" />
		
		<style>
			* {
				box-sizing: border-box;
			}
		
			html {
				height: 100%;
				margin: 0;
			}
			
			body {
				min-height: 100%;
				font-family: sans-serif;
				padding: 20px;
				margin: 0;
			}
			
			label {
				display: block;
				padding: 20px 0 5px 0;
			}
		</style>
		
			
</head>

<body>
@include("admin.cookiebanner")
@if(Session::has('needsubmitted'))
						<script type="text/javascript">
						alert('Challenge created successfully');
	</script>
	@endif	
	
	@if(Session::has('neededited'))
						<script type="text/javascript">
						alert('Challenge edited successfully');
	</script>
	@endif		
			
	<!-- begin #page-loader -->
	 <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
               
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            @include("admin.header")
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
	
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		
		
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div align="left">
		<br/>
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			
			<!-- end page-header -->
			<br/>
			<br/>
			<!-- begin row -->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-16">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Challenge/Needs Form</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form  action="/add/need" enctype="multipart/form-data" method="POST"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="title">Title <span class="text-danger">*</span> :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" id="title" type="text"  name="name"  data-parsley-required="true" required/>
										<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label for="key" class="control-label col-md-4 col-sm-4" for="fullname">Select keyword(s) that describe the challenge/need :</label>
									<div class="col-md-6 col-sm-6">							
									
									<div class="dropdown" scroll>
										<button class="btn btn-primary" type="button" 
										id="sampleDropdownMenu" data-toggle="dropdown">
										Click to select keywords 
										</button> or add  <input  type="checkbox"  name="other" id="ck" value="other" onClick="OtherField()" /> other keywords 
										<div class="dropdown-menu" style="overflow-y: scroll; height:250px; padding:0.5em 1em;">
										@foreach($kw as $k)
										
										 </span> <input id="key"  name="keywords[]" value="{{$k->id}}" type="checkbox" />&nbsp; {{$k->name}}
										
										 <br/>
										
										 @endforeach
	
										</div>
										</div>
							   
							   
									</div>
								</div>
								
								
									<div class="form-group" id="oth">
									<label class="control-label col-md-4 col-sm-4" for="fullname"> Other keywords (Comma sperated for multiple entries) :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text"  id="form-tags-3" name="tags-3"  placeholder="Other keyword, seperated by commas if more than one"  />
										
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message" for="email"> Challenge/Need detail</label> 
									<div class="col-md-6 col-sm-6">
										  <textarea rows="10" name="message" id="mytextarea" class="form-control" ></textarea>
                   
									</div>
								</div>
								
								
								
								
								
							
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Next >></button>
									</div>
								</div>
                            </form>
							
							 
								
								
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
     
	
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
	
	
	
	
	<!-- ================== BEGIN BASE JS ================== -->
	
	
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/parsley/dist/parsley.js"></script>
	<script src="/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="/assets/js/form-wizards-validation.demo.min.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	
	<style type="text/css">
   	  #oth{display:none;}
	  #pp{display:none;}
	  
   </style>
   
    <script>
        $(document).ready(function() {
            $('textarea#body').summernote({
                /** Default place holder for the WYSIWYG editor */
                placeholder: 'Enter your body',

                /** Height Settings */
                height: '300px',

                /** Toolbar settings */
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
    </script>
	
	 <script>
   function OtherField(){
			var checkBox = document.getElementById("ck");
		  // Get the output text
		  	
		  // If the checkbox is checked, display the output text
		  if (checkBox.checked == true){
		   $('#oth').css('display','block');
		  } else {
			$('#oth').css('display','none');
		  }   
   			
		
		
		}
</script>
<!-- Autocomplete-->
<script type="text/javascript">
			$(function() {
				$('#form-tags-1').tagsInput();
				
				$('#form-tags-2').tagsInput({
					'onAddTag': function(input, value) {
						console.log('tag added', input, value);
					},
					'onRemoveTag': function(input, value) {
						console.log('tag removed', input, value);
					},
					'onChange': function(input, value) {
						console.log('change triggered', input, value);
					}
				});
				
				$('#form-tags-3').tagsInput({
					'unique': true,
					'minChars': 2,
					'maxChars': 10,
					'limit': 5,
					'validationPattern': new RegExp('^[a-zA-Z]+$')
				});
				
				$('#form-tags-4').tagsInput({
					'autocomplete': {
						source: [
							'apple',
							'banana',
							'orange',
							'pizza'
						]
					} 
				});
				
				$('#form-tags-5').tagsInput({
					'delimiter': ';' 
				});
				
				$('#form-tags-6').tagsInput({
					'delimiter': [',', ';'] 
				});
			});
		</script>
	
	<script>
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
		});
	</script>
	
	<script>
	function accepted(){
			$('#cook').css('display','none');
		}
	
	</script>
	
</body>
</html>
