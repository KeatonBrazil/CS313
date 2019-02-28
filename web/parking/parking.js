function change(x) {
    var x = document.getElementById("lot").value;
    var docn = document.getElementById("north");
    var docs = document.getElementById("south"); 
    var doca = document.getElementById("admin");
    console.log(x);
    if (x === "Taylor") {
        docn.style.display = 'inline';
        docs.style.display = 'none';
        doca.style.display = 'none';
    } else if (x === "STC") {
        docn.style.display = 'none';
        docs.style.display = 'inline';
        doca.style.display = 'none';
    } else if (x === "Snow") {
        docn.style.display = 'none';
        docs.style.display = 'none';
        doca.style.display = 'inline';
    } else if (x === "Kimball") {
        docn.style.display = 'inline';
        docs.style.display = 'none';
        doca.style.display = 'inline';
    } else if (x === "I-Center") {
        docn.style.display = 'inline';
        docs.style.display = 'none';
        doca.style.display = 'none';
    };
};