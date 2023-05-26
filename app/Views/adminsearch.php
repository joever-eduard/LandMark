<html>
  <head>
    <meta charset="UTF-8">
    <title>Search Details Page</title>
    <link rel="stylesheet" href="/assets/css/adminsearch.css">
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
                        <li><a href="/" onclick="logout()">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </Header>

    <div class="document-page">
        <div class="container">
        <h1>Search Land Details</h1>
        </div>

        <div class="search-container">
            <h2>Search by Lot number :</h2>
            <input type="search" placeholder="Lot No." class="search-bar">
            <input type="submit" class="search-button" value="Submit" onclick="window.location.href='/searchinfo/';">
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Lot Number</th>
                        <th>Cad Number</th>
                        <th>Size of Area</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>001-A-001</td>
                        <td>120 sqm</td>
                        <td>Quezon City</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>001-A-002</td>
                        <td>150 sqm</td>
                        <td>Makati City</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>001-A-003</td>
                        <td>200 sqm</td>
                        <td>Taguig City</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </body>
</html>