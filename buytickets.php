<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
// echo "<script> alert('Welcome, " . $_SESSION['user'] . "!'); </script>";
include_once 'database/movieRepository.php';

$movieRepository = new MovieRepository();
$movieNames = $movieRepository->getAllMovieNames();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orikino|Buy Tickets</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>

<body class="buytickets-body">
    <header class="header" style="background:transparent;">
        <a href="" class="logo"><img src="logo2.png" alt="" height="100" width="100"></a>

        <nav class="navbar">
            <a href="homepage.php">Home</a>
            <a href="movies.php">movies</a>
            <a href="comingsoon.php">coming soon</a>
            <a href="aboutus.php">about us</a>

        </nav>
    </header>
    
    <div class="wrapper-BT">
        <div class="mesi">
        <div class="movie-container">
        <label for="movie">Pick a movie</label>
        <select name="movie" id="movie">
            <?php
            foreach ($movieNames as $movieName) {
                echo "<option value=5 id=$movieName >$movieName</option>";
            }
            ?>
        </select>
        </div>
        <div class="schedule-container">
            <label for="schedule">Pick a schedule</label>
            <select name="schedule" id="schedule">
                <option value="11:00">11:00</option>
                <option value="13:00">13:00</option>
                <option value="15:30">15:30</option>
                <option value="17:00">17:00</option>
                <option value="19:30">19:30</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
             </select>
        </div>

            <ul class="showcase">
                <li>
                    <div class="seat"></div>
                    <small>N/A</small>
                </li>
                <li>
                    <div class="seat S"></div>
                    <small>Selected</small>
                </li>
                <li>
                    <div class="seat R"></div>
                    <small>Reserved</small>
                </li>
            </ul>

            <div class="kino">
                <div class="screen"></div>
                <div class="row">
                    <div id="1A" class="seat"></div>
                    <div id="2A" class="seat"></div>
                    <div id="3A" class="seat"></div>
                    <div id="4A" class="seat"></div>
                    <div id="5A" class="seat"></div>
                    <div id="6A" class="seat"></div>
                    <div id="7A" class="seat"></div>
                </div>
                <div class="row">
                    <div id="1B" class="seat"></div>
                    <div id="2B" class="seat"></div>
                    <div id="3B" class="seat"></div>
                    <div id="4B" class="seat"></div>
                    <div id="5B" class="seat"></div>
                    <div id="6B" class="seat"></div>
                    <div id="7B" class="seat"></div>
                </div>
                <div class="row">
                    <div id="1C" class="seat"></div>
                    <div id="2C" class="seat"></div>
                    <div id="3C" class="seat"></div>
                    <div id="4C" class="seat"></div>
                    <div id="5C" class="seat"></div>
                    <div id="6C" class="seat"></div>
                    <div id="7C" class="seat"></div>
                </div>
                <div class="row">
                    <div id="1D" class="seat"></div>
                    <div id="2D" class="seat"></div>
                    <div id="3D" class="seat"></div>
                    <div id="4D" class="seat"></div>
                    <div id="5D" class="seat"></div>
                    <div id="6D" class="seat"></div>
                    <div id="7D" class="seat"></div>
                </div>
                <div class="row">
                    <div id="1E" class="seat"></div>
                    <div id="2E" class="seat"></div>
                    <div id="3E" class="seat"></div>
                    <div id="4E" class="seat"></div>
                    <div id="5E" class="seat"></div>
                    <div id="6E" class="seat"></div>
                    <div id="7E" class="seat"></div>
                </div>
            </div>
            <p class="text-bt">
                Seats selected: <span id="count">0</span> For the price of: <span id="total">0</span>€
            </p>
            <div class="butoni-ticket">
            <a href="#" class="cta" onclick="showTicketInfo()">
                <button type="button">Buy Now</button>
             </a>
            </div>
            <form id="ticketForm" action="ticket.php" method="post">
                <input type="hidden" id="selectedMovie" name="selectedMovie" value="">
                <input type="hidden" id="selectedSchedule" name="selectedSchedule" value="">
                <input type="hidden" id="selectedSeats" name="selectedSeats" value="">
                <input type="hidden" id="userName" name="userName" value="">
                <input type="hidden" id="totalAmount" name="totalAmount" value="">
            </form>
        </div>
    </div>


    <script>


    const kino =document.querySelector(' .kino');
    const seats = document.querySelectorAll('.row .seat:not(.R)');
    const count = document.getElementById('count');
    const total =document.getElementById('total');
    const movieSelect =document.getElementById('movie');

    let ticketPrice = +movieSelect.value;


    function updateSelectedCount(){
        const SelectedSeats=document.querySelectorAll('.row .seat.S');
        const selectedSeatsCount =SelectedSeats.length

        count.innerText= selectedSeatsCount;
        total.innerText= selectedSeatsCount * ticketPrice;

        count.innerText = selectedSeatsCount;
        totalAmount = selectedSeatsCount * ticketPrice; 
        total.innerText = totalAmount; 

        selectedSeats.forEach(seat => {
            seat.classList.remove('.S'); 
            seat.classList.add('.R');    
        });

    }

    movieSelect.addEventListener('change',(e)=>{
        ticketPrice= +e.target.value
        updateSelectedCount();
    })

    kino.addEventListener('click',(e)=>{
        if(e.target.classList.contains('seat') && !e.target.classList.contains('R'))
        {
            e.target.classList.toggle('S');
        }
        updateSelectedCount();
    })

    function showTicketInfo() {
    
        const selectedSeats = document.querySelectorAll('.row .seat.S');
        if (selectedSeats.length === 0) {
            alert("Please select at least one seat before proceeding.");
            return; 
        }

    const selectedSeatsIds = Array.from(selectedSeats).map(seat => seat.id);

    
    var movieSelect = document.getElementById('movie');
    var selectedMovieName = movieSelect.options[movieSelect.selectedIndex].text;

    var schedule = document.getElementById('schedule').value;

    var userName = "<?php echo $_SESSION['user']; ?>";

    var ticketPrice = +movieSelect.value;

    var totalAmount = selectedSeatsIds.length * ticketPrice;

    document.getElementById('selectedMovie').value = selectedMovieName;
    document.getElementById('selectedSchedule').value = schedule;
    document.getElementById('selectedSeats').value = selectedSeatsIds.join(',');
    document.getElementById('userName').value = userName;
    document.getElementById('totalAmount').value = totalAmount; 

    document.getElementById('ticketForm').submit();
    }
    </script>
</body>
</html>