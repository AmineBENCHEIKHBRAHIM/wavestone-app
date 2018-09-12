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
		  window.alert('successfully read');
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

		 
		  var csvworkbook = XLSX.read(csvwork,{type:"binary"});
		  var first_sheet_name = csvworkbook.SheetNames[0];

		  /* Get worksheet */
		  var worksheet = csvworkbook.Sheets[first_sheet_name];
		  
		  //Identify Cells
		  var ConsultantsNumber_address_of_cell = 'F1';



		  /* Find ientified cells */
		  var ConsultantsNumber_cell = worksheet[ConsultantsNumber_address_of_cell];

		  /* Get the value */
		  var ConsultantsNumber_value = (ConsultantsNumber_cell ? ConsultantsNumber_cell.v : undefined);

		  window.alert("Consultants number is : ".concat(ConsultantsNumber_value));
		  
		  
		  
		  
		  
		  
		  
	  }
	  reader.readAsArrayBuffer(file);
      
  };
})();