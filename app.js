/*
function b ()
{
    //var myVar;
    console.log(myVar);
}

function a()
{
    var myVar = 2;
    //console.log(myVar);
    b();
}
var myVar = 1;
a();
//console.log(myVar);

function waitThree()
{
    var ms = 3000 + new Date().getTime();
    while (new Date()<ms)
    {
    }
    //alert('finished wait');
    //confirm("Hor bhai ! Kiddan !! ");
    prompt("Hor bhai ?");
}

function clickHandle()
{
    console.log('click event');
}
document.addEventListener('click',clickHandle);
waitThree();
console.log('done');
*/
setTimeout(wakeUpUser, 3000);
var x ;
function wakeUpUser() 
{
    if (confirm("So, you going to stare at this Pretty-Pic forever?") == true) 
    {
        alert("Me too :P");
    } 
    else 
    {
        alert("Baaandar!");
    }
    /*
    if (confirm("So, you going to stare at this Pretty-Pic forever?") == true) 
    {
        x = "Me too :P";
    } 
    else 
    {
        x = "Baaandar!";
    }
    document.getElementById("demo").innerHTML = x;  */
}


/*
setTimeout(wakeUpUser2, 7000);
function wakeUpUser2()
{
    console.log("I L U 2  :P :D");
}*/