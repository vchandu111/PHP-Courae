<?php
    $restaurants = [
        [
            'name' => 'Spice Garden',
            'location' => 'Mumbai, Maharashtra',
            'cuisine' => 'Indian',
            'cost_for_two' => 1500,
            'contact' => '+91-912-345-6789',
            'description' => 'Authentic Indian flavors with a modern twist. Perfect for family gatherings and corporate events.'
        ],
        [
            'name' => 'Olive Bistro',
            'location' => 'Hyderabad, Telangana',
            'cuisine' => 'Mediterranean',
            'cost_for_two' => 2000,
            'contact' => '+91-912-555-6789',
            'description' => 'Cozy bistro with a stunning view of the lake, serving classic Mediterranean dishes.'
        ],
        [
            'name' => 'The Sushi Point',
            'location' => 'Bangalore, Karnataka',
            'cuisine' => 'Japanese',
            'cost_for_two' => 2500,
            'contact' => '+91-892-345-1234',
            'description' => 'Experience traditional Japanese sushi and sashimi crafted by expert chefs.'
        ],
        [
            'name' => 'Goa Portuguese',
            'location' => 'Panaji, Goa',
            'cuisine' => 'Portuguese',
            'cost_for_two' => 1700,
            'contact' => '+91-982-237-1123',
            'description' => 'Savor the taste of Portugal with our authentic seafood and grill.'
        ],
        [
            'name' => 'Punjabi Dhaba',
            'location' => 'Amritsar, Punjab',
            'cuisine' => 'Punjabi',
            'cost_for_two' => 900,
            'contact' => '+91-981-405-6780',
            'description' => 'Deliciously hearty Punjabi meals right from the heart of Punjab.'
        ],
        [
            'name' => 'Kerala Café',
            'location' => 'Kochi, Kerala',
            'cuisine' => 'South Indian',
            'cost_for_two' => 800,
            'contact' => '+91-484-223-8970',
            'description' => 'Traditional flavors from Kerala with a tranquil dining experience.'
        ],
        [
            'name' => 'Chennai Spices',
            'location' => 'Chennai, Tamil Nadu',
            'cuisine' => 'Chettinad',
            'cost_for_two' => 1200,
            'contact' => '+91-44-432-5423',
            'description' => 'Spicy and aromatic Chettinad cuisine that tantalizes the taste buds.'
        ],
        [
            'name' => 'Bengal Bites',
            'location' => 'Kolkata, West Bengal',
            'cuisine' => 'Bengali',
            'cost_for_two' => 1100,
            'contact' => '+91-33-406-7894',
            'description' => 'Dive into the rich culture of Bengal with our exclusive fish dishes.'
        ],
        [
            'name' => 'Rajasthani Rasoi',
            'location' => 'Jaipur, Rajasthan',
            'cuisine' => 'Rajasthani',
            'cost_for_two' => 1300,
            'contact' => '+91-141-230-3210',
            'description' => 'Experience the royal flavors of Rajasthan with our thali.'
        ],
        [
            'name' => 'Himalayan Delights',
            'location' => 'Dehradun, Uttarakhand',
            'cuisine' => 'Tibetan',
            'cost_for_two' => 750,
            'contact' => '+91-135-277-8963',
            'description' => 'Enjoy soothing Tibetan dishes with a scenic view of the hills.'
        ],
        [
            'name' => 'Indigo Deli',
            'location' => 'Pune, Maharashtra',
            'cuisine' => 'European',
            'cost_for_two' => 2100,
            'contact' => '+91-20-406-7899',
            'description' => 'A European delight in the heart of Pune, offering a refined dining experience with a variety of continental dishes.'
        ],
        [
            'name' => 'Andhra Spice',
            'location' => 'Visakhapatnam, Andhra Pradesh',
            'cuisine' => 'Andhra',
            'cost_for_two' => 1000,
            'contact' => '+91-891-334-1122',
            'description' => 'Authentic Andhra cuisine with bold flavors and spices, specializing in biryani and traditional pickles.'
        ]
    ];
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Restaurant Listings 🍔</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .navbar {
        color: teal;
        font-weight: bold;
        padding: 15px 20px;
        text-align: center;
        font-size: 20px;
        box-shadow: 0 5px 5px rgba(0,0,0,0.1);

    }
    .content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .card {
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
        margin: 10px;
        width: 100%; /* Full width on small screens */
        max-width: 300px; /* Maximum card width */
    }
    .card-header {
        background: #FF6347;
        color: white;
        padding: 10px 15px;
        font-size: 18px;
        text-align: center;
    }
    .card-body {
        padding: 15px;
        font-size: 14px;
        color: #333;
    }
    .card-body p {
        margin: 5px 0;
    }

    h4{
        text-align: right;
        padding-right: 20px;
    }

    /* Media Queries */
    @media (min-width: 600px) {
        .content {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card {
            width: calc(50% - 20px); /* Adjust width for medium screens */
        }
    }
    @media (min-width: 1024px) {
        .card {
            width: calc(33.333% - 20px); /* Adjust width for large screens */
        }
    }
</style>
</head>
<body>

<div class="navbar">
    Restaurant Listings
</div>

<h4>Total Restaurants - <?= count($restaurants)?> </h4>

<div class="content">

        <?php foreach($restaurants as $restaurant):?>
            <div class="card">
                <div class="card-header"> <?= $restaurant["name"] ?></div>
                <div class="card-body">
                    <p><strong>Location:</strong> <?= $restaurant["location"] ?> </p>
                    <p><strong>Cuisine:</strong> <?= $restaurant["cuisine"] ?> </p>
                    <p><strong>Cost for Two:</strong> <?= $restaurant["cost_for_two"] ?></p>
                    <p><strong>Contact:</strong> <?= $restaurant["contact"] ?></p>
                    <p><strong>Description:</strong> <?= $restaurant["description"] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
</div>

</body>
</html>
