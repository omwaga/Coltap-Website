@if ($errors->any())
		@foreach ($errors->all() as $error)
		 <div class="alert alert-danger">
             <p><strong>Oh snap!</strong> {{ $error }}</p>
         </div>
        @endforeach
@endif
