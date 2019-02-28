function change(x) {
    var doc = document.getElementById("pass");
    var option1 = document.createElement("option");
    var option2 = document.createElement("option");
    var option3 = document.createElement("option");
    option1.text = "North";
    option2.text = "South";
    option3.text = "Admin";
    if (x === "Taylor") {
        doc.add(option1);
    } else if (x === "STC") {
        doc.add(option2);
    } else if (x === "Snow") {
        doc.add(option3);
    } else if (x === "Kimball") {
        doc.add(option1);
        doc.add(option3);
    } else if (x === "I-Center") {
        doc.add(option1)
    };
};