function isNumberKey(evt) // Allow only number
	{
		var charCode=(evt.which)?evt.which:event.keycode
		
		if(charCode>31 && (charCode<48 || charCode>57))
		return false;
		
		return true;
	}
	
function AllowAlphabet(e) // Allow only alphbet number will be deleted automatically
{						 // 45=-  32='' 46=. 31=unitseparator  48=0  57=9   
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    return false;
      }
}
