<!DOCTYPE html>
<html>
  <head>
    <title>Basic Form Example</title>
  </head>
  <body>
    <form>
      <label for="dados">Dados:</label><br>
      <input type="text" id="dados" name="dados"><br>
      
      <label for="local">Local:</label><br>
      <input type="text" id="local" name="local"><br>
      
      <label for="frequency-2.4hz">Frequency 2.4 Hz:</label><br>
      <input type="number" id="frequency-2.4hz" name="frequency-2.4hz" step="0.001" value="0"><br>
      
      <label for="frequency-5hz">Frequency 5 Hz:</label><br>
      <input type="number" id="frequency-5hz" name="frequency-5hz" step="0.001" value="0"><br>
      
      <label for="signal-2.4hz">Signal 2.4 Hz:</label><br>
      <input type="number" id="signal-2.4hz" name="signal-2.4hz" step="0.001" value="0"><br>
      
      <label for="signal-5hz">Signal 5 Hz:</label><br>
      <input type="number" id="signal-5hz" name="signal-5hz" step="0.001" value="0"><br>
      
      <input type="submit" value="Submit">
    </form>
  </body>
</html>