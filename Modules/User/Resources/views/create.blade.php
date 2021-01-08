@extends('layouts.default')

@section('content')

<form id="userCreate" action="{{route('userStore')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <label class="h4 text-primary">Registration Data</label>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name: </label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputName" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLogin" class="col-sm-2 col-form-label">Login: </label>
                <div class="col-md-6">
                    <input type="text" class="form-control check-if-exists" id="inputLogin" data-url="/user/find/" name="login">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">E-mail: </label>
                <div class="col-md-6">
                    <input type="email" class="form-control check-if-exists" id="inputEmail" data-url="/user/find/" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNumber" class="col-sm-2 col-form-label">Number: </label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputNumber" name="number">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDate" class="col-sm-2 col-form-label">Date of Birth: </label>
                <div class="col-md-6">
                    <input type="date" class="form-control" id="inputDate" name="dateBirth">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password: </label>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" name="password" data-toggle="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCompany" class="col-sm-2 col-form-label">Lead Company: </label>
                <div class="col-md-6">
                    <select name="company" class="form-control" id="company" style="width: 100%;"></select>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <label class="h4 text-primary">General settings</label>
        </div>
        <div class="card-body">

        </div>
    </div>
</form>

<script>
    function submit() {
        $('#userCreate').submit();
    }
</script>
@endsection
@section('footer')
<div class="d-flex justify-content-end">
    <button class="btn btn-success" onclick="submit()">Save</button>
</div>
@endsection
