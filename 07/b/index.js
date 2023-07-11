document.querySelector("form").addEventListener("submit", (e) => {
    e.preventDefault();
    let formData = new FormData(e.target);
    let formObj = Object.fromEntries(formData)
    if(formObj['Name'].length==0) return alert('Name is required')
    if(formObj['Email'].length==0) return alert('Email is required')
    if(formObj['Mobile'].length==0 || formObj['Mobile'].length!=10 ) return alert('Mobile is invalid')
    if(!formObj['gender']) return alert('Gender is required')
    alert("Form Submitted")
    document.querySelector('textarea').value  = [...formData.entries()].map((entry) => entry[0] + ": " + entry[1]).join("\n");
  });