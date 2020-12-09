<style>
    h1 { 
        text-align:center;
    }
    p, h2, h3, li{
        text-align: justify;
    
    }
    .thin-border {
        border-color: black;
        border-width: 3px;
        border-style: solid;
    }

    body {
  counter-reset: section;
    }

    h2::before {
    counter-increment: section; 
    content: "1.1." counter(section) ": ";
    }
</style>

<div>
    <h1>Situation Display</h1>
    <hr>

    <ol type="a">
        <li>A situation display providing surveillance information to the controller shall, as a minimum, include position indications, map information required to provide ATS surveillance services and, where available, information concerning the identity of the aircraft and the aircraft level.</li>
        <p></p>
        <li>The ATS surveillance system shall provide for a continuously updated presentation of surveillance information, including position indications.</li>
        <p></p>
        <li>Position indications may be displayed as:</li>
        <ol>
           <li>individual position symbols, e.g. PSR, SSR, ADS-B or MLAT symbols, or combined symbols;</li> 
           <li>PSR blips; and</li>
           <li>SSR responses.</li>
        </ol>
        <p></p>
        <li>When applicable, distinct symbols should be used for presentation of:</li>
        <ol>
            <li>unintentionally duplicated SSR codes and/or aircraft identification that are unintentionally duplicated;</li>
            <li>predicted positions for a non-updated track; and</li>
            <li>plot and track data.</li>
        </ol>
        <p></p>
        <li>Where surveillance data quality degrades such that services need to be limited, symbology or other means shall be used to provide the controller with an indication of the condition.</li>
        <p></p>
        <li>Reserved SSR codes, including 7500, 7600 and 7700, operation of IDENT, ADS-B emergency and/or urgency modes, safety-related alerts and warnings as well as information related to automated coordination shall be presented in a clear and distinct manner, providing for ease of recognition.</li>
        <p></p>
        <li>Labels associated with displayed targets should be used to provide, in alphanumeric form, relevant information derived from the means of surveillance and, where necessary, the flight data processing system.</li>
        <p></p>
        <li>Labels shall, as a minimum, include information relating to the identity of the aircraft, e.g. SSR code or aircraft identification and, if available, pressure-altitude-derived level information. This information may be obtained from SSR Mode A, SSR Mode C, SSR Mode S and/or ADS-B.</li>
        <p></p>
        <li>Labels shall be associated with their position indications in a manner precluding erroneous identification by or confusion on the part of the controller. All label information shall be presented in a clear and concise manner.</li>
        <p></p>
    </ol>
</div>