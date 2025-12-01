@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h5 class="modal-title fw-bold" id="addUnit">Add Property</h5>
        </div>
        <form action="{{route('units.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 ">
                        <label for="">Cover Photo</label>
                        <div class="m-3 card p-3 border-dark bg-transparent h-75" style="border-style:dashed;border:3px dashed black;">
                            <img id="out" src="" style="width: 100%; object-fit:contain;" />
                            <input type="file" accept="image/*" name="cover" id="cover" style="display: none;" class="form-control" onchange="loadCoverFile(event)">
                            <div class="pt-2" id="desc">
                                <div class=" style=" font-size: xxx-large; font-weight:bolder;">
                                    <i class="bi bi-upload"></i>
                                </div>
                                <div class="text-center">
                                    <label for="cover" class="btn btn-success text-white" title="Upload new cover image">Browse</label>
                                </div>
                                <div class="text-center prim">*File supported .png .jpg .webp</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 h-100">
                        <div class="card p-4">
                            <select class="form-select mb-1" aria-label="Default select example" name="category" required>
                                <option selected>Select Property type</option>
                                <option value="Land">Land</option>
                                <option value="House">House</option>
                            </select>
                            <div class="form-floating mb-1 d-none">
                                <input type="text" class="form-control" placeholder="Eg.1/8acres" name='title'>
                                <label for="">Property Title</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" placeholder="Eg.1/8acres" name='size' required>
                                <label for="">Size</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="number" class="form-control" placeholder=" " name='price' required>
                                <label for="">Price(KShs)</label>
                            </div>

                            <div class="form-floating mb-2">
                                <select name="county" id="county" class="form-control" required>
                                    @foreach ($counties as $county)
                                    <option value="{{ $county }}">{{ $county }}</option>
                                    @endforeach
                                </select>
                                <label class="">County</label>
                            </div>
                            <div class="form-floating mb-2">
                                <select name="sub_county" id="sub_county" class="form-control" onchange="showWards(this.value)" required>
                                </select>
                                <label class="">Sub-county / Constituency</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="ward" required>
                                <label class="">Ward</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="location" required>
                                <label class="">Area Name</label>
                            </div>
                            <select class="form-select mb-1" aria-label="Default select example" name="compound" required>
                                <option selected>Select Compound Type</option>
                                @foreach ($types as $type)
                                <option value="{{$type}}">{{$type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @foreach($amm as $am)
                    <div class="mb-2 col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder=" " name='{{$am}}'>
                            <label for="">Distance from {{$am}}</label>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2 p-3">
                        <div class="">
                            <h4><b>Description</b></h4>
                            <textarea name="description" id="" class="form-control" rows='5'></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 p-3">
                        <div class="row">
                            <h4><b>Available Services</b> (Check all that are available)</h4>
                            @foreach($services as $service)
                            <div class="form-check col-4">
                                <input class="form-check-input" type="checkbox" name="service[]" value="{{$service}}" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    {{$service}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Proceed to Save ></button>
            </div>
        </form>
    </div>
</div>
<script>
    var loadCoverFile = function(event) {
        var image = document.getElementById('out');
        image.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('cover').value == image.src;

    };
    const selectElement = document.getElementById('county');
    const subSelect = document.getElementById("sub_county");
    var subs = <?php echo $subs; ?>;

    function showSubCounties(event) {
        const county = event.target.value;
        console.log('Selected county:', county);
        // subSelect.options.length = 0;
        subs[county].forEach(function(subCounty) {
            var option = document.createElement("option");
            option.value = subCounty;
            option.text = subCounty;
            subSelect.add(option);
        });
    }
    selectElement.addEventListener('change', showSubCounties);
</script>
@endsection