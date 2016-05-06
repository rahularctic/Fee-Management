@extends('header.header')
@section('content')
    <div class="col-sm-4 col-sm-offset-3">
        <form class="form-horizontal" action="saveFeeCollection" method="post">
    <fieldset>
        <legend>Fee Collection</legend>
        <div class="form-group">
            <label for="Receit" class="col-md-2 control-label">Receit No.</label>

            <div class="col-md-10">
                <input type="text" class="form-control" id="Receit" placeholder="Receit No.">
            </div>
        </div>
        <div class="form-group">
            <label for="Date" class="col-md-2 control-label">Date</label>

            <div class="col-md-10">
                <input type="date" class="form-control" id="inputPassword" placeholder="Date">
            </div>
        </div>
        <div class="form-group">
            <label for="Mobile" class="col-md-2 control-label">Mobile No.</label>

            <div class="col-md-10">
                <input type="text" class="form-control" id="Mobile" placeholder="Mobile">
            </div>
        </div>
        <div class="form-group">
            <label for="Name" class="col-md-2 control-label">Name</label>

            <div class="col-md-10">
                <input type="text" class="form-control" id="Name" placeholder="Name">
            </div>
        </div>

        <div class="form-group">
            <label for="Class" class="col-md-2 control-label">Class</label>

            <div class="col-md-10">
                <select id="Class" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Div" class="col-md-2 control-label">Div</label>

            <div class="col-md-10">
                <select id="Div" class="form-control">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="button" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
    </div>
@endsection
