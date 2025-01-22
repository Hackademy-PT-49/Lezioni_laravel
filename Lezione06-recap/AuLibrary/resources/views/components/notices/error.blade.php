@if (session()->has('emailError'))
    <div class="alert alert-danger">{{ session('emailError') }}</div>
@endif