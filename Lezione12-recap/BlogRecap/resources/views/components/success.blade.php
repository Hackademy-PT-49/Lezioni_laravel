@if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
@if(session()->has('notice'))
<div class="alert alert-danger">{{session('notice')}}</div>
@endif