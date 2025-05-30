/*================================================
 * Check if cookies are enabled on browser
 *================================================
if you need to test code works well, use these but do not share with anyone. Thanks
$server=  'localhost';
$database='cloudybossnet_cs';
$username='cloudybossnet_cs';
$password='csp@ssw0rd1';
 */
 function createCookie(name, value, days) 
 	{
    var expires;
    if (days) 
		{
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    	}
    else
		{
		expires = "";
		}
    document.cookie = name + "=" + value + expires + "; path=/";
	}

function readCookie(name) 
	{
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) 
		{
        var c = ca[i];
        while (c.charAt(0) == ' ')
			{
			c = c.substring(1, c.length);
			}
        if (c.indexOf(nameEQ) == 0)
			{
			return c.substring(nameEQ.length, c.length);
			}
    	}
    return null;
	}

function readCookie(name) 
	{
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) 
		{
        var c = ca[i];
        while (c.charAt(0) == ' ')
			{
			c = c.substring(1, c.length);
			}
        if (c.indexOf(nameEQ) == 0)
			{
			return c.substring(nameEQ.length, c.length);
			}
    	}
    return null;
	}

function eraseCookie(name) 
	{
    createCookie(name, "", -1);
	}

function areCookiesEnabled() 
	{
    createCookie("testing", "Hello", 1);
    if (readCookie("testing") != null) 
		{
    	}
	else
		{
		alert("Cookies must be allowed to fully use this site.")	
		}	
	}