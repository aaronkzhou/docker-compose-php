function evaluateDivisors(a,b,k){
  var count=0;
  a1=Math.ceil(Math.sqrt(a));
  b1=Math.floor(Math.sqrt(b));
	for(i=a1;i<=b1;i++){
	 	var countdivisors=0;
		for(j=1;j<=i;j++){
			if ((i*i)%j==0) {
				countdivisors++;
			}
		}
		if(countdivisors===(k+1)/2){
		  count++;
		}
	}
	return count;
}
console.log(evaluateDivisors(1232,1000001232,9));