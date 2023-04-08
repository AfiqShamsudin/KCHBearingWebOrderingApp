
@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales dashboard</title> 

    <!--MATERIAL CDN-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <!--STYLESHEET-->
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <div class="container">
        <aside class="col">
            <div class="logo">
                <img src="{{asset('Bearing.jpg')}}">
                <h2>KCH<span class="danger"> BEARINGS</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div>

            <div class="sidebar">
                <a href="/user/dashboard" style="text-decoration:none;">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="/user/profile" class="active" style="text-decoration:none;">
                    <span class="material-icons-sharp">account_circle</span>
                    <h3>My Profile</h3>
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>My Orders</h3>
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Analytics</h3>
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Message</h3>
                    <!-- <span class="message-count">26</span> -->
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Products</h3>
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">error</span>
                    <h3>Reports</h3>
                </a>
                <a href="/user/setting" style="text-decoration:none;">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                    
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Product</h3>
                </a>
                <a href="#" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" style="text-decoration:none;">
                         <span class="material-icons-sharp">logout</span>
                         {{ __('Logout') }}>    
                </a>
			
            </div>
        </aside>
        <!--END OF ASIDE-->
        <main>
            <h1>My Profile</h1>
            <h3>Salesperson, {{Auth::user()->name}}</h3>

        
            <div class="container-fluid">
       
            <form method="POST" enctype="" id="profile_setup_frm" action="{{route('update.Profile')}}" >
                <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    @php($profile_image = auth()->user()->profile_image)
                    <img class="rounded-circle mt-5" height="220" width="220" src="@if($profile_image == null) {{ asset("storage/profile_images/avatar.png")}}  @else {{ asset("storage/$profile_image") }} @endif" id="image_preview_container"><br>
                    <span class="font-weight-bold">
                        <input type="file" name="profile_image" id="profile_image"  class="form-control">
                    </span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row" id="res"></div>
                    <div class="row mt-2">
    
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Address</label>
                            <input type="text" name="address" class="form-control" value="{{ auth()->user()->Address }}" placeholder="Address">
                        </div>
                    </div>
                    
                    <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </div>
            
        </div>   
            
            </form>
    </div>

       
        </main>
        <!--END OF MAIN-->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>{{Auth::user()->name}}</b></p>
                        <small class="text-muted">Salesperson</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile.jpg">
                    </div>
                </div>
            </div>
            <!--END OF TOP-->

            <!-- <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile.jpg">
                        </div>
                        <div class="message">
                            <p><b>Diana Ayi</b> received his order of Night lion tech GPS drone</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mandy Roy</b> received his order of Night lion tech GPS drone</p>
                            <small class="text-muted">6 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--END OF RECENT UPDATES-->
            <!-- <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-sharp">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>OFFLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-icons-sharp">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>849</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Add Product</h3>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <script src="{{ asset('index.js')}}"></script>
    <script src="{{ asset('profileupdate.js')}}"></script>
</body>
</html>
