var b2 = document.getElementById('b2');
function doSomething() {
	var b1 = document.getElementById("b1").value;
	b1 = b1.split("").reverse();
	var counter = 0;
	while(counter < b1.length - 1) {
		var temp = b1[counter];
		b1[counter] = b1[counter+1];
		b1[counter+1] = temp;
		counter += 2;
	}
	b1 = b1.join("");
	if(b1 == "s}orrr_einog_lngsiau_clynttanscoe_cl{cagfl")
		alert('Success!');
	else
		alert('Incorrect! Try again!');
}

b2.addEventListener("click", doSomething, false);