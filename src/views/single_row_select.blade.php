@extends('statecity::layouts.select')

@section('content')
    <section>
        <div class="row default">
            <div class="col col-md-12">
                <div class="form-group">
                    <label  class="float-left">Select State</label>
                    <select class="state form-control" name="state" >
                        <option selected disabled>Select State</option>
                    </select>
                </div>
            </div>

            <div class="col col-md-12">
                <div class="form-group">
                    <label  class="float-left">Select City</label>
                    <select class="city form-control" name="city">
                        <option selected disabled>Select City</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
@stop
