@if (session('success'))
<div class="container mt-2">
  <div class="alert alert-success">
  {{ session('success') }}
  </div>
</div>
@endif        

@if (session('error'))
<div class="container mt-2">
  <div class="alert alert-error">
  {{ session('error') }}
  </div>
</div>          
@endif        
