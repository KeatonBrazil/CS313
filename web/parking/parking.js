function change(x) {
    var x = document.getElementById("lot").value;
    var docn = document.getElementById("north");
    var docs = document.getElementById("south"); 
    var doca = document.getElementById("admin");
    console.log(x);
    if (x === "Taylor") {
        docn.innerHTML = 'North';
        docs.innerHTML = '';
        doca.innerHTML = '';
    } else if (x === "STC") {
        docn.innerHTML = '';
        docs.innerHTML = 'South';
        doca.innerHTML = '';
    } else if (x === "Snow") {
        docn.innerHTML = '';
        docs.innerHTML = '';
        doca.innerHTML = 'Admin';
    } else if (x === "Kimball") {
        docn.innerHTML = 'North';
        docs.innerHTML = '';
        doca.innerHTML = 'Admin';
    } else if (x === "I-Center") {
        docn.innerHTML = 'North';
        docs.docs.innerHTML = '';
        doca.docs.innerHTML = '';
    };
};