<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="/admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin/app-assets/images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- Fontfaces CSS -->
    <link href="/admin/main/css/font-face.css" rel="stylesheet" media="all">
    <!-- <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"> -->
    <link rel="stylesheet" type="text/css" href="/auth/assets/font/pro/css/all.min.css">
    <link href="/admin/main/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/admin/main/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="/auth/assets/css/sb-admin.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="/assets/admin/css/style.css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    @section('header')
    @parent
    @include('admin.layouts.header')
    @show

    @yield('content')

    @section('footer')
    @parent
    @include('admin.layouts.footer')
    @show
</body>

</html>