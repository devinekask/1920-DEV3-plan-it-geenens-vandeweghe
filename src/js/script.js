let animal, aname, abirthdate, agender, achipped, achipid, aowner;
function _(x) {
  return document.getElementById(x);
}
// Defines all phases, saves them and continues to next
// Kind of animal
function processPhase1() {
  animal = _('animal').value;
  if (animal.length === 1) {
    _('phase1').style.display = 'none';
    _('phase2').style.display = 'block';
    switch (animal) {
    case '1':
      _('js-insanimal').innerHTML = `bird`;
      break;
    case '2':
      _('js-insanimal').innerHTML = `dog`;
      break;
    case '3':
      _('js-insanimal').innerHTML = `cat`;
      break;
    case '4':
      _('js-insanimal').innerHTML = `horse`;
      break;
    case '5':
      _('js-insanimal').innerHTML = `fish`;
      break;
    case '6':
      _('js-insanimal').innerHTML = `animal`;
      break;
    }
  } else {
    alert('Please choose an animal');
  }
}

// Name of pet
function processPhase2() {
  aname = _('aname').value;
  if (aname.length > 0) {
    _('phase2').style.display = 'none';
    _('phase3').style.display = 'block';
    _('js-insaname').innerHTML = aname;
  } else {
    alert('Please assign a name to your pet');
  }
}
// Birthday
function processPhase3() {
  abirthdate = _('abirthdate').value;
  if (abirthdate.length > 0) {
    _('phase3').style.display = 'none';
    _('phase4').style.display = 'block';
    _('js-insaname3').innerHTML = aname;
  } else {
    alert('Please choose a birthday');
  }
}
// Was chipped? if yes -- phase 4, if no phase 5 & null
function processPhase4() {
  achipped = _('achipped').value;
  if (achipped === 'yes') {
    _('phase4').style.display = 'none';
    _('phase5').style.display = 'block';
    _('js-insaname4').innerHTML = aname;
  } else if (achipped === 'no') {
    _('phase4').style.display = 'none';
    _('phase6').style.display = 'block';
    _('js-insaname4').innerHTML = aname;
  } else {
    alert('Please pick an answer');
  }
}
// Chipid
function processPhase5() {
  achipid = _('achipid').value;
  if (achipid.length > 0) {
    _('phase5').style.display = 'none';
    _('phase6').style.display = 'block';
    _('js-insaname6').innerHTML = aname;
  } else {
    alert('Please insert your chipid');
  }
}
// Gender
function processPhase6() {
  agender = _('agender').value;
  if (agender.length > 0) {
    _('phase6').style.display = 'none';
    _('phase7').style.display = 'block';
    _('js-insaname7').innerHTML = aname;
  } else {
    alert('Please insert your chipid');
  }
}
// Owner
function processPhase7() {
  aowner = _('aowner').value;
  if (aowner.length > 0) {
    _('phase7').style.display = 'none';
  } else {
    alert('Please choose your country');
  }
}

function submitForm() {
  _('multiphase').method = 'post';
  _('multiphase').action = 'index.php?page=addpet';
  _('multiphase').submit();
}
