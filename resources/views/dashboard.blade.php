@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <div class="row" id="units">
        <div class="col-sm-12">
            <div class="white-box" style="min-height: 650px;">
                <div class="d-flex justify-content-between">
                    <h3 class="box-title">Property</h3>
                    <a href="" data-bs-toggle="modal" data-bs-target="#addUnit"><button class="btn btn-primary">+ Add Property</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Type</th>
                                <th class="border-top-0">Location</th>
                                <th class="border-top-0">Size</th>
                                <th class="border-top-0">Price</th>
                                <th class="border-top-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($units as $key=>$unit)
                            <tr>
                                <td>ULP-{{$key+1}}</td>
                                <td>{{$unit->type}}</td>
                                <td>{{$unit->location}}</td>
                                <td>{{$unit->size}}</td>
                                <td>{{number_format($unit->price)}}</td>
                                <td>
                                    <div class="btn btn-{{$unit->status=='On Sale'?'success':'danger'}}">{{$unit->status}}</div>
                                </td>
                                @if($unit->status=='On Sale')
                                <td ><a class="btn btn-danger" href="/asset/toogleStatus/{{$unit['id']}}">Sell</a></td>@endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addUnit" tabindex="-1" aria-labelledby="addUnit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUnit">Add Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/addUnit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-floating mb-1">
                        <input type="file" class="form-control" placeholder=" " name='cover'>
                        <label for="">Cover Photo</label>
                    </div>
                    <select class="form-select mb-1" aria-label="Default select example" name="type">
                        <option selected>Select Property type</option>
                        <option value="Land">Land</option>
                    </select>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" placeholder="Eg.1/8acres" name='size'>
                        <label for="">Size</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="number" class="form-control" placeholder=" " name='price'>
                        <label for="">Price(KShs)</label>
                    </div>
                    <select class="form-select mb-1" aria-label="Default select example" name="county">
                        <option selected>Select County</option>
                        @foreach($counties as $county)
                        <option value="{{$county->county}}">{{$county->county}}</option>
                        @endforeach
                    </select>
                    <select class="form-select mb-1" aria-label="Default select example" name="town">
                        <option selected>Select Town</option>
                        @foreach($towns as $town)
                        <option value="{{$town->town}}">{{$town->town}}</option>
                        @endforeach
                    </select>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" placeholder=" " name='location'>
                        <label for="">Location</label>
                    </div>
                    <?php $amm = ['Road', 'School', 'Hospital',];
                    $services = ['Water', 'Electricity', 'Security']; ?>
                    <div class="row m-2">
                        <h4><b>Available Services</b></h4>
                        @foreach($services as $service)
                        <div class="form-check col-6">
                            <input class="form-check-input" type="checkbox" name="service[]" value="{{$service}}" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                {{$service}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    @foreach($amm as $am)
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" placeholder=" " name='{{$am}}'>
                        <label for="">Distance from {{$am}}</label>
                    </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection