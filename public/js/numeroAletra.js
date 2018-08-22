var th = ['','Cien','Millon', 'Billon','Trillon'];
var dg = ['Cero','Uno','Dos','Tres','Cuatro', 'Cinco','Seis','Siete','Ocho','Nueve'];
var dgi = ['Cero','y uno ',' y dos','y tres','y cuatro', 'y cinco','y Seis','y Siete','y Ocho','y Nueve'];  
var tn = ['Dies','Once','Doce','Trece', 'Catorce','Quince','Dieciseis', 'Diecisiete','Dieciocho','Diecinueve']; 
var tw = ['Veinte','Trenta','Cuarenta','Cincuenta', 'Sesenta','Setenta','Ochenta','Noventa']; 
function toWords(s){s = s.toString(); s = s.replace(/[\, ]/g,''); 
if (s != parseFloat(s)) 
	return 'Numero Incorrecto'; 
	var x = s.indexOf('.');
if (x == -1) 
	x = s.length;
if(s==100)
	return 'cien';
if(s==20)
	return 'Veinte';
if(s==30)
	return 'Trenta';
if(s==40)
	return 'Cuarenta';
if(s==50)
	return 'Cincuenta';
if(s==60)
	return 'Sesenta';
if(s==70)
	return 'Setenta';
if(s==80)
	return 'Ochenta';
if(s==90)
	return 'Noventa';
if (x > 2)
  	return 'Numero mayor a 100'; 
	var n = s.split('');
	var str = ''; 
	var sk = 0; 

for (var i=0; i < x; i++){
	if ((x-i)%3==2){
		if (n[i] == '1'){
			str += tn[Number(n[i+1])] + ' '; //10 al 19
			i++;
			sk=1;
		}else if (n[i]!=0){
			str += tw[n[i]-2] + ' y  '; // 20 al 99
			sk=1;
		}
	} else if (n[i]!=0){
		str += dg[n[i]] +' ';//1 al 9
	} 
}
if (x != s.length) {
	return 'Numero mayor a 100';
}
return str.replace(/\s+/g,' ');
}

$(".numbers").keypress(function (e) {
	//conprobando q sea numero
	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		return false;
	 }
});

var words="";
$(function() {
	$("#nota").on("keydown keyup", per);
	function per() {
		var nota_literal= (
		Number($("#nota").val()));
		$("#totalval").val(nota_literal);
		words = toWords(nota_literal);
		$("#nota_literal").val(words);
	}
});