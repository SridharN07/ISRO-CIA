// Gravitational Constant
const Mercury = 3.7;
const Venus = 8.87;
const Earth = 9.81;
const Moon = 1.62;
const Mars = 3.71;
const Jupiter = 24.79;
const Saturn = 10.44;
const Uranus = 8.69;
const Neptune = 11.15;
const Pluto = 0.62;

let earthMass, MercuryMass, VenusMass, MoonMass, MarsMass, JupiterMass, SaturnMass, UranusMass, NeptuneMass, PlutoMass;

function calculateMass() {
        let earthWeight = document.getElementById("earthWeight").value;
        earthMass = earthWeight / Earth;
        MercuryMass = earthMass * Mercury;
        VenusMass = earthMass * Venus;
        MarsMass = earthMass * Mars;
        JupiterMass = earthMass * Jupiter;
        SaturnMass = earthMass * Saturn;
        UranusMass = earthMass * Uranus;
        NeptuneMass = earthMass * Neptune;
        PlutoMass = earthMass * Pluto;
        MoonMass = earthMass * Moon;

        document.getElementById("mercuryResult").innerHTML = MercuryMass.toFixed(2);
        document.getElementById("venusResult").innerHTML = VenusMass.toFixed(2);
        document.getElementById("moonResult").innerHTML = MoonMass.toFixed(2);
        document.getElementById("marsResult").innerHTML = MarsMass.toFixed(2);
        document.getElementById("jupiterResult").innerHTML = JupiterMass.toFixed(2);
        document.getElementById("saturnResult").innerHTML = SaturnMass.toFixed(2);
        document.getElementById("uranusResult").innerHTML = UranusMass.toFixed(2);
        document.getElementById("neptuneResult").innerHTML = NeptuneMass.toFixed(2);
        document.getElementById("plutoResult").innerHTML = PlutoMass.toFixed(2);

        document.getElementById("mercury-Result").innerHTML = MercuryMass.toFixed(2);
        document.getElementById("venus-Result").innerHTML = VenusMass.toFixed(2);
        document.getElementById("moon-Result").innerHTML = MoonMass.toFixed(2);
        document.getElementById("mars-Result").innerHTML = MarsMass.toFixed(2);
        document.getElementById("jupiter-Result").innerHTML = JupiterMass.toFixed(2);
        document.getElementById("saturn-Result").innerHTML = SaturnMass.toFixed(2);
        document.getElementById("uranus-Result").innerHTML = UranusMass.toFixed(2);
        document.getElementById("neptune-Result").innerHTML = NeptuneMass.toFixed(2);
        document.getElementById("pluto-Result").innerHTML = PlutoMass.toFixed(2);
    }

    function showMercury() {
        const infoMercury = document.getElementById('info-box-mercury');
        infoMercury.style.display = 'Block';   
        document.getElementById('gravity-mercury').innerHTML = Mercury;     
    }
    function hideMercury() {
        const infoMercury = document.getElementById('info-box-mercury');
        infoMercury.style.display = 'none';
    }

    function showVenus() {
        const infoVenus = document.getElementById('info-box-venus');
        infoVenus.style.display = 'Block';
        document.getElementById('gravity-venus').innerHTML = Venus;
    }
    function hideVenus() {
        const infoVenus = document.getElementById('info-box-venus');
        infoVenus.style.display = 'none';
    }

    function showMoon() {
        const infoMoon = document.getElementById('info-box-moon');
        infoMoon.style.display = 'Block';   
        document.getElementById('gravity-moon').innerHTML = Moon;     
    }
    function hideMoon() {
        const infoMoon = document.getElementById('info-box-moon');
        infoMoon.style.display = 'none';
    }

    function showMars() {
        const infoMars = document.getElementById('info-box-mars');
        infoMars.style.display = 'Block';   
        document.getElementById('gravity-mars').innerHTML = Mars;     
    }
    function hideMars() {
        const infoMars = document.getElementById('info-box-mars');
        infoMars.style.display = 'none';
    }

    function showJupiter() {
        const infoJupiter = document.getElementById('info-box-jupiter');
        infoJupiter.style.display = 'Block';   
        document.getElementById('gravity-jupiter').innerHTML = Jupiter;     
    }
    function hideJupiter() {
        const infoJupiter = document.getElementById('info-box-jupiter');
        infoJupiter.style.display = 'none';
    }
    
    function showSaturn() {
        const infoSaturn = document.getElementById('info-box-saturn');
        infoSaturn.style.display = 'Block';   
        document.getElementById('gravity-saturn').innerHTML = Saturn;     
    }
    function hideSaturn() {
        const infoSaturn = document.getElementById('info-box-saturn');
        infoSaturn.style.display = 'none';
    }

    function showUranus() {
        const infoUranus = document.getElementById('info-box-uranus');
        infoUranus.style.display = 'Block';   
        document.getElementById('gravity-uranus').innerHTML = Uranus;     
    }
    function hideUranus() {
        const infoUranus = document.getElementById('info-box-uranus');
        infoUranus.style.display = 'none';
    }

    function showNeptune() {
        const infoNeptune = document.getElementById('info-box-neptune');
        infoNeptune.style.display = 'Block';   
        document.getElementById('gravity-neptune').innerHTML = Neptune;     
    }
    function hideNeptune() {
        const infoNeptune = document.getElementById('info-box-neptune');
        infoNeptune.style.display = 'none';
    }

    function showPluto() {
        const infoPluto = document.getElementById('info-box-pluto');
        infoPluto.style.display = 'Block';   
        document.getElementById('gravity-pluto').innerHTML = Pluto;     
    }
    function hidePluto() {
        const infoPluto = document.getElementById('info-box-pluto');
        infoPluto.style.display = 'none';
    }