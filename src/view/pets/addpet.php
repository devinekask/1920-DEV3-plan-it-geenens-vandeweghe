<form id="multiphase" onsubmit="return false">
  <input type="hidden" name="action" value="insertPet">
    <fieldset id="phase1">
      <legend>Which kind of animal would you like to add?</legend>
      <select id="animal" name="animal">
        <option value="1">Bird</option>
        <option value="2">Dog</option>
        <option value="3">Cat</option>
        <option value="4">Horse</option>
        <option value="5">Fish</option>
        <option value="6">Other</option>
      </select>
      <button onclick="processPhase1()">Next step</button>
    </fieldset>

    <fieldset class="hidden" id="phase2">
      <legend>What is the name of this lovely <span id="js-insanimal"></span>?</legend>
      <input type="text" id="aname" name="aname"><br>
      <button onclick="processPhase2()">Next step</button>
    </fieldset>

    <fieldset class="hidden" id="phase3">
      <legend>When was <span id="js-insaname"></span> born to this world?</legend>
      <input type="date" id="abirthdate" name="abirthdate"><br>
      <button onclick="processPhase3()">Next step</button>
    </fieldset>

    <fieldset class="hidden" id="phase4">
      <legend>Was <span id="js-insaname3"></span> chipped?</legend>
      <!-- <input type="button" id="chipped" name="chipped" value="yes"><br>
      <input type="button" id="chipped" name="chipped" value="no"><br> -->
      <select id="achipped" name="achipped">
        <option value="yes">Yes!</option>
        <option value="no">No.</option>
      </select>
      <button onclick="processPhase4()">Next step</button>
    </fieldset>

    <fieldset class="hidden" id="phase5">
      <legend>What is <span id="js-insaname4">'s chip-id?</legend>
      <input type="number" id="achipid" name="achipid"><br>
      <button onclick="processPhase5()">Next step</button>
    </fieldset>

    <fieldset class="hidden" id="phase6">
      <legend>What is <span id="js-insaname6">'s gender?</legend>
      <select id="agender" name="agender">
        <option value="0">Male</option>
        <option value="1">Female</span></option>
      </select>
      <button onclick="processPhase6()">Next step</button>
    </fieldset>

    <fieldset class="hidden" id="phase7">
      <legend>Who is the owner of <span id="js-insaname7">?(put 0 if not known)</legend>
      <input type="text" name="aowner"><br>
      <button type="submit" onclick="submitForm()" value="Add Pet">Add my pet!</button>
    </fieldset>
</form>
