@if ($message = Session::get('error'))
<div class="alert d alert-danger alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert s alert-success alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

<style>
    .d {
        font-size: 20px;
        font-family: courier new;
        color:red;
        background-color:black;
    }
    .s {
        font-size: 20px;
        font-family: courier new;
        color:green;
        background-color:black;
    }
</style>