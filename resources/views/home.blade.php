@extends('include.layout') 
@section('content')
<div> 
    <img src="{{ asset('assets/images/cover.jpg') }}" alt="" style="width: 100%; height: 400px;">
</div> 

<div>
    <div class="container">
        <div class="topic">
            <h2>NEW COLLECTION</h2> 
            <p>Shop till you drop!</p>
        </div> 
        <div class="img-home"> 
            <div>
                <img src="{{ asset('assets/images/t-shirt 01.jpeg') }}" alt="" style="width: 400px"> 
                <h3 style="margin-top: 15px">NASA DTF Tee</h3>
                <p>Rs 2500/-</p>
            </div> 

            <div>
                <img src="{{ asset('assets/images/t-shirt 03.jpeg') }}" alt="" style="width: 400px"> 
                <h3 style="margin-top: 15px">NASA DTF Tee</h3>
                <p>Rs 2500/-</p>
            </div>

            <div>
                <img src="{{ asset('assets/images/t-shirt 02.jpeg') }}" alt="" style="width: 400px"> 
                <h3 style="margin-top: 15px">NASA DTF Tee</h3>
                <p>Rs 2500/-</p>
            </div> 
        </div>
    </div>
</div>

@endsection