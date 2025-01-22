@if (session()->has('emailSent'))
    <div class="alert alert-success">{{ session('emailSent') }}</div>
@endif
