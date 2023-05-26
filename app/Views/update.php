<html>
    <head>
        <title>
            Update Land Details
        </title>
        <link rel="stylesheet" href="/assets/css/update.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <Header>
            <div class="navbar">
            <img src="/assets/images/icon2.png" class="logo">
                <ul>
                    <li><a href="/adminhome">Home</a></li>
                    <li><a href="/adminabout">About</a></li>
                    <li><a href="#">Virtual Map</a></li>
                    <li><a href="/adminsearch">Search Land</a></li>
                    <li><a href="/documents">Land Documents</a></li>
                    <li><a href="/reports">Reports</a></li>
                    <li><a href="/profile">
                        <img src="/assets/images/user.png" alt="Profile" class="user">
                      </a>
                        <ul class="dropdown">
                            <li><a href="/homepage" onclick="logout()">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </Header>
            
        <div class="wrapper" style="background-color: 0054A5;">
            <h1>Update Land Details</h1>
            <form action="#">
                <input type="text" placeholder="Lot No. :">
                <input type="text" placeholder="Cad No. :">
                <input type="text" placeholder="Size of Area :">
                <input type="text" placeholder="Location :">
                <input type="text" placeholder="Phase :">
                <input type="text" placeholder="BLLM :">
                <input type="text" placeholder="Distance to Point 1 :">
                <input type="text" placeholder="Land Owner :">
                <input type="text" placeholder="Status :">
                <input type="text" placeholder="Lot Valuation Amount :">
                <input type="text" placeholder="Tree Valuation Amount :">
                <input type="text" placeholder="Disturbance Amount">
                <input type="text" placeholder="House Structer Amount :">
            </form>
            <button onclick="location.href='/documents'" type="button">
                Update</button>
        </div>
        
    </body>
