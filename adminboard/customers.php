<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
       

    </head>
    <body>
        
        <div class="container">
            <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                    <span class="icon"><i class="fa fa-gift" aria-hidden="true" style="font-size:30px;"></i></span>
                    <span class="title"><h2>Gift Shop</h2></span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true" style="font-size:20px;"></i></span>
                    <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="shop.php">
                    <span class="icon"><i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:20px;"></i></span>
                    <span class="title">Shop</span>
                    </a>
                </li>
                <li>
                    <a href="customers.php">
                    <span class="icon"><i class="fa fa-users" aria-hidden="true" style="font-size:20px;"></i></span>
                    <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="message.php">
                    <span class="icon"><i class="fa fa-comment" aria-hidden="true" style="font-size:20px;"></i></span>
                    <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <span class="icon"><i class="fa fa-cog" aria-hidden="true" style="font-size:20px;"></i></span>
                    <span class="title">Settings</span>
                </li>
                <li>
                    <a href="#">
                    <span class="icon"><i class="fa fa-question-circle" aria-hidden="true" style="font-size:20px;"></i></span>
                    <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <span class="icon"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;"></i></span>
                    <span class="title">Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <span class="icon"><i class="fa fa-moon-o" id="icon1" aria-hidden="true" style="font-size:20px;"></i></span>
                    <span class="mode" onclick="modeChange();">Mode</span>
                    </a>
                </li>
            </ul>
            </div>
            <div class="main">
                <div class="topbar">
                    <div class="toggle" onclick="toggleMenu();" ></div>
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </label>
                    </div>
                    
                    </div>
                    <br><div class="cardBox1">
                    <div class="details1">
                        <div class="custdetails">
                            <div class="cardHeader">
                                <h2>Customer Details</h2>
                                </div>

                            <table>
                                <thead>
                                    <tr>
                                        <td><h3>Customer Name</h3></td>
                                        <td><h3>Country</h3></td>
                                        <td><h3>Status</h3></td>
                                        <td><h3>Orders</h3></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       
                                        <td>Bakugou Katsuki</td> 
                                            <td>Japan</td>
                                            <td>Paid</td>
                                            <td>Pencil Case</td>

                                    </tr>
                                    <tr>
                                       
                                        <td>Yuki Chan</td>
                                            <td>India</td>
                                            <td>In Process</td>
                                            <td>Paper Lantern</td>
                                    </tr>
                                    <tr>
                                        <td>Ochako Uraraka</td>
                                            <td>Korea</td>
                                            <td>Not Paid</td>
                                            <td>Picnic Basket</td>
    
                                    </tr>
                                    <tr>
                                     
                                        <td>Jin More</td>
                                            <td>USA</td>
                                            <td>Not Paid</td>
                                            <td>Perfume</td>
    
                                    </tr>
                                    <tr>
                                       
                                        <td>Katak Wadiya</td>
                                            <td>India</td>
                                            <td>Paid</td>
                                            <td>Journal Book</td>
    
                                    </tr>
                                    <tr>
                                        <td>Neko Chan</td>
                                            <td>Germany</td>
                                            <td>Paid</td>
                                            <td>Washi Tapes</td>
    
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                         </div>
                        </div>
            </div>

                    
                                

                    <script>
                        function toggleMenu(){
                            let toggle = document.querySelector('.toggle');
                            let navigation = document.querySelector('.navigation');
                            let main = document.querySelector('.main');
                            toggle.classList.toggle('active');
                            navigation.classList.toggle('active');
                            main.classList.toggle('active');
                        }
           </script>            