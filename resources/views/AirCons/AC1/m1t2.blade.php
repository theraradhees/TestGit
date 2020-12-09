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
    content: "3.2." counter(section) ": ";
    }
</style>

<div>
    <h1>Level Occupancy </h1>
    <hr>
    <br>
    <ol type="a">
        <li>Aircraft maintaining a level. An aircraft is considered to be maintaining its assigned level as long as the pressure-altitude-derived level information indicates that it is within the appropriate tolerances of the assigned level. </li>
        <li>Aircraft vacating a level. An aircraft cleared to leave a level is considered to have commenced its manoeuvre and vacated the previously occupied level when the pressure-altitude-derived level information indicates a change of more than 90 m (300 ft) in the anticipated direction from its previously assigned level. </li>
        <li>Aircraft passing a level in climb or descent. An aircraft in climb or descent is considered to have crossed a level when the pressure-altitude-derived level information indicates that it has passed this level in the required direction by more than 90 m (300 ft). </li>
        <li>Aircraft reaching a level. An aircraft is considered to have reached the level to which it has been cleared when the elapsed time of three display updates, three sensor updates or 15 seconds, whichever is the greater, has passed since the pressure-altitude-derived level information has indicated that it is within the appropriate tolerances of the assigned level. </li>

    </ol>
    
</div>