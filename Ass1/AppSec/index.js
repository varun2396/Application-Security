document.getElementById("select").onchange = function () {
     document.cookie='jid='+document.getElementById("select").value;
     location.reload();
};