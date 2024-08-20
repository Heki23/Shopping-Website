<script>
alert("sdsd");
// JavaScript, um den Produktname beim Absenden des Formulars an das versteckte Eingabefeld zu übergeben
document.getElementById('bestellForm').addEventListener('submit', function(event) {
    // Produktname aus dem <p> Tag lesen
    var produktNameText = document.getElementById('produktName').innerText;
    
    // Produktname an das versteckte Eingabefeld übergeben
    document.getElementById('produktNameHidden').value = produktNameText;
});
</script>