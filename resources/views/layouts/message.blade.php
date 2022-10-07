@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

<style>
    .alert {
        font-size: 20px;
        font-family: aerial;
    }
</style>