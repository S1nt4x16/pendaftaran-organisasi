@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

<style>
    .alert {
        font-size: 20px;
        font-family: courier new;
        color:red;
        background-color:black;
    }
</style>