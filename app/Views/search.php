<html>
  <head>
    <meta charset="UTF-8">
    <title>Search Details Page</title>
    <link rel="stylesheet" href="/assets/css/search.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  </head>
  <body>
    <Header>
        <div class="navbar">
        <img src="/assets/images/icon2.png" class="logo">
            <ul>
                <li><a href="/homepage">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="#">Virtual Map</a></li>
                <li><a href="/search">Search Land</a></li>
                <li><a href="/login">Login</a></li>
                </li>
            </ul>
        </div>
    </Header>

    <div class="document-page">
        <div class='container'>
        <h1>Search Land Details</h1>
        </div>

        <div class="search-container">
            <h2>Search by Lot number :</h2>
            <input type="search" placeholder="Lot No." class="search-bar">
            <input type="submit" class="search-button" value="Submit">
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