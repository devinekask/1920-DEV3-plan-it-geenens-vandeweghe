<form class="add-form" id="multiphasee" onsubmit="return false">
  <input type="hidden" name="action" value="insertEvent">
    <fieldset id="phase1e">
      <legend class="add-legend">Which kind of animal would you like to add an event for?</legend>
      <select class="add-select" id="epetid" name="epetid">
      <?php if(!empty($petse)) : ?>
      <?php foreach ($petse as $pet): ?>
          <?php echo "<option value=\"" . $pet['id'] . "\">" . $pet['name'] . "</option>"; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      </select>
      <button class="add-button" onclick="processPhase1e()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase2e">
      <legend class="add-legend">Which event do you want to add?</legend>
      <select class="add-select" id="etype" name="etype">
        <option value="1">Vet</option>
        <option value="2">Medication/Pills</option>
        <option value="3">Vaccination</option>
      </select>
      <button class="add-button" onclick="processPhase2e()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase3e">
      <legend class="add-legend">Give the event a name.</legend>
      <input class="add-input" type="text" id="ename" name="ename"><br>
      <button class="add-button" onclick="processPhase3e()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase4e">
      <legend class="add-legend">Please give the event a description.</legend>
      <input class="add-input add-input-big" type="text" id="edescription" name="edescription"><br>
      <button class="add-button" onclick="processPhase4e()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase5e">
      <legend class="add-legend">When is this event?</legend>
      <input class="add-input add-input-big" type="date" id="edate" name="edate"><br>
      <button class="add-button" onclick="processPhase5e()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase6e">
      <legend class="add-legend">What time is this event?</legend>
      <input class="add-input" type="time" id="etime" name="etime"><br>
      <button class="add-button" onclick="processPhase6e()">NEXT<br>STEP</button>
    </fieldset>

    <fieldset class="hidden" id="phase7e">
      <legend class="add-legend">Where is this event taking place?</legend>
      <input class="add-input" type="text" id="elocation" name="elocation"">
      <button class="add-button-submit" type="submit" onclick="submitForme()" value="Add event">ADD MY<br>EVENT</button>
    </fieldset>
</form>
