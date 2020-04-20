<!DOCTYPE html>
<html lang="en">
<head>
  <title>ToDo List App - @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap css-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,500;0,700;1,300&display=swap" rel="stylesheet">
  <style>
    .pagination{
      justify-content: center;
      margin-top: 20px;
    }
    .pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px;}
    .page-link {
    padding: 10px;
    height: 40px;
    width: 40px;
}
    body{
     background: #9ab5f6;
     font-family: 'Fira Sans', sans-serif;
     color: #555555;
    }
    .main-bg{
      background: #ffffff;
      border-radius: 21px;
      padding: 50px 30px 20px 30px;
      margin-top: 30px;
    }
    p{
      font-size: 11px!important;
      margin-bottom: 10px;
      font-weight: 300;
      color: #6767ff;
    }
    .form-control{
      font-size: 11px!important;
      margin-bottom: 10px;
      font-weight: 300;
      color: #6767ff;
    }
    label{
      font-size: 12px!important;
      margin-bottom: 10px;
      color: blue;
    }
    h6{
      font-size: 12px!important;
    margin-bottom: 10px;
    color: blue;
    }
    h4{
      font-size: 18px!important;
      margin-bottom: 10px;
      color: blue;
    }
    .btn{
      font-size: 11px!important;
    display: block;
    position: relative;
    /* float: left; */
    max-width: 100px!important;
    padding: 5px 10px;
    /* margin: 5px; */
    font-weight: 300;
    text-align: center;
    line-height: 20px;
    color: #FFF;
    border-radius: 5px;
    transition: all 0.2s;
    height: 30px;

    }
    .add-task{
      width: 0px;
    text-align: right;
    color: blue;
    top: -14px;
    position: relative;
    background: transparent;
    border: 0px;
    }
    .add-task:hover{
    background: transparent;
    border: 0px;
    }
    .fa-plus-circle{
      font-size: 32px;
      color: blue;
    }
    .list-group-item {
      border-radius: 21px!important;
      background-color: #ffe7a0;
  
}
    .date{
      top: 8px;
      position: relative;
    }
    .bg-transparent{
        background: transparent!important;
        color: blue;
    }
    .alert {
    font-size: 11px;
}
.add-task:focus, .add-task:active{
  background: transparent!important;
}
.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
 
    
    border-color: transparent;
    box-shadow:none;
}
.btn-primary.focus, .btn-primary:focus {
    color: #fff;
    border-color: transparent;
    box-shadow:none;
}
.btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-primary.dropdown-toggle:focus {
    box-shadow: none;
}
    </style>
</head>
<body>
     <div class="container mt-3">
        <div class="row justify-content-center">
          <div class="col-sm-12 ">
          
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4 shadow main-bg">
            @include('partials._messages')
            @yield('content')
        
           
          </div>
        </div>
     </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
