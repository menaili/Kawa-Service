<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KAWA Services </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">

 
  <link rel="stylesheet" href="{{ asset('assets/CSS/style1.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/CSS/responsive.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    
</head>

<body> 
  @include('pages.header')
 <div class="head">
        <h1 class="title_ser" titre="hosting">Projects</h1>
        <button onclick="location.href='/Projects/create'" type="button" class="btn btn-primary">Add new project</button>
        </div>
    <table class="table table-striped">
        
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Company</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Messages</th>
      <th scope="col">Send at</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @foreach ($notify as $item)
    <tr>

      <th>{{$item->id}}</th>
      <td>{{$item->FirstName}} {{$item->LastName}}</td>
      <td>{{$item->CompanyName}}</td> 
      <td>{{$item->email}}</td> 
      <td>{{$item->phone_number	}}</td>
      <td>{{$item->message}}</td> 
      <td>{{$item->created_at}}</td>

      @if ($item->status == 'pending')
      <td style="color: red;">{{$item->status}}</td>

      @else
      <td style="color: green;">{{$item->status}}</td>

      @endif

      <td>

        <form action="{{route('updateNotify',$item->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <button type="submit" class="btn btn-primary">Accept</button></a>
        </form>

        <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{$item->id}}">Delete</button>

    </td> 
    </tr>
    @endforeach

    
  </tbody>
      </table>





      {{-- modal --}}
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">

            <form action="{{ route('deleteP')}}" method="POST">
              @csrf

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete this Project</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="deleteme" id="deleteCat">
              <h5>Are you sure you want to delete this project!</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Delete</button>
            </div>
          </form>
          </div>
        </div>
      </div>


<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/lang.js') }}"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
    $('.deleteCategoryBtn').click(function(e){
        e.preventDefault();

        var delete_btn= $(this).val();
        $('#deleteCat').val(delete_btn);
        $('#deleteModal').modal('show');

    })
})
 </script>
</body>

</html>