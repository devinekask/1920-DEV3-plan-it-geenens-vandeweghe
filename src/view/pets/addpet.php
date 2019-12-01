<form class="add-form" id="multiphase" onsubmit="return false">
  <input type="hidden" name="action" value="insertPet">
    <fieldset id="phase1">
      <legend class="add-legend">Which kind of animal would you like to add?</legend>
      <select class="add-select" id="animal" name="animal">
        <option value="1">Bird</option>
        <option value="2">Dog</option>
        <option value="3">Cat</option>
        <option value="4">Horse</option>
        <option value="5">Fish</option>
        <option value="6">Other</option>
      </select>
      <button class="add-button" onclick="processPhase1()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase2">
      <legend class="add-legend">What is the name of this lovely <span id="js-insanimal"></span>?</legend>
      <input class="add-input" type="text" id="aname" name="aname"><br>
      <button class="add-button" onclick="processPhase2()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase3">
      <legend class="add-legend">When was <span id="js-insaname"></span> born to this world?</legend>
      <input class="add-input" type="date" id="abirthdate" name="abirthdate"><br>
      <button class="add-button" onclick="processPhase3()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase4">
      <legend class="add-legend">Was <span id="js-insaname3"></span> chipped?</legend>
      <select class="add-select" id="achipped" name="achipped">
        <option value="yes">Yes!</option>
        <option value="no">No.</option>
      </select>
      <button class="add-button" onclick="processPhase4()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase5">
      <legend class="add-legend">What is <span id="js-insaname4">'s chip-id?(put 0 if not known)</legend>
      <input class="add-input" type="number" id="achipid" name="achipid"><br>
      <button onclick="processPhase5()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase6">
      <legend class="add-legend">What is <span id="js-insaname6">'s gender?</legend>
      <select class="add-select" id="agender" name="agender">
        <option value="0">Male</option>
        <option value="1">Female</span></option>
      </select>
      <button class="add-button" onclick="processPhase6()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase7">
      <legend class="add-legend">Who is the owner of <span id="js-insaname7">?</legend>
      <input  class="add-input"type="text" name="aowner"><br>
      <button class="add-button-submit" type="submit" onclick="submitForm()" value="Add Pet">ADD MY<br>PET</button>
    </fieldset>
</form>
