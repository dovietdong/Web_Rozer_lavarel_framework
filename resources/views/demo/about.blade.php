@extends('layout.main')
@section('title','gioi-thieu')
@section('about')
<h1>trang about</h1>
<div class="container">
    <form>
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="text|password|email|number|submit|date|datetime|datetime-local|month|color|range|search|tel|time|url|week" class="form-control" name="inputName" id="inputName" placeholder="">
            </div>
        </div>
        <fieldset class="mb-3 row">
            <legend class="col-form-legend col-sm-1-12">Group name</legend>
            <div class="col-sm-1-12">
                
            </div>
        </fieldset>
        <div class="mb-3 row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Action</button>
            </div>
        </div>
    </form>
</div>
@stop()