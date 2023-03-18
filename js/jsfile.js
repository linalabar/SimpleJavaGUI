let owner_var= document.getElementsByClassName('ownerButton');
let cust_var= document.getElementsByClassName('custButton');


	function gotoOwner (){
		console.log("hello")
	owner_var.classList.add('ownerButton2')
	cust_var.classList.add('custButton2')
	}
	
	function gotoCust (){
	owner_var.classList.remove('ownerButton2')
	cust_var.classList.remove('custButton2')
	}