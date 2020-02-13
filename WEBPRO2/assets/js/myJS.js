function kalkulasi(id){
	document.getElementById('hasil').value+=id;
}
function hapus(){
	document.getElementById('hasil').value="";
}
function kerjakan(){
	try{
		var jumlah = eval(document.getElementById('hasil').value);
		document.getElementById('hasil').value=jumlah;
	}
	catch(error){
		document.getElementById('hasil').value="ERROR!";
	}
}

document.addEventListener("keypress", function(event){
	var input = event.key;
	document.querySelector("#hasil").value+=input;
})