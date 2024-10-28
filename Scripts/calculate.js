// Orbital Constant of All Planets.
const Mercury = 0.2408467;
const Venus = 0.61519726;
const Earth = 1;
const Moon = 0.0748;
const Mars = 1.8808158;
const Jupiter = 11.862615;
const Saturn = 29.447498;
const Uranus = 84.016846;
const Neptune = 164.79132;
const Pluto = 248.00;

function calculateAge() {
    let earthAge = document.getElementById("earthAge").value;

        let MercuryAge = earthAge / Mercury;
        let VenusAge = earthAge / Venus;
        let MarsAge = earthAge / Mars;
        let JupiterAge = earthAge / Jupiter;
        let SaturnAge = earthAge / Saturn;
        let UranusAge = earthAge / Uranus;
        let NeptuneAge = earthAge / Neptune;
        let PlutoAge = earthAge / Pluto;
        let MoonAge = earthAge / Moon;

        document.getElementById("mercuryResult").innerHTML = MercuryAge.toFixed(2);
        document.getElementById("venusResult").innerHTML = VenusAge.toFixed(2);
        document.getElementById("moonResult").innerHTML = MoonAge.toFixed(2);
        document.getElementById("marsResult").innerHTML = MarsAge.toFixed(2);
        document.getElementById("jupiterResult").innerHTML = JupiterAge.toFixed(2);
        document.getElementById("saturnResult").innerHTML = SaturnAge.toFixed(2);
        document.getElementById("uranusResult").innerHTML = UranusAge.toFixed(2);
        document.getElementById("neptuneResult").innerHTML = NeptuneAge.toFixed(2);
        document.getElementById("plutoResult").innerHTML = PlutoAge.toFixed(2);

        document.getElementById("mercury-Result").innerHTML = MercuryAge.toFixed(2);
        document.getElementById("venus-Result").innerHTML = VenusAge.toFixed(2);
        document.getElementById("moon-Result").innerHTML = MoonAge.toFixed(2);
        document.getElementById("mars-Result").innerHTML = MarsAge.toFixed(2);
        document.getElementById("jupiter-Result").innerHTML = JupiterAge.toFixed(2);
        document.getElementById("saturn-Result").innerHTML = SaturnAge.toFixed(2);
        document.getElementById("uranus-Result").innerHTML = UranusAge.toFixed(2);
        document.getElementById("neptune-Result").innerHTML = NeptuneAge.toFixed(2);
        document.getElementById("pluto-Result").innerHTML = PlutoAge.toFixed(2);
}


function showMercury() {
    const infoMercury = document.getElementById('info-box-mercury');
    infoMercury.style.display = 'Block';   
    document.getElementById('age-mercury').innerHTML = Mercury;     
}
function hideMercury() {
    const infoMercury = document.getElementById('info-box-mercury');
    infoMercury.style.display = 'none';
}

function showVenus() {
    const infoVenus = document.getElementById('info-box-venus');
    infoVenus.style.display = 'Block';
    document.getElementById('age-venus').innerHTML = Venus;
}
function hideVenus() {
    const infoVenus = document.getElementById('info-box-venus');
    infoVenus.style.display = 'none';
}

function showMoon() {
    const infoMoon = document.getElementById('info-box-moon');
    infoMoon.style.display = 'Block';   
    document.getElementById('age-moon').innerHTML = Moon;     
}
function hideMoon() {
    const infoMoon = document.getElementById('info-box-moon');
    infoMoon.style.display = 'none';
}

function showMars() {
    const infoMars = document.getElementById('info-box-mars');
    infoMars.style.display = 'Block';   
    document.getElementById('age-mars').innerHTML = Mars;     
}
function hideMars() {
    const infoMars = document.getElementById('info-box-mars');
    infoMars.style.display = 'none';
}

function showJupiter() {
    const infoJupiter = document.getElementById('info-box-jupiter');
    infoJupiter.style.display = 'Block';   
    document.getElementById('age-jupiter').innerHTML = Jupiter;     
}
function hideJupiter() {
    const infoJupiter = document.getElementById('info-box-jupiter');
    infoJupiter.style.display = 'none';
}

function showSaturn() {
    const infoSaturn = document.getElementById('info-box-saturn');
    infoSaturn.style.display = 'Block';   
    document.getElementById('age-saturn').innerHTML = Saturn;     
}
function hideSaturn() {
    const infoSaturn = document.getElementById('info-box-saturn');
    infoSaturn.style.display = 'none';
}

function showUranus() {
    const infoUranus = document.getElementById('info-box-uranus');
    infoUranus.style.display = 'Block';   
    document.getElementById('age-uranus').innerHTML = Uranus;     
}
function hideUranus() {
    const infoUranus = document.getElementById('info-box-uranus');
    infoUranus.style.display = 'none';
}

function showNeptune() {
    const infoNeptune = document.getElementById('info-box-neptune');
    infoNeptune.style.display = 'Block';   
    document.getElementById('age-neptune').innerHTML = Neptune;     
}
function hideNeptune() {
    const infoNeptune = document.getElementById('info-box-neptune');
    infoNeptune.style.display = 'none';
}

function showPluto() {
    const infoPluto = document.getElementById('info-box-pluto');
    infoPluto.style.display = 'Block';   
    document.getElementById('age-pluto').innerHTML = Pluto;     
}
function hidePluto() {
    const infoPluto = document.getElementById('info-box-pluto');
    infoPluto.style.display = 'none';
}