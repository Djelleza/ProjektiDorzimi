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