@extends('admin.admin_master')
@section('admin')

 <header class="header_area">
 	 @include('admin.head')
 </header>
<aside class="sidebar-wrapper ">
	 @include('admin.sidemenu')
</aside>
<head>
  <style type="text/css">
    .modal-dialog {
    max-width: 70%;
    margin: 0 auto;
   }
   .cke_notification{
    display: none;
   }
  </style>

</head>

<div class="contanier">
	<div class="row">
		<div class="col-xl-12 mt-3">
			<div class="card border-0">
				<div class="card-body">
					<div class="row">
					<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
					<p class="text-muted">Transactions</p>
						</div>
						<div class="col-12 col-sm-6 col-xsm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex justify-content-end mt-2">
						<a class="text-dark" href="{{ asset('admin/dashboard')}}">Dashboard / </a>
							<a class="text-dark" href="#">Admin / </a>
							<a class="text-dark" href="{{Route('transaction')}}">Transaction</a>
						</div>
					</div>
				</div>
			</div>
      
    


		</div>
  @if( session('status_addcategory'))
          <div class="alert alert-success">
            {{ session('status_addcategory') }}
          </div>
          @endif 

		<div class="col-12 col-xsm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-3">
			<div class="card border-0">
				<div class="card-body">
			<div class="table-responsive">
		<table class="table table-striped">
  <thead>
    <tr class="text-muted">
      <th>#</th>
      <th>TrnxID</th>
      <th>User</th>
      <th>Amount</th>
      <th>Details</th>
      <th>Method</th>
      <th>Date&Time</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($transactions as $transaction)
    <tr id="course-{{ $transaction->id }}">
      <td>{{ $loop->index +1}}</td>
      <td>{{ $transaction->transaction_id }}</td>
    
        <td>{{ $transaction->user->name }}</td>
        <td class="text-success">{{ $transaction->amount }} TK</td>
        <td ><p>{{ $transaction->details }}</p></td>
        <td>{{ $transaction->trnx_method }}</td>
        <td>{{ $transaction->created_at->format('d,M Y') }}</td>
      
      <td>
     
         <button class="deleteCourse btn btn-sm btn-danger" data-id="{{ $transaction->id }}">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- scripts for delete -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).on("click", ".deleteCourse", function(){
            let courseId = $(this).data("id");
            let confirmDelete = confirm("Are you sure you want to delete this course?");

            if(confirmDelete){
                $.ajax({
                    url: "/admin/courses/" + courseId,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if(response.success){
                            $("#course-" + courseId).remove();
                            // alert(response.message);
                        } else {
                            alert("Something went wrong.");
                        }
                    },
                    error: function() {
                        alert("Error deleting course.");
                    }
                });
            }
        });
    </script>


 

@endsection