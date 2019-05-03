@section('header-one')
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>SDU Dorm Portal</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheets/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheets/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheets/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheets/colors/color1.css"')}}" id="colors">
        <link href="{{asset('css/select2.css')}}" rel="stylesheet" type="text/css" />

        <style type="text/css">
            .flat-unstyled{
                padding-right:0px !important;
                margin-right: 0px !important;
            }
            .unstyled{
                width: 200px !important;
            }
            .nothing-one{
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .nothing{
                padding: 0px !important;
                border-left: 0.1px solid #bdc3c7 !important;
                font-family: 'Roboto', sans-serif !important;
            }
            .search-input{
                border-radius: 0px !important;
                border: 0px !important; 
                font-family: 'Roboto', sans-serif !important;
            }
            .no-border-radius{
                border-radius: 0px !important;
                font-family: 'Roboto', sans-serif !important;
            }
        </style>
    </head>
    @show