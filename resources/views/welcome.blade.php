<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="{{ secure_asset('css/AdminLTE.min.css') }}"> -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link href="{{ secure_asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('/css/css.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    <div class="sidebar-container" >
  <div class="sidebar-logo">
    StoreBundle
  </div>
  <ul class="sidebar-navigation">
    <!-- <li class="header">Navigation</li>
    <li> -->
      <!-- <a href="#">
        <i class="fa fa-home" aria-hidden="true"></i> Applications
      </a> -->
    </li>
    <li>
      <a href="#">
        <image src="image/contact.png"/> Applications
      </a>
    </li>

    <li>
      <a href="#">
      <image src="image/contact.png"/>   Contact
      </a>
    </li>
    
    <li>
      <a href="#">
        <image src="image/grid.png"/>  Integration
      </a>
    </li>
    <li>
      <a href="#">
      <image src="image/dollar.png"/>  Billings
      </a>
    </li>
    <li>
      <a href="#">
      <image src="image/letter.png"/> Contacts Us
      </a>
    </li>

    <li>
      <a href="#">
      <image src="image/comment.png"/> Feedbacks
      </a>
    </li>
  </ul>
</div>

<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="header-banner">
    <div class="d-flex flex-row-reverse bd-highlight">
      <br/>
  <div class="p-2 bd-highlight mt">  My Account ></div>
  <div class="p-2 bd-highlight"></div>

  <div class="p-2 bd-highlight"></div>
</div>
  </div>
</div>


<div class='mt-4'>
<div class="d-flex justify-content-between">
<div class="p-2 bd-highlight plan">Your Curren Plan :Free</div>
  <div >
  <div class="">
  <div class="progress-bar bg-success" role="progressbar" style="width: 95%;border-color:black" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
5% (1500 0f 1500 impression left in this month)
</div>
  </div>
  <div class="p-2 bd-highlight"><button type="button" class="btn btn-outline-secondary">Upgrade</button></div>


</div>
</div>




</div>

<div class="container " style="margin-top: 110px;">
  <div class="row">
    <!-- card -->
<div class="col-md-4"> 
<div class="card1"> 
<div class="card " style="width: 18rem;height:130px">
  <div class="card-body">
    <!-- <h5 class="card-title">Card title</h5> -->

    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <div>
    <image src='image/menu1.png'  class='img-fluid  icon-header'/>
          </div>
    <p >Active Apps</p>
    <a href="#" class="card-link">5</a>
    <a href="#" class="card-link"></a>
  </div>
</div>
</div>
  </div>
         
<div class="col-md-4"> 
<div class="card1"> 
<div class="card" style="width: 18rem;height:130px">
  <div class="card-body">
    <!-- <h5 class="card-title">Card title</h5> -->
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <div>
    <image src='image/envelope.png'  class='img-fluid  icon-header2'/>
          </div>
    <p class="card-text">Active Apps</p>
    <a href="#" class="card-link">5</a>
    <a href="#" class="card-link"></a>
  </div>
</div>
</div>
</div>




<div class="col-md-4"> 
<div class="card1"> 
<div class="card" style="width: 18rem;height:130px">
  <div class="card-body">
    <!-- <h5 class="card-title">Card title</h5> -->
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <div>
    <image src='image/menu1.png'  class='img-fluid  icon-header'/>
          </div>
    <p class="card-text">Active Apps</p>
    <a href="#" class="card-link">5</a>
    <a href="#" class="card-link"></a>
  </div>
</div>
</div>
</div>

  </div>
  

</div>


<!-- All Applciations -->
<div style='margin-top: 70px; border-radius:40px;'>
<div class='container jumbotron jumbotron' style='margin-top: 70px; border-radius:40px;background:white'>
  <div class='container'>
  <h1 style='font-weight:bold;font-size:20px;bottom:60px!important'>All Applications</h1> 
    <div class='d-flex justify-content-between'>
    <p>All </p>
    <p>e-commerce </p>
    <p>Polls </p>
    <p>Counters</p>
    <p>Social</p>
    </div>
    <hr class="my-4">


    <!-- Applciaiton card -->
    <div class='container '>
      <div class='row'>
      <div class='col-lg-4'>
      <div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
  <div class="d-flex justify-content-between">
    <div>
      <div >
    <image src='image/tag.png'  class='img-fluid'  style='background-color:#CDCDCD;padding:10px; border-radius:20px;;color:white'/>
          </div>
      </div>
      <div>
    <h1 style='font-size:23px;font-weight:bold'> Promo bar</h1>
      </div>
      <div>
    <h1  class="d-flex justify-content-end" >
       <image src='image/switch.png'  class='img-fluid '/></h1>
    
      </div>
  </div>
    <!-- <h5 class="card-title">Card title</h5> -->
    <p class="card-text mt-4 text-center">Create beautifucl bars/banner to make announcements or capture leads</p>
    
  </div>
</div>
          </div>

          <div class='col-lg-4'>
          <div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
  <div class="d-flex justify-content-between">
    <div>
      <div >
    <image src='image/tag.png'  class='img-fluid 'style='background-color:#CDCDCD;padding:10px; border-radius:20px;;color:white'/>
          </div>
      </div>
      <div>
    <h1 style='font-size:20px;;font-weight:bold'> Pops Up</h1>
      </div>
      <div>
    <h1  class="d-flex justify-content-end" >
       <image src='image/switch.png'  class='img-fluid '/></h1>
    
      </div>
  </div>
    <!-- <h5 class="card-title">Card title</h5> -->
    <p class="card-text mt-4 text-center">Create beautifucl bars/banner to make announcements or capture leads</p>
    
  </div>
</div>
          </div>

    
      <div class='col-lg-4'>
      <div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
  <div class="d-flex justify-content-between">
    <div>
      <div >
    <image src='image/tag.png'  class='img-fluid '   style='background-color:#CDCDCD;padding:10px; border-radius:20px;;color:white'/>
          </div>
      </div>
      <div>
    <h1 style='font-size:20px;;font-weight:bold'> Welcome Mats</h1>
      </div>
      <div>
    <h1  class="d-flex justify-content-end" >
       <image src='image/switch.png'  class='img-fluid '/></h1>
    
      </div>
  </div>
    <!-- <h5 class="card-title">Card title</h5> -->
    <p class="card-text mt-4 text-center">Create beautifucl bars/banner to make announcements or capture leads</p>
    
  </div>
</div>
          </div>

      </div>


          </div>



          
      <!-- Applciaiton card -->
    <div class='container mt-4 '>
      <div class='row'>
      <div class='col-lg-4'>
      <div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
  <div class="d-flex justify-content-between">
    <div>
      <div >
    <image src='image/tag.png'  class='img-fluid '   style='background-color:#CDCDCD;padding:10px; border-radius:20px;;color:white'/>
          </div>
      </div>
      <div>
    <h1 style='font-size:20px;font-weight:bold'> Pull Builder</h1>
      </div>
      <div>
    <h1  class="d-flex justify-content-end" >
       <image src='image/switch.png'  class='img-fluid '/></h1>
    
      </div>
  </div>
    <!-- <h5 class="card-title">Card title</h5> -->
    <p class="card-text mt-4 text-center">Collect Feedback from your customers with polls</p>
    
  </div>
</div>
          </div>

          <div class='col-lg-4'>
          <div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
  <div class="d-flex justify-content-between">
    <div>
      <div >
    <image src='image/tag.png'  class='img-fluid '   style='background-color:#CDCDCD;padding:10px; border-radius:20px;;color:white'/>
          </div>
      </div>
      <div>
    <h1 style='font-size:20px;font-weight:bold;'> Quiz Builder</h1>
      </div>
      <div>
    <h1  class="d-flex justify-content-end" >
       <image src='image/switch.png'  class='img-fluid '/></h1>
    
      </div>
  </div>
    <!-- <h5 class="card-title">Card title</h5> -->
    <p class="card-text mt-4 text-center">Engage your customers for a delightful experience with quizzes</p>
    
  </div>
</div>
          </div>

    
      <div class='col-lg-4'>
      <div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
  <div class="d-flex justify-content-between">
    <div>
      <div >
    <image src='image/tag.png'  class='img-fluid '   style='background-color:#CDCDCD;padding:10px; border-radius:20px;;color:white'/>
          </div>
      </div>
      <div>
    <h1 style='font-size:20px;;font-weight:bold'> Calculator Builder</h1>
      </div>
      <div>
    <h1  class="d-flex justify-content-end" >
       <image src='image/switch.png'  class='img-fluid '/></h1>
    
      </div>
  </div>
    <!-- <h5 class="card-title">Card title</h5> -->
    <p class="card-text mt-4 text-center">Create social proof help your visitors know the number of visitor viewing the product</p>
    
  </div>
</div>
 </div>
</div>




<div class='' style='margin-top: 100px;'>
  <div>
    <div>
    <div class="d-flex justify-content-between">
      <div>
    <h1>Promo Bar </h1>
    </div>
    <div>
      <p>Application / Promo   <image src='image/switch.png'  class='img-fluid '/></h1></p>

    </div>
  
    </div>
     
<p>Capture leads, communitcate discount coupons make store-wide annoncements or </br> specifically for customers.
  page annoncements withe help of dynamic bars
</p>

</div>
<div class="jumbotron jumbotron-fluid mt-4 "  style='margin-top: 70px; border-radius:80px;background:white'>
  <div class="container">
    <h1>My Promo Bars</h1>
    <div> 
      <div class=>
      <div class="wrapper-editor">



<div class="row d-flex justify-content-center modalWrapper">
  <div class="modal fade addNewInputs" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Add new form</h4>
          <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <input type="text" id="inputName" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputName">Name</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputPosition" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputPosition">Position</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputOfficeInput" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputOfficeInput">Office</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputAge" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputAge">Age</label>
          </div>

          <div class="md-form mb-5">
            <input type="date" id="inputDate" class="form-control" placeholder="Select Date">
            <label data-error="wrong" data-success="right" for="inputDate"></label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputSalary" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputSalary">Salary</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
          <button class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal">Add form
            <i class="fas fa-paper-plane-o ml-1"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center">
    <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd">Add<i
        class="fas fa-plus-square ml-1"></i></a>
  </div>

  <div class="modal fade modalEditClass" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Edit form</h4>
          <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <input type="text" id="formNameEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formNameEdit">Name</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formPositionEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formPositionEdit">Position</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formOfficeEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formOfficeEdit">Office</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formAgeEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formAgeEdit">Age</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formDateEdit" class="form-control datepicker">
            <label data-error="wrong" data-success="right" for="formDateEdit">Date</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formSalaryEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formSalaryEdit">Salary</label>
          </div>


        </div>
        <div class="modal-footer d-flex justify-content-center editInsideWrapper">
          <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Edit
            form
            <i class="fas fa-paper-plane-o ml-1"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center buttonEditWrapper">
  

 

  <div class="text-center">
    
  </div>
</div>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name

      </th>
      <th class="th-sm">Type

      </th>
      <th class="th-sm">Status

      </th>
      <th class="th-sm">Date

      </th>
      <th class="th-sm">Action

      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Email Capture Bar</td>
      <td>Email Capture</td>
      <td><div class="alert alert-success" role="alert">Active</div></td>
      <td>2011/04/25</td>
      <td>....</td>
    </tr>
    <tr>
      <td>Text Bar</td>
      <td>Informatinoal</td>
        
        <td><div class="alert alert-danger" role="alert">Disabled</div></td>
</td>
      <td>2011/07/25</td>
      <td>...</td>
    </tr>
   
  </tbody>
 
</table>
</div>
      </div> 

      </div>



  </div>

</div>
</div>
</div>
     

<div class="d-flex justify-content-between" id="">

<div>
<p>Setting </p>
</div>
<div>
  
<input type="checkbox" aria-label="Checkbox for following text input"> Enable Close Button
<br>
<p>Enable this settings if you want to allow  your customers to be </br> able to close the Bar while navigating your store</p>

  </div>

  <div></div>
  <div></div>
  <div></div>
  

          </div>

<div>
  


</div>


</div>

<div style="margin-top:130px; background-color: #grey!important;">
<div class="container">

<div> 

<h3 style="font-weight:bold;">Create Promo Bar </h3>
<div  class="d-flex justify-content-end">
  <div>
  <button type="submit" class="btn btn-outline">Cancel</button>
  <button type="submit" class="btn btn-danger">Save</button>

          </div>

          </div>

    </div>

<div class>
<form>
<div class="form-row mt-4">
    <div class="form-group col-md-6">
      <label for="inputCity">Type of Promo Bar</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Background Color</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Text</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Bar Name</label>
      <input type="texy" class="form-control" id="inputEmail4" placeholder="Type Bar Name here...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Message</label>
      <textarea type="password" class="form-control" id="inputPassword4" placeholder="Type your promo message"> </textarea>
    </div>
  </div>
  
  </div>
  
</form> 

</div>
          </div>
  </div>
</div>



<script src="js/jquery.js"></script>
<script src="js/mdb.min.js"></script>

<script src="js/popper.min.js"></script>
<script type="text/javascript" src="{{secure_asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/mdb.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>






</body>
</html>
