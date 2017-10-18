@extends('layouts.app')
@section('content')
    <form class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend>Add New Advert</legend>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('adverts.index') }}"> Back</a>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Title for Advert</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Appended Input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="price">Price</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input id="price" name="price" class="form-control" placeholder="0.00" type="text" required="">
                        <span class="input-group-addon">EUR</span>
                    </div>

                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="type">Sell / Buy</label>
                <div class="col-md-4">
                    <select id="type" name="type" class="form-control">
                        <option value="sell">Sell</option>
                        <option value="buy">Buy</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="category">Category</label>
                <div class="col-md-4">
                    <input id="category" name="category" type="text" placeholder="add your category" class="form-control input-md">
                    <span class="help-block">Add category for better search</span>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Description</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="description" name="description">Add description here</textarea>
                </div>
            </div>
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Create Advert</button>
        </fieldset>
    </form>

@endsection