function change(x) {
    var doc = document.getElementById("pass");
    console.log(x);
    if (x === "Taylor") {
        doc.innerHTML = "<option value='North'>North</option>";
    } else if (x === "STC") {
        doc.innerHTML = "<option value='South'>South</option>";
    } else if (x === "Snow") {
        doc.innerHTML = "<option value='Admin'>North</option>"; 
    } else if (x === "Kimball") {
        doc.innerHTML = "<option value='North'>North</option><option value='Admin'>Admin</option>";
    } else if (x === "I-Center") {
        doc.innerHTML = "<option value='North'>North</option>";
    };
};