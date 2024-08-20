

function WertHolen () {
  var Wert = "";
  if (document.cookie) {
    var Wertstart = document.cookie.indexOf("=") + 1;
    var Wertende = document.cookie.indexOf(";");
    if (Wertende == -1)
      Wertende = document.cookie.length;
    Wert = document.cookie.substring(Wertstart, Wertende);
  }
  return Wert;
}

function WertSetzen (Bezeichner, Wert, Verfall) {
  var jetzt = new Date();
  var Auszeit = new Date(jetzt.getTime() + Verfall);
  document.cookie = Bezeichner + "=" + Wert + "; expires=" + Auszeit.toGMTString() + ";";
}

function Zaehlerstand () {
  var Verfallszeit = 1000 * 60 * 60 * 24 * 365;
  var Anzahl = WertHolen();
  var Zaehler = 0;
  if (Anzahl != "")
    Zaehler = parseInt(Anzahl);
  Zaehler = Zaehler + 1;
  WertSetzen("Zaehler", Zaehler, Verfallszeit);
  return (Zaehler);
}