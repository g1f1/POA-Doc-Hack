<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="PrivateOpenAssets (POA) is a fully-featured private library of assets to develop a platform built on top of awesome Bootstrap 3.3.6, modern web technology HTML5, CSS3, and jQuery. It has many ready to use handcrafted components. The library is fully responsive and easy to customize. The code is super easy to understand and gives power to any developer to turn this library into a real web application.">
		<meta name="author" content="Macroweb George Filippas">

		<link rel="shortcut icon" href="assets/img/Macroweb-white-logo.png">

		<title>Macroweb POA - HTML Documentation</title>

        <!-- meta-->
        <meta name="description" content="PrivateOpenAssets (POA) is a fully-featured private library of assets to develop a platform built on top of awesome Bootstrap 3.3.6, modern web technology HTML5, CSS3, and jQuery. It has many ready to use handcrafted components. The library is fully responsive and easy to customize. The code is super easy to understand and gives power to any developer to turn this library into a real web application." />
        <link rel="canonical" href="https://docs.macroweb.gr/POA/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Macroweb POA HTML Documentation" />
        <meta property="og:description" content="PrivateOpenAssets (POA) is a fully-featured private library of assets to develop a platform built on top of awesome Bootstrap 3.3.6, modern web technology HTML5, CSS3, and jQuery. It has many ready to use handcrafted components. The library is fully responsive and easy to customize. The code is super easy to understand and gives power to any developer to turn this library into a real web application." />
        <meta property="og:url" content="https://docs.macroweb.gr/POA/" />
        <meta property="og:site_name" content="Macroweb" />
        <meta property="article:modified_time" content="2022-06-1T17:37:00+00:00" />
        <meta property="og:image" content="https://docs.macroweb.gr/POA/assets/img/Macroweb-special-logo.jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="600" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Macroweb POA HTML Documentation" />
        <meta name="twitter:description" content="PrivateOpenAssets (POA) is a fully-featured private library of assets to develop a platform built on top of awesome Bootstrap 3.3.6, modern web technology HTML5, CSS3, and jQuery. It has many ready to use handcrafted components. The library is fully responsive and easy to customize. The code is super easy to understand and gives power to any developer to turn this library into a real web application." />
        <meta name="twitter:image" content="https://docs.macroweb.gr/POA/assets/img/Macroweb-special-logo.jpg" />
        <meta name="twitter:label1" content="Estimated reading time" />
        <meta name="twitter:data1" content="30 minutes" />
        <!-- head links-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <!--[endif]-->

        <script src="assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="https://docs.macroweb.gr/POA/" class="logo"><i class="icon-home icon-c-logo"></i><span> P<i class="md md-POA"></i>A <small><small class="text-mw-cyan"> 0.2</small> <small class="text-dark">by</small></small> <span class="text-menu-logo">Macro</span><span class="text-menu-logo-cyan">web</span></span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Introduction</li>

                            <li><a href="#folder-structure"><i class="ti-folder"></i> <span> Folder Structure </span> </a></li>
                            <li><a href="#bootstrap"><i class="fa fa-bold"></i> <span> Bootstrap </span> </a></li>


                            <li class="text-muted menu-title">Structure</li>
                            <li><a href="#html"><i class="ti-file"></i><span> HTML</span></a></li>
                            <li><a href="#cssless"><i class="ti-file"></i><span> CSS &amp; Less</span></a></li>
                            <li><a href="#js"><i class="ti-file"></i><span> JavaScript</span></a></li>

                            <li class="text-muted menu-title">Other</li>
                            <li><a href="#helpers"><i class="ti-info-alt"></i><span> Helper Classes</span></a></li>
                            <li><a href="#credits"><i class="ti-angle-right"></i><span> Credits</span></a></li>

                            <li class="text-muted menu-title"><span>Support &amp; Change log</span></li>
                            <li><a href="#support"><i class="ti-help-alt"></i><span> Support</span></a></li>
                            <li><a href="#changelog"><i class="ti-agenda"></i><span> Change log</span></a></li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
			<!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
                                <div class="p-30">

                                    <div class="text-center">
                                        <h3>
                                            Thank you for contributing <span class="text-my-mw-custom">Macro</span><span class="text-my-mw-custom-cyan">web</span> POA!
                                        </h3>

                                        <p class="text-muted m-b-30">
                                            If you have any questions that are beyond the scope of this documentation, please feel free to email or contact us.
                                        </p>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>

                        <div class="row">
							<div class="col-sm-12">
                                <div class="card-box">
                                    <div class="container-alt m-t-40">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0"><b>Introduction</b></h3>

                                                <p class="m-t-20">
                                                    PrivateOpenAssets (POA) is a fully-featured private library of assets to develop a platform built on top of awesome Bootstrap 3.3.6, modern web technology HTML5, CSS3, and jQuery. It has many ready to use handcrafted components. The library is fully responsive and easy to customize. The code is super easy to understand and gives power to any developer to turn this library into a real web application.

                                                </p>
                                                <p>We really care for our Engineers / Developers and so in case you have any questions or feedback, please feel free to get back to us.</p>
                                            </div>
                                        </div>

                                        <div class="row m-t-30">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0" id="folder-structure"><b>Folder Structure</b></h3>

                                                <p class="m-t-20">
                                                    I have tried to follow the standards and modular structure while <span class="text-my-mw-red">I have the assets</span>. Let's take a look at the Library structure:
                                                </p>

                                                <pre class="prettyprint">
        <i class="ti-folder"></i> YOUR_WEB_APP/
        ├── <i class="ti-folder"></i> <b>POA</b>/
        │   └── css/
        │       └── All css files
        │   └── fonts/
        │       └── All font related files
        │   └── js/
        │       └── All javascript files
        │   └── images
        │       └── All images
        │   └── less
        │       └── All less files
        │   └── pages
        │       └── theme pages related files
        │   └── plugins
        │       └── third party plugin (which are being used in theme)
        ├── <i class="ti-folder"></i> your folder extension like 'email-templates'
        │   └── Your  email templates
        └── *.html
            └── html files

        <i class="ti-folder"></i> Documentation/
            └── index.html - Index file for documentation.
    </pre>

                                                <p class="text-primary">
                                                        <strong>Heads up! </strong>
                                                        Please note that if you would like to compile the LessCSS files, you will just have to use your own compiling method. 
                                                        <br>I haven't included the files for the automated build flow in this version. It's currently under development and I have planned to release its next update. 
                                                        <br>Also, the less structure requires some extra changes. In case you have any suggestions on this, please contact me. I'll appreciate your valuable suggestion and feedback.

                                                </p>
                                            </div>
                                        </div>


                                        <div class="row m-t-30 m-b-20">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0" id="bootstrap"><b>Bootstrap</b></h3>

                                                <p class="m-t-20">
                                                    Bootstrap is the most popular HTML, CSS, and JS framework for developing online applications supported by mobile devices.
                                                    <br>Please visit the <a href="http://getbootstrap.com/">official site</a> if you are not familiar with it.

                                                    <strong>POA</strong> uses the bootstrap as a base and on top of it, the layout and some components are built. In order to have our own look and feel, I have overridden most of the styles of bootstrap. 
                                                    Note that currently, the less files are not taking advantage of bootstrap's less structure.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>


                        <div class="row">
							<div class="col-sm-12">
                                <div class="card-box">
                                    <div class="container-alt m-t-40">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0" id="html"><b>HTML</b></h3>

                                                <p class="m-t-20">
                                                    POA is having a common layout which can be used to create web application very easily. The HTML is well written and easy to understand. I have tried to follow bootstrap conventions in most places.
                                                </p>
                                                <p>Let's take a quick look at the generic HTML structure</p>

                                                <iframe src="html_str.php" width="100%" height="1040" style="border: none"></iframe>
                                            </div>
                                        </div>


                                        <div class="row m-b-30">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0" id="cssless"><b>CSS & Less</b></h3>

                                                <p class="m-t-20">
                                                    Less is a CSS pre-processor and it extends the CSS language, adding features that allow variables, mixins, functions, and many other techniques that allow you to make a CSS that is more maintainable, themable and extendable. Less runs inside Node, in the browser and inside Rhino.
                                                </p>
                                                <p>
                                                    All the css files are pre-compiled using less compiler and provided inside the <code>assets/css/</code> folder.
                                                     In case you are not familiar with less or don't have any environment setup which can be used to compile the less files, then you can use these CSS files directly. But if you are familiar with less, then I'll suggest you use the less files.
                                                </p>
                                                <p>Files are explained below: </p>

                                                <table class="table table-bordered m-0">
													<thead>
														<tr>
															<th style="width: 20%;"><i class="ti-file"></i> File</th>
															<th>Description</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
                                                                <code>bootstrap.css</code>
                                                            </td>
                                                            <td>
                                                                POA uses the bootstrap v3.3.6. The core bootstrap file is being used in all the pages.
                                                            </td>
														</tr>
                                                        <tr>
															<td>
                                                                <code>elements.less</code>
                                                            </td>
                                                            <td>
                                                                This file is containing some of the utility functions or mixins for less. This file is from Joel Sutherland.
                                                            </td>
														</tr>

                                                        <tr>
															<td>
                                                                <code>core.less</code>/<code>core.css</code>
                                                            </td>
                                                            <td>
                                                                This file is containing all common styles for all the pages.
                                                            </td>
														</tr>

                                                        <tr>
															<td>
                                                                <code>pages.less</code>/<code>pages.css</code>
                                                            </td>
                                                            <td>
                                                                Pages contains the styles for all supported third-party JS/CSS plugins. It has overwritten version of styles.
                                                            </td>
														</tr>

                                                        <tr>
															<td>
                                                                <code>components.less</code>/<code>components.css</code>
                                                            </td>
                                                            <td>
                                                                This is the one of the core and important file. It contains the styles for all the components, ui elements, and some other parts of the theme.
                                                            </td>
														</tr>

                                                        <tr>
															<td>
                                                                <code>responsive.less</code>/<code>responsive.css</code>
                                                            </td>
                                                            <td>
                                                                This file is containing the styles related to responsiveness support.
                                                            </td>
														</tr>

                                                         <tr>
															<td>
                                                                <code>icons.less</code>/<code>icons.css</code>
                                                            </td>
                                                            <td>
                                                                Combines various font icons. You should remove the fonts you don't plan to use from this file and recompile it.
                                                            </td>
														</tr>
                                                        <tr>
                                                            <td>
                                                                <code>menu.less</code>/<code>menu.css</code>
                                                            </td>
                                                            <td class="text-warning">
                                                                Contains styles for horizontal navigation bar. Please note that this for left sidebar, this file shouldn't being included in page.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row m-t-30 m-b-30">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0" id="js"><b>Javascript</b></h3>

                                                <p class="m-t-20">
                                                    POA uses jQuery, Bootstrap JS framework(at its core) and some of the third-party plugins. There are many more third-party plugins that you can use according to your needs. The css is already containing a matching style for these plugins so you will not need to do anything around it.
                                                </p>

                                                <p>Files are explained below: </p>

                                                <table class="table table-bordered m-0">
													<thead>
														<tr>
															<th style="width: 20%;"><i class="ti-file"></i> File</th>
															<th>Description</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
                                                                <code>jquery.js</code>, <code>bootstrap.js</code>,
                                                                <code>jquery.nicescroll</code>, <code>jquery.slimscroll</code>, etc.
                                                                <!-- TODO -->

                                                            </td>
                                                            <td>
                                                                These files are used at core of the theme.
                                                            </td>
														</tr>
                                                        <tr>
															<td>
                                                                <code>jquery.app.js</code>
                                                            </td>
                                                            <td>
                                                                This is a main js file. It contains the custom JS code needed for features including
                                                                layout, sidebar, etc.
                                                            </td>
														</tr>

                                                        <tr>
															<td>
                                                                <code>jquery.core.js</code>
                                                            </td>
                                                            <td>
                                                                This file contains the definition of some of the key components (e.g. notifications, portlet, etc) and code
                                                                (for self-initialization) related to some of the controls (e.g. modal, range-slider, switchery, multiselect, etc)
                                                            </td>
														</tr>

                                                        <tr>
															<td>
                                                                <code>pages/*.js</code>
                                                            </td>
                                                            <td>
                                                                These are the files containing pages specific code. They are mainly used for demo purpose.
                                                            </td>
														</tr>

                                                        <tr>
															<td>
                                                                <code>plugins/**.js</code>
                                                            </td>
                                                            <td>
                                                                All supported and integrated third-party plugins are included in here.
                                                            </td>
														</tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="container-alt m-t-40">
                                                <h4>Plugin's usage information</h4>
                                            <table class="table table-bordered m-0">
                                                    
                                                    <thead>
                                                        <tr>
                                                            <th>Page</th>
                                                            <th>Plugin CSS</th>
                                                            <th>Plugin js</th>
                                                            <th>Custom js</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ui-loading-buttons.html</td>
                                                            <td>ladda-themeless.min.css</td>
                                                            <td>spin.min.js, ladda.min.js, ladda.jquery.min.js</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ui-modal.html</td>
                                                            <td>custombox.min.css</td>
                                                            <td>custombox.min.js , legacy.min.js</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ui-notification.html</td>
                                                            <td>-</td>
                                                            <td>notify.min.js , notify-metro.js</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ui-carousel.html</td>
                                                            <td>owl.carousel.min.css , owl.theme.default.min.css</td>
                                                            <td>owl.carousel.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>components-nestable-list.html</td>
                                                            <td>jquery.nestable.css</td>
                                                            <td>jquery.nestable.js</td>
                                                            <td>nestable.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>components-range-sliders.html</td>
                                                            <td>ion.rangeSlider.css , ion.rangeSlider.skinFlat.css , bootstrap-slider.min.css</td>
                                                            <td>ion.rangeSlider.min.js , bootstrap-slider.min.js</td>
                                                            <td>jquery.ui-sliders.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>components-sweet-alert.html</td>
                                                            <td>sweetalert.css</td>
                                                            <td>sweetalert.min.js</td>
                                                            <td>jquery.sweet-alert.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>components-masonry.html</td>
                                                            <td>-</td>
                                                            <td>isotope.pkgd.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-advanced.html</td>
                                                            <td>bootstrap-tagsinput.css , switchery.min.css , multi-select.css , select2.css , bootstrap-select.min.css , jquery.bootstrap-touchspin.min.css</td>
                                                            <td>bootstrap-tagsinput.min.js , switchery.min.js , jquery.multi-select.js , jquery.quicksearch.js , select2.min.js, bootstrap-select.min.js , bootstrap-filestyle.min.js , jquery.bootstrap-touchspin.min.js , bootstrap-maxlength.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-validation.html</td>
                                                            <td>-</td>
                                                            <td>parsley.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-pickers.html</td>
                                                            <td>bootstrap-timepicker.min.css , bootstrap-colorpicker.min.css , bootstrap-datepicker.min.css , jquery-clockpicker.min.css , daterangepicker.css</td>
                                                            <td>moment.js , bootstrap-timepicker.min.js , bootstrap-colorpicker.min.js , bootstrap-datepicker.min.js , jquery-clockpicker.min.js , daterangepicker.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-wizard.html</td>
                                                            <td>jquery.steps.css</td>
                                                            <td>bootstrapValidator.js , jquery.steps.min.js , jquery.validate.min.js</td>
                                                            <td>jquery.wizard-init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-mask.html</td>
                                                            <td>-</td>
                                                            <td>bootstrap-inputmask.min.js , autoNumeric.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-summernote.html</td>
                                                            <td>summernote.css</td>
                                                            <td>summernote.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-wysiwig.html</td>
                                                            <td>-</td>
                                                            <td>tinymce.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-code-editor.html</td>
                                                            <td>codemirror.css, ambiance.css</td>
                                                            <td>codemirror.js, formatting.js, xml.js</td>
                                                            <td>jquery.codemirror.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-uploads.html</td>
                                                            <td>dropzone.css</td>
                                                            <td>dropzone.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-xeditable.html</td>
                                                            <td>bootstrap-editable.css</td>
                                                            <td>bootstrap-editable.min.js</td>
                                                            <td>jquery.xeditable.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>form-image-crop.html</td>
                                                            <td>cropper.css</td>
                                                            <td>cropper.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>tables-datatable.html</td>
                                                            <td>jquery.dataTables.min.css</td>
                                                            <td>jquery.dataTables.min.js , dataTables.bootstrap.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>tables-editable.html</td>
                                                            <td>magnific-popup.css , datatables.css </td>
                                                            <td>jquery.magnific-popup.min.js , jquery.dataTables.js , dataTables.bootstrap.js , mindmup-editabletable.js , numeric-input-example.js </td>
                                                            <td>datatables.editable.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>tables-responsive.html</td>
                                                            <td>rwd-table.min.css</td>
                                                            <td>rwd-table.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>tables-foo-tables.html</td>
                                                            <td>footable.core.css , bootstrap-select.min.css</td>
                                                            <td>footable.all.min.js , bootstrap-select.min.js</td>
                                                            <td>jquery.footable.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>tables-bootstrap.html</td>
                                                            <td>bootstrap-table.min.css</td>
                                                            <td>bootstrap-table.min.js</td>
                                                            <td>jquery.bs-table.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>tables-jsgrid.html</td>
                                                            <td>jsgrid.min.css, jsgrid-theme.min.css</td>
                                                            <td>jsgrid.min.js</td>
                                                            <td>jquery.jsgrid.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-flot.html</td>
                                                            <td>-</td>
                                                            <td>jquery.flot.js , jquery.flot.time.js , jquery.flot.tooltip.min.js , jquery.flot.resize.js , jquery.flot.pie.js , jquery.flot.selection.js , jquery.flot.stack.js , jquery.flot.orderBars.min.js , jquery.flot.crosshair.js</td>
                                                            <td>jquery.flot.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-morris.html</td>
                                                            <td>morris.css</td>
                                                            <td>morris.min.js , raphael-min.js</td>
                                                            <td>morris.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-chartjs.html</td>
                                                            <td>-</td>
                                                            <td>Chart.min.js</td>
                                                            <td>chartjs.init.js"</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-peity.html</td>
                                                            <td>-</td>
                                                            <td>jquery.peity.min.js</td>
                                                            <td>jquery.peity.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-chartist.html</td>
                                                            <td>chartist.min.css</td>
                                                            <td>chartist.min.js</td>
                                                            <td>jquery.chartist.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-c3.html</td>
                                                            <td>c3.min.css</td>
                                                            <td>d3.min.js , c3.min.js</td>
                                                            <td>jquery.c3-chart.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-nvd3.html</td>
                                                            <td>nv.d3.min.css</td>
                                                            <td>d3.min.js , nv.d3.min.js</td>
                                                            <td>jquery.nvd3.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-sparkline.html</td>
                                                            <td>-</td>
                                                            <td>jquery.sparkline.min.js</td>
                                                            <td>jquery.charts-sparkline.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-radial.html</td>
                                                            <td>radial.css</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>chart-other.html</td>
                                                            <td>jquery.circliful.css</td>
                                                            <td>easypiechart.min.js , jquery.easypiechart.min.js , jquery.knob.js , jquery.circliful.min.js</td>
                                                            <td>easy-pie-chart.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>map-google.html</td>
                                                            <td>-</td>
                                                            <td>gmaps.min.js</td>
                                                            <td>jquery.gmaps.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>map-vector.html</td>
                                                            <td>jquery-jvectormap-2.0.2.css</td>
                                                            <td>jquery-jvectormap-2.0.2.min.js , jquery-jvectormap-world-mill-en.js , gdp-data.js , jquery-jvectormap-us-aea-en.js" , jquery-jvectormap-uk-mill-en.js , jquery-jvectormap-au-mill.js , jquery-jvectormap-us-il-chicago-mill-en.js , jquery-jvectormap-ca-lcc.js , jquery-jvectormap-de-mill.js , jquery-jvectormap-in-mill.js , jquery-jvectormap-asia-mill.js</td>
                                                            <td>jvectormap.init.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>extra-coming-soon.html</td>
                                                            <td>-</td>
                                                            <td>jquery.countdown.min.js , jquery.simple-text-rotator.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>extra-gallery.html</td>
                                                            <td>magnific-popup.css</td>
                                                            <td>isotope.pkgd.min.js" , jquery.magnific-popup.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>apps-calendar.html</td>
                                                            <td>fullcalendar.css , select2.css</td>
                                                            <td>jquery-ui.min.js , select2.min.js , moment.js , fullcalendar.min.js</td>
                                                            <td>jquery.fullcalendar.js</td>
                                                        </tr>

                                                        <tr>
                                                            <td>apps-taskboard.html</td>
                                                            <td>jquery-ui.min.css</td>
                                                            <td>jquery-ui.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                        <tr>
                                                            <td>ecommerce-product-detail.html</td>
                                                            <td>smoothproducts.css</td>
                                                            <td>smoothproducts.min.js</td>
                                                            <td>-</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>


                        <div class="row">
							<div class="col-sm-12">
                                <div class="card-box">
                                    <div class="container-alt m-t-40">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0" id="helpers"><b>Helper Classes</b></h3>

                                                <p class="m-t-20">
                                                    POA comes with various built in classes which are very useful. They are described below:
                                                </p>

                                                <table class="table table-bordered m-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Class</th>
                                                        <th>Description</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><b>.p-0</b>
                                                        </td>
                                                        <td>Removes all padding space</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.p-20</b>
                                                        </td>
                                                        <td>Adds 20px padding</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.p-30</b>
                                                        </td>
                                                        <td>Adds 30px padding</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.p-t-0</b></td>
                                                        <td>Remove top padding</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.p-t-10</b></td>
                                                        <td>Adds 10px top padding</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.p-b-10</b></td>
                                                        <td>Adds 10px bottom padding</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.p-l-0</b></td>
                                                        <td>Remove left 0px padding</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.p-r-0</b></td>
                                                        <td>Remove right 0px padding</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.p-l-r-10</b></td>
                                                        <td>Adds 10px left and right padding</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-0</b></td>
                                                        <td>Remove all margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-r-5</b></td>
                                                        <td>Adds 5px right margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-r-10</b></td>
                                                        <td>Adds 10px right margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-r-15</b></td>
                                                        <td>Adds 15px right margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-l-10</b></td>
                                                        <td>Adds 10px left margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-l-15</b></td>
                                                        <td>Adds 15px left margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-t-0</b></td>
                                                        <td>Remove top margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-t-10</b></td>
                                                        <td>Adds 10px top margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-t-15</b></td>
                                                        <td>Adds 15px top margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-t-20</b></td>
                                                        <td>Adds 20px top margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-t-30</b></td>
                                                        <td>Adds 30px top margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-t-40</b></td>
                                                        <td>Adds 40px top margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-b-0</b></td>
                                                        <td>Remove bottom margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-b-10</b></td>
                                                        <td>Adds 10px bottom margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-b-15</b></td>
                                                        <td>Adds 15px bottom margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-b-30</b></td>
                                                        <td>Adds 30px bottom margin</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.w-xs</b></td>
                                                        <td>Minimum width 80px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.w-sm</b></td>
                                                        <td>Minimum width 95px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.w-md</b></td>
                                                        <td>Minimum width 110px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.w-lg</b></td>
                                                        <td>Minimum width 140px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.b-0</b></td>
                                                        <td>Removes all borders</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.w-xs</b></td>
                                                        <td>minimum width 80px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.w-sm</b></td>
                                                        <td>minimum width 95px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.w-md</b></td>
                                                        <td>minimum width 110px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.w-lg</b></td>
                                                        <td>minimum width 140px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-h-40</b></td>
                                                        <td>minimum height 40px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.m-h-50</b></td>
                                                        <td>minimum height 50px</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.font-normal</b></td>
                                                        <td>font normal</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.font-600</b></td>
                                                        <td>font weight 600</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.font-bold</b></td>
                                                        <td>font weight 700</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.font-light</b></td>
                                                        <td>font weight 300</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>.font-13</b></td>
                                                        <td>font size 13px</td>
                                                    </tr>

                                                    

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row m-t-30">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0" id="credits"><b>Credits</b></h3>

                                                <p class="m-t-20">
                                                    I've used the following resources as listed. May thanks to all the authors and awesome open source community.
                                                </p>

                                                <ul class="doc-list">
                                                    <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
                                                    <li><a href="https://github.com/mojtabakaviani/bootstrap-rtl"> Bootstrap-RTL</a></li>
                                                    <li><a href="https://jquery.com/">Jquery</a></li>
                                                    <li><a href="http://fortawesome.github.io/Font-Awesome/">Font-Awesome</a>
                                                    </li>
                                                    <li><a href="http://ionicons.com/">Ionicons</a></li>
                                                    <li><a href="http://daneden.github.io/animate.css/">Animate.css</a>
                                                    </li>
                                                    <li><a href="https://github.com/matthieua/WOW">Wow.js</a></li>
                                                    <li><a href="http://lipis.github.io/bootstrap-sweetalert/">Bootstrap Sweet-Alert</a>
                                                    </li>
                                                    <li><a href="http://www.codrops.com">Codrops</a></li>
                                                    <li><a href="http://dbushell.com/">Nestable</a></li>
                                                    <li><a href="http://areaaperta.com/nicescroll/">Nicescroll</a></li>
                                                    <li><a href="http://arshaw.com/fullcalendar/">Full Calendar</a></li>
                                                    <li><a href="http://jqueryvalidation.org/">Form Validator</a></li>
                                                    <li><a href="https://github.com/xoxco/jQuery-Tags-Input">Tags
                                                        Input</a></li>
                                                    <li><a href="http://simontabor.com/labs/toggles">Toggels</a></li>
                                                    <li><a href="http://jdewit.github.com/bootstrap-timepicker">Bootstrap-timepicker</a>
                                                    </li>
                                                    <li><a href="http://www.eyecon.ro/bootstrap-colorpicker">Bootstrap
                                                        Colorpicker</a></li>
                                                    <li><a href="http://loudev.com/">Multi-select</a></li>
                                                    <li><a href="https://select2.github.io/">Select2</a></li>
                                                    <li><a href="http://bootstrapvalidator.com">Bootstrapvalidator</a>
                                                    </li>
                                                    <li><a href="http://www.jquery-steps.com">Jquery-steps</a></li>
                                                    <li><a href="https://github.com/xing/wysihtml5">Wysihtml5</a></li>
                                                    <li>
                                                        <a href="https://github.com/summernote/summernote">Summernote</a>
                                                    </li>
                                                    <li><a href="https://codemirror.net/">Codemirror</a></li>
                                                    <li><a href="http://www.dropzonejs.com/">Dropzonejs</a></li>
                                                    <li><a href="https://github.com/fengyuanchen/cropper">Cropper</a>
                                                    </li>
                                                    <li><a href="https://www.datatables.net">Datatables</a></li>
                                                    <li><a href="http://morrisjs.github.io/morris.js/">Morris</a></li>
                                                    <li><a href="http://chartjs.org/">Chartjs</a></li>
                                                    <li><a href="http://c3js.org/">C3 Chart</a></li>
                                                    <li><a href="http://omnipotent.net/jquery.sparkline/">Sparkline</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://github.com/aterrien/jQuery-Knob">JQuery-Knob</a>
                                                    </li>
                                                    <li><a href="http://robert-fleischmann.de">Robert-fleischmann</a>
                                                    </li>
                                                    <li><a href="https://hpneo.github.io/gmaps/">Gmaps</a></li>
                                                    <li><a href="http://jqvmap.com">Vector Maps</a></li>
                                                    <li><a href="http://uifaces.com/">Uifaces (images)</a></li>
                                                    <li><a href="https://unsplash.com/">Unsplash (images)</a></li>

                                                    <li><a href="http://www.flotcharts.org/">Flot-charts</a></li>
                                                    <li><a href="http://code.shutterstock.com/rickshaw/">Rickshaw</a>
                                                    </li>

                                                    <li><a href="https://github.com/dixso/custombox"> Custombox</a></li>
                                                    <li><a href="http://owlgraphic.com/owlcarousel/"> Owl carousel</a></li>
                                                    <li><a href="https://github.com/seiyria/bootstrap-slider"> Bootstrap Range slider</a></li>
                                                    <li><a href="https://themify.me/themify-icons">Themify-icons</a></li>
                                                    <li><a href="https://erikflowers.github.io/weather-icons/"> Weather icons</a></li>
                                                    <li><a href="https://github.com/abpetkov/switchery"> Switchery</a></li>
                                                    <li><a href="https://github.com/silviomoreto/bootstrap-select"> Bootstrap select</a></li>
                                                    <li><a href="https://github.com/markusslima/bootstrap-filestyle"> Bootstrap filestyle</a></li>
                                                    <li><a href="https://github.com/istvan-ujjmeszaros/bootstrap-touchspin"> Bootstrap Touchspin</a></li>
                                                    <li><a href="https://github.com/mimo84/bootstrap-maxlength/"> Bootstrap maxlength</a></li>
                                                    <li><a href="http://1000hz.github.io/bootstrap-validator/">Bootstrap-validator</a></li>
                                                    <li><a href="https://github.com/dangrossman/bootstrap-daterangepicker">Bootstrap-daterangepicker</a></li>
                                                    <li><a href="https://github.com/weareoutman/clockpicker">Clockpicker</a></li>
                                                    <li><a href="https://github.com/BobKnothe/autoNumeric">AutoNumeric</a></li>
                                                    <li><a href="http://www.tinymce.com/">Wysiwig Editor</a></li>
                                                    <li><a href="https://github.com/fengyuanchen/cropper">Cropper</a></li>
                                                    <li><a href="http://fooplugins.com/plugins/footable-jquery/">Footable</a></li>
                                                    <li><a href="https://github.com/wenzhixin/bootstrap-table-examples"> Bootstrap tables</a></li>
                                                    <li><a href="https://gionkunz.github.io/chartist-js/"> Chartist chart</a></li>
                                                    <li><a href="http://nvd3.org/"> Nvd3 chart</a></li>
                                                    <li><a href="https://github.com/pguso/jquery-plugin-circliful">Jquery-circliful</a></li>
                                                    <li><a href="https://unsplash.com/"> Images</a></li>
                                                    <li><a href="http://uifaces.com/"> Avatar Images</a></li>
                                                    <li><a href="https://www.jstree.com/"> Tree view</a></li>
                                                    <li><a href="https://github.com/linkedin/hopscotch"> Hopscotch</a></li>

                                                    <li><a href="http://lab.hakim.se/ladda"> Loading Buttons</a></li>
                                                    <li><a href="https://codemirror.net/"> Codemirror</a></li>

                                                    <li><a href="https://github.com/kthornbloom/Smoothproducts"> Smoothproducts</a></li>
                                                    <li><a href="https://github.com/tabalinas/jsgrid"> JsGrid Table</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row m-t-30" id="support">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0"><b>Support</b></h3>

                                                <p class="m-t-20">
                                                    Once again thank you for your contribution. I'll be happy to answer any related questions. In case  you have any suggestions or requests, please feel free to <a href="http://report.macroweb.gr/">Contact</a>.
                                                <br>I'll try to implement them and release them in future updates.

                                                </p>

                                                <p>
                                                    Stay Awesome!
                                                </p>
                                                <p class="text-primary">
                                                    - <strong>Macroweb George Filippas</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="changelog">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="container-alt">
                                        <div class="row m-t-10">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-0"><b>Change Log</b></h3>

                                                <p class="m-t-20">
                                                    <strong>v0.0.2 (28 September, 2020)</strong>
                                                </p>
                                                <ul>
                                                    <li class="m-t-15">
                                                        <b> Added Pages:</b>
 
                                                         <ul>
                                                             <li>index.html</li>
                                                         </ul>
                                                     </li>

                                                </ul>

                                                <p class="m-t-20">
                                                    <strong>v0.1 (26 September, 2020)</strong>
                                                </p>
                                                <ul>
                                                    <li class="m-t-15">
                                                       <b> Uploaded Plugins:</b>

                                                        <ul>
                                                            <li>Bootstrap to 3.3.6</li>
                                                            <li>Notify.js to 0.4.2</li>
                                                            <li>Ion-range slider to 2.1.4</li>
                                                            <li>Bootstrap slider to 9.1.1</li>
                                                            <li>Isotope to 3.0.1</li>
                                                            <li>Animate css</li>
                                                            <li>Sweet alert to Bootstrap Sweet Alert</li>
                                                            <li>Font Awesome to 4.6.3</li>
                                                            <li>Bootstrap tag-input to 0.8.0</li>
                                                            <li>Select 2 to 4.0.3</li>
                                                            <li>Bootstrap select to 1.10.0</li>
                                                            <li>Parsley.js to 2.4.3</li>
                                                            <li>Moment.js to 2.14.1</li>
                                                            <li>Bootstrap timepicker to 0.5.2</li>
                                                            <li>Colorpicker</li>
                                                            <li>Bootstrap datepicker to 1.6.1</li>
                                                            <li>Summernote to 0.8.1</li>
                                                            <li>Wysiwyg to 4.4.1</li>
                                                            <li>Codemirror to 5.17.0</li>
                                                            <li>Bootstrap table to 1.11.0</li>
                                                            <li>Flot chart to 0.8.3</li>
                                                            <li>Morris chart to 0.5.1</li>
                                                            <li>Chart.js to 2.1.4</li>
                                                            <li>Chartist.js to 0.9.8 (Added tooltips option)</li>
                                                            <li>Fullcalendar to 2.9.0</li>
                                                            <li>Slimscroll.js to 1.3.8</li>
                                                            <li>Scrollto js to 2.1.3</li>
                                                        </ul>
                                                    </li>

                                                </ul>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                    2022 © <span><a class="gnu-gpl3" href="https://github.com/MacrowebCloud/POA-Doc/blob/Master/LICENSE">GNU GPL3</a></span> <a href="https://www.macroweb.gr">Macroweb</a>. <a href="https://github.com/MacrowebCloud/POA-HTML/">PrivateOpenAssets</a>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.easing.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Menu Toggle Script -->
        <script>

            //jQuery for page scrolling feature - requires jQuery Easing plugin
            $(function() {
                $('#sidebar-menu ul li a').bind('click', function(event) {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 100
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
            });
        </script>
	
	</body>
</html>