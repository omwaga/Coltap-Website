@if(session('success'))
     <div class="alert alert-success">
             <p><strong>Great! </strong> {{session('success')}}</p>
     </div>
@endif