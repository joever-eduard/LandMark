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
            <form action="/land/update/<?= $lotId ?>" method="post">
                <input type="text" name="lot_no" value="<?= set_value('lot_no', isset($lot['lot_no']) ? $lot['lot_no'] : '') ?>" placeholder="Lot No. :" >
                <input type="text" name="size_of_area" value="<?= set_value('size_of_area', isset($lot['size_of_area']) ? $lot['size_of_area'] : '') ?>" placeholder="Size of Area :">
                <input type="text" name="cad_no" value="<?= set_value('cad_no', isset($lot['cad_no']) ? $lot['cad_no'] : '') ?>"  placeholder="Cad No. :">
                <input type="text" name="location" value="<?= set_value('location', isset($lot['location']) ? $lot['location'] : '') ?>" placeholder="Location :">
                <input type="text" name="phase" value="<?= set_value('phase', isset($lot['phase']) ? $lot['phase'] : '') ?>" placeholder="Phase :">
                <input type="text" name="bllm" value="<?= set_value('bllm', isset($propertyDistance['bllm']) ? $propertyDistance['bllm'] : '') ?>"  placeholder="BLLM :">
                <input type="text" name="distance_to_point1" value="<?= set_value('distance_to_point1', isset($propertyDistance['distance_to_point1']) ? $propertyDistance['distance_to_point1'] : '') ?>" placeholder="Distance to Point 1 :">
                <input type="text" name="land_owner" value="<?= set_value('land_owner', isset($lot['land_owner']) ? $lot['land_owner'] : '') ?>" placeholder="Land Owner :">
                <input type="text" name="status" value="<?= set_value('status', isset($lot['status']) ? $lot['status'] : '') ?>" placeholder="Status :">
                <input type="text" name="valuation_amount" value="<?= set_value('valuation_amount', isset($propertyValuation['valuation_amount']) ? $propertyValuation['valuation_amount'] : '') ?>"placeholder="Lot Valuation Amount :">
                <input type="text" name="tree_valuation_amount" value="<?= set_value('tree_valuation_amount', isset($propertyValuation['tree_valuation_amount']) ? $propertyValuation['tree_valuation_amount'] : '') ?>"placeholder="Tree Valuation Amount :">
                <input type="text" name="disturbance_amount" value="<?= set_value('disturbance_amount', isset($propertyValuation['disturbance_amount']) ? $propertyValuation['disturbance_amount'] : '') ?>"placeholder="Disturbance Amount :">
                <input type="text" name="house_structure_amount" value="<?= set_value('house_structure_amount', isset($propertyValuation['house_structure_amount']) ? $propertyValuation['house_structure_amount'] : '') ?>" placeholder="House Structure Amount :">
                <button type="submit">Update</button>
            </form>
        </div>
        
    </body>
