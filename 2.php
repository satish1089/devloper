<!DOCTYPE html>
<html>
<head>
	<title>Script</title>
 </head>
<body>
	<span id="txt"></span> 
	<script type="text/javascript">
		//single line comment
		/*
			multi Line comment
			var  111=20;  //Not Working
			var *aa=350;  
	
		var a=5;
		function msg() {
			for(i=0;i<10;i++)
			{
				document.write(i + "<br/>");
			}
		}
		msg();
		*/

		/*var i = 10;
		var table=5;
		var tab=0;
		while(i<=12)
		{
			var tab=table*i;
			document.write(tab + "<br/>");
			i++;
		}
*/
		//Object
		/*var emp = new Object();
		emp.id= 130;
		emp.name = "Satish";

		document.write(emp.id +" "+ emp.name);
		*/

		//Using function get object value
		/*function emp(id,name,salary){  
		this.id=id;  
		this.name=name;  
		this.salary=salary;  
		}  
		e=new emp(11,"hello hi",65000);    
		document.write(e.id+" "+e.name+" "+e.salary);       */

		///Array
		/*var emp = ["PHP","JAVA","Python","PHP","JAVA","Python"];
		for(i=0;i<emp.length;i++)
		{
			document.write(emp[i] + "<br/>");
		}

		//Array Methods in JavaScript
		//1.concat()	
		var arr1=["hey","How","are"];
		var arr2=["You","1","2"];
		var result=arr2.concat(arr1);
		document.writeln(result);
		document.writeln("</br>");
		document.writeln("</br>");

		//2. Includes Array Value or not
		var arr=["20","90","100"]
		var result=arr.includes("100");
		document.writeln(result);
		document.writeln("</br>");
		document.writeln("</br>");

		//.3Map round Value of Arraty
		var arr=[5.1,9.9,7.7];
		var result=arr.map(Math.round);
		document.writeln(result);
		document.writeln("</br>");
		document.writeln("</br>");

		//4. Push value in array
		var arr=["Hey","There"];
		arr.push("How's you?");
		document.writeln(arr);
		document.writeln("</br>");
		document.writeln("</br>");

		//5.reverse print Array
		var arr=["This","is","in reverse"];
		var rev=arr.reverse();
		document.writeln(rev);
		document.writeln("</br>");
		document.writeln("</br>");

		//6.sort array()
		var arr=["Apple","Nokia","Boolean","Lava"]
		var result=arr.sort();
		document.writeln(result);

		var date = new Date();
		//document.getElementById('txt').innerHTML=today;  
		var day=date.getDate();  
		var month=date.getMonth()+1;  
		var year=date.getFullYear();  
		document.write("<br>Date is: "+day+"/"+month+"/"+year);  

		var today = new Date();
		var h=today.getHours();  
		var m=today.getMinutes();  
		var s=today.getSeconds();  
		document.getElementById('txt').innerHTML=h+":"+m+":"+s;  
*/

	//Document Object
	function printvalue()
	{
		var name = document.form1.fname.value;
		alert(name);
	    document.getElementById('name').value = "";
	}
	</script>
<form name="form1">
	Enter First Name: <input type="text" name="fname" id="name">
	<input type="button" name="" value="Click to print" onclick="printvalue()">
</form>
</body>
</html>