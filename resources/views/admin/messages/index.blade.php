@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>


        
        <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow ">
        <!-- Card Header - Dropdown -->
        <div class="card-header pb-0">
        <h4 class="text-dark text-capitalize"> All Messages </h4>
       </div>
        <!-- Card Body -->
        <div class="card-body">
        <table class="table ">
       <tr>
       <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>State</th>
        <th>Options</th>
       </tr>
        @foreach( $sms as $com )
     <tr>
     <tbody style="color:{{ ($com->read_at == NULL) ? '#4e73df' : '' }}">
        <td class="text-capitalize">{{ $com->name }}</td>
        <td>{{ $com->email }}</td>
        <td class="text-truncate"  style="max-width: 100px;">{{ $com->message }}</td>
        <td>
          @if( $com->read_at == NULL )
            <p class="text-success">unread message</p>
          @endif

          @if( $com->read_at != NULL )
          <p>Read message</p>
          @endif
        </td>
        <td>
        <a href="{{route('admin.blog.messages.show',$com->id)}}"><i class="far fa-eye" title="view"></i></a>
        <button type="submit" class="mr-3 mb-1" class="" style='background:white;color:red;border:0px;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$com->id}}').submit();"  name="delete" data-toggle="tooltip" title="delete"><i class="far fa-trash-alt"></i></button>
        <form id="form-delete-{{$com->id}}" action="{{route('admin.blog.messages.destroy',$com->id)}}" method="post">
        @csrf
        @method('delete') 
        </form>
        </td>
        </tbody>
     </tr>
        @endforeach
        </table>
        {{ $sms->links() }}
      
  </div>
  </div>
  </div>
  </div>



</div>
@endsection
