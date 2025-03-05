const StartingMinutes=10;
let time= StartingMinutes*60;
const countdown=document.getElementById('countdown')
setInterval(updateCountdown,1000);
function updateCountdown(){
    const minutes=Math.floor(time/60);
    let seconds=time%60;
    countdownEl.innerHtml=  `${minutes} :${seconds}`;
    time--;
}