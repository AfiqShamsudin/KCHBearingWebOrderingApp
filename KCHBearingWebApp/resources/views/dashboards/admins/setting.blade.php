@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title> 

    <!--MATERIAL CDN-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <div class="container">
        <aside>
            <div class="logo">
                <img src="{{asset('Bearing.jpg')}}">
                <h2>KCH<span class="danger"> BEARINGS</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div>
            <div class="sidebar">
                <a href="/admin/dashboard" style="text-decoration:none;">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="/admin/profile" style="text-decoration:none;">
                    <span class="material-icons-sharp">account_circle</span>
                    <h3>My profile</h3>
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Customers</h3>
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Orders</h3>
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
                <a href="/admin/setting" class="active" style="text-decoration:none;">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                    
                </a>
                <a href="#" style="text-decoration:none;">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Product</h3>
                </a>
                <a href="/admin/logout" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" style="text-decoration:none;">
                         <span class="material-icons-sharp">logout</span>
                         {{ __('Logout') }}>
                </a>
			
            </div>
        </aside>
        <!--END OF ASIDE-->
    
        <main>
            <h1>Settings <span class="material-icons-sharp">settings</span></h1>
            <h3>Salesperson, {{Auth::user()->name}}</h3>

            <div class="date">
                <input type="date">
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
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile.jpg">
                    </div>
                </div>
            </div>
            <!--END OF TOP-->

            <div class="recent-updates">
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
            </div>
            <!--END OF RECENT UPDATES-->
            <div class="sales-analytics">
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
            </div>
        </div>
    </div>

    <script src="{{ asset('orders.js')}}"></script>
    <script src="{{ asset('index.js')}}"></script>
</body>
</html>
