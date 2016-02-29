function reset()
{
  document.getElementById('toteQuantity').value = 0;
  document.getElementById('backpackQuantity').value = 0;
  document.getElementById('mugQuantity').value = 0;
  return false;
}

function shippingChecker()
{
  var ship = document.store.shipping;
  for(var i=0; i<ship.length; i++)
  {
    if(ship[i].checked == true)
    {
      return true;
    }
  }
  return false;
}

function validate()
{
  var toteQuantity = document.getElementById('toteQuantity').value;
  var backpackQuantity = document.getElementById('backpackQuantity').value;
  var mugQuantity = document.getElementById('mugQuantity').value;
  if(toteQuantity < 0 || backpackQuantity < 0 || mugQuantity < 0)
  {
    alert('quantities cannot be less than 0');
    return false;
  }
  else if(toteQuantity + backpackQuantity + mugQuantity == 0)
  {
    alert('you have to buy SOMETHING :(');
    return false;
  }
  else if(!shippingChecker())
  {
    alert('please select a shipping option');
    return false;
  }
  else if(document.getElementById('userField').value == "")
  {
    alert('please enter a username');
    return false;
  }
  else if(document.getElementById('passField').value == "")
  {
    alert('please enter a password');
    return false;
  }

  return true;
}
