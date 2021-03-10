function filevalidation(){
	var file= document.getElementById('file');
	var filepath= file.value;
	var ext= filepath.split('.').pop();
	if(ext=="")
	{
		document.getElementById('x').innerHTML="No File Selected";
		return false;
	}
	else if(ext!='pdf')
	{
		document.getElementById('x').innerHTML="Invalid File Format";
		return false;
	}
	else
	{
		return true;
	}
	
	
}




