$.ajax({
	url		: "data.json",
	type	: "GET",
	dataType: "json",
	data  	: {get_param : 'value'},
	success	: function(data){
		jmlData = data.length;
		//var untuk nampung banyaknya data
		buatData = "";
		//var untuk menyimpan data
		for(a = 0; a < jmlData; a++){
			//looping
			buatData+=
			"<div class='media m-4'>"
				+"<a class='media-left' href='#fake'>"
					+"<img alt='' class='media-object img-rounded' src='"+data[a]["user"]["url_image"]+"' width='64' height='64'>"
				+"</a>"
				+"<div class='media-body'>"
					+"<h4 class='media-heading'>"+data[a]["user"]["name"]+"</h4>"
					+"<p>"+ data[a]["text"] +"</p>"
				+"</div>"
			+"</div>" ;
		}
		document.getElementsByClassName("tweet")[0].innerHTML = buatData;
	}
});