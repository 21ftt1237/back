@php
    $pageName = 'Bruzone (Profile)';
@endphp
@include('layouts.header')
<!DOCTYPE html>

<html>

<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile1.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold"></span>
                    <span class="text-black-50"></span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{ route('updateProfile') }}" method="post">
                        @csrf
                         <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                               
                                <input type="text" class="form-control" name="name" id="name" disabled placeholder="Name" value="{{ auth()->user()->name }}" pattern="^[a-zA-Z]+(([',. -][a-zAZ ])?[a-zA-Z]*)*$" title="Enter your name" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="tel"  disabled  class="form-control" placeholder="Enter Phone Number" value="{{ auth()->user()->mobile_number }}" name="phone_number" id="phone_number" pattern="^\+673-[26789]\d{6}$" title="Please enter a valid Brunei mobile number (e.g., +673-2-123456)" required></div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text"  disabled  class="form-control" placeholder="Enter Address" name="Address" id="Address" value="{{ auth()->user()->address }}" pattern="^[A-Za-z0-9\s.,#&-]*$" title="Enter address" required></div>
                            <div class="col-md-12"><label class="labels">Postcode</label><input type="text"  disabled  class="form-control" placeholder="Enter Postcode" name="postcode" id="postcode" value="{{ auth()->user()->postcode }}" pattern="^(B|T|K|P)[A-Z]\d{2}\d{2}$" title="Enter postcode " required></div>
                            <div class="col-md-12"><label class="labels">Email name</label><input type="email"  disabled  class="form-control" placeholder="Enter Email" value="{{ auth()->user()->email }}" pattern="^[A-Za-z0-9+_.-]+@(.+)$" title="Enter email" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control"  disabled  placeholder="Country" name="country" id="country" value="{{ auth()->user()->country }}" pattern="^[A-Za-z\s&,'-]+$" title="Enter country name" required></div>
                            <div class="col-md-6"><label class="labels">District</label><input type="text" class="form-control" disabled  value="{{ auth()->user()->district }}" name="district" id="district" placeholder="District" pattern="^(Brunei-Muara|Tutong|Temburong|Belait)(\sDistrict)?$" title="Enter district" required></div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit" name="submit" style="background-color: #F6E71D; color: black;">Save Profile</button>
                            <button class="btn btn-primary profile-button" type="button" onclick="enableEditing()" style="background-color: #F6E71D; color: black;">Edit Profile</button>
                            <a href="{{ route('dashboard') }}" class="nav-link"><button class="btn btn-primary profile-button" type="button" style="background-color: #F6E71D; color: black;">Home</button></a>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-4">
             <div class="d-flex justify-content-between align-items-center mb-3">
<!--                 <h4 id="loyalty-points">Loyalty Points: {{ $loyaltyPoints }}</h4> -->
                </div>
                <div class="col-md-4">
<!--                <h4>Owned Redeemed Coupon</h4>
               @if (!is_null($redeemCoupon) && $redeemCoupon !== '')
               <p>Coupon Redeemed: ${{ $redeemCoupon }}</p>
                @else
               <p>No coupon redeemed.</p>
                @endif
                </div>
                <p></p>
                  @if(session('message'))
                <div class="alert alert-success">
               {{ session('message') }}
               </div>
                @endif
                <h4>Coupon Options</h4>
                <p>Choose a coupon for your delivery charges:</p> -->
               
<!--         <div class="loyalty-container">
    <div class="loyalty-box">
        <h3>$2 off</h3>
        <p>-200 loyalty points</p>
        <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="200">
            <button type="submit">Redeem $2 off</button> 
        </form>
    </div>
    <div class="loyalty-box">
        <h3>$3 off</h3>
        <p>-300 loyalty points</p>
        <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="300">
            <button type="submit">Redeem $3 off</button> 
        </form>
    </div>
    <div class "loyalty-box">
        <h3>$5 off</h3>
        <p>-500 loyalty points</p>
        <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="500">
            <button type="submit">Redeem $5 off</button>
        </form>
    </div>
</div> -->
             
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>    
   function enableEditing() {
    // Enable editing of input fields
    document.querySelectorAll('.form-control').forEach(input => {
        input.removeAttribute('disabled');
    });
    
    // Remove the "disabled" attribute from the form
    document.querySelector('form').removeAttribute('disabled');
    
    // Submit the form
    document.querySelector('form').submit();
}
</script>
</body>
</html>
