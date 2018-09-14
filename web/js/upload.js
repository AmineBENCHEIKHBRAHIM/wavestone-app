(function () {
	var fileCatcher = document.getElementById('file-catcher');
  var fileInput = document.getElementById('file-input');
  var fileListDisplay = document.getElementById('file-list-display');
  
  var fileList = [];
  var renderFileList, sendFile;
  
  fileCatcher.addEventListener('submit', function (evnt) {
  	evnt.preventDefault();
    fileList.forEach(function (file) {
    	sendFile(file);
    });
  });
  
  fileInput.addEventListener('change', function (evnt) {
 		fileList = [];
  	for (var i = 0; i < fileInput.files.length; i++) {
    	fileList.push(fileInput.files[i]);
    }
    renderFileList();
  });
  
  renderFileList = function () {
  	fileListDisplay.innerHTML = '';
    fileList.forEach(function (file, index) {
    	var fileDisplayEl = document.createElement('p');
      fileDisplayEl.innerHTML = (index + 1) + ': ' + file.name;
      fileListDisplay.appendChild(fileDisplayEl);
    });
  };
  
  sendFile = function (file) {
  	//var formData = new FormData();
    //var request = new XMLHttpRequest();
 
    //formData.set('file', file);
    //request.open("POST", 'controllers/action_upload.php');
    //request.send(formData);
	  //var fileDisplayE2 = document.createElement('p');
      //fileDisplayE2.innerHTML = 'file : ' + file.tmp_name;
      //fileListDisplay.appendChild(fileDisplayE2);
	  //var file = file.target.files[0];
	  if (!file){
		  window.alert("no files");
		  return;
	  }
	  var reader = new FileReader();
	  reader.onload = function(e){
		  //window.alert('successfully read');
		  var arraybuffer = e.target.result;
		  
		  
		  
		  
		  /* convert data to binary string */
		  var data = new Uint8Array(arraybuffer);
		  var arr = new Array();
		  for(var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
		  var bstr = arr.join("");

		  /* Call XLSX */
		  var workbook = XLSX.read(bstr, {type:"binary"});

		  /* DO SOMETHING WITH workbook HERE */
		  var first_sheet_name = workbook.SheetNames[0];
		  /* Get worksheet */
		  var worksheet = workbook.Sheets[first_sheet_name];
		  console.log(XLSX.utils.sheet_to_csv(worksheet,{raw:true}));

		  var csvwork = XLSX.utils.sheet_to_csv(worksheet,{raw:true});

		 
		  var csvworkbook = XLSX.read(csvwork,{type:"binary", cellDates:true, cellNF: false, cellText:false});
		  var first_sheet_name = csvworkbook.SheetNames[0];

		  /* Get worksheet */
		  var worksheet = csvworkbook.Sheets[first_sheet_name];
		  
		  console.log(worksheet);
		  
		  //Identify Cells
		  var ConsultantsNumber_address_of_cell = 'F1';



		  /* Find ientified cells */
		  var ConsultantsNumber_cell = worksheet[ConsultantsNumber_address_of_cell];

		  /* Get the value */
		  var ConsultantsNumber_value = (ConsultantsNumber_cell ? ConsultantsNumber_cell.v : undefined);

		  //window.alert("Consultants number is : ".concat(ConsultantsNumber_value));
		  if(ConsultantsNumber_value != undefined){
			  
			  var i;
			  for (i = 9; i < ConsultantsNumber_value + 9; i++) { 
				  //Go through each consultant
				  
				  //First identify cells
				  var ConsultantsName_address_of_cell = 'D'+i;
				  var ConsultantsId_address_of_cell = 'E'+i;
				  var ConsultantsArrivalDate_address_of_cell = 'B'+i;
				  var ConsultantsDispoM0_address_of_cell = 'M'+i;
				  var ConsultantsDispoM1_address_of_cell = 'Q'+i;
				  var ConsultantsDispoM2_address_of_cell = 'U'+i;
				  var ConsultantsProfileExpertise_address_of_cell = 'AF'+i;
				  var ConsultantsComments_address_of_cell = 'AH'+i;
				  
				//Second, Find identified cells
				  var ConsultantsName_cell = worksheet[ConsultantsName_address_of_cell];
				  var ConsultantsId_cell = worksheet[ConsultantsId_address_of_cell];
				  var ConsultantsArrivalDate_cell = worksheet[ConsultantsArrivalDate_address_of_cell];
				  var ConsultantsDispoM0_cell = worksheet[ConsultantsDispoM0_address_of_cell];
				  var ConsultantsDispoM1_cell = worksheet[ConsultantsDispoM1_address_of_cell];
				  var ConsultantsDispoM2_cell = worksheet[ConsultantsDispoM2_address_of_cell];
				  var ConsultantsProfileExpertise_cell = worksheet[ConsultantsProfileExpertise_address_of_cell];
				  var ConsultantsComments_cell = worksheet[ConsultantsComments_address_of_cell];
				  
				  //Third, Get Value of identified cells
				  var ConsultantsName_value = (ConsultantsName_cell ? ConsultantsName_cell.v : undefined);
				  var ConsultantsId_value = (ConsultantsId_cell ? ConsultantsId_cell.v : undefined);
				  var ConsultantsArrivalDate_value = (ConsultantsArrivalDate_cell ? ConsultantsArrivalDate_cell.v : undefined);
				  
				  			// further processing for arrival date to extract year and month
				  var d = Date.parse(ConsultantsArrivalDate_value);
				  var minutes = 1000 * 60;
				  var hours = minutes * 60;
				  var days = hours * 24;
				  var months = days * 30;
				  var years = days * 365;
				  
				  let now = new Date();
				  var nowdate = Date.parse(now);
				    
				  var diffm = nowdate/months - d/months;
				  var finalyear = Math.floor(diffm/12);
				  var finalmonth = Math.floor(diffm - finalyear * 12);
				    
				  //
				  
				  var ConsultantsDispoM0_value = (ConsultantsDispoM0_cell ? ConsultantsDispoM0_cell.v : undefined);
				  var ConsultantsDispoM1_value = (ConsultantsDispoM1_cell ? ConsultantsDispoM1_cell.v : undefined);
				  var ConsultantsDispoM2_value = (ConsultantsDispoM2_cell ? ConsultantsDispoM2_cell.v : undefined);
				  
				  
				  			// further processing for profile expertise to extract CDM, Titre & Domicile
				  var ConsultantsProfileExpertise_value = (ConsultantsProfileExpertise_cell ? ConsultantsProfileExpertise_cell.v : undefined);
				  var ConsultantsProfileExpertise_value_split = ConsultantsProfileExpertise_value.split(";");
				  var ConsultantsCDM_value = ConsultantsProfileExpertise_value_split[0];
				  var ConsultantsTitre_value = ConsultantsProfileExpertise_value_split[1];
				  var ConsultantsDomicile_value = ConsultantsProfileExpertise_value_split[5];
				  if(ConsultantsDomicile_value == '?' || ConsultantsDomicile_value == '-'){
					  ConsultantsDomicile_value = undefined;
				  }
				  
				  var ConsultantsComments_value = (ConsultantsComments_cell ? ConsultantsComments_cell.v : undefined);
				  if(Object.prototype.toString.call(ConsultantsComments_value) === '[object Date]'){
					  ConsultantsComments_value = undefined;
				  }
				  
				  //Finally, Send data through ajax to consultant_file_update.php
				  //window.alert(ConsultantsName_value+" "+ConsultantsId_value+" "+finalyear+" "+finalmonth+" "+ConsultantsDispoM0_value+" "+ConsultantsDispoM1_value+" "+ConsultantsDispoM2_value+" "+ConsultantsCDM_value+" "+ConsultantsTitre_value+" "+ConsultantsDomicile_value+" "+ConsultantsComments_value);
				  
				  
				  var formData = new FormData();

				  formData.append("idConsultant", ConsultantsId_value);
				  formData.append("NomPrenom", ConsultantsName_value);
				  formData.append("CDM", ConsultantsCDM_value);
				  formData.append("NombreDispoM0", ConsultantsDispoM0_value);
				  formData.append("NombreDispoM1", ConsultantsDispoM1_value);
				  formData.append("NombreDispoM2", ConsultantsDispoM2_value);
				  formData.append("Titre", ConsultantsTitre_value);
				  formData.append("ExperienceY", finalyear);
				  formData.append("ExperienceM", finalmonth);
				  formData.append("InfosBrutes", ConsultantsComments_value);
				  formData.append("Domicile", ConsultantsDomicile_value);
				  

				  //var request = new XMLHttpRequest();
				  //request.open("POST", "http://foo.com/submitform.php");
				  //request.send(formData);
				  
				  
				  
				  if (window.XMLHttpRequest) {
			            // code for IE7+, Firefox, Chrome, Opera, Safari
			            xmlhttp = new XMLHttpRequest();
			        } else {
			            // code for IE6, IE5
			            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			        }
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("upload-response").innerHTML += this.responseText +"<br>";
			            }
			        };
			        xmlhttp.open("POST","Ajax/consultant_file_update.php");
			        xmlhttp.send(formData);
				  
			  }
			  
			  
		  }else{
			  window.alert("Consultants number is not provided. Can't process file");
		  }
		  
		  
		  
		  
		  
		  
		  
	  }
	  reader.readAsArrayBuffer(file);
      
  };
})();