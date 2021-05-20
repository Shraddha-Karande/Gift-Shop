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
                    <div class="cardBox">
                        <div class="card"> 
                            <div><br>
                            
                                <div class="numbers">1,320</div>
                                <div class="cardName">Gifts Sold</div>
                    </div>
                    <div class="iconBox"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="card"> 
                            <div><br>
                            
                                <div class="numbers">2,000</div>
                                <div class="cardName">In Process</div>
                    </div>
                    <div class="iconBox"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                        </div>
                        <div class="card"> 
                            <div><br>
                            
                                <div class="numbers">400</div>
                                <div class="cardName">New Orders</div>
                    </div>
                    <div class="iconBox"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
                        </div>
                        <div class="card"> 
                            <div><br>
                           
                                <div class="numbers">4,500</div>
                                <div class="cardName">Items Left</div>
                    </div>
                    <div class="iconBox"><i class="fa fa-archive" aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="recentOrders">
                            <div class="cardHeader">
                                <h2>Recent Orders</h2>
                               <a href="#" class="btn"> View All</a>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Price</td>
                                        <td>Quantity</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pencil Case</td>
                                        <td>250 Rs</td>
                                        <td>4</td>
                                        <td><span class="status paid">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>Paper Lantern</td>
                                        <td>30 Rs</td>
                                        <td>15</td>
                                        <td><span class="status process">In Process</span></td>
                                    </tr>
                                    <tr>
                                        <td>Picnic Basket</td>
                                        <td>500 Rs</td>
                                        <td>1</td>
                                        <td><span class="status pending">Not Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>Perfume</td>
                                        <td>1500 Rs</td>
                                        <td>2</td>
                                        <td><span class="status pending">Not Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>Journal Book</td>
                                        <td>700 Rs</td>
                                        <td>3</td>
                                        <td><span class="status paid">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>Washi Tapes</td>
                                        <td>30 Rs</td>
                                        <td>10</td>
                                        <td><span class="status paid">Paid</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="recentCustomers">
                            <div class="cardHeader">
                                <h2>Recent Customers</h2>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Sr No.</td>
                                    <td>Name</td>
                                    <td>Country</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bakugou Katsuki</td> 
                                        <td>Japan</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Yuki Chan</td>
                                        <td>India</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ochako Uraraka</td>
                                        <td>Korea</td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jin More</td>
                                        <td>USA</td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Katak Wadiya</td>
                                        <td>India</td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Neko Chan</td>
                                        <td>Germany</td>

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

            function modeChange(){
                let mode = document.querySelector('.mode');
                let main = document.querySelector('.main');

            }
            </script>

            
    </body>
</html>