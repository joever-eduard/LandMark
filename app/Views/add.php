<html>
    <head>
        <title>
            Add Land Details
        </title>
        <link rel="stylesheet" href="/assets/css/add.css">
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
            <h1>Add Land Details</h1>
            <form action='/add' method="post">
                <input type="text" name="lot_no" placeholder="Lot No. :">
                <input type="text" name="size_of_area" placeholder="Size of Area :">
                <input type="text" name="cad_no" placeholder="Cad No. :">
                <input type="text" name="location" placeholder="Location :">
                <input type="text" name="phase" placeholder="Phase :">
                <input type="text" name="bllm" placeholder="BLLM :">
                <input type="text" name="distance_to_point1" placeholder="Distance to Point 1 :">
                <input type="text" name="land_owner" placeholder="Land Owner :">
                <input type="text" name="status" placeholder="Status :">
                <input type="text" name="valuation_amount" placeholder="Lot Valuation Amount :">
                <input type="text" name="tree_valuation_amount" placeholder="Tree Valuation Amount :">
                <input type="text" name="disturbance_amount" placeholder="Disturbance Amount :">
                <input type="text" name="house_structure_amount" placeholder="House Structure Amount :">
                <button type="submit">Add</button>
            </form>
        </div>
        
    </body>
