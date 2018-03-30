jQuery(document).ready(function(){
	
    function addExtraPortParameters()
    {
      // Create your scalar dictionary
      var postData = {name:'myName', age:21, cat:'user'};
      
      // You can also read information from your frontend like this
        // var postData = {name:jQuery('#nameTextInputField').val(), age: jQuery('#ageTextInputField').val()};

      // Return it to be injected with File upload requests. Go to processMultipleUploads.php and uncomment line (15) to acquire these parameters
      return postData;
    }

	jQuery("#mas").droply(
		{
			multi:true,
			logoColor: 'white',
			textColor: 'white',
            labelColor: 'white',
			borderColor: 'white',
            backgroundIcon: 'images/icon-droply.png',
            injectPostData: addExtraPortParameters() // Send extra information using 
		}
	);

}
);
