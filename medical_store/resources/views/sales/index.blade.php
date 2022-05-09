@extends('layout')

@section('title')
   Sales statistics 
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Sales Reports</h1>
    </div>
    <hr>    
</div>
<div class="row">
     <!--1st card-->
    <div class="col-md-4">
        <div class="sl-mainpanel">
            <div class="sl-page-body">
                <div class="card pd-20 pd-sm-40" style="padding:2rem;">
                    <h4>Search By Date</h4>
                    <form action="{{ route('sales.check.report') }}" method="POST">
                    @csrf 
                    <label for="">Select a Date</label>
                    <input type="date" name= "date" class="form-control" required="">
                    <br>
                    <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div> <!--card-->
            </div> <!--body-->
        </div> <!--main-->
    </div>

    <!--2nd card-->
    <div class="col-md-4">
        <div class="sl-mainpanel">
            <div class="sl-page-body">
                <div class="card pd-20 pd-sm-40" style="padding:2rem;">
                    <h4>Search By Month</h4>
                    <form action="{{ route('sales.check.report') }}" method= "POST">
                        @csrf
                        <label for="">Select Name</label>
                        <select name="month" id="" class="form-control">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        <label for="">Select Year</label>
                        <select name="year" id="" class="form-control">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div> <!--card-->
            </div> <!--body-->
        </div> <!--main-->
    </div>

    <!--3rd card-->
    <div class="col-md-4">
        <div class="sl-mainpanel">
            <div class="sl-page-body">
                <div class="card pd-20 pd-sm-40" style="padding:2rem;">
                    <h4>Search by year</h4>
                    <form action="{{ route('sales.check.report') }}"method= "POST">
                        @csrf
                    <label for="">Select Year</label>
                        <select name="year" id="" class="form-control">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div> <!--card-->
            </div> <!--body-->
        </div> <!--main-->
    </div>
</div>

@endsection
