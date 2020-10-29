<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ousmane Diallo">

  <title>BBC | Administration</title>
  <link rel="icon" href="images/logo.png">
  
  <!-- Custom fonts for this template-->
  <link href="{{asset('asset_admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{asset('asset_admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset_admin/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      
      <!-- Sidebar - Brand -->
      
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.welcome') }}">
        <img src="{{asset('images/logo.png')}}" alt="" srcset="" style="width:70px;height:70px; padding:5px;" class="text-center rounded">
      </a>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.welcome') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span>
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" target="_blank" href="https://www.ovh.com/fr/mail/">
          <i class="fas fa-envelope fa-fw"></i>
          <span>WEB MAIL OVH</span>
        </a>
      </li>
        
        <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      
      
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-user-graduate"></i>
          <span>studies</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="{{ route('admin.programms.programms.index') }}">Programs</a>
            <a class="collapse-item" href="{{ route('admin.programms.filliers.index') }}">Faculty</a>
            <a class="collapse-item" href="{{ route('admin.programms.modules.index') }}">Modules</a>
            <a class="collapse-item" href="{{ route('admin.programms.specialites.index') }}">Speciality</a>
            <a class="collapse-item" href="{{ route('admin.blog.documents.index') }}">Documents</a>
          </div>
        </div>
      </li>
      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        {{-- <!-- <a class="nav-link" href=" {{route('admin.params.infos.index')}} "> --> --}}
        <a class="nav-link" href=" {{route('admin.members.networks.index')}} ">
        <i class="fas fa-network-wired"></i>
        <span>Networks and visitors</span></a>
      </li>
          
          <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.params.admissions.index')}}">
        <i class="fas fa-graduation-cap"></i>
        <span>Admissions</span>@if (App\Helpers\AdmissionHelper::unreadAdmission())<span class="right badge badge-pill badge-success vertical-center" style="float:right;font-size:10px;margin-top:4px">{{ App\Helpers\AdmissionHelper::unreadAdmission() }}</span>@endif</a>
      </li>
            
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.params.words.index')}}">
        <i class="fab fa-speakap"></i>
        <span>Words</span></a>
      </li>
              
              <!-- Nav Item - Tables -->
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('admin.blog.comments.index')}}">
                  <i class="fas fa-comments"></i>
                  <span>Comments</span></a>
                </li> --}}
                
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.blog.news.index')}}">
        <i class="fas fa-calendar-plus"></i>
        <span>News</span></a>
      </li>
                  
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.blog.messages.index')}}">
          <i class="fas fa-envelope-open-text"></i>
          <span>Message</span>@if (App\Helpers\MessageHelper::unreadMessage())<span class="right badge badge-pill badge-success vertical-center" style="float:right;font-size:10px;margin-top:4px">{{ App\Helpers\MessageHelper::unreadMessage() }}</span>@endif
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.params.attests.index')}}">
        <i class="fas fa-align-left"></i>
        <span>Testimony</span></a>
      </li>
                      
                      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-blog"></i>
          <span>Blog</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            {{-- <a class="collapse-item" href="{{ route('admin.blog.posts.index') }}">Posts</a>
            <a class="collapse-item" href="{{ route('admin.blog.comments.index') }}">Comments</a> --}}
            <a class="collapse-item" href="{{ route('admin.blog.gallerys.index') }}">Gallery</a>
            <!-- <a class="collapse-item" href="{{ route('admin.blog.news.index') }}">News</a> -->
            <a class="collapse-item" href="{{ route('admin.blog.books.index') }}">Books</a>
          </div>
        </div>
      </li>
                      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
                      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
                      
    </ul>
    <!-- End of Sidebar -->
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">