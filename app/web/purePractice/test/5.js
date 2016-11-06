var Person=function(firstname,lastname,measurements){
	this.firstname=firstname;
	this.lastname=lastname;
	//this.dateofbirth=dateofbirth;
	this.measurements=measurements;
}
person=new Person('aaron','zhou',{weight:'70kg'});
personClone=JSON.parse(JSON.stringify(person));
console.log(person);
console.log(personClone);
console.log(person.firstname===personClone.firstname);
console.log([1,2,3]==[1,2,3]);
function a(){

}
var b=function(){}
console.log(typeof a);
console.log(typeof b);