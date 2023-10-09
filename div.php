<!DOCTYPE html>
<html>
  <head>
    <title>Wavelength Calculator</title>
    <script>
        function calculateWavelength() {
  const frequency = parseFloat(document.getElementById("frequencyInput").value);
  const speed = parseFloat(document.getElementById("speedInput").value);
  const wavelength = (speed / frequency) * 100;
  document.getElementById("result").innerHTML = wavelength.toString() + " meters";
}

    </script>
  </head>
  <body>
    <h1>Wavelength Calculator</h1>
    <p>Enter  Number of new courses introduced during the last five years</p>
    <input type="text" id="frequencyInput">
    <p>Enter Number courses offered during the last five years</p>
    <input type="text" id="speedInput"><br>
    <button onclick="calculateWavelength()">Calculate total</button>
    <p>Total <span id="result"></span></p>
    
  </body>
</html>
