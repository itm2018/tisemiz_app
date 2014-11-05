// JScript File

function Trim(strval)
{
   /* var count = window.document.all.length;
	
	for(i=0;i<count; i++)
	{	
	    var objcalendar = window.document.all[i];	    
	
	   if (objcalendar.name)
	   {	    
	        if(objcalendar.name.indexOf(strval)>=0)
	        {	
	            strval = objcalendar.name
	            break;
	        }	    
	   }
	}*/
	//alert(eval("window.document.getElementById('"+strval+"')"));
	
	//var ctl2 = eval("window.document.getElementById('"+ctl2+"')");

	var intLeft, intRight;	
	strvar = new String(strval);	
	if (strvar.length==1 && strvar==" ") return "";	
	
	intLeft = 0;
	while ((strvar.charAt(intLeft) == " ") && (intLeft<strvar.length)) intLeft++;	
	intRight = strvar.length-1;
	while ((strvar.charAt(intRight) == " ") && (intRight>0)) intRight--;
	
	if (intRight>=intLeft) {
		return strvar.substring(intLeft,intRight+1);
	} else {
		return "";
	}	
}
//Check number value
function IsNumber(numberVal)
{
	numberVal = Trim(numberVal);
	if (numberVal== "") return false;
	if (isNaN(numberVal))
		return false;
	return true;
}
//Check positive number
function IsPositiveNumber(numberVal)
{
	if(!IsNumber(numberVal)) return false;
	var Temp = eval(numberVal)*1;
	if(Temp <= 0) return false;
	return true;
}
//Check non-negative number
function IsNonNegativeNumber(numberVal)
{
	if(!IsNumber(numberVal)) return false;
	var Temp = eval(numberVal)*1;
	if(Temp < 0) return false;
	return true;
}
//Check Float value
function IsFloat(numberVal)
{
	var testNumber = new Number(parseFloat(numberVal));
	
	if (Trim(numberVal)!= ""){
		if (isNaN(numberVal)  || (Trim(testNumber.toString())!=Trim(numberVal)))
			return false;
			
	}
	return true
}
//Check Integer value
function IsInteger(numberVal)
{
	var testNumber = new Number(parseInt(numberVal));
	
	if (Trim(numberVal)!= ""){
		if (isNaN(numberVal)  || (Trim(testNumber.toString())!=Trim(numberVal)))
			return false;
			
	}
	return true;
}
//Check Positive Integer
function IsPositiveInteger(numberVal){
	if(!IsInteger(numberVal)) return false;
	var Temp = eval(numberVal)*1;
	if(Temp < 0) return false;
	return true;
}
//Check date value with format MM/yyyy and refine to valid format
function validDate(strDate){
	var intPos = strDate.search('/');
	var strMonth;
	if(intPos > 0)
	{
		strMonth = strDate.substr(0, intPos);
		if(!IsNumber(strMonth)) return false;
		if(eval(strMonth) <= 0 || eval(strMonth) > 12)
		{
			return false;
		}
		
		strYear = strDate.substr(intPos + 1);
		if(!IsNumber(strYear)) return false;
		if(eval(strYear) < 1980 || eval(strYear) > 2200)
		{
			return false;
		}
	}
	return true;
}
//Check date value with format input
function IsDateFormat(strDate,strFormat)
{
	if (strFormat=="mm/dd/yyyy")
	{
		return IsDate(strDate);
	}
	else
	{
		return IsDateFR(strDate);
	}
}
//Check date value with format dd/MM/yyyy and refine to valid format
function IsDateFR(strDate)
{
	if ((strDate.length>10)||(strDate.length<8)) return false;
	intDash = strDate.search("/");
	if (intDash == -1) return false;
	else
	{
		strTemp = strDate.substr(0,intDash);
		if ((strTemp.charAt(0) == "0")&&(strTemp.length>1)) strTemp = strTemp.substr(1);
		if (IsNumber(strTemp)==false) return false;
		else
		{	
			intDay = parseInt(strTemp);						
		}	
		strDate = strDate.substr(intDash+1);
	}
	intDash = strDate.search("/");
	if (intDash == -1) return false;
	else
	{
		strTemp = strDate.substr(0,intDash);
		if ((strTemp.charAt(0) == "0")&&(strTemp.length>1)) strTemp = strTemp.substr(1);
		if (IsNumber(strTemp)==false) return false;
		else
		{
			intMonth = parseInt(strTemp);
			//Kiem tra thang nhap vao
			if ((intMonth<1)||(intMonth>12))	return false;
			intDayN = 30;
			if ((intMonth<8)&&(intMonth % 2 == 1)) intDayN = 31;
			if ((intMonth>7)&&(intMonth % 2 == 0)) intDayN = 31;
			//Kiem tra ngay nhap vao
			if ((intDay<1)||(intDay>intDayN)) return false;
		}	
		strDate = strDate.substr(intDash+1);
	}	
	if (IsNumber(strDate)==false) return false;
	else
	{	
		intYear = parseInt(strDate);
		if ((intYear<1900)||(intYear>2100)) return false;
	}	
	if (intMonth==2)
	{
		if (intYear % 4 == 0) intDayN = 29;
		else intDayN = 28;
		if (intDay > intDayN) return false;
	}
	strTemp = "";
	if (intDay<10) strTemp = strTemp + "0" + intDay + "/";
	else strTemp = strTemp + intDay + "/";
	if (intMonth<10) strTemp = strTemp + "0" + intMonth + "/";
	else strTemp = strTemp + intMonth + "/";	
	strTemp = strTemp + intYear;
	strDate = strTemp;
	return true;
}
//Check date value with format MM/dd/yyyy and refine to valid format
function IsDate(strDate)
{
	if ((strDate.length>10)||(strDate.length<8)) return false
	intDash = strDate.search("/")
	if (intDash == -1) return false
	else
	{
		strTemp = strDate.substr(0,intDash)
		if ((strTemp.charAt(0) == "0")&&(strTemp.length>1)) strTemp = strTemp.substr(1)
		if (IsNumber(strTemp)==false) return false
		else
		{	
			intMonth = parseInt(strTemp)
			if ((intMonth<1)||(intMonth>12))	return false
			intDayN = 30
			if ((intMonth<8)&&(intMonth % 2 == 1)) intDayN = 31
			if ((intMonth>7)&&(intMonth % 2 == 0)) intDayN = 31
		}	
		strDate = strDate.substr(intDash+1)
	}
	intDash = strDate.search("/")
	if (intDash == -1) return false
	else
	{
		strTemp = strDate.substr(0,intDash)
		if ((strTemp.charAt(0) == "0")&&(strTemp.length>1)) strTemp = strTemp.substr(1)
		if (IsNumber(strTemp)==false) return false
		else
		{
			intDay = parseInt(strTemp)
			if ((intDay<1)||(intDay>intDayN)) return false	
		}	
		strDate = strDate.substr(intDash+1)
	}	
	if (IsNumber(strDate)==false) return false
	else
	{	
		intYear = parseInt(strDate)
		if ((intYear<1900)||(intYear>2100)) return false		
	}	
	if (intMonth==2)
	{
		if (intYear % 4 == 0) intDayN = 29
		else intDayN = 28
		if (intDay > intDayN) return false
	}
	strTemp = ""
	if (intMonth<10) strTemp = strTemp + "0" + intMonth + "/"
	else strTemp = strTemp + intMonth + "/"
	if (intDay<10) strTemp = strTemp + "0" + intDay + "/"
	else strTemp = strTemp + intDay + "/"
	strTemp = strTemp + intYear
	strDate = strTemp
	return true
}
//Compare 2 date 
function Compare(ct1,ct2,dtformat)//true ct1.value>=ct2.value else false
{
	if ((ct1=="")||(ct2==""))
	{
		return true;
	}
	else
	{
		var date1
		var date2
		var month1
		var month2
		var year1
		var year2
		tempdtFormat=dtformat;
		
		formatChar = " "
		aFormat	= tempdtFormat.split(formatChar)
		if (aFormat.length<3)
		{
			formatChar = "/"
			aFormat	= tempdtFormat.split(formatChar)				
		}

	
		aData1 =	ct1.split(formatChar)
		aData2 = 	ct2.split(formatChar)
		for	(i=0;i<3;i++)
		{
			if ((aFormat[i]=="d") || (aFormat[i]=="dd"))
			{
				date1 = parseInt(aData1[i], 10)
				date2 = parseInt(aData2[i], 10)
			}
			else if	((aFormat[i]=="m") || (aFormat[i]=="mm"))
			{
				month1 =	parseInt(aData1[i], 10) - 1
				month2 =	parseInt(aData2[i], 10) - 1							
			}
			else if	(aFormat[i]=="yyyy")
			{
				year1 = parseInt(aData1[i], 10)
				year2 = parseInt(aData2[i], 10)							
			}						
		}
		if (year2>year1)			
		{
			return false;
		}
		else
		{
			if (year2==year1)
			{
				if(month2 > month1)
				{
					return false;
				}
				else
				{
					if (month2==month1)
					{
						if (date2 > date1)
						{
							return false;
						}
						else
						{
							return true;
						}
					}
					else
					{
						return true;
					}
				}
			}
			else
			{
				return true;
			}
		}
	}
}
//Compare two Date
function CompareDate(strDate1, strDate2)
{
var day1, day2, month1, month2, year1, year2;
if (IsDate(strDate1)==false) return false
if (IsDate(strDate2)==false) return false

	intDash1 = strDate1.search("/")
	if (intDash1 == -1) return false
	else
	{
		strTemp1 = strDate1.substr(0,intDash1)
		month1 = strTemp1;
		strDate1 = strDate1.substr(intDash1+1)
	}
	intDash1 = strDate1.search("/")
	if (intDash1 == -1) return false
	else
	{
		strTemp1 = strDate1.substr(0,intDash1)		
		day1 = strTemp1;				
		strDate1 = strDate1.substr(intDash1+1)
	}	
	
	if (IsNumber(strDate1)==false) return false
	else
	{	
		intYear1 = parseInt(strDate1)
		if ((intYear1<1900)||(intYear1>2100)) return false		
		year1 = intYear1;
	}	
	intDash2 = strDate2.search("/")
	if (intDash2 == -1) return false
	else
	{
		strTemp2 = strDate2.substr(0,intDash2)
		month2 = strTemp2;
		strDate2 = strDate2.substr(intDash2+1)
	}
	intDash2 = strDate2.search("/")
	
	if (intDash2 == -1) return false
	else
	{
		strTemp2 = strDate2.substr(0,intDash2)		
		day2 = strTemp2;				
		strDate2 = strDate2.substr(intDash2+1)
	}	
	
	if (IsNumber(strDate2)==false) return false
	else
	{	
		intYear2 = parseInt(strDate2)
		if ((intYear2<1900)||(intYear2>2100)) return false		
		year2 = intYear;
	}	
	
	if (year2<year1) return false;
	
	if (year2==year1)
		{
		if (month2<month1) return false;
		
		if (month2==month1)
			{
			if (day2<day1) return false;	
			}
		}
	
	return true
}
//Check empty string
function IsEmpty(stringVal)
{
	stringVal = Trim(stringVal);
	if(stringVal.length==0)
		return true;
	else
		return false;
}

//Check e-mail address
function IsEmailAddress (strEmail)
{                                       
	var v = Trim(strEmail);
	if (v.length==0) return true;
	var at_i = v.indexOf("@");          
	if (at_i > 0) {                     
	  var dot_i = v.indexOf(".", at_i);   
	  if ((dot_i == -1) || (dot_i==at_i+1))
	    return false;               
	}
	else
	  return false;                   

	return true;
}                                       
function urlEncode(inStr) {
	outStr=' '; //not '' for a NS bug!
	for (i=0; i < inStr.length; i++) {
	aChar=inStr.substring (i, i+1);
	switch(aChar){
	case '%': outStr += "%25"; break; case ',': outStr += "%2C"; break;
	case '/': outStr += "%2F"; break; case ':': outStr += "%3A"; break;
	case '~': outStr += "%7E"; break; case '!': outStr += "%21"; break;
	case '"': outStr += "%22"; break; case '#': outStr += "%23"; break;
	case '$': outStr += "%24"; break; case "'": outStr += "%27"; break;
	case '`': outStr += "%60"; break; case '^': outStr += "%5E"; break;
	case '&': outStr += "%26"; break; case '(': outStr += "%28"; break;
	case ')': outStr += "%29"; break; case '+': outStr += "%2B"; break;
	case '{': outStr += "%7B"; break; case '|': outStr += "%7C"; break;
	case '}': outStr += "%7D"; break; case ';': outStr += "%3B"; break;
	case '<': outStr += "%3C"; break; case '=': outStr += "%3D"; break;
	case '>': outStr += "%3E"; break; case '?': outStr += "%3F"; break;
	case '[': outStr += "%5B"; break; case '\\': outStr += "%5C"; break;
	case ']': outStr += "%5D"; break; case ' ': outStr += "+"; break;
	default: outStr += aChar;
	}
	}
	return outStr.substring(1, outStr.length);
}

function IsNumeric(type,sText)
{
	if (type==1){
	   var ValidChars = "0123456789";
	}
	if (type==2){
	   var ValidChars = "0123456789.";
	}
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
	  { 
	  Char = sText.charAt(i); 
	  if (ValidChars.indexOf(Char) == -1) 
		 {
		 IsNumber = false;
		 }
	  }
   return IsNumber;
   }


function changedata(type,sText)
{
	if (type==1){
	   var ValidChars = "0123456789";
	}
	if (type==2){
	   var ValidChars = "0123456789.";
	}
   var newdata="";
   var Char;

 
   for (i = 0; i < sText.length; i++) 
	  { 
	  Char = sText.charAt(i); 
	  if (ValidChars.indexOf(Char) == -1) 
		 {
			Char ="";
		 }

		 newdata = newdata + Char;
	  }
   return newdata;
   }
   
function checkdatatype(type,txtcontrol){
	if (type==1){
		if (!IsNumeric(1,txtcontrol.value)){
			alert("Please, type integer number");
//			txtcontrol.value = changedata(1,txtcontrol.value);
			txtcontrol.focus();
			return false;
		}
	}

	if (type==2){ //currency
		if (validateDollar(txtcontrol))
		{
			txtcontrol.value = formatCurrency(txtcontrol.value);							
			txtcontrol.focus();
			return true;
		}
		else
		{
			alert("Currency value is invalid!");
			txtcontrol.focus();
			return false;
		}
	}
	
	if (type==3){ //weight or numerice
		if (IsNonNegativeNumber(txtcontrol.value))
		{
			//txtcontrol.value = formatNumber(txtcontrol.value);
			//txtcontrol.focus();			
			return true;
		}
		else
		{
			alert("Please, type a number!");
			txtcontrol.focus();
			return false;
		}
	}
}

// format a value as currency. 
function formatCurrency(num) {
	num = num.toString().replace(/\$|\,/g,'');
	
	if(isNaN(num))
	   num = "0";
	   
	sign = (num == (num = Math.abs(num)));
	num = Math.floor(num*100+0.50000000001);
	cents = num%100;
	num = Math.floor(num/100).toString();
	
	if(cents<10)
		cents = "0" + cents;
		
	for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
		num = num.substring(0,num.length-(4*i+3)) + ',' + num.substring(num.length-(4*i+3));
		
	return (((sign)?'':'-') + '$' + num + '.' + cents);
}

// format a value as number. 
function formatNumber(num) {
	num = num.toString().replace(/\$|\,/g,'');
	
	if(isNaN(num))
	   num = "0";
	   
	sign = (num == (num = Math.abs(num)));
	num = Math.floor(num*100+0.50000000001);
	cents = num%100;
	num = Math.floor(num/100).toString();
	
	if(cents<10)
		cents = "0" + cents;
		
	for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
		num = num.substring(0,num.length-(4*i+3)) + ',' + num.substring(num.length-(4*i+3));
		
	return (((sign)?'':'-') + num + '.' + cents);
}

//<!-- Function Description:  Validates Non Currencys fields. --> 
function validateDollar( fld ) 
{ 	
   var temp_value = fld.value; 
   	
   if (temp_value == "") 
   { 
     fld.value = "$0.00"; 
     return; 
   } 
   var Chars = "0123456789.,$-"; 
   for (var i = 0; i < temp_value.length; i++) 
   { 
       if (Chars.indexOf(temp_value.charAt(i)) == -1) 
       {                     
           return false; 
       } 
   } 
   return true;
} 
var allOn = true;
function SelectAll(MyForm,MyBox){
	var countBoxes = eval("document."+MyForm+"."+MyBox+".length");
		if(!countBoxes){
			eval("document."+MyForm+"."+MyBox+".checked =  allOn");
		}
		else{
			for (var i=0; i<countBoxes ;i++){
				eval("document."+MyForm+"."+MyBox+"[i].checked =  allOn");
			}
		}
	allOn = !allOn;
}

function cleanField(obj){
	obj.value = obj.value.replace(/[^\d]/g,"");	
	if(obj.value.length == 0 || obj.value == 0){obj.value=1}
}

function cleanFieldDefaultZero(obj){
	obj.value = obj.value.replace(/[^\d]/g,"");	
	if(obj.value.length == 0){obj.value=0}
}

function doChangeSKUOption(strObjectID, location)
{
//	var strFormName = document.getElementById(strObjectID).form.name;
//    var objForm = document.forms.namedItem(strFormName);
    var objForm = window.document.getElementById(strObjectID).form;
    //objForm.attributes.getNamedItem('action').value = location;
	objForm.action = location;
    objForm.method = 'post';

	objForm.submit();
}

function doDeleteCart(strLocation)
{

	if (confirm('Do you want to Delete this Card?'))
	{
		
		var strFormName = document.all("cstCCardType").form.name;
		var objForm = document.forms.namedItem(strFormName);
		//objForm.attributes.getNamedItem('action').value = strLocation;
		objForm.action = strLocation;
		objForm.method = 'post';
		objForm.submit();		
	}

}


	function URLDecode(encoded)
	{
	   // Replace + with ' '
	   // Replace %xx with equivalent character
	   // Put [ERROR] in output if %xx is invalid.
	   var HEXCHARS = "0123456789ABCDEFabcdef"; 
	   var plaintext = "";
	   var i = 0;
	   while (i < encoded.length) {
		   var ch = encoded.charAt(i);
		   if (ch == "+") {
			   plaintext += " ";
			   i++;
		   } else if (ch == "%") {
				if (i < (encoded.length-2) 
						&& HEXCHARS.indexOf(encoded.charAt(i+1)) != -1 
						&& HEXCHARS.indexOf(encoded.charAt(i+2)) != -1 ) {
					plaintext += unescape( encoded.substr(i,3) );
					i += 3;
				} else {
					alert( 'Bad escape combination near ...' + encoded.substr(i) );
					plaintext += "%[ERROR]";
					i++;
				}
			} else {
			   plaintext += ch;
			   i++;
			}
		} // while
	   
	   return plaintext;
	};
	
	function URLEncode( plaintext)
	{
		// The Javascript escape and unescape functions do not correspond
		// with what browsers actually do...
		var SAFECHARS = "0123456789" +					// Numeric
						"ABCDEFGHIJKLMNOPQRSTUVWXYZ" +	// Alphabetic
						"abcdefghijklmnopqrstuvwxyz" +
						"-_.!~*'()";					// RFC2396 Mark characters
		var HEX = "0123456789ABCDEF";
	

		var encoded = "";
		for (var i = 0; i < plaintext.length; i++ ) {
			var ch = plaintext.charAt(i);
			if (ch == " ") {
				encoded += "+";				// x-www-urlencoded, rather than %20
			} else if (SAFECHARS.indexOf(ch) != -1) {
				encoded += ch;
			} else {
				var charCode = ch.charCodeAt(0);
				if (charCode > 255) {
					alert( "Unicode Character '" 
							+ ch 
							+ "' cannot be encoded using standard URL encoding.\n" +
							  "(URL encoding only supports 8-bit characters.)\n" +
							  "A space (+) will be substituted." );
					encoded += "+";
				} else {
					encoded += "%";
					encoded += HEX.charAt((charCode >> 4) & 0xF);
					encoded += HEX.charAt(charCode & 0xF);
				}
			}
		} // for
	
		
		return encoded;
	};
	
var m_Changed = 0;
var m_Continue = 1;
function setContentChange()
{
	m_Changed = 1;
}
function setIntegerContentChange(obj)
{
	 setContentChange();
	 return checkdatatype(1,obj);
}
function setFloatContentChange(obj)
{
	 setContentChange();
	 return checkdatatype(3,obj);
}
function setCurrencyContentChange(obj)
{
	 setContentChange();
	 return checkdatatype(2,obj);
}

function setContentSafe()
{
	m_Changed = 0;
}
function checkChange()
{
	m_Continue = 1;
	if (m_Changed == 1)
	{
		m_Continue = 0;
		return '----------------------------------------------------------------------\n\n' +
				'Changes have been made!\n\n' +
				'----------------------------------------------------------------------';
	}	
}	
function checkContinue()
{
	if (m_Continue == 0)
	{
		return false;
	}	
	return true;
}
function changeCutRefContent(varName, varRefName, nCut)
{
	var strContent = window.document.getElementById(varName).value;
	if(strContent.length >= nCut)
	{
		strContent = strContent.substr(0, nCut) + "...";
	}
	window.document.getElementById(varRefName).innerText = strContent;
}

function changeRefContent(varName, varRefName)
{
	var strContent = window.document.getElementById(varName).value;
	window.document.getElementById(varRefName).innerText = strContent;
}
var boolOnfocusHid= '0';
var boolOnfocusRef= '0';
function domouse(strform,ref,hidden){
	objform = eval("window.document."+strform);	
//	alert(boolOnfocus);

	if(ref != '' && boolOnfocusHid != ref)	
		objform.all[ref].style.display = 'none';
	if(hidden != '' && boolOnfocusRef != hidden)
		objform.all[hidden].style.display = 'inline';
}

function DoOnfocus(strform,objspanHidden,objspanRef)
{
	objform = eval("window.document."+strform);		
	//alert(objform.all[objforcusHid].value);
	if(boolOnfocusHid != "0")
	{
	objform.all[boolOnfocusHid].style.display = 'none';	
	objform.all[boolOnfocusRef].style.display = 'inline';	
	}
	boolOnfocusHid = objspanHidden;
	boolOnfocusRef = objspanRef;
}

function subQSvar(varStr, varStrSub)
{
	//alert("varStr: " + varStr);
	var i = varStr.indexOf(varStrSub);
	if(i > 0)
	{
		//alert(i);
		var str1 = varStr.substr(0, i);
		//alert("str1: " + str1);
		var str2 = varStr.substr(i, varStr.length - i);
		//alert("str2: " + str2);
		var i1 = str2.indexOf("&");
		if(i1 > 0)
			str2 = str2.substr(i1 + 1, str2.length - i - 1);
		else
			str2 = "";
		//alert("str2: " + str2);	
		if(str2 == "")
			varStr = str1.substr(0, str1.length - 1);
		else
			varStr = str1 + str2;
	}
	//alert("varStr: " + varStr);
	return varStr;
}

function setQSvar(varQS, varVarName, varVarValue)
{
	var i = varQS.indexOf(varVarName);
	if(i > 0)
	{
		var str1 = varQS.substr(i, varQS.length - i);
		varQS = varQS.substr(0, i);
		var i1 = str1.indexOf("&");
		if(i1 > 0)
		{
			var str2 = str1.substr(i1, str1.length - i);
			str1 = str1.substr(0, i1);
		}
		str1 = str1.substr(0, str1.indexOf("=") + 1) + varVarValue;
		if(i1 > 0) str1 += str2;
		varQS += str1;
	}
	else
	{
		if(varQS.indexOf("?") > 0)
			varQS += "&" + varVarName + "=" + varVarValue;
		else
			varQS += "?" + varVarName + "=" + varVarValue;
	}	
	return varQS;
}

function doUpdateHref(formName, btnUpdate, strQS, strHref, nPageNo)
{
	//alert("formName: " + formName);
	//alert("btnUpdate: " + btnUpdate);
	//alert("strQS: " + strQS);
	//alert("strHref: " + strHref);
	//alert("nPageNo: " + nPageNo);
	strHref = subQSvar(strHref, "PageNum_Results");
	//alert("strHref: " + strHref);
	if(m_Changed == 1)
	{		
		//alert("m_Changed = 1");
		setContentSafe();
		if(strQS.indexOf("?")>=0) strQS += "&urlAction=";
		else strQS += "?urlAction=";
		var obj = eval("window.document." + formName);
		var objBtn = eval("window.document." + formName + "." + btnUpdate);
		obj.action = strQS + strHref;
		if(nPageNo > 0)	obj.action += "&PageNo=" + nPageNo;		
		//alert("obj.action: " + obj.action);
		objBtn.click();
	}	
	else
	{
		//alert("m_Changed = 0");
		if(nPageNo > 0)
		{
			if(strHref.indexOf("?")>=0) strHref += "&PageNum_Results=";
			else strHref += "?PageNum_Results=";
			strHref += nPageNo;
		}
		window.location.href = strHref;
	}
}

var m_Save = false;
function setSaveStatus()
{
	m_Save = true;
}

function changeRadioRefContent(obj, varRefName)
{
	var objRef = window.document.getElementById(varRefName);
	if(obj.value == 0) objRef.innerText = "Local";
	else if(obj.value == 1) objRef.innerText = "Online";
	else if(obj.value == 2) objRef.innerText = "Shared";
	else objRef.innerText = "None";
}
	
function setItemPage(obj, frmSearch, hidItemSearch)
{
	//alert(obj);
	//alert(frmSearch);
	//alert(hidItemSearch);
	var objHidSearch = eval("window.document.forms." + frmSearch + "." + hidItemSearch);
	objHidSearch.value = obj.value;
	//alert(objHidSearch);
}
function isImageURL(URL)
{
	var retVal = false;
	var nPlace = URL.lastIndexOf(".");
	
	var strImageExts=",gif,png,jpg,bmp,jpeg,";
	if ((nPlace > -1) && (nPlace < URL.length - 1))
	{
		var strExtension = URL.substring(nPlace + 1, URL.length);
		if (strImageExts.indexOf("," + strExtension + ",") > -1) retVal = true;
	}
	return retVal;
}
var m_Image = new Image();
var m_URL = "";
var m_defaultURL = "";
function setImageSource(imgControlID,URL,defaultURL) {
	var imgControl = document.getElementById(imgControlID);
	if (isImageURL(URL))
	{
	    var objImg=new Image();
	    m_Image = imgControl;
	    m_URL = URL;
		m_defaultURL = defaultURL;
	    objImg.onload=setImageURL;
	    objImg.onerror=setImageDefault;
	    objImg.src=URL;
	}
	else
	{
		imgControl.src = defaultURL;
		imgControl.width=1;
	    imgControl.height=1;
	}
}

function setImageURL() {
    m_Image.src=m_URL;
}

function setImageDefault() {
    m_Image.src=m_defaultURL;
    m_Image.width=1;
    m_Image.height=1;
}

function setImageURL2(imgControlID,URL) {
	var imgControl = document.getElementById(imgControlID);	
    imgControl.src=URL;
}
function setImageURLAdmin(imgControlID,URL) {
	var imgControl = window.document.getElementById(imgControlID);	
    imgControl.src=URL;
    imgControl.width = 1;
    imgControl.height = 1;
}
function setImageMissing(imgControlID,URL,LinkID) {
	var imgControl = document.getElementById(imgControlID);	
    imgControl.src=URL;
    var lnkControl = document.getElementById(LinkID);
//    lnkControl.disabled = false;
    if(lnkControl.hasChildNodes())
        for(var i=0;i<lnkControl.childNodes.length;i++)
            lnkControl.parentNode.insertBefore(lnkControl.childNodes[i].cloneNode(true),lnkControl);
    lnkControl.parentNode.removeChild(lnkControl);
}

function setUpdatedItemValue(varControlID, varControlValue)
{
	window.document.getElementById(varControlID).value = varControlValue;
}