/* eslint-disable no-unused-vars */
require('./style.css');
/* eslint-disable no-unused-vars */ /* eslint-disable no-unused-vars */
let animal, aname, abirthdate, agender, achipped, achipid, aowner;
let ename, edescription, elocation, epetid, edate, etime, etype;

function _(x) {
  return document.getElementById(x);
}
// Defines all phases, saves them and continues to next
// Kind of animal

document.getElementById('bphase1').addEventListener('click',
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
  });


// Name of pet

document.getElementById('bphase2').addEventListener('click',
  function processPhase2() {
    aname = _('aname').value;
    if (aname.length > 0) {
      _('phase2').style.display = 'none';
      _('phase3').style.display = 'block';
      _('js-insaname').innerHTML = aname;
    } else {
      alert('Please assign a name to your pet');
    }
  });


// Birthday
document.getElementById('bphase3').addEventListener('click',
  function processPhase3() {
    abirthdate = _('abirthdate').value;
    if (abirthdate.length > 0) {
      _('phase3').style.display = 'none';
      _('phase4').style.display = 'block';
      _('js-insaname3').innerHTML = aname;
    } else {
      alert('Please choose a birthday');
    }
  });


// Was chipped? if yes -- phase 4, if no phase 5 & null
document.getElementById('bphase4').addEventListener('click',
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
  });
// Chipid
document.getElementById('bphase5').addEventListener('click',
  function processPhase5() {
    achipid = _('achipid').value;
    if (achipid.length > 0) {
      _('phase5').style.display = 'none';
      _('phase6').style.display = 'block';
      _('js-insaname6').innerHTML = aname;
    } else {
      alert('Please insert your chipid');
    }
  });
// Gender
document.getElementById('bphase6').addEventListener('click',
  function processPhase6() {
    agender = _('agender').value;
    if (agender.length > 0) {
      _('phase6').style.display = 'none';
      _('phase7').style.display = 'block';
      _('js-insaname7').innerHTML = aname;
    } else {
      alert('Please insert your chipid');
    }
  });
// Owner
document.getElementById('bphase7').addEventListener('click',
  function processPhase7() {
    aowner = _('aowner').value;
    if (aowner.length > 0) {
      _('phase7').style.display = 'none';
    } else {
      alert('Please choose your owner');
    }
  });

document.getElementById('bsubmitpet').addEventListener('click',
  function submitForm() {
    _('multiphase').method = 'post';
    _('multiphase').action = 'index.php?page=pets';
    _('multiphase').submit();
  });
// Events

//id of pet
function processPhase1e() {
  epetid = _('epetid').value;
  if (epetid.length > 0) {
    _('phase1e').style.display = 'none';
    _('phase2e').style.display = 'block';
  } else {
    alert('Please choose an animal');
  }
}

// type event
function processPhase2e() {
  etype = _('etype').value;
  console.log('helo');
  if (etype.length > 0) {
    _('phase2e').style.display = 'none';
    _('phase3e').style.display = 'block';
  } else {
    alert('Please specify the event');
  }
}

//name event
function processPhase3e() {
  ename = _('ename').value;
  if (ename.length >= 0) {
    _('phase3e').style.display = 'none';
    _('phase4e').style.display = 'block';
  } else {
    alert('Please give your event a name');
  }
}
// info desc
function processPhase4e() {
  edescription = _('edescription').value;
  if (edescription.length >= 0) {
    _('phase4e').style.display = 'none';
    _('phase5e').style.display = 'block';
  } else {
    alert('Please add a description to the event');
  }
}
// when
function processPhase5e() {
  edate = _('edate').value;
  if (edate.length >= 0) {
    _('phase5e').style.display = 'none';
    _('phase6e').style.display = 'block';
  } else {
    alert('Please pick a day');
  }
}
// what time
function processPhase6e() {
  etime = _('etime').value;
  if (etime.length > 0) {
    _('phase6e').style.display = 'none';
    _('phase7e').style.display = 'block';
  } else {
    alert('Please pick a time');
  }
}
// location
function processPhase7e() {
  elocation = _('elocation').value;
  if (elocation.length > 0) {
    _('phase7e').style.display = 'none';
  } else {
    alert('Please provide a location');
  }
}

function submitForme() {
  _('multiphasee').method = 'post';
  _('multiphasee').action = 'index.php?page=';
  _('multiphasee').submit();
}
