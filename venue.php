<?php
$pageTitle = "Venue & Accommodation";
$currentPage = "venue";
include 'includes/header.php';
?>

<style>
.alternative-accommodations .card img {
    height: 200px; /* Fixed height for all hotel images */
    object-fit: cover; /* This ensures images cover the area without distortion */
    width: 100%;
}

.alternative-accommodations .card {
    transition: transform 0.3s ease;
}

.alternative-accommodations .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
</style>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <h1>Venue & Accommodation</h1>
        </div>
    </header>

    <!-- Main Venue Section -->
    <section class="main-venue py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="images/venue.jpg" alt="Lagos Marriott Hotel Ikeja" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6">
                    <h2 class="text-success mb-4">Conference Venue</h2>
                    <p class="mb-4">The 2024 Supply Chain Research Summit will be held at the Lagos Marriott Hotel Ikeja.</p>
                    <p class="mb-4">Located in the heart of Ikeja's business district, the Lagos Marriott Hotel offers world-class facilities and convenient access for all attendees. The hotel features modern conference facilities, high-speed internet, and exceptional service to ensure a productive and comfortable experience.</p>
                    <p class="mb-4">The venue's strategic location provides easy access to local transportation and is surrounded by various dining and entertainment options.</p>
                    <div class="venue-details">
                        <p><i class="fas fa-map-marker-alt text-success me-2"></i>122 Joel Ogunnaike Street, Ikeja GRA, Lagos</p>
                        <p><i class="fas fa-envelope text-success me-2"></i><a href="mailto:loslg.reservations@marriott.com" class="text-success">loslg.reservations@marriott.com</a></p>
                        <a href="http://www.lagosmarriotthotelikeja.com/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">Visit Hotel Website</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alternative Accommodations -->
    <section class="alternative-accommodations py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-success mb-5">Alternative Accommodation Options</h2>
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="lead mb-4">While the Lagos Marriott Hotel Ikeja is our primary conference venue, we understand that participants may have different preferences and budgets. We've carefully selected these alternative accommodations based on their proximity to the venue, quality of service, and value for money.</p>
                    <div class="alert alert-success" role="alert">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Pro Tip:</strong> Book your accommodation early as Lagos is a busy business hub. Contact our team if you need assistance with reservations or have specific requirements.
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <!-- Radisson Blu -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="images/hotels/radisson.jpg" class="card-img-top" alt="Radisson Blu Hotel">
                        <div class="card-body">
                            <h3 class="card-title h5">Radisson Blu Ikeja</h3>
                            <p class="card-text mb-3">1.4 km from venue (19 min walk, 4 min drive)</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-map-marker-alt text-success me-2"></i>38/40 Isaac John Street, G.R.A. Ikeja</li>
                                <li><i class="fas fa-envelope text-success me-2"></i><a href="mailto:reservations.ikeja@radissonblu.com" class="text-success">reservations.ikeja@radissonblu.com</a></li>
                            </ul>
                            <a href="http://www.radissonblu.com/en/hotel-lagos-ikeja" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- Amber Residence -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="images/hotels/amber.jpg" class="card-img-top" alt="Amber Residence">
                        <div class="card-body">
                            <h3 class="card-title h5">Amber Residence Ikeja GRA</h3>
                            <p class="card-text mb-3">1.0 km from venue (14 min walk, 5 min drive)</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-map-marker-alt text-success me-2"></i>16 Esugbayi St., Off Oba Akinjobi Way</li>
                                <li><i class="fas fa-envelope text-success me-2"></i><a href="mailto:amberresidence.reservations@gmail.com" class="text-success">amberresidence.reservations@gmail.com</a></li>
                            </ul>
                            <a href="http://www.amberresidenceng.com/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- Providence Hotel -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="images/hotels/providence.jpg" class="card-img-top" alt="The Providence Hotel">
                        <div class="card-body">
                            <h3 class="card-title h5">The Providence Hotel</h3>
                            <p class="card-text mb-3">700m from venue (9 min walk, 2 min drive)</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-map-marker-alt text-success me-2"></i>12A Oba Akinjobi Way, GRA Ikeja</li>
                                <li><i class="fas fa-envelope text-success me-2"></i><a href="mailto:sales@providencelagos.com" class="text-success">sales@providencelagos.com</a></li>
                            </ul>
                            <a href="#" class="btn btn-outline-success">Contact Hotel</a>
                        </div>
                    </div>
                </div>
                <!-- Shoregate Hotels -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="images/hotels/shoregate.jpg" class="card-img-top" alt="Shoregate Hotels">
                        <div class="card-body">
                            <h3 class="card-title h5">Shoregate Hotels Limited</h3>
                            <p class="card-text mb-3">450m from venue (6 min walk)</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-map-marker-alt text-success me-2"></i>29 Joel Ojunnaike St</li>
                                <li><i class="fas fa-envelope text-success me-2"></i><a href="mailto:reservations@shoregatehotels.com" class="text-success">reservations@shoregatehotels.com</a></li>
                            </ul>
                            <a href="http://www.shoregatehotels.com/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- The Regent -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="images/hotels/regent.jpg" class="card-img-top" alt="The Regent Lagos">
                        <div class="card-body">
                            <h3 class="card-title h5">The Regent Lagos</h3>
                            <p class="card-text mb-3">500m from venue (7 min walk, 1 min drive)</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-map-marker-alt text-success me-2"></i>25 Joel Ojunnaike St</li>
                                <li><i class="fas fa-envelope text-success me-2"></i><a href="mailto:reservation@theregentlagos.com" class="text-success">reservation@theregentlagos.com</a></li>
                            </ul>
                            <a href="http://www.theregentlagos.com/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- Sheraton Lagos -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="images/hotels/sheraton.jpg" class="card-img-top" alt="Sheraton Lagos Hotel">
                        <div class="card-body">
                            <h3 class="card-title h5">Sheraton Lagos Hotel (Marriott Bonvoy)</h3>
                            <p class="card-text mb-3">1.7 km from venue (23 min walk, 5 min drive)</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-map-marker-alt text-success me-2"></i>30 Mobolaji Bank Anthony Way, Ikeja Lagos</li>
                            </ul>
                            <a href="http://www.marriott.com/en-us/hotels/lossi-sheraton-lagos-hotel/overview/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Notes -->
    <section class="notes py-4">
        <div class="container">
            <div class="alert alert-info">
                <h4 class="alert-heading"><i class="fas fa-info-circle me-2"></i>Important Notes:</h4>
                <ul class="mb-0">
                    <li>Some hotels offer special discount codes for summit attendees - please mention them when booking</li>
                    <li>All walking and driving times are approximate and may vary based on traffic conditions</li>
                    <li>Early booking is recommended as rooms may fill up quickly</li>
                    <li>For any assistance with bookings, please contact the summit organizing team</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Area Information -->
    <section class="area-info py-5">
        <div class="container">
            <h2 class="text-center text-success mb-5">About the Area</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fas fa-car fa-3x text-success"></i>
                            </div>
                            <h3 class="card-title h5 text-center">Transportation</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>15 mins from Murtala Muhammed Airport</li>
                                <li><i class="fas fa-check text-success me-2"></i>Hotel shuttle service available</li>
                                <li><i class="fas fa-check text-success me-2"></i>Reliable taxi services in the area</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fas fa-utensils fa-3x text-success"></i>
                            </div>
                            <h3 class="card-title h5 text-center">Dining & Entertainment</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Multiple restaurants within walking distance</li>
                                <li><i class="fas fa-check text-success me-2"></i>Shopping malls nearby</li>
                                <li><i class="fas fa-check text-success me-2"></i>Local and international cuisine</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fas fa-shield-alt fa-3x text-success"></i>
                            </div>
                            <h3 class="card-title h5 text-center">Safety & Security</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>24/7 security personnel</li>
                                <li><i class="fas fa-check text-success me-2"></i>Safe neighborhood</li>
                                <li><i class="fas fa-check text-success me-2"></i>Emergency services nearby</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>